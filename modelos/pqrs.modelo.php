<?php
require_once "conexion.php"; 
class ModeloPQRS{
    static public function mdlActualizarEstado($tablaAsunto,$columna,$id_PQRS){
        $stmt = Conexion::conectar()->prepare("UPDATE $tablaAsunto SET estado = 1  WHERE $columna = $id_PQRS");
        if ($stmt->execute()) {
            return "ok";
        }else{
            return "error";
        }
    }
    static public function mdlContarRespuestas($tabla,$columna,$id_PQRS){
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) FROM $tabla WHERE $columna = $id_PQRS");
        $stmt->execute();
        $respuesta=$stmt-> fetchAll();
        return $respuesta;
    }
    static public function mdlLimitePQRS($tabla,$correo){
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(emailCliente) FROM $tabla WHERE emailCliente=:correo");
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
    static public function mdlMostrarDatosPQRS($tabla,$id,$estado,$columna){ 
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $columna = $id");
            if($stmt -> execute()){
                return $stmt -> fetchAll();
            }else{
                return "error";
            }
    }
    static public function mdlEnviarRespuestaPQRS($tabla,$columna,$dato,$tablaAsunto){
        $id_PQRS=(int)$dato["id_PQRS"];
        $id_usuario=(int)$dato["id_usuario"];
        $comentarioRespuesta=$dato["comentarioRespuesta"];
        $fechaRespuesta=$dato["fechaRespuesta"];
        $nombreUsuario=$dato["nombreUsuario"];
        $nombreCliente=$dato["nombreCliente"];  
        $emailCliente=$dato["emailCliente"];
        $respuesta= ModeloPQRS::mdlContarRespuestas($tabla,$columna,$id_PQRS);
        var_dump($respuesta);
        if($respuesta[0][0]==0) {
           $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ($columna, id_usuario, comentarioRespuesta, fechaRespuesta, nombreUsuario, nombreCliente, emailCliente) VALUES ('$id_PQRS','$id_usuario','$comentarioRespuesta','$fechaRespuesta','$nombreUsuario','$nombreCliente','$emailCliente')");
            if ($stmt->execute()){
                $estado = ModeloPQRS::mdlActualizarEstado($tablaAsunto,$columna,$id_PQRS);
                if ($estado == "ok") {
                    return "ok";
                }else{
                    return "error";
                }
            }else{
                return "error";
            } 
        }else{
            return"error";
        }
        
    }
}