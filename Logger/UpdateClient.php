<?php

    include("Scripts/DBHandler.php");
    $ClientID = $_POST["ClientID"];
    $CompanyName = $_POST["CompanyName"];
    $ClientAddress = $_POST["ClientAddress"];
    $ClientContactNumber = $_POST["ClientContactNumber"];
    

    $sql = "UPDATE dbo.Client_Information SET Address = ?, ContactNumber = ?, Company = ? WHERE ClientID = $ClientID";
    $params = array($ClientAddress, $ClientContactNumber, $CompanyName);
    $query = sqlsrv_prepare($Con,$sql,$params);

    if( !$query ) {
        die( print_r( sqlsrv_errors(), true));
    }
    else
    {
        if( sqlsrv_execute( $query ) === false ) {
            die( print_r( sqlsrv_errors(), true));
      }
    }
    header("location:index.php");

?>