<?php
    date_default_timezone_set('America/Bogota');
    include_once("conn.php");
    coneccionBD::Coneccion();
    $nombre=$_POST['nombre'];
    $celular=$_POST['celular'];
    $email=$_POST['email'];
    $asunto=$_POST['asunto'];
    $comentario=$_POST['comentario'];
    $fecha= date("Y-m-d");

    $SELECT="SELECT";//<----------------en eta linea debe detectar el id del usuario y ver si existe o es nuevo usuario
    $INSERT="INSERT INTO usuario (nom_usu_reg,cel_usu_reg,email_usu_reg) value(?,?,?)";
    $INSERT2="INSERT INTO pqrs(id_pqrs,id_usu)value(?,?)";#hace el insert al intermedio de usuario y el id de pqrs
    switch ($asunto) {
        case "Pregunta":
            $INSERT3="INSERT INTO preguntas (id_usu_prg,prg,fech_alm) value(?,?,?)";#En estas lineas verifica el asunto para hacer el insert a la tabla correspondiente
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
    echo($nombre);
    echo($celular);
    echo($email);
    echo($asunto);
    echo($comentario);
    echo ($fecha);
?>