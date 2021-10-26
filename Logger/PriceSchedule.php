<?php
    if(isset($_POST['PriceScheduleSelected']))
    {

        include("Scripts/DBHandler.php");
        $PostArray = $_POST['PriceScheduleSelected'];
        $PricePerKG = $_POST['PricePerKgText'];
        $PriceStart = $_POST['PriceStartText'];

        echo $PostArray. " ";
        echo $PricePerKG. " ";
        echo $PriceStart. " ";

        $IDArray = array();
        
        
        foreach(explode(",", $PostArray) as $a)
        {
            
            if(isset($_POST["$a"]))
            {
                if($_POST["$a"] =="Checked")
                {
                    array_push($IDArray,explode("B",$a)[1]);
                }
            }
        }
        
        

        $sql = "";

        $params = array();
        $ExtraSQL = "";

        
        foreach($IDArray as $i)
        {
            echo $i;
            $ExtraSQL = $ExtraSQL .
            "DECLARE @ClientName$i varchar(50); 
            DECLARE @CompanyName$i varchar(50); 
            SET @ClientName$i = (SELECT ClientName FROM dbo.Client_Information WHERE ClientID = $i);
            SET @CompanyName$i = (SELECT Company FROM dbo.Client_Information WHERE ClientID = $i);
            DECLARE @LessDate date;
            DECLARE @GreaterDate date;
            SET @LessDate = (SELECT TOP(1) PriceStartDate FROM dbo.PriceSchedule_Information WHERE PriceStartDate <= GETDATE() AND ClientName = @ClientName$i ORDER BY PriceStartDate DESC);
            SET @GreaterDate = (SELECT TOP(1) PriceStartDate FROM dbo.PriceSchedule_Information WHERE PriceStartDate > GETDATE()  AND ClientName = @ClientName$i ORDER BY PriceStartDate ASC);
            DECLARE @Dates$i int;
            
            SET @Dates$i = (SELECT COUNT(PriceStartDate) FROM dbo.PriceSchedule_Information 
            WHERE ClientName = @ClientName$i  AND PriceStartDate = CAST('$PriceStart' as date));
            IF(@Dates$i > 0)
            UPDATE dbo.PriceSchedule_Information SET Price_Per_KG = ? WHERE ClientName =  @ClientName$i AND PriceStartDate = CAST('$PriceStart' as date);
            
            ELSE INSERT INTO dbo.PriceSchedule_Information
            VALUES(@ClientName$i,@CompanyName$i, ?, CAST('$PriceStart' as date));";
           

            array_push($params,$PricePerKG);
            array_push($params,$PricePerKG);
        }
        
        $query = sqlsrv_prepare($Con,$ExtraSQL.$sql,$params);

        if( !$query ) {
            die( print_r( sqlsrv_errors(), true));
        }
        else
        {
            if( sqlsrv_execute( $query ) === false ) {
                die( print_r( sqlsrv_errors(), true));
          }
        }

        $UpdateSQL = "";
        $params2 = array();
        foreach($IDArray as $i)
        {
            $UpdateSQL = $UpdateSQL . "DECLARE @ClientName$i varchar(50); 
            DECLARE @CompanyName$i varchar(50); 
            DECLARE @LessDate date;
            DECLARE @GreaterDate date;
            SET @ClientName$i = (SELECT ClientName FROM dbo.Client_Information WHERE ClientID = $i);
            SET @LessDate = (SELECT TOP(1) PriceStartDate FROM dbo.PriceSchedule_Information WHERE PriceStartDate <= GETDATE() AND ClientName = @ClientName$i ORDER BY PriceStartDate DESC);
            SET @GreaterDate = (SELECT TOP(1) PriceStartDate FROM dbo.PriceSchedule_Information WHERE PriceStartDate > GETDATE()  AND ClientName = @ClientName$i ORDER BY PriceStartDate ASC);
            
            IF(@GreaterDate IS NULL)
            UPDATE dbo.Transaction_Information 
            SET Price_Per_KG = ? WHERE ClientName = @ClientName$i AND Weigh_In_Date >= @LessDate;
            ELSE
            UPDATE dbo.Transaction_Information 
            SET Price_Per_KG = ? WHERE ClientName = @ClientName$i AND Weigh_In_Date  < @GreaterDate AND Weigh_In_Date >= @LessDate;";

            array_push($params2,$PricePerKG);
            array_push($params2,$PricePerKG);
        }

        echo $ExtraSQL;

        $query2 = sqlsrv_prepare($Con,$UpdateSQL,$params2);

        if( !$query2 ) {
            die( print_r( sqlsrv_errors(), true));
        }
        else
        {
            if( sqlsrv_execute( $query2 ) === false ) {
                
                die( print_r( sqlsrv_errors(), true));
          }
         
        }
        header("Location:index.php");
       
    }
?>