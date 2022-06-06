<?php
class ControladorPQRS{
    static public function ctrEnviarPQRS(){
        if (isset($_POST["nombreContactenos"])){
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
    static public function ctrMostrarDatosPQRS($tabla,$id,$estado){
      $columna="";
        switch ($tabla) {
            case 'pregunta':
                $columna='id_pregunta';
                break;
            case 'queja':
                $columna="id_queja";
                break;
            case 'reclamo':
                $columna="id_reclamo";
                break;
            case 'sugerencia':

                $columna="id_sugerencia";
                break;
            default:
                $columna="";
                break;
        }
        $ida = (int)$id;
        $respuesta = ModeloPQRS::mdlMostrarDatosPQRS($tabla,$ida,$estado,$columna);
        return $respuesta;
    }
    static public function ctrEnviarRespuestaPQRS(){
      if(isset($_POST["comentarioRespuestaPQRS"])){
        // $_SESSION["nombre"] 
        // $_SESSION["usuario"] 
        // $_SESSION["foto"] 
        // $_SESSION["perfil"]
        date_default_timezone_set("America/Bogota");
        $fecha=date('Y-m-d');
        $tabla="";
        $columna="";
        switch ($_POST["tablaPQRS"]){
          case 'pregunta':
              $tabla='respuestapregunta';
         $columna='id_pregunta';
              break;
          case 'queja':
              $tabla="respuestaqueja";
              $columna="id_queja";
              break;
          case 'reclamo':
              $tabla="respuestareclamo";
              $columna="id_reclamo";
              break;
          case 'sugerencia':
              $columna="id_sugerencia";
              $tabla="respuestasugerencia";
              break;
          default:
              $tabla="";
              $columna="";
              break;
      }
        $idPQRS=(int)$_POST["idPQRS"];
        $idUser=(int)$_SESSION["id"];
        $dato = array(
          'id_PQRS'=> $idPQRS,
          'id_usuario' => $idUser,
          'comentarioRespuesta'=> $_POST["comentarioRespuestaPQRS"],
          'fechaRespuesta'=>$fecha,
          'nombreUsuario'=> $_SESSION["nombre"],
          'nombreCliente'=> $_POST["nombreClientePQRS"],
          'emailCliente'=>$_POST["emailClientePQRS"]
        );
        $respuesta= ModeloPQRS::mdlEnviarRespuestaPQRS($tabla,$columna,$dato,$_POST["tablaPQRS"]);
        if($respuesta == "ok"){
          $para      = $_POST["emailClientePQRS"];
          $titulo    = $_POST["tablaPQRS"];
          $mensaje   = $_POST["comentarioRespuestaPQRS"];
          $mensaje = wordwrap($mensaje);
          $cabeceras = 'De: jafetdc16@gmail.com' . "\r\n" .'Reponder a:'.$para. '' . "\r\n" .'X-Mailer: PHP/' . phpversion();
          mail($para, $titulo, $mensaje, $cabeceras);
          echo "<script>
                  Swal.fire({
                    icon: 'success',
                    title: 'Enviado Exitosamente',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                  }).then((result) => {
                    if(result.value){
                      window.location = 'pqrs'
                    }
                  });
                </script>";
        }else{
            echo "<script>
                    Swal.fire({
                      icon: 'error',
                      title: 'No se pudo enviar la respuesta',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar'
                    }).then((result) => {
                      if(result.value){
                        window.location = 'pqrs'
                      }
                    });
                  </script>";
        }
      }
    }
    static public function ctrMostrarRespuesta($tablaAsunto,$idAsunto){
        $tablaRespuesta="";
        $columna="";
        switch ($tablaAsunto){
          case 'pregunta':
              $tablaRespuesta='respuestapregunta';
              $columna='id_pregunta';
              break;
          case 'queja':
              $tablaRespuesta="respuestaqueja";
              $columna="id_queja";
              break;
          case 'reclamo':
              $tablaRespuesta="respuestareclamo";
              $columna="id_reclamo";
              break;
          case 'sugerencia':
              $tablaRespuesta="respuestasugerencia";
              $columna="id_sugerencia";
              break;
          default:
              $tablaRespuesta="";
              $columna="";
              break;
        }
        $idAsunto=(int)$idAsunto;
        $respuesta= ModeloPQRS::mdlMostrarRespuesta($tablaAsunto,$tablaRespuesta,$columna,$idAsunto);
        return $respuesta;
    }
}