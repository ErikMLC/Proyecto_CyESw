<?php 
    $servidor="localhost";
    $baseDeDatos="registro_de_acciones";
    $usuario="root";
    $contrasenia="";

    try{
        $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario, $contrasenia);
    }catch(Exception $ex){
        echo $ex -> getMessage();
    }
?>