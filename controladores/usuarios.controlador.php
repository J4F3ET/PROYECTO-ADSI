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
                    if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptado){
                      if($respuesta['estado']==1){

                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["id"] = $respuesta["id"];
                        $_SESSION["nombre"] = $respuesta["nombre"];
                        $_SESSION["usuario"] = $respuesta["usuario"];
                        $_SESSION["foto"] = $respuesta["foto"];
                        $_SESSION["perfil"] = $respuesta["perfil"];
                        date_default_timezone_set("America/Bogota");
                        $fecha=date('Y-m-d');
                        $hora = date('H:i:S');
                        $fechaActual= $fecha.' '.$hora;
                        $item1 = 'ultimo_login';
                        $valor1= $fechaActual;

                        $item2='id';
                        $valor2=$respuesta['id'];

                        $ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);
                        if($ultimoLogin == "ok"){
                          echo '<script>window.location="inicio";</script>';
                        }
                      }else{
                        echo "<script>Swal.fire({icon: 'error',title: 'El usuario esta desactivado',confirmButtonText:'Cerrar'})</script>";
                      }
                    }else{
                      echo "<script>Swal.fire({icon: 'error',title: 'Contraseña incorrecta intentelo de nuevo',confirmButtonText:'Cerrar'})</script>";
                    }
                  }else{
                    echo "<script>Swal.fire({icon: 'info',title: 'Usuario no encontrado',confirmButtonText:'Cerrar'})</script>";
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
                      timer: 1500,
                    });
                    window.location = 'inicio'
                  </script>";
        }else{
          // ALERTA POR SI SON CARACTERES ESPECIALES NO EPERMIRTIDOS Y LO REMITE A USUARIOS O INICIO
          echo '<script>
            Swal.fire({
              icon: "error",
              title: "Oops... <br>El usuario no puede ir vacio o con caracteres especiales",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
            });
            window.location = "inicio"
          </script>';
        }
      }
    }
    public static function ctrMostrarUsuarios($item,$valor){
      $tabla ="usuario";
      $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
      return $respuesta;
    }
    public static function ctrEditarUsuario(){
      if (isset($_POST["editarUsuario"])) {
        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["editarNombre"])){
          $ruta = $_POST["fotoActual"];
          if(isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])){
            list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);
            $nuevoAncho = 500;
            $nuevoAlto = 500;
            $directorio = "vistas/img/usuarios/".$_POST["editarUsuario"];
            if(!empty($_POST["fotoActual"])){
              unlink($_POST["fotoActual"]);
            }else{
              mkdir($directorio, 0755);
            }
            // TIPO DE IMAGENES JPG O PNG
            if($_FILES["editarFoto"]["type"] == "image/jpeg"){
              $aleatorio = mt_rand(100,999);
              $ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".jpg";
              //intalar la extencion ;extension=gd' al xammp
              $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);
              $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
              imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
              imagejpeg($destino,$ruta);
            }
          }
          // VALIDACION JPG
          if(isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"]) ){
            list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);
            $nuevoAncho = 500;
            $nuevoAlto = 500;
            $directorio = "vistas/img/usuarios/".$_POST["editarUsuario"];
            mkdir($directorio, 0755);
            // TIPO DE IMAGENES JPG O PNG
            if($_FILES["editarFoto"]["type"] == "image/png"){
              $aleatorio = mt_rand(100,999);
              $ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".png";
              //intalar la extencion ;extension=gd' al xammp
              $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);
              $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);
              imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
              imagepng($destino,$ruta);
            }
            
           
          }
          $tabla="usuario";
          if($_POST["editarPassword"]!=""){
            if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["editarPassword"])) {
              $encriptado = crypt($_POST["editarPassword"],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            }else{
                echo '<script>
                        Swal.fire({
                          icon: "error",
                          title: "Oops... <br>La contraseña no puede ir vacia o con caracteres especiales",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar",
                        });
                        window.location = "inicio"
                      </script>';
            }
          }else{
            $encriptado= $_POST["passwordActual"];
          }
          $dato =  array('nombre' => $_POST["editarNombre"],
          'usuario' => $_POST["editarUsuario"],
          'password' => $encriptado,
          'perfil' => $_POST["editarPerfil"],
          'foto'=> $ruta);
          $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla,$dato);
          if($respuesta == "ok"){
            echo "<script>
                    Swal.fire({
                      icon: 'success',
                      title: 'El usuario ha sido editado exitosamente',
                      showConfirmButton: true,
                      timer: 1500,
                    });
                    window.location.href = 'inicio'
                  </script>";
          }
        }else{
          echo "<script>
                  Swal.fire({
                    icon: 'error',
                    title: '¡El nombre no puede ir vacío o llevar caracteres especiales!',
                    showConfirmButton: true,
                    timer: 1500
                  });
                  window.location.href = 'inicio'
                </script>";
        }
      }
    }
    public static function ctrBorrarUsuario(){
      if(isset($_GET['idUsuario'])){
        $tabla = 'usuario';
        $dato =  $_GET['idUsuario'];
        if($_GET["fotoUsuario"] != ""){
          unlink($_GET['fotoUsuario']);
          
          var_dump("vistas/img/usuarios/".$_GET["nombreUsuario"]);

          rmdir("vistas/img/usuarios/".$_GET["nombreUsuario"]);
        }
        $respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla, $dato);

        if($respuesta == "ok"){
          echo "<script>
                  Swal.fire({
                    icon: 'success',
                    title: 'El usuario ha sido eliminado exitosamente',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                  }).then((result) => {
                    if(result.value){
                      window.location = 'inicio'
                    }
                  });
                </script>";
        }else{
          return 'error';
        }
      }
    }
}