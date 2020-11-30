<?php
$serverName = "DESKTOP-ESVK874\SQLEXPRESS"; 
$connectionInfo = array("Database"=>"PROYECTO_SUSALUD",  
            "Uid"=>"trabajo1", "PWD"=>"123"); 
        $conn = sqlsrv_connect($serverName, $connectionInfo);  
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}
?>