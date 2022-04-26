<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <link rel="shortcut icon" href="./Controller/img/Iconos/icono.png">
        <link rel="stylesheet" href="./Controller/Booststrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./Controller/css/global.css">
    </head>
    <body">
        <nav id="nav" class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="./index.php"><img src="./Controller/img/Iconos/Logo_letras.svg" class="img-fluid" height="auto" width="100" alt="Logo_letras"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item border border-1 border-dark rounded p-1">
                    <a class="nav-link active" aria-current="page" href="./index.php">Noticias<img class="img-fluid" height="auto" width="30" src="./Controller/img/Iconos/ico-noticias.svg" alt=""></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./view/Servicios.php">Servicios<img class="img-fluid" height="auto" width="30" src="./Controller/img/Iconos/ico-servicios.svg" alt=""></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./view/Contactenos.php">Contactenos<img class="img-fluid" height="auto" width="30" src="./Controller/img/Iconos/ico-contactos.svg" alt=""></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./view/Nosotros.php">Nosotros<img class="img-fluid" height="auto" width="30" src="./Controller/img/Iconos/ico-nosotros.svg" alt=""></a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <div id="contenido" class="bg-image pb-0 justify-content-around" style="background-image: url('./Controller/img/Bg/Fondo_Noticias.svg'); height:100vh; background-position: center center; background-attachment: fixed;">
          <div id="container_de_index" class="row w-100 py-3 py-lg-3 py-xl-5 px-5 h-100">
            <div class="col-3">
              <div id="div_img_notcia_1">
                <img onmouseenter="evento()"  class="IMG_NOTICIA" src="./Controller/img/img_subidas/img_actual_notc_1/imagen_noticia_1.jpeg" alt="imagen_noticia_1" id="imagen_public_noticia_1">
              </div>
            </div>
            <div class="col-3">
              <div id="div_img_notcia_2">
                <img class="IMG_NOTICIA" src="./Controller/img/img_subidas/img_actual_notc_2/imagen_noticia_2.jpeg" alt="imagen_noticia_2" id="imagen_public_noticia_2">
              </div>
            </div>
            <div class="col-6 pb-5">
              <div name="informacion_de_la_noticia_seleccionada" id="informacion_de_la_noticia_seleccionada" class="w-100 bg-secondary bg-opacity-25 text-break border-1 border-secondary rounded-3 text-break text-center text-black" rows="10" cols="10">
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
                      Sábados 8:00 am a 1:30 pm
                  </p>
              </div>
            </div>
          </div>
        </div>
        <footer class="bg-black">
          <div class="row w-100 ">
            <div class="col-lg-4 text-center" id="boton_entrar">
              <a class="ms-5 mt-2 text-secondary border border-1 border-secondary nav-link btn" href="./view/Login.php">Entrar</a>
            </div>
            <div class="col-lg-4">
              <p class="mt-lg-2 text-center text-muted">Copyright © 2022 SERVIDIESEL.FL<br> Todos los derechos reservados.</p>
            </div>
            <div class="col-lg-4 text-center">
              <a href="./view/Contactenos.php"><img src="./Controller/img/Iconos/Footer-Llaman.svg" class="img-fluid mt-lg-2 mb-2 " height="auto" width="50" alt="Footer-Llaman"></a>
            </div>
          </div>
        </footer>
        <script src="./Controller/Booststrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
  //AQUI SE RECIBE LA INFORMACION DE LA NOTICIA ENVIADA DESDE ADMIN 
  $informacion_1=file_get_contents('./Controller/archivos-txt/texto_noticia_1.txt');
  $informacion_2=file_get_contents('./Controller/archivos-txt/texto_noticia_2.txt');
?>
<script>
    // PASAMOS LA INFORMACION A JAVASCRIPT PARA PODER MANIPULAR EVENTOS DE MOUSE
    const informacion_1 = "<?php echo $informacion_1 ?>";
    const informacion_2 = "<?php echo $informacion_2 ?>";
    // Detectamos los eventos click para definir que informacion mostrar dependiendo de la informacion suministrada
    document.querySelectorAll(".IMG_NOTICIA").forEach(el => {
        el.addEventListener("mouseover", e => {
          const id = e.target.getAttribute("id");
          switch (id) {
            case "imagen_public_noticia_1":
                  document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML='<h4 class="mt-2" >ServiDiesel FL</h4>'+informacion_1
              break;
            case "imagen_public_noticia_2":
                document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML='<h4 class="mt-2" >ServiDiesel FL</h4>'+informacion_2
              break;
            default:

              break;
          }
        });
      });
    document.querySelectorAll("#container_de_index").forEach(el => {
      el.addEventListener("mouseout", e => {
        document.getElementById('informacion_de_la_noticia_seleccionada').innerHTML='<h4 class="mt-2" >ServiDiesel FL</h4><p>Calle 17 C # 114 A 50 Interior 3, Fontibón Bogotá, Colombia</p><p>Contáctanos<br>cstdieselsas@hotmail.com<br>gerencia@cstdiesel.com<br>Teléfono Fijo 2673954<br>+57 (314) 200-9758<br>+57 (311) 249-5396<br>+57 (310) 819-0393<br>+57 (313) 442-8112<br></p><p>Te atendemos<br>Lunes a Viernes 8:00 am a 5:30 pm <br>Sábados 8:00 am a 1:30 pm</p>'
      });
    });
</script>
