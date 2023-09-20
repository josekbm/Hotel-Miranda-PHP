<?php
$host="localhost";
$username="root";
$password="";
$database="miranda_db";
try {
    $mysqli = new mysqli($host, $username, $password, $database);
    $mysqli->select_db($database) or die( "Unable to select database");
    $mysqli->close();
       
} catch ( Exception $ex) {
    
    echo $ex->getMessage();

}
?>


