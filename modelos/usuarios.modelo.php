<?php
require_once "conexion.php";

class ModeloUsuarios{
    //mosatrar usuarios
    static public function mdlMostrarUsuarios($tabla,$item,$valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item");
        $stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);
        $stmt -> execute();
        // fech me retorna solo un itenm o una fila de la consulta 
        return $stmt -> fetch();
        $stmt =null;
    }
    public static function mdlIngresarUsuario($tabla,$dato){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, usuario, password, perfil) VALUES (:nombre, :usuario, :password, :perfil)");
        $stmt->bindParam(":nombre",$dato["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":usuario",$dato["usuario"],PDO::PARAM_STR);
        $stmt->bindParam(":password",$dato["password"],PDO::PARAM_STR);
        $stmt->bindParam(":perfil",$dato["perfil"],PDO::PARAM_STR);
        if ($stmt->execute()){
            $stmt = 0;
            return "ok";
        }else{
            return "error";
        }
        $stmt =null;
    }
}