<?php

    include("Scripts/DBHandler.php");

    $ClientID = $_POST["UC_ClientID"];

    $sql = "DELETE FROM dbo.Client_Information WHERE ClientID = ?";
    $params = array($ClientID);

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