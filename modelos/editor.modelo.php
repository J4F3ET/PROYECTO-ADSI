<?php
require_once "conexion.php";
class ModeloEditor{
    static public function mdlActualizarNoticia($dato,$noticia){
        $stmt = Conexion::conectar()->prepare("INSERT INTO noticias (comentario, fecha, noticia) VALUES (:comentario, :fecha, :noticia)");
        $stmt->bindParam(':comentario',$dato['comentario'],PDO::PARAM_STR);
        $stmt->bindParam(':fecha',$dato['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(":noticia",$noticia,PDO::PARAM_STR);
        if ($stmt->execute()){
            $stmt = 0;
            return "ok";
        }else{
            return "error";
        }
        $stmt =null;
    }
    static public function mdlMostrarNoticia($noticia){
        $stmt = Conexion::conectar()->prepare("select comentario from noticias where noticia=:noticia order by id desc LIMIT 1");
        $stmt->bindParam(":noticia",$noticia,PDO::PARAM_STR);
        if ($stmt->execute()){
            return $stmt -> fetch();
        }else{
            return "error";
        }
        $stmt =null;
    } 
}
