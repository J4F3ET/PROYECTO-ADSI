<?php
    class ControladorEditor{
        static public function ctrActualizarNoticia(){
            if (isset($_POST["enviarNoticia"])) {
                $carpeta_destino_img_1=$_SERVER['DOCUMENT_ROOT'].'/ADSI/vistas/img/noticia/';
                $carpeta_destino_img_2='C:\xampp\htdocs\ADSI\vistas\img\noticia';
                // CARGAMOS EL ARCHIVO CON EL NOMBRE IMAGEN... PARA PODER REMPLAZAR CON LA PANTALLA DE NOTICIAS
                date_default_timezone_set("America/Bogota");
                        $fecha=date('Y-m-d');
                if(isset($_POST["Informacion_de_la_noticia_1"])){
                    $noticia=1;
                    $dato=array(
                      'comentario'=>$_POST["Informacion_de_la_noticia_1"],
                      'fecha'=>$fecha);
                    $actualizarNoticia=ModeloEditor::mdlActualizarNoticia($dato,$noticia);
                    if ($actualizarNoticia=="ok"){
                        $desicion=1;
                        
                    }else{
                        $desicion=2;
                    }
                }
                if(isset($_POST["Informacion_de_la_noticia_2"])){
                    $noticia=2;
                    $dato=array(
                      'comentario'=>$_POST["Informacion_de_la_noticia_2"],
                      'fecha'=>$fecha);
                    $actualizarNoticia=ModeloEditor::mdlActualizarNoticia($dato,$noticia);
                    if ($actualizarNoticia=="ok"){
                        $desicion2=1;
                        
                    }else{
                        $desicio2=2;
                    }

                }
                if(isset($_FILES['imgNoticiaSubir1']['tmp_name'])){
                    move_uploaded_file($_FILES['imgNoticiaSubir1']['tmp_name'],$carpeta_destino_img_1."noticia.1.jpeg");
                    move_uploaded_file($_FILES['imgNoticiaSubir2']['tmp_name'],$carpeta_destino_img_1."noticia.2.jpeg");
                    $desicion3=1;
                }else{
                    $desicio3=2;
                }
                $it=$desicion+$desicion2+$desicion3;
                if($it==3){
                    echo "<script>
                            Swal.fire({
                                Swal.fire({
                                    title:'La noticia se a actualizado correctamente',
                                    icon:'success',
                                    confirmButtonText:'¡Cerrar!'
                                }).then(function(result){
                                    if(result.value){
                                        window.location='inicio';  
                                    }
                                });
                        </script>";
                }else{
                    echo "<script>
                        Swal.fire({
                            title:'Error al actualizar noticia',
                            icon:'error',
                            confirmButtonText:'¡Cerrar!'
                        }).then(function(result){
                            if(result.value){
                                window.location='editor';  
                            }
                        });
                </script>";
                }
            }
        }
    }
