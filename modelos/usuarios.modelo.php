<?php
require_once "conexion.php"; 
class ModeloUsuarios{
    //retornara los valores que rwequiera con item y valor de la tabla usuario
     public static function mdlMostrarUsuarios($tabla,$item,$valor){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item");
            $stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);
            $stmt -> execute();
            // fech me retorna solo un itenm o una fila de la consulta 
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            // fechall me retorna todos los items de la tabla 
            return $stmt -> fetchAll();

        }
        $stmt =null;
    }
    public static function mdlIngresarUsuario($tabla,$dato){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, usuario, password, perfil, foto) VALUES (:nombre, :usuario, :password, :perfil, :foto)");
        $stmt->bindParam(":nombre",$dato["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":usuario",$dato["usuario"],PDO::PARAM_STR);
        $stmt->bindParam(":password",$dato["password"],PDO::PARAM_STR);
        $stmt->bindParam(":perfil",$dato["perfil"],PDO::PARAM_STR);
        $stmt->bindParam(":foto",$dato["foto"],PDO::PARAM_STR);
        if ($stmt->execute()){
            $stmt = 0;
            return "ok";
        }else{
            return "error";
        }
        $stmt =null;
    }
    public static function mdlEditarUsuario($tabla,$dato){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, perfil = :perfil, foto=:foto WHERE usuario=:usuario");
        $stmt->bindParam(":nombre",$dato["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":usuario",$dato["usuario"],PDO::PARAM_STR);
        $stmt->bindParam(":password",$dato["password"],PDO::PARAM_STR);
        $stmt->bindParam(":perfil",$dato["perfil"],PDO::PARAM_STR);
        $stmt->bindParam(":foto",$dato["foto"],PDO::PARAM_STR);
        if ($stmt->execute()){
            $stmt = 0;
            return "ok";
        }else{
            return "error";
        }
        $stmt =null;
    }
}