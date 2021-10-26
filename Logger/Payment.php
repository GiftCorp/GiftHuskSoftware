<?php
    $P_BankIssued = $_POST["P_BankIssued"];
    $P_ChequeNum = $_POST["P_ChequeNum"];
    $P_PaymentUID = $_POST["P_PaymentUID"];
    $P_RecievedBy = $_POST["P_RecievedBy"];
    $P_TransactioNumberListText = explode(',',$_POST["P_TransactioNumberListText"][0]);
    include("Scripts/DBHandler.php");

    $GetDateSQl = "
    DECLARE @TodayDate datetime;
    SET @TodayDate = getDate();";
    $sql = "UPDATE dbo.Transaction_Information SET BankIssued = ?, ChequeNumber = ?, PaymentUID = ?, PaymentRecievedBy = ?, Status = 'PAID', ORDate = @TodayDate WHERE";
    for($i = 0; $i<count($P_TransactioNumberListText); $i++)
    {
        
        if(($i+1) == count($P_TransactioNumberListText))
        {
            $sql = $sql." TransactionNumber = '$P_TransactioNumberListText[$i]';";
        }
        else
        {
            $sql = $sql." TransactionNumber = '$P_TransactioNumberListText[$i]' OR ";
        }
        
    }

    $params = array($P_BankIssued,$P_ChequeNum,$P_PaymentUID,$P_RecievedBy);

    $query = sqlsrv_prepare($Con, $GetDateSQl.$sql,$params);

    if( !$query ) {
        die( print_r( sqlsrv_errors(), true));
    }
    else
    {
        if( sqlsrv_execute( $query ) === false ) {
            die( print_r( sqlsrv_errors(), true));
        }
    }

    header("Location: index.php")

?>