<?php
$serverName = "50.18.77.31";
$connectionInfo = array("Database"=>"SiH_Data", "UID"=>"mfull", "PWD"=>"Safenotes45!");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if($conn) {
    echo "Connection established.";
} else {
    echo "Connection could not be established.";
    die(print_r(sqlsrv_errors(), true));
}
?>