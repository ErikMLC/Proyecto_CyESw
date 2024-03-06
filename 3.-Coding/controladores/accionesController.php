<?php

$sql = "SELECT * FROM acciones_registradas";


class AccionesController
{

    private static $instance; // Variable para almacenar la única instancia de la clase

    // Constructor privado para prevenir la instanciación externa.
    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /*public function obtenerSentenciaDeOrden()
    {
        include("dbConnection.php");

        if (isset($_POST["ordenar"])) {
            $orden = $_POST["ordenar"];
            switch ($orden) {
                case "1":
                    $sql = "SELECT * FROM acciones_registradas ORDER BY nombre_Accion ASC";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $lista_tbl_acciones_registradas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                    break;
                case "2":
                    $sql .= "SELECT * FROM acciones_registradas ORDER BY nombre_Accion DESC";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $lista_tbl_acciones_registradas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                    break;
                case "3":
                    $sql .= "SELECT * FROM acciones_registradas ORDER BY precio_Compra ASC";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $lista_tbl_acciones_registradas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                    break;
                case "4":
                    $sql = "SELECT * FROM acciones_registradas ORDER BY precio_Compra DESC";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $lista_tbl_acciones_registradas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                    break;                  
            }
        }else{
            $sql = "SELECT * FROM acciones_registradas";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $lista_tbl_acciones_registradas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }
        return $lista_tbl_acciones_registradas;
    }*/
    public function obtenerSentenciaDeOrden(){
        include("dbConnection.php");
        $sql = "SELECT * FROM acciones_registradas";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

    }
}

