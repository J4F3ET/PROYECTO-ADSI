<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>pagina web</title>
  <link rel="icon" href="vistas/img/plantilla/icono-blanco.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- PLUGINS DE CSS -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <!-- Personalizados -->
  <link rel="stylesheet" href="vistas/dist/css/psonalizado.css">
  <!-- PLUGINS DE JAVASCRIT -->
  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <!-- Sweetalert 2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script> -->
</head>
<!-- CUERPO DEL DOCUMENTO -->
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
  <?php 
  // LA CLASEE WRAPPER SEPARA AL SISTEMA DE CUANDO ESTA LOGEADO <------------------------------- SUPER IMPORTANTE
  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"]== "ok") {
    echo '<div class="wrapper">';
    // Añade el cabezote del sistema de usuarios
    include "modulos/cabezote.php";
    // Añade el menu lateral de sistema de usuarios
    include "modulos/menu.php";
    // contenido Temporal
    if(isset($_GET["ruta"])){
      if($_GET["ruta"]=="inicio"||
         $_GET["ruta"]=="editor"||
         $_GET["ruta"]=="pqrs"||
         $_GET["ruta"]=="gestor-pqrs"||
         $_GET["ruta"]=="tutorial-editor"||
         $_GET["ruta"]=="tutorial-pqrs"||
         $_GET["ruta"]=="tutorial-respuesta-pqrs"||
         $_GET["ruta"]=="salir"){
         include "modulos/".$_GET["ruta"].".php";
      }else{
        include "modulos/404.php";
      }
    }else{
      include "modelo/inicio.php";
    }
    // Incorporar el footer
    include "modulos/footer.php";
    echo '</div>';
  }else{
    // SISTEMA SIN INICIAR SESION <---------------------------------------
    include "modulos/navegador.php";
    include "modulos/menu-navegador.php";
    if(isset($_GET["ruta"])){
      if($_GET["ruta"]=="servicios"||
         $_GET["ruta"]=="noticias"||
         $_GET["ruta"]=="contactenos"||
         $_GET["ruta"]=="nosotros"||
         $_GET["ruta"]=="login"){
         include "modulos/".$_GET["ruta"].".php";
      }else{
        include "modulos/404.php";
      }
    }else{
      include "modulos/noticias.php";
    }
    if(empty($_GET["ruta"])||$_GET["ruta"]!="login"){
      include "modulos/footer-sin-entrar.php";
    }
  }
  ?>
<!-- ./wrapper -->
<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/pqrs.js"></script>
</body>
</html>
