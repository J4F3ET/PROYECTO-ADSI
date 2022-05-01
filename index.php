<?php
require_once"controladores/plantilla.controlador.php";
require_once"controladores/inicio.controlador.php";
require_once"controladores/pqrs.controlador.php";
require_once"controladores/gestor-pqrs.controlador.php";
require_once"controladores/editor.controlador.php";

require_once"modelos/inicio.modelo.php";
require_once"modelos/pqrs.modelo.php";
require_once"modelos/gestor-pqrs.modelo.php";
require_once"modelos/editor.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla ->ctrPlantilla();