<?php
    $host="localhost";
    $BD="hotel-miranda";
    $usuario="root";
    $contrasenia="";
    
    try {
            $conexion=new PDO("mysql:host=$host;dbname=$BD" ,$usuario,$contrasenia);
           
    } catch ( Exception $ex) {
        
        echo $ex->getMessage();
    
    }
    use eftec\bladeone\BladeOne;

    $views = __DIR__ . "/views";
    $cache = __DIR__ . "/cache";

    $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
    require_once('BladeOne.php');


?>