<?php
class ControladorUsuarios{
    static public function ctrIngregarUsuario(){
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
    public static function ctrCrearUsuario(){
      if (isset($_POST["nuevoUsuario"])) {
        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["nuevoNombre"])&&
           preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevoUsuario"])&&
           preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevoPassword"])){

            $tabla="usuario";
            $dato =  array('nombre' => $_POST["nuevoNombre"],
                            'usuario' => $_POST["nuevoUsuario"],
                            'password' => $_POST["nuevoPassword"],
                            'perfil' => $_POST["nuevoPerfil"]);
            $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla,$dato);
            echo '<script>window.location = "inicio"</script>';
        }else{
          // ALERTA POR SI SON CARACTERES ESPECIALES NO EPERMIRTIDOS Y LO REMITE A USUARIOS O INICIO
          echo '<script>
            Swal.fire({
              icon: "error",
              title: "Oops... <br>El usuario no puede ir vacio o con caracteres especiales",
              showConfirmButton: true,
              confirButtonText: "Cerrar",
              closeOnConfirm: false
            }).then((result)=>{
              if(result.evalue){
                window.location = "inicio"
              }
            });
          </script>';
        }
      }
    }
}