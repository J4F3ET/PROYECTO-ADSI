<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PQRS
        <small>Registros de las PQRS(preguntas, quejas, reclamos, sugerencias)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li><a href="#">PQRS</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <h2>Preguntas</h2>
          <table class="table table-bordered table-striped dt-responsive tablas">
            <thead>
              <th style="width: 10px;">#</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Celular</th>
              <th>Commentario</th>
              <th>Fecha</th>
              <th>Estado</th>
            </thead>
            <tbody>
              <?php
                $tabla='pregunta';
                $pregunta = ControladorPQRS::ctrMostrarTabla($tabla);
                
                foreach ($pregunta as $key => $value) {
                  echo'<tr>
                          <td>'.$value["id_pregunta"].'</td>
                          <td>'.$value["nombreCliente"].'</td>
                          <td>'.$value["emailCliente"].'</td>
                          <td>'.$value["celularCliente"].'</td>
                          <td>'.$value["comentarioCliente"].'</td>
                          <td>'.$value["fechaIngreso"].'</td>';
                          if($value["estado"]!=0)
                          echo'<td><button class="btn btn-success btnRespondido" data-toggle="modal" data-target="#modalVerRespuestaPQRS" idAsuntoPQRS="'.$tabla.'" idPQRS="'.$value["id_pregunta"].'" estadoPQRS="1">Respondido</button></td>';
                          else{
                            echo'<td><button class="btn btn-danger btnResponder" data-toggle="modal" data-target="#modalResponderPQRS" idAsuntoPQRS="'.$tabla.'" idPQRS="'.$value["id_pregunta"].'" estadoPQRS="1">Sin responder</button></td>';
                          }
                        '</tr>';
                }
              ?>
            </tbody>
          </table>
        </div>
        <div class="box-body">
          <h2>Quejas</h2>
            <table class="table table-bordered table-striped dt-responsive tablas">
            <thead>
              <th style="width: 10px;">#</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Celular</th>
              <th>Commentario</th>
              <th>Fecha</th>
              <th>Estado</th>
            </thead>
            <tbody>
              <?php
                $tabla='queja';
                $pregunta = ControladorPQRS::ctrMostrarTabla($tabla);
                
                foreach ($pregunta as $key => $value) {
                  echo'<tr>
                          <td>'.$value["id_queja"].'</td>
                          <td>'.$value["nombreCliente"].'</td>
                          <td>'.$value["emailCliente"].'</td>
                          <td>'.$value["celularCliente"].'</td>
                          <td>'.$value["comentarioCliente"].'</td>
                          <td>'.$value["fechaIngreso"].'</td>';
                          if($value["estado"]!=0)
                          echo'<td><button class="btn btn-success btnRespondido" data-toggle="modal" data-target="#modalVerRespuestaPQRS" idAsuntoPQRS="'.$tabla.'" idPQRS="'.$value["id_queja"].'" estadoPQRS="1">Respondido</button></td>';
                          else{
                            echo'<td><button class="btn btn-danger btnResponder" data-toggle="modal" data-target="#modalResponderPQRS" idAsuntoPQRS="'.$tabla.'" idPQRS="'.$value["id_queja"].'" estadoPQRS="1">Sin responder</button></td>';
                          }
                        '</tr>';
                }
              ?>
            </tbody>
          </table>
        </div>
        <div class="box-body">
          <h2>Reclamos</h2>
            <table class="table table-bordered table-striped dt-responsive tablas">
            <thead>
              <th style="width: 10px;">#</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Celular</th>
              <th>Commentario</th>
              <th>Fecha</th>
              <th>Estado</th>
            </thead>
            <tbody>
              <?php
                $tabla='reclamo';
                $pregunta = ControladorPQRS::ctrMostrarTabla($tabla);
                
                foreach ($pregunta as $key => $value) {
                  echo'<tr>
                          <td>'.$value["id_reclamo"].'</td>
                          <td>'.$value["nombreCliente"].'</td>
                          <td>'.$value["emailCliente"].'</td>
                          <td>'.$value["celularCliente"].'</td>
                          <td>'.$value["comentarioCliente"].'</td>
                          <td>'.$value["fechaIngreso"].'</td>';
                          if($value["estado"]!=0)
                          echo'<td><button class="btn btn-success btnRespondido" data-toggle="modal" data-target="#modalVerRespuestaPQRS" idAsuntoPQRS="'.$tabla.'" idPQRS="'.$value["id_reclamo"].'" estadoPQRS="1">Respondido</button></td>';
                          else{
                            echo'<td><button class="btn btn-danger btnResponder" data-toggle="modal" data-target="#modalResponderPQRS" idAsuntoPQRS="'.$tabla.'" idPQRS="'.$value["id_reclamo"].'" estadoPQRS="1">Sin responder</button></td>';
                          }
                        '</tr>';
                }
              ?>
            </tbody>
          </table>
        </div>
        <div class="box-body">
          <h2>Sugerencias</h2>
            <table class="table table-bordered table-striped dt-responsive tablas">
            <thead>
              <th style="width: 10px;">#</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Celular</th>
              <th>Commentario</th>
              <th>Fecha</th>
              <th>Estado</th>
            </thead>
            <tbody>
              <?php
                $tabla='sugerencia';
                $pregunta = ControladorPQRS::ctrMostrarTabla($tabla);
                
                foreach ($pregunta as $key => $value) {
                  echo'<tr>
                          <td>'.$value["id_sugerencia"].'</td>
                          <td>'.$value["nombreCliente"].'</td>
                          <td>'.$value["emailCliente"].'</td>
                          <td>'.$value["celularCliente"].'</td>
                          <td class="text-break">'.$value["comentarioCliente"].'</td>
                          <td>'.$value["fechaIngreso"].'</td>';
                          if($value["estado"]!=0)
                          echo'<td><button class="btn btn-success btnRespondido" data-toggle="modal" data-target="#modalVerRespuestaPQRS" idAsuntoPQRS="'.$tabla.'" idPQRS="'.$value["id_sugerencia"].'" estadoPQRS="1">Respondido</button></td>';
                          else{
                            echo'<td><button class="btn btn-danger btnResponder" data-toggle="modal" data-target="#modalResponderPQRS" idAsuntoPQRS="'.$tabla.'" idPQRS="'.$value["id_sugerencia"].'" estadoPQRS="1">Sin responder</button></td>';
                          }
                        '</tr>';
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  </div>
<div id="modalResponderPQRS" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="POST">
        <!--cabezera del modal -->
        <div class="modal-header" style="background: #f57c48; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enviar Respuesta a la PQRS</h4>
          <p estadoPQRS="" id="parrafoIDPQRS"></p>
        </div>
        <!-- contenido o body del modal -->
        <div class="modal-body">
          <div class="box-body">
            <!-- formulario del modal -->
            <!-- ENTRADA DE NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <input class="form-control input-lg" id="idPQRS" type="hidden" value="" name="idPQRS" readonly ></input>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <input class="form-control input-lg" id="tablaPQRS" type="hidden" value="" name="tablaPQRS" readonly ></input>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control input-lg" id="nombreClientePQRS" type="text" value="" name="nombreClientePQRS" readonly ></input>
              </div>
            </div>
            <!-- ENTRADA DE CORREO ELECTRONICO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input class="form-control input-lg" id="emailClientePQRS" type="email" value="" name="emailClientePQRS" readonly ></input>
              </div>
            </div>
            <!-- ENTRADA DE CELULAR -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                <input class="form-control input-lg" id="celularClientePQRS" type="text" value="" name="celularClientePQRS" readonly ></input>
              </div>
            </div>
            <!-- cliente DE COMENTARIO  -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-question"></i></span>
                <textarea class="form-control input-lg text-break" id="comentarioClientePQRS" name="comentarioClientePQRS" readonly ></textarea>
              </div>
            </div>
            <!-- ENTRADA DE respuesta  -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-commenting"></i></span>
                <textarea class="text-break" name="comentarioRespuestaPQRS" id="comentarioRespuestaPQRS" placeholder="Respuesta:" required></textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- pie de pagina del modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
          <button  type="submit" class="btn btn-primary btnEnviarRespuestaPQRS">Enviar</button>
        </div>
        <?php
          $enviarRespuestaPQRS = new ControladorPQRS();
          $enviarRespuestaPQRS->ctrEnviarRespuestaPQRS();
        ?>
      </form>
    </div>
  </div>
</div>
<div id="modalVerRespuestaPQRS" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="POST">
        <!--cabezera del modal -->
        <div class="modal-header" style="background: #f57c48; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Respuesta</h4>
          <p id="parrafoRespuesta"></p>
        </div>
        <!-- contenido o body del modal -->
        <div class="modal-body">
          <div class="box-body">
            <!-- formulario del modal -->
            <!-- ENTRADA DE NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                <span class="input-group-addon"><strong> ID de la PQRS</strong></span>
                <input class="form-control input-lg" id="idPQRSmodalRespuesta" type="text" value="" readonly ></input>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-male"></i></span>
                <span class="input-group-addon text-break"><strong>Nombre</strong></span>
                <input class="form-control input-lg" id="nombreClienteModalRespuesta" type="text" value="" name="" readonly ></input>
                
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <span class="input-group-addon text-break"><strong>Correo</strong></span>
                <input class="form-control input-lg" id="emailModalRespuesta" type="email" value="" name="" readonly ></input>
              </div>
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <span class="input-group-addon"><strong>Fecha Ingreso</strong></span>
                <input class="form-control input-lg" id="fechaIngresoPQRSmodalRespuesta" type="text" value="" name="" readonly ></input>
                <span class="input-group-addon"><strong>Fecha Respuesta</strong></span>
                <input class="form-control input-lg" id="fechaRespuestamodalRespuesta" type="text" value="" name="" readonly ></input>
              </div>
            </div>        
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <span class="input-group-addon"><strong>Contesta</strong></span>
                <input class="form-control input-lg" id="usuarioContestaModalRespuesta" type="text" value="" name="" readonly ></input>
                <span class="input-group-addon"><strong>ID Usuario</strong></span>
                <input class="form-control input-lg" id="idUsuarioRespondeModalRespuesta" type="text" value="" name="" readonly ></input>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-comment-o"></i></span>
                <span class="input-group-addon"><strong>Respuesta </strong></span>
                <textarea class="form-control input-lg text-break" id="comentarioPQRSmodalRespuesta"readonly ></textarea>
              </div>
            </div>
          </div>
        </div>
        <!-- pie de pagina del modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Cerrar</button>
        </div>
      </form>
    </div>
  </div>
</div>