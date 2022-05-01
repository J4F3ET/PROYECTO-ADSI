<?php
class ControladorUsuarios{
    public function ctrIngregarUsuario(){
        if(isset($_POST["ingUsuario"])){
            if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingUsuario"])&&
              preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingPassword"])){
                  $tabla = "usuario";
                  $item = "usuario";
                  $valor = $_POST["ingUsuario"];
                  $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla,$item,$valor);
                  if(is_array($respuesta)){
                    if($respuesta["usuario"] == $_POST["ingUsuario"] && 
                      $respuesta["password"] == $_POST["ingPassword"]){
                      echo '<div class="alert alert-succes">Bienvenido</div>';
                      $_SESSION["iniciarSesion"] = "ok";
                      echo '<script>window.location="inicio";</script>';

                    }else{
                      echo '<div class="alert alert-danger">Error al ingresar, vuelva a intentarlo</div>';
                    }
                  }else{
                    echo '<div class="alert alert-warning">Usuario no encontrado</div>';
                  }
            }
        }
    }
}