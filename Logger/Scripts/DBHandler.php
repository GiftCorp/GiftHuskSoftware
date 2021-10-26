<?php

    $Server_Name = "CABUTE";//serverName\\sqlexpress;
    $DBConnection = array("Database"=>"IPALoggerDB");
    $Con = sqlsrv_connect($Server_Name, $DBConnection);

?>