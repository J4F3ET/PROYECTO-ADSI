<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editor de noticias</title>
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
                  <li class="nav-item border border-1 border-dark rounded p-1">
                    <a class="nav-link active" aria-current="page" href="./sesion.php">Editor de Noticias<img class="img-fluid" height="auto" width="30" src="../../Controller/img/Iconos/ico-noticias.svg" alt=""></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./registros.php">Solicitudes de la empresa<img class="img-fluid" height="auto" width="30" src="../../Controller/img/Iconos/ico-contactos.svg" alt=""></a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <div id="contenido-sesion" class="bg-image pb-0 justify-content-around" style="background-image: url('../../Controller/img/Bg/Fondo_Noticias.svg'); height:100vh; background-position: center center; background-attachment: fixed;">
          <div id="container_editor_noticias" class="row w-100">
            <form id="formulario_noticias" class="row w-100 pt-3 pt-lg-3 pt-xl-5" action="../../Controller/php/imagenes_not_v_1.php" method="post" enctype="multipart/form-data">
              <div class="col-3 btn" id="contenedor_imagen_1_ntc">
                <input type="file" name="imagen_1" id="imagen_1" class="collapse">
                <figure class="col-12 ms-5" id="figure_img_1">
                  <label class="col-12" for="imagen_1">
                    <img src="../../Controller/img/Iconos/cloud-arrow-up.svg" alt="icono_subir_imagen" width="80%" >
                    <p class="text-black text">Subir Imagen <br>de la <br> noticia #1</p>
                  </label>
                  <img id="imagen_1_pre">
                </figure>
              </div>
              <div class="col-3 btn "id="contenedor_imagen_2_ntc">
                <input type="file" name="imagen_2" id="imagen_2" class="collapse">
                <figure class="col-12" id="figure_img_2">
                  <label class="col-12" for="imagen_2">
                    <img src="../../Controller/img/Iconos/cloud-arrow-up.svg"alt="icono_subir_imagen" width="80%">
                    <p>Subir imagen <br>de la<br> noticia #2</p>
                  </label>
                  <img id="imagen_2_pre">
                </figure>
              </div>
              <div class="col-6" id="div_text_area_noticias">
                <textarea name="Informacion_de_la_noticia_1" placeholder="Informacion de la noticia 1" id="edit_noticia_1" class="w-100 bg-light bg-opacity-25 text-break border-1 border-secondary rounded-3 text-break text-center mb-2" rows="9" required></textarea>    
                <textarea name="Informacion_de_la_noticia_2" placeholder="Informacion de la noticia 2" id="edit_noticia_2" class="w-100 bg-light bg-opacity-25 text-break border-1 border-secondary rounded-3 text-break text-center" rows="9" required></textarea>
                <div class="row w-100 justify-content-end">
                  <input class="btn" type="submit" name="enviar_noticia" id="enviar_noticia" value="Publicar">
                </div>
              </div>
            </form>
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
        <script src="../../Controller/js/app_sesion_v_1.js"></script>
        <script src="../../Controller/js/app_sesion_info_noticias_v_1.js"></script>
    </body>
</html>