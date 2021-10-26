<?php

    include("Scripts/DBHandler.php");

    $Location = $_POST["DeleteLocationText"];

    $sql = "DELETE dbo.Location_Information WHERE Location = ?";

    $params = array($Location);

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