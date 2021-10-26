<?php 
    $WI_ClientNameText = $_POST["WI_ClientNameText"];
    $WI_LocationFromText =  $_POST["WI_LocationFromText"];
   
  
    $WI_DriverNameText = $_POST["WI_DriverNameText"];
    $WI_TransacTypeName = $_POST["WI_TransacTypeName"];
    $WI_LocationToText = $_POST["WI_LocationToText"];
    $WI_PlateNumberText = $_POST["WI_PlateNumberText"];
    $WI_WeightText = $_POST["WI_WeightText"];
    $WeighInUIDtext = $_POST["WeighInUIDtext"];

    include("Scripts/DBHandler.php");
    echo $WI_TransacTypeName;
    $TransNumberIncrementSQL = "
    DECLARE @TransNumber varchar(20);

    IF ((SELECT COUNT(*) FROM dbo.Transaction_Information WHERE TransactionNumber = '$WI_PlateNumberText-1') >0)
    
        BEGIN
    
            DECLARE @LastNumber int;
        
            SET @LastNumber = (SELECT TOP(1)CAST(PARSENAME(REPLACE(TransactionNumber,'-', '.'),1) as int) as Trans FROM dbo.Transaction_Information WHERE PlateNumber = '$WI_PlateNumberText' ORDER BY Trans DESC) +1;
    
            SET @TransNumber = CONCAT('$WI_PlateNumberText-',@LastNumber);
        END
    
    ELSE
        BEGIN 
            
            SET @TransNumber = CONCAT('$WI_PlateNumberText-','1')
        END
    
    ";

    $Price_Per_KgSQL = "
    
    DECLARE @LessDate date;
    DECLARE @GreaterDate date;
    DECLARE @TodayDatePrice date;
    SET @TodayDatePrice = (SELECT PriceStartDate FROM dbo.PriceSchedule_Information WHERE FORMAT(PriceStartDate, 'MM dd yyyy') = FORMAT(GETDATE(), 'MM dd yyyy') AND ClientName = '$WI_ClientNameText');
    SET @LessDate = (SELECT TOP(1) PriceStartDate FROM dbo.PriceSchedule_Information WHERE PriceStartDate < GETDATE() AND ClientName = '$WI_ClientNameText' ORDER BY PriceStartDate DESC);
    SET @GreaterDate = (SELECT TOP(1) PriceStartDate FROM dbo.PriceSchedule_Information WHERE PriceStartDate > GETDATE()  AND ClientName = '$WI_ClientNameText' ORDER BY PriceStartDate ASC);

    DECLARE @PricePerKG NUMERIC(20,3);

    IF(@TodayDatePrice IS NULL)
        IF(@GreaterDate IS NULL)
            UPDATE dbo.Transaction_Information 
            SET @PricePerKG = (SELECT [Price_Per_Kg] FROM dbo.PriceSchedule_Information 
            WHERE ClientName = '$WI_ClientNameText' AND PriceStartDate >= @LessDate);
        ELSE
            UPDATE dbo.Transaction_Information 
            SET @PricePerKG = (SELECT [Price_Per_Kg] FROM dbo.PriceSchedule_Information 
            WHERE ClientName = '$WI_ClientNameText' AND PriceStartDate  < @GreaterDate AND PriceStartDate >= @LessDate);
    ELSE
        UPDATE dbo.Transaction_Information 
        SET @PricePerKG = (SELECT [Price_Per_Kg] FROM dbo.PriceSchedule_Information 
        WHERE ClientName = '$WI_ClientNameText' AND PriceStartDate = @TodayDatePrice);
";


    $GetDateSQl = "
    DECLARE @TodayDate datetime;
    SET @TodayDate = getDate();";

    $sql = "INSERT INTO dbo.Transaction_Information(
        TransactionNumber, 
        PlateNumber,
        ClientName,
        Driver,
        TransactionType,
        LocationFrom,
        LocationTo,
        Price_Per_Kg,
        WeighIn,
        Weigh_In_Date,
        Status,
        WeighInUID)
        VALUES
        (
            @TransNumber,?,?,?,?,?,?,@PricePerKG,?,@TodayDate,'IN',?
        )
    ";


    $params = array($WI_PlateNumberText,
    $WI_ClientNameText,
    $WI_DriverNameText,
    $WI_TransacTypeName,
    $WI_LocationFromText,
    $WI_LocationToText,
    $WI_WeightText,
    $WeighInUIDtext);

    $sql = $GetDateSQl . $Price_Per_KgSQL . $TransNumberIncrementSQL .$sql;

    $query = sqlsrv_prepare($Con, $sql, $params);

    if( !$query ) {
        die( print_r( sqlsrv_errors(), true));
    }
    else
    {
        if( sqlsrv_execute( $query ) === false ) {
            die( print_r( sqlsrv_errors(), true));
      }
    }

    header("Location: index.php");
    
?>