<?php
class ControladorUsuarios{
    static public function ctrIngregarUsuario(){
        if(isset($_POST["ingUsuario"])){
            if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingUsuario"])&&
              preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingPassword"])){
                $encriptado = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                  $tabla = "usuario";
                  $item = "usuario";
                  $valor = $_POST["ingUsuario"];
                  $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla,$item,$valor);
                  if(is_array($respuesta)){
                    if($respuesta["usuario"] == $_POST["ingUsuario"] && 
                      $respuesta["password"] == $encriptado){
                      echo '<div class="alert alert-succes">Bienvenido</div>';
                      $_SESSION["iniciarSesion"] = "ok";
                      $_SESSION["id"] = $respuesta["id"];
                      $_SESSION["nombre"] = $respuesta["nombre"];
                      $_SESSION["usuario"] = $respuesta["usuario"];
                      $_SESSION["foto"] = $respuesta["foto"];
                      $_SESSION["perfil"] = $respuesta["perfil"];
                      echo '<script>window.location="inicio";</script>';

                    }else{
                      echo "<script>Swal.fire({icon: 'error',title: 'Contraseña incorrecta intentelo de nuevo',confirButtonText:'Cerrar'})</script>";
                      
                    }
                  }else{
                    echo "<script>Swal.fire({icon: 'info',title: 'Usuario no encontrado',confirButtonText:'Cerrar'})</script>";
                  }
            }
        }
    }
    public static function ctrCrearUsuario(){
      if (isset($_POST["nuevoUsuario"])) {
        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["nuevoNombre"])&&
           preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevoUsuario"])&&
           preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevoPassword"])){

            // Aca es donde comienza la creacion el derectorio y las fotos 
            // VALIDACION JPEG
            $ruta="";
             if(isset($_FILES["nuevaFoto"]["tmp_name"])){
              list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
              $nuevoAncho = 500;
              $nuevoAlto = 500;
              $directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];
              mkdir($directorio, 0755);
              // TIPO DE IMAGENES JPG O PNG
              if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){
                $aleatorio = mt_rand(100,999);
                $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";
                //intalar la extencion ;extension=gd' al xammp
                $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
                $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
                imagejpeg($destino,$ruta);
              }
             
            }
            // VALIDACION JPG
            if(isset($_FILES["nuevaFoto"]["tmp_name"])){
              list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
              $nuevoAncho = 500;
              $nuevoAlto = 500;
              $directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];
              mkdir($directorio, 0755);
              // TIPO DE IMAGENES JPG O PNG
              if($_FILES["nuevaFoto"]["type"] == "image/png"){
                $aleatorio = mt_rand(100,999);
                $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";
                //intalar la extencion ;extension=gd' al xammp
                $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
                $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
                imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
                imagepng($destino,$ruta);
              }
             
            }

            $tabla="usuario";
            $encriptado = crypt($_POST["nuevoPassword"],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

            $dato =  array('nombre' => $_POST["nuevoNombre"],
                            'usuario' => $_POST["nuevoUsuario"],
                            'password' => $encriptado,
                            'perfil' => $_POST["nuevoPerfil"],
                            'foto'=> $ruta);
            $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla,$dato);
            echo "<script>
                    Swal.fire({
                      icon: 'success',
                      title: 'Guardado exitoso',
                      showConfirmButton: true,
                      confirButtonText: 'Cerrar',
                      closeOnConfirm: false
                    }).then((result)=>{
                      if(result.evalue){
                        window.location = 'inicio'
                      }
                    });
                  </script>";

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
    public static function ctrMostrarUsuarios($item,$valor){
      $tabla ="usuario";
      $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
      return $respuesta;
    }
}