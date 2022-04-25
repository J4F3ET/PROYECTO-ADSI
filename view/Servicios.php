<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="shortcut icon" href="../Controller/img/Iconos/icono.png">
    <link rel="stylesheet" href="../Controller/Booststrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Controller/css/global.css">
</head>
<body>
    <nav id="nav" class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php"><img src="../Controller/img/Iconos/Logo_letras.svg" class="img-fluid" height="auto" width="100" alt="Logo_letras"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.php">Noticias<img class="img-fluid" height="auto" width="30" src="../Controller/img/Iconos/ico-noticias.svg" alt=""></a>
              </li>
              <li class="nav-item border border-1 border-dark rounded p-1">
                <a class="nav-link active" href="../view/Servicios.php">Servicios<img class="img-fluid" height="auto" width="30" src="../Controller/img/Iconos/ico-servicios.svg" alt=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../view/Contactenos.php">Contactenos<img class="img-fluid" height="auto" width="30" src="../Controller/img/Iconos/ico-contactos.svg" alt=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../view/Nosotros.php">Nosotros<img class="img-fluid" height="auto" width="30" src="../Controller/img/Iconos/ico-nosotros.svg" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div id="contenido-servicios" class="bg-image justify-content-around" style="background-image: url('../Controller/img/Bg/fondo_servicios.svg'); height:100vh; background-position: center center; background-attachment: fixed;">
      <div class="row w-100 ps-lg-5 p-2" id="container_servicios">
        <div class="col-12 col-lg-7 bg-opacity-25 bg-secondary mt-lg-1 mt-xl-5" id="list-sings">
          <div class="row" id="lista_general_servicios">
            <div class="col-6" id="list_sings_servicios_1">
              <div class="row my-lg-4 my-xxl-5 ms-lg-1"><a id="serv_1_diag"class="text-start nav-link text-black border-bottom border-secondary border-start">Diagnostico, mantenimiento, reparación y calibración.</a></div>
              <div class="row my-lg-4 my-xxl-5 ms-lg-1"><a id="serv_2_sistem"class="text-start nav-link text-black border-bottom border-secondary border-start">Sistemas de inyección diésel, motores, turboalimentadores diésel.</a></div>
              <div class="row my-lg-4 my-xxl-5 ms-lg-1"><a id="serv_3_suministro"class="text-start nav-link text-black border-bottom border-secondary border-start">Suministro de repuestos.</a></div>
              <div class="row my-lg-4 my-xxl-5 ms-lg-1"><a id="serv_4_scanner"class="text-start nav-link text-black border-bottom border-secondary border-start">Scanner para diagnosticos de todas las marcas.</a></div>
              <div class="row my-lg-4 my-xxl-5 ms-lg-1"><a id="serv_5_mantenimiento"class="text-start nav-link text-black border-bottom border-secondary border-start">Mantenimiento preventivo.</a></div>
            </div>
            <div class="col-6" id="list_sings_servicios_2">
              <div class="row my-lg-4 my-xxl-5 ms-lg-1"><a id="serv_6_Cambio"class="text-start nav-link text-black border-bottom border-secondary border-start">Cambios de aceite, cambio sistemas de filtración, mantenimiento líneas de combustible.</a></div>
              <div class="row my-lg-4 my-xxl-5 ms-lg-1"><a id="serv_7_mantenimiento_electronico"class="text-start nav-link text-black border-bottom border-secondary border-start">Mantenimiento y revisión eléctrica.</a></div>
              <div class="row my-lg-4 my-xxl-5 ms-lg-1"><a id="serv_8_mantenimiento_radiador"class="text-start nav-link text-black border-bottom border-secondary border-start">Mantenimiento radiador e intercoler.</a></div>
              <div class="row my-lg-4 my-xxl-5 ms-lg-1"><a id="serv_9_bombas"class="text-start nav-link text-black border-bottom border-secondary border-start"> Bombas de agua, recargas fanclutch.</a></div>
            </div>
          </div>
        </div>
        <div class="ms-lg-3 col-lg-4 col-12 mt-3 mt-lg-1 mt-xl-5"id="sing-information">
          <div class="row w-100 h-50">
            <p id="parrafo_servicios" class="text-break">
              En ServiDieselFL.SAS tenemos un catalogo variado de servicios para nuestros clientes.<br>Porfavor selecione alguno de las opciones del panel izquierdo. Gracias<br><br>En el caso de los celulares el panel se ubica en la parte supérior de este panel. Gracias por su atención.
            </p>
          </div>
          <div class="row w-100 h-50 overflow-hidden" id="div-img-cambiante">
            <figure id="figura_img_servicios">
              <!-- Las imagenes deben ser de JPEG y alto->320px ancho->480px usar la pagina para renderisar las imagenes o cortarlas -->
              <img width="85%" id="imagen-de-opciones" src="../Controller/img/img_servicios/1.jpeg" alt="Servicios de la empresa">
            </figure>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-black">
      <div class="row w-100 ">
        <div class="col-lg-4 text-center" id="boton_entrar">
          <a class="ms-5 mt-2 text-secondary border border-1 border-secondary nav-link btn" href="../view/Login.php">Entrar</a>
        </div>
        <div class="col-lg-4">
          <p class="mt-lg-2 text-center text-muted">Copyright © 2022 SERVIDIESEL.FL<br> Todos los derechos reservados.</p>
        </div>
        <div class="col-lg-4 text-center">
          <a href="../view/Contactenos.php"><img src="../Controller/img/Iconos/Footer-Llaman.svg" class="img-fluid mt-lg-2 mb-2 " height="auto" width="50" alt="Footer-Llaman"></a>
        </div>
      </div>
    </footer>
    <script src="../Controller/js/app_servicios_v_1.js"></script>
    <script src="../Controller/Booststrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>