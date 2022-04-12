<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$asunto=$_POST['asunto'];
$comentario=$_POST['comentario'];
if(!empty($nombre)||!empty($email)||!empty($celular)||!empty($asunto)||!empty($comentario)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="1";
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT="SELECT celular from usuario where celular = ? limit 1";
        $INSERT="INSERT INTO usuario (nombre,email,celular,asunto,comentario) value(?,?,?,?,?)";
        $stmt = $conn->prepare($SELECT);
        $stmt ->bind_param("i",$celular);
        $stmt ->execute();
        $stmt ->bind_result($celular);
        $stmt ->store_result();
        $rnum = $stmt -> num_rows;
        if($rnum == 0){
            $stmt -> close();
            $stmt = $conn->prepare($INSERT);
            $stmt ->bind_param("ssiss",$nombre,$email,$celular,$asunto,$comentario);
            $stmt ->execute();
            echo "Registro Completado.";
        }
        else{
            echo "Ese numero ya esta registrado";
        }
        $stmt->close();
        $conn->close();

    }
}
else{
    echo "Todos los datos son OBLIGATORIOS";
    die();
}
?>
