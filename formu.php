<?php
    $nombre=$_POST['nombre'];
    $celular=$_POST['celular'];
    $email=$_POST['email'];
    $asunto=$_POST['asunto'];
    $comentario=$_POST['comentario'];

    $fecha = date_default_timezone_get();
    if(!empty($nombre)||!empty($email)||!empty($celular)||!empty($asunto)||!empty($comentario)){
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="proyecto";
        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $INSERT="INSERT INTO usuario (nom_usu_reg,cel_usu_reg,email_usu_reg) value(?,?,?)";
            switch ($asunto) {
                case "Pregunta":
                    $INSERT3="INSERT INTO preguntas (id_usu_prg,prg,fech_alm) value(?,?,?)";
                    /*INSERT INTO `preguntas`(`id_pqrs_prg`, `id_usu_prg`, `prg`, `fech_alm`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]') */
                    break;
                case "Queja":
                    $INSERT3="INSERT INTO queja (id_usu_queja,queja,fech_alm) value(?,?,?)";
                    break;
                case "Reclamo":
                    $INSERT3="INSERT INTO reclamo (id_usu_recl,recl,fech_alm) value(?,?,?)";
                    break;
                case "Sugerencia":
                    $INSERT3="INSERT INTO sugerencia (id_usu_sug,sug,fech_alm) value(?,?,?)";
                    break;
            }
            for ($i=1; $i < $cantidad_usuarios=mysqli_query($conn,"SELECT id_usu_reg(COUNT) FROM usuario "); $i++) { 
                if($nombre==$nombre_consultado=mysqli_query($conn,"SELECT nom_usu_reg FROM usuario where id_usu_reg='".$i."'")) {
                    $stmt = $conn->prepare($INSERT);
                    $stmt ->bind_param("sis",$nombre,$celular,$email);
                    $stmt ->execute();
                }
            }   
                /*Generador de ID-usuario*/
                $consulta=mysqli_query($conn,"SELECT id_usu_reg FROM usuario WHERE nom_usu_reg='".$nombre."'");
                echo $consulta;
                $stmt = $conn->prepare($INSERT3);
                $stmt ->bind_param("iss",$consulta,$comentario,$fecha);
                $stmt ->execute();
                echo "Registro Completado.";
                $stmt->close();
                $conn->close();
        }
    }
    else{
        echo "Todos los datos son OBLIGATORIOS";
        die();
    }
?>
