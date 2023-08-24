<?php
$host="localhost";
$BD="miranda";
$usuario="root";
$contrasenia="";

try {
        $conexion=new PDO("mysql:host=$host;dbname=$BD" ,$usuario,$contrasenia);
       
} catch ( Exception $ex) {
    
    echo $ex->getMessage();

}
?>