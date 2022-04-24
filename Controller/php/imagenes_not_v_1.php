<?php
    {
        //Datos de las imagenes
        // $name_img_notc_1=$_FILES['imagen_1']['name'];
        // $type_img_notc_1=$_FILES['imagen_1']['type'];
        // $tamano_img_notc_1=$_FILES['imagen_1']['size'];
        // $name_img_notc_2=$_FILES['imagen_2']['name'];
        // $type_img_notc_2=$_FILES['imagen_2']['type'];
        // $tamano_img_notc_2=$_FILES['imagen_2']['size'];
        // UBICAMOS EL DIRECTORIO EN EL SERVIDOR
    }
    $carpeta_destino_img_1=$_SERVER['DOCUMENT_ROOT'].'/Proyecto SENA/Controller/img/img_subidas/img_actual_notc_1/';
    $carpeta_destino_img_2=$_SERVER['DOCUMENT_ROOT'].'/Proyecto SENA/Controller/img/img_subidas/img_actual_notc_2/';
    // CARGAMOS EL ARCHIVO CON EL NOMBRE IMAGEN... PARA PODER REMPLAZAR CON LA PANTALLA DE NOTICIAS 
    move_uploaded_file($_FILES['imagen_1']['tmp_name'],$carpeta_destino_img_1."imagen_noticia_1.jpeg");
    move_uploaded_file($_FILES['imagen_2']['tmp_name'],$carpeta_destino_img_2."imagen_noticia_2.jpeg");
    //SI EXITE EL DOCUMENTO LO ELIMINA Y LUEGO LO CREA EN EL CASO QUE NO EXISTA LO CREA ---- ASI RESETEAMOS EL COMENTARIO NUEVO
    if(file_exists('../archivos-txt/texto_noticia_1.txt')){
        unlink('../archivos-txt/texto_noticia_1.txt');
    }
    if(file_exists('../archivos-txt/texto_noticia_2.txt')){
        unlink('../archivos-txt/texto_noticia_2.txt');
    }
    $info_noticia_1=fopen('../archivos-txt/texto_noticia_1.txt','c+') or die ('Error al crear archivo');
    $info_noticia_2=fopen('../archivos-txt/texto_noticia_2.txt','c+') or die ('Error al crear archivo');
    $texto_notc_1=$_POST['Informacion_de_la_noticia_1'];
    $texto_notc_2=$_POST['Informacion_de_la_noticia_2'];
    fwrite($info_noticia_1,$texto_notc_1);
    fwrite($info_noticia_2,$texto_notc_2);
    fclose($info_noticia_1); 
    fclose($info_noticia_2);    
    header('location:../../view/view_users/sesion.php');
?>
