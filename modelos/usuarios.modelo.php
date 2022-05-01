<?php
require_once "conexion.php";

class ModeloUsuarios{
    //mosatrar usuarios
    public static function mdlMostrarUsuarios($tabla,$item,$valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item");
        $stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);
        $stmt -> execute();
        // fech me retorna solo un itenm o una fila de la consulta 
        return $stmt -> fetch();
    }
}