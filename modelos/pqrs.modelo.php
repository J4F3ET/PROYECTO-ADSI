<?php
require_once "conexion.php"; 
class ModeloPQRS{
    static public function mdlLimitePQRS($tabla,$correo){
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(emailCliente) FROM $tabla WHERE emailCliente=':correo';");
        $stmt->bindParam(":correo",$correo);
        if ($stmt->execute()){
            return $stmt -> fetchAll();
        }else{
            return "error";
        }
        $stmt =null;
    }
    static public function mdlEnviarPQRS($tabla,$dato){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombreCliente, emailCliente, celularCliente, comentarioCliente, fechaIngreso, estado) VALUES (:nombreCliente, :emailCliente, :celularCliente, :comentarioCliente, :fechaIngreso,:estado)");
        $stmt->bindParam(":nombreCliente",$dato["nombreCliente"],PDO::PARAM_STR);
        $stmt->bindParam(":emailCliente",$dato["emailCliente"],PDO::PARAM_STR);
        $stmt->bindParam(":celularCliente",$dato["celularCliente"],PDO::PARAM_STR);
        $stmt->bindParam(":comentarioCliente",$dato["comentarioCliente"],PDO::PARAM_STR);
        $stmt->bindParam(":fechaIngreso",$dato["fechaIngreso"],PDO::PARAM_STR);
        $stmt->bindParam(":estado",$dato["estado"],PDO::PARAM_STR);
        if ($stmt->execute()){
            $stmt = 0;
            return "ok";
        }else{
            return "error";
        }
        $stmt =null;
    }
    static public function mdlMostrarTabla($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
    }
}
