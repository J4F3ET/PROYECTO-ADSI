<div class="content-wrapper">
    <section class="content-header text-center">
      <h1>
        Editor
      </h1>
    </section>
    <section class="content">
      <div class="box">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="box-body row w-100 h-100">
            <div class="col-sm-3">
                <div class=" text-center">
                  <input type="file" name="imgNoticiaSubir1" id="imgNoticiaSubir1">
                  <figure id="figure_img_1">
                    <label id="labelImgNoticias1" class="col-12" for="imgNoticiaSubir1">
                      <img src="vistas/img/plantilla/cloud-arrow-up.svg" alt="icono_subir_imagen" width="100%" >
                      <p  class="help-block">Subir Imagen <br>de la <br> noticia #1</p>
                    </label>
                    <img id="imgNoticiaSubir1_pre">
                  </figure>
              </div>
            </div>
            <div class="col-sm-3">
              <div class=" text-center">
                <input type="file" name="imgNoticiaSubir2" id="imgNoticiaSubir2">
                    <figure id="figure_img_2">
                      <label id="labelImgNoticias2" class="col-12" for="imgNoticiaSubir2">
                        <img  src="vistas/img/plantilla/cloud-arrow-up.svg"alt="icono_subir_imagen" width="100%">
                        <p class="help-block">Subir imagen <br>de la<br> noticia #2</p>
                      </label>
                      <img id="imgNoticiaSubir2_pre">
                    </figure>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-6 text-break text-center text-black">
                  <h1 >Noticia 1</h1>
                  <textarea class="texAreaNoticias" name="Informacion_de_la_noticia_1" placeholder="Informacion de la noticia 1" id="editNoticia1"  rows="9" required></textarea>
                </div>
                <div class="col-sm-6 text-break text-center text-black">
                      <h1>Noticia 2</h1>
                      <textarea class="texAreaNoticias" name="Informacion_de_la_noticia_2" placeholder="Informacion de la noticia 2" id="editNoticia2" rows="9" required></textarea>      
                </div>
              </div>    
            </div>
          </div>
          <div class="row">
                  <input name="enviarNoticia" class="btn btn-primary btn-block text-center" type="submit" value="Editar Noticias">
          </div>
          <?php
            $actualizarNoticia= new ControladorEditor();
            $actualizarNoticia->ctrActualizarNoticia();
          ?>
        </form>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
      <script src="vistas/js/editor.js"></script>
  </div>
