<?php
require_once "../controladores/pqrs.controlador.php";
require_once "../modelos/pqrs.modelo.php";
class AjaxPQRS{
    public $tabla;
    public $idPQRS;
    public $estado;
    public function ajaxMostrarDatosPQRS(){
        $tabla= $this->tabla;
        $id = $this->idPQRS;
        $estado = $this->estado;
        $respuesta = ControladorPQRS::ctrMostrarDatosPQRS($tabla,$id,$estado);
        echo json_encode($respuesta);
    }
    public function ajaxMostrarRespuesta(){
        $tablaAsunto = $this->tabla;
        $idAsunto = $this->idPQRS;
        $respuesta = ControladorPQRS::ctrMostrarRespuesta($tablaAsunto,$idAsunto);
        echo json_encode($respuesta);
    }
}
if(isset($_POST["idPQRS"])){
    $mostrarPQRS = new AjaxPQRS();
    $mostrarPQRS -> tabla = $_POST['tabla'];
    $mostrarPQRS -> idPQRS = $_POST['idPQRS'];
    $mostrarPQRS -> estado = $_POST['estado'];
    $mostrarPQRS -> ajaxMostrarDatosPQRS();
}
if(isset($_POST["tablaAsunto"])){
    $mostrarRespuesta = new AjaxPQRS();
    $mostrarRespuesta -> tabla = $_POST['tablaAsunto'];
    $mostrarRespuesta -> idPQRS = $_POST['id_PQRS'];
    $mostrarRespuesta -> ajaxMostrarRespuesta();
}