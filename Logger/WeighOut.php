<?php 
    
    $WO_TransactionNumberInput = $_POST["WO_TransactionNumberInput"];
    
    include("Scripts/DBHandler.php");

    $DateSQL = "
    DECLARE @TodayDate datetime;
    SET @TodayDate = getDate();";

    $NetWeighSQL= "
    DECLARE @NetWeight numeric(20, 3);
    DECLARE @NetWeightABS numeric(20, 3);
    DECLARE @TotalPrice numeric(20,3);
    SET @NetWeight = (SELECT WeighIn - WeighOut FROM dbo.Transaction_Information WHERE TransactionNumber = '$WO_TransactionNumberInput');
    SET @NetWeightABS = ABS(@NetWeight);
    UPDATE dbo.Transaction_Information SET NetWeight = @NetWeightABS WHERE TransactionNumber = '$WO_TransactionNumberInput';
    SET @TotalPrice = (SELECT NetWeight*Price_Per_Kg FROM dbo.Transaction_Information WHERE TransactionNumber = '$WO_TransactionNumberInput')
    UPDATE dbo.Transaction_Information SET Total_Price = @TotalPrice WHERE TransactionNumber = '$WO_TransactionNumberInput';";

    if($_POST["WO_PopUpCancel"] == "Cancelled")
    {
        $sqlC ="UPDATE dbo.Transaction_Information
                SET Status = ?, 
                Weigh_Out_Date = @TodayDate
                WHERE TransactionNumber = '$WO_TransactionNumberInput'";

        $params = array("CANCELLED");

        $query = sqlsrv_prepare($Con, $DateSQL.$sqlC, $params);
        if( !$query ) {
            die( print_r( sqlsrv_errors(), true));
        }
        else
        {
            if( sqlsrv_execute( $query ) === false ) {
                die( print_r( sqlsrv_errors(), true));
            }
        }
    }
    else
    {

        $WeighOutUIDtext = $_POST["WeighOutUIDtext"];
        $WO_LocationToCBox = $_POST["WO_LocationToCBox"];
        $WO_Remarks = $_POST["WO_RemarksText"];
        $WO_WeightText = $_POST["WO_WeightText"];

        if($_POST["WO_PriceUpdateUID"] != "none")
        {
            $WO_PriceUpdateUID = $_POST["WO_PriceUpdateUID"];
            $WO_PricePerKGInputText = $_POST["WO_PricePerKGInputText"];
    
            $sql = "UPDATE dbo.Transaction_Information SET
            Weigh_Out_Date = @TodayDate,
            LocationTo = ?,
            WeighOut = ?,
            Status = 'OUT',
            WeighOutUID = ?,
            Price_Per_Kg = ?,
            PriceUpdateUID = ?,
            PriceUpdateDate = @TodayDate,
            Remarks = ?
            WHERE TransactionNumber = '$WO_TransactionNumberInput';";
    
            $params = array($WO_LocationToCBox, $WO_WeightText, $WeighOutUIDtext, $WO_PricePerKGInputText, $WO_PriceUpdateUID, $WO_Remarks);
            $query = sqlsrv_prepare($Con, $DateSQL.$sql.$NetWeighSQL, $params);
            if( !$query ) {
                die( print_r( sqlsrv_errors(), true));
            }
            else
            {
                if( sqlsrv_execute( $query ) === false ) {
                    die( print_r( sqlsrv_errors(), true));
                }
            }
    
    
    
        }
        else
        {
            $sql = "UPDATE dbo.Transaction_Information SET
            Weigh_Out_Date = @TodayDate,
            LocationTo = ?,
            WeighOut = ?,
            Status = 'OUT',
            WeighOutUID = ?,
            Remarks = ?
            WHERE TransactionNumber = '$WO_TransactionNumberInput'";
            
    
            $params = array($WO_LocationToCBox,$WO_WeightText, $WeighOutUIDtext ,$WO_Remarks);
            $query = sqlsrv_prepare($Con, $DateSQL.$sql.$NetWeighSQL , $params);
            
            if( !$query ) {
                die( print_r( sqlsrv_errors(), true));
            }
            else
            {
                if( sqlsrv_execute( $query ) === false ) {
                    die( print_r( sqlsrv_errors(), true));
                }
            }
    
        }

        echo $WO_LocationToCBox;
    
    }

    header("location: index.php");
?>