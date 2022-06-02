<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
      <h1>
        Contactenos
      </h1>
    </section>
    <section class="content">
      <div class="box">
          <div class="row">
            <div class="col-sm-12 text-center lead text-black">
            <h1>ServiDiesel FL</h1>
            <p>Calle 17 C # 114 A 50 Interior 3, Fontibón Bogotá, Colombia</p>
            <h3>Contáctanos</h3><p>
              cstdieselsas@hotmail.com<br>
              gerencia@cstdiesel.com<br>
              Teléfono Fijo 2673954<br>
              +57 (314) 200-9758<br>
              +57 (311) 249-5396<br>
              +57 (310) 819-0393<br>
              +57 (313) 442-8112<br>
              </p>
              <h3>Te atendemos</h3>
              <p>
                Lunes a Viernes 8:00 am a 5:30 pm <br>
                Sábados 8:00 am a 1:30 pm </p>
            </div>
          </div>
      </div>
      <div class="box">
        <div class="box-body">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="text-break text-center text-black lead">
                Conocer la opinión de nuestros clientes es muy importante para nosotros, extendemos la invitación a llenar nuestro formulario para solicitar información sobre los servicios que ofrecemos. A la brevedad posible, uno de nuestros representantes atenderá la solicitud.
              </h1>
            </div>
            <div class="box-header with-border text-center">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#modalEnviarPQRS">
                    Formulario de PQRS.
                  </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<div id="modalEnviarPQRS" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">
        <!--cabezera del modal -->
        <div class="modal-header" style="background: #f57c48; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enviar PQRS</h4>
          <p >(Pregunta, Queja, Reclamo, Sugerencia)</p>
        </div>
        <!-- contenido o body del modal -->
        <div class="modal-body">
          <div class="box-body">
            <!-- formulario del modal -->
            <!-- ENTRADA DE NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control input-lg" type="text" name="nombreContactenos" placeholder="Ingresar nombre" required>
              </div>
            </div>
            <!-- ENTRADA DE CORREO ELECTRONICO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input class="form-control input-lg" type="text" name="emailContactenos" id="emailContactenos" placeholder="Correo Electronico" required>
              </div>
            </div>
            <!-- ENTRADA DE CELULAR -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                <input class="form-control input-lg" type="text" name="celularContactenos" placeholder="Ingresar su numero celular" required>
              </div>
            </div>
            <!-- ENTRADA DE TIPO DE PERFIL -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-question"></i></span>
                <select name="asuntoContactenos" class="form-control input-lg">
                  <option value="">Seleccionar el asunto</option>
                  <option value="pregunta">Pregunta</option>
                  <option value="queja">Queja</option>
                  <option value="reclamo">Reclamo</option>
                  <option value="sugerencia">Sugerencia</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA DE COMENTARIO  -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-commenting"></i></span>
                <textarea class="text-break" name="comentarioContactenos" id="comentarioContactenos" placeholder="Comentario:"></textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- pie de pagina del modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        <?php
          $enviarPQRS = new ControladorPQRS();
          $enviarPQRS->ctrEnviarPQRS();
        ?>
      </form>
    </div>
  </div>
</div>