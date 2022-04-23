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
    $carpeta_destino_img_1=$_SERVER['DOCUMENT_ROOT'].'/Proyecto SENA/img/img_subidas/img_actual_notc_1/';
    $carpeta_destino_img_2=$_SERVER['DOCUMENT_ROOT'].'/Proyecto SENA/img/img_subidas/img_actual_notc_2/';
    // CARGAMOS EL ARCHIVO CON EL NOMBRE IMAGEN... PARA PODER REMPLAZAR CON LA PANTALLA DE NOTICIAS 
    move_uploaded_file($_FILES['imagen_1']['tmp_name'],$carpeta_destino_img_1."imagen_noticia_1.jpeg");
    move_uploaded_file($_FILES['imagen_2']['tmp_name'],$carpeta_destino_img_2."imagen_noticia_2.jpeg");
    // Crear los documentos para los comentarios
    $info_noticia_1=fopen('../archivos-txt/texto_noticia_1.txt','r') or die ('PAPU SEÑAL ERROR');
    $info_noticia_1=fopen('../archivos-txt/texto_noticia_1.txt','r') or die ('PAPU SEÑAL ERROR');
    $texto_notc_1=$_POST['Informacion_de_la_noticia_1'];
    $texto_notc_2=$_POST['Informacion_de_la_noticia_2'];
    fwrite($info_noticia_1,$texto_notc_1);
    fclose($info_noticia_1);
    header('location:../sesion.html');
?>
