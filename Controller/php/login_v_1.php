<?php 
require './conn_v_1.php';
$conn=conn_mysql::conn_f();
$email=$_POST['email'];
$password=$_POST['password'];
if(!empty($email)||!empty($password)){
session_start();
$_SESSION['email']=$email;
$consult="SELECT * FROM admins WHERE email_admin ='$email' AND `pass_admin` = '$password'";
$result=mysqli_query($conn,$consult);
$row=mysqli_num_rows($result);
if($row){
    header('location:../../view/view_users/sesion.php');
}else{
    echo'<script type="text/javascript">
    alert("Inicio de secion incorrecto verifique sus datos");
    window.location.href="../../view/Login.php";
    </script>';
}
}
mysqli_free_result($result);
mysqli_close($conn);
?>