<?php

    include("Scripts/DBHandler.php");

    $UID = $_POST["UID"];

    $sql = "DELETE FROM dbo.UserData WHERE UserID = ?";
    $params = array($UID);

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