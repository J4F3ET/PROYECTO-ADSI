<?php
require_once "../controladores/editor.controlador.php";
require_once "../modelos/editor.modelo.php";
class AjaxNoticia{
    public function ajaxMostrarNoticia($noticia){
        $respuesta = ControladorEditor::ctrMostrarNoticia($noticia);
        echo json_encode($respuesta);
    }
}
if(isset($_POST['imgPublicaNoticia1'])){
    $noticia=1;
    $objeto = new AjaxNoticia;
    $objeto->ajaxMostrarNoticia($noticia);
}
if(isset($_POST['imgPublicaNoticia2'])){
    $noticia=2;
    $objeto = new AjaxNoticia;
    $objeto->ajaxMostrarNoticia($noticia);
}