<?php
class ControladorPQRS{
    static public function ctrLimitePQRS($tabla,$correo){
        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ@]+$/',$correo)){
            $respuesta = ModeloPQRS::mdlLimitePQRS($tabla,$correo);
            return $respuesta[0];
        }
    }
    static public function ctrEnviarPQRS(){
        if (isset($_POST["nombreContactenos"])){
            $limite=self::ctrLimitePQRS($_POST["asuntoContactenos"],$_POST["emailContactenos"]);
                if(preg_match('/^[a-zA-Z ]+$/',$_POST["asuntoContactenos"])&&preg_match('/^[0-9]+$/',$_POST["celularContactenos"])){
                date_default_timezone_set("America/Bogota");
                $fecha=date('Y-m-d');
                $tabla=$_POST["asuntoContactenos"];
                $dato = array('nombreCliente'=> $_POST["nombreContactenos"],
                    'emailCliente'=>$_POST["emailContactenos"],
                    'celularCliente'=> $_POST["celularContactenos"],
                    'comentarioCliente'=>$_POST["comentarioContactenos"],
                    'fechaIngreso'=>$fecha,
                    'estado'=> 0
                );
                $respuesta= ModeloPQRS::mdlEnviarPQRS($tabla,$dato);
                if($respuesta == "ok"){
                    echo "<script>
                            Swal.fire({
                              icon: 'success',
                              title: 'Enviado Exitosamente',
                              showConfirmButton: true,
                              confirmButtonText: 'Cerrar'
                            }).then((result) => {
                              if(result.value){
                                window.location = 'contactenos'
                              }
                            });
                          </script>";
                  }else{
                    return 'error';
                  }
            }else{//else -> aqui va el else de si el asunto, el comentario o el celular no corresponde con los caracteres permitidos
                echo "<script>
                            Swal.fire({
                              icon: 'error',
                              title: 'Error al enviar, por favor evite usar caracteres especiales',
                              showConfirmButton: true,
                              confirmButtonText: 'Cerrar'
                            }).then((result) => {
                              if(result.value){
                                window.location = 'contactenos'
                              }
                            });
                          </script>";
            }
        }
    }
    static public function ctrMostrarTabla($tabla){
      $respuesta = ModeloPQRS::mdlMostrarTabla($tabla);
      return $respuesta;
    }
}