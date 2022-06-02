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
                          echo'<td><button class="btn btn-success">Respondido</button></td>';
                          else{
                            echo'<td><button class="btn btn-danger">Sin responder</button></td>';
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
                          <td>'.$value["id_pregunta"].'</td>
                          <td>'.$value["nombreCliente"].'</td>
                          <td>'.$value["emailCliente"].'</td>
                          <td>'.$value["celularCliente"].'</td>
                          <td>'.$value["comentarioCliente"].'</td>
                          <td>'.$value["fechaIngreso"].'</td>';
                          if($value["estado"]!=0)
                          echo'<td><button class="btn btn-success">Respondido</button></td>';
                          else{
                            echo'<td><button class="btn btn-danger">Sin responder</button></td>';
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
                          <td>'.$value["id_pregunta"].'</td>
                          <td>'.$value["nombreCliente"].'</td>
                          <td>'.$value["emailCliente"].'</td>
                          <td>'.$value["celularCliente"].'</td>
                          <td>'.$value["comentarioCliente"].'</td>
                          <td>'.$value["fechaIngreso"].'</td>';
                          if($value["estado"]!=0)
                          echo'<td><button class="btn btn-success">Respondido</button></td>';
                          else{
                            echo'<td><button class="btn btn-danger">Sin responder</button></td>';
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
                          <td>'.$value["id_pregunta"].'</td>
                          <td>'.$value["nombreCliente"].'</td>
                          <td>'.$value["emailCliente"].'</td>
                          <td>'.$value["celularCliente"].'</td>
                          <td>'.$value["comentarioCliente"].'</td>
                          <td>'.$value["fechaIngreso"].'</td>';
                          if($value["estado"]!=0)
                          echo'<td><button class="btn btn-success">Respondido</button></td>';
                          else{
                            echo'<td><button class="btn btn-danger">Sin responder</button></td>';
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