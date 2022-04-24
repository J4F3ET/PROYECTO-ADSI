<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
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
            <li class="nav-item">
              <a class="nav-link" href="./Servicios.php">Servicios<img class="img-fluid" height="auto" width="30" src="../Controller/img/Iconos/ico-servicios.svg" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Contactenos.php">Contactenos<img class="img-fluid" height="auto" width="30" src="../Controller/img/Iconos/ico-contactos.svg" alt=""></a>
            </li>
            <li class="nav-item border border-1 border-dark rounded p-1">
              <a class="nav-link active" href="./Nosotros.php">Nosotros<img class="img-fluid" height="auto" width="30" src="../Controller/img/Iconos/ico-nosotros.svg" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="contenido-nosotros" class="bg-image pb-0 justify-content-around" style="background-image: url('../Controller/img/Bg/fondo_nosotros.svg'); height:100vh; background-position: center center; background-attachment: fixed;">
      <div class="py-lg-3 px-lg-5 py-5 w-100" id="textos">
        <div class="row mb-lg-3 mb-5 bg-secondary bg-opacity-25 w-100">
          <h1 class="text-black">Misión</h1>
          <p class="text-black">Satisfacer las expectativas del cliente en el diagnostico y reparación de motores diesel, por medio de procesos óptimos y un equipo humano y tecnológico idóneo.</p>
        </div>
        <div class="row mb-lg-3 mb-5 bg-secondary bg-opacity-25 w-100">
          <h1 class="text-black">Visión</h1>
          <p class="text-black">Usar nuestra experiencia, infraestructura, honestidad y sentido de servicio para que mediante el uso de nuestras herramientas y procesos nos permitan posicionarnos como uno de los cinco mejores centros de servicios técnicos diésel en Colombia.
          </p>
        </div>
        <div class="row mb-lg-3 mb-5 bg-secondary bg-opacity-25 w-100">
          <h1 class="text-black">Valores</h1>
          <p class="text-black">Servicio oportuno con calidad y confianza.</p>
        </div>
      </div>
    </div>
    <footer class="bg-black">
      <div class="row w-100 h-auto ">
        <div class="col-lg-4 text-center" id="boton_entrar">
          <a class="ms-5 mt-2 text-secondary border border-1 border-secondary nav-link btn" href="./Login.php">Entrar</a>
        </div>
        <div class="col-lg-4">
          <p class="mt-lg-2 text-center text-muted">Copyright © 2022 SERVIDIESEL.FL<br> Todos los derechos reservados.</p>
        </div>
        <div class="col-lg-4 text-center">
          <a href="./Contactenos.php"><img src="../Controller/img/Iconos/Footer-Llaman.svg" class="img-fluid mt-lg-2 mb-2 " height="auto" width="50" alt="Footer-Llaman"></a>
        </div>
      </div>
    </footer>
    <script src="./Booststrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>