<!DOCTYPE html>        
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contactenos</title>
        <link rel="shortcut icon" href="../Controller/img/Iconos/icono.png">
        <link rel="stylesheet" href="../Controller/css/global.css">
        <link rel="stylesheet" href="../Controller/Booststrap/css/bootstrap.min.css">
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
            <li class="nav-item border border-1 border-dark rounded p-1">
              <a class="nav-link active" href="./Contactenos.php">Contactenos<img class="img-fluid" height="auto" width="30" src="../Controller/img/Iconos/ico-contactos.svg" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Nosotros.php">Nosotros<img class="img-fluid" height="auto" width="30" src="../Controller/img/Iconos/ico-nosotros.svg" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="contenido-contactenos" class="bg-image pb-0 justify-content-around" style="background-image: url('../Controller/img/Bg/fondo_contactenos.svg'); height:100vh; background-position: center center; background-attachment: fixed;">
      <div class="row w-100 ms-lg-0 ms-1 p-3" id="div-contenido-contactenos">
        <div class="col-12 col-lg-4 ms-0 ms-lg-4 mt-lg-0 mt-xl-5 bg-secondary bg-opacity-25" id="div-form-contactenos">
            <form id="formulario-pqrs" action="../Controller/php/formulario.php" method="POST">
              <div class="row my-lg-0 my-xl-3 w-100 my-1">
                <div class="col-6 mx-1 my-2 my-lg-1 my-xl-2">
                  <input class="bg-light bg-opacity-75" type="text" placeholder="Nombres y apellidos" name="nombre" required>
                </div>
                <div class="col-6 mx-1 my-2 my-lg-1 my-xl-2">
                  <input class="bg-light bg-opacity-75" type="email" placeholder="Correo Electronico" name="email" required>  
                </div>
              </div>
              <div class="row my-lg-0 my-xl-3 my-1 w-100">
                <div class="col-6 mx-1 my-2 my-lg-1 my-xl-2">
                  <input class="bg-light bg-opacity-75" type="phone" placeholder="Celular" name="celular" required>
                </div>
                <div class="col-6 mx-1 my-2 my-lg-1 my-xl-2">
                  <select class="bg-light bg-opacity-75 text-secondary" name="asunto" required>
                      <option selected hidden value="">Asunto</option>
                      <option class="text-black" value="Pregunta">Pregunta </option>
                      <option class="text-black" value="Queja">Queja </option>
                      <option class="text-black" value="Reclamo">Reclamo </option>
                      <option class="text-black" value="Sugerencia">Sugerencia </option>
                    </select>
                </div>
              </div>
              <div class="row w-100 my-lg-0 my-xl-3 my-1 mx-lg-1 mx-1">
                <textarea name="comentario" placeholder="Comentario:" id="c" class="w-100 bg-light bg-opacity-75 text-break" rows="10" required></textarea>
              </div>
              <div class="row-cols-1 mb-1 w-100 mt-1">
                <div class="btn text-center w-auto w-25 ms-1" id="div-boton-enviar">
                  <label for="boton-enviar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill ms-1" viewBox="0 0 16 16">
                      <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                    </svg>
                    <input id="boton-enviar" class="me-0" type="submit" value="Enviar">
                  </label>
                </div>
              </div>
            </form>
        </div>
        <div class="col-lg-7" id="info-contactenos">
          <div class="row w-100 ms-0 ms-lg-4 mt-lg-0 mt-xl-5 mt-3 bg-secondary bg-opacity-25 text-center fw-bold p-2">
            <p>Conocer la opinión de nuestros clientes es muy importante para nosotros, extendemos 
              la invitación a llenar nuestro formulario para solicitar información sobre los servicios que ofrecemos. 
              A la brevedad posible, uno de nuestros representantes atenderá la solicitud.</p>
          </div>
          <div class="row w-100 ms-0 ms-lg-4 mt-lg-1 mt-xl-5 mt-3 bg-secondary bg-opacity-25 text-center fw-bold">
            <h4 class="mt-2" >ServiDiesel FL</h4>
            <p>Calle 17 C # 114 A 50 Interior 3, Fontibón Bogotá, Colombia</p>
            <p>Contáctanos<br>
              cstdieselsas@hotmail.com<br>
              gerencia@cstdiesel.com<br>
              Teléfono Fijo 2673954<br>
              +57 (314) 200-9758<br>
              +57 (311) 249-5396<br>
              +57 (310) 819-0393<br>
              +57 (313) 442-8112<br>
              </p>
              <p>Te atendemos<br>
                Lunes a Viernes 8:00 am a 5:30 pm <br>
                Sábados 8:00 am a 1:30 pm </p>
          </div>
        </div>
      </div>
    </div>            
    <footer class="bg-black">
      <div class="row w-100 ">
        <div class="col-lg-4 text-center" id="boton_entrar">
          <a class="ms-5 mt-2 text-light border border-1 border-secondary btn-outline-dark nav-link btn" href="./Login.php">Entrar</a>
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