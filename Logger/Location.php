<?php

$Location = $_POST["LocationInputText"];

if(isset($Location))
{
    include("Scripts/DBHandler.php");
    $sql = "INSERT INTO dbo.Location_Information VALUES(?)";
    $options = array($Location);

    $query = sqlsrv_prepare($Con,$sql, $options);

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

}