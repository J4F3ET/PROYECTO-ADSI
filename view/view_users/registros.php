<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PQRS</title>
        <link rel="shortcut icon" href="../../Controller/img/Iconos/icono.png">
        <link rel="stylesheet" href="../../Controller/Booststrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../Controller/css/global.css">
    </head>
    <body">
        <nav id="nav" class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="./sesion.php"><img src="../../Controller/img/Iconos/Logo_letras.svg" class="img-fluid" height="auto" width="100" alt="Logo_letras"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link"href="./sesion.php">Editor de Noticias<img class="img-fluid" height="auto" width="30" src="../../Controller/img/Iconos/ico-noticias.svg" alt=""></a>
                  </li>
                  <li class="nav-item  border border-1 border-dark rounded p-1">
                    <a class="nav-link active" href="./registros.php">Solicitudes de la empresa<img class="img-fluid" height="auto" width="30" src="../../Controller/img/Iconos/ico-contactos.svg" alt=""></a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <div id="contenido" class="bg-image pb-0 justify-content-around" style="background-image: url('../../Controller/img/Bg/Fondo_Noticias.svg'); height:100vh; background-position: center center; background-attachment: fixed;">
          <div id="Noticias">
            <div id="Noticia Derecha"></div>
            <div id="Noticia Izquierda"></div>
          </div>
          <div id="aside">
            <aside></aside>
          </div>
        </div>
        <footer class="bg-black">
          <div class="row w-100 ">
            <div class="col-lg-4 text-center" id="boton_entrar">
              <a clas="ms-5 mb-2 mt-2 text-secondary border border-1 border-secondary nav-link btn" href="../../Controller/php/cerrarsesion_v_1.php">Cerrar sesion</a>
            </div>
            <div class="col-lg-4">
              <p class="mt-lg-2 text-center text-muted">Copyright © 2022 SERVIDIESEL.FL  Todos los derechos reservados.</p>
            </div>
          </div>
        </footer>
        <script src="../../Controller/Booststrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>