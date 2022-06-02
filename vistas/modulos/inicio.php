<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrador de usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li><a href="#">Perfil</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
            Agregar Usuario
          </button>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive tablas">
            <thead>
              <th style="width: 10px;">#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Ultimas entrada</th>
              <th>Acciones</th>
            </thead>
            <tbody>
              <?php
                $item=null;
                $valor=null;
                $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);
                
                foreach ($usuarios as $key => $value) {
                  echo'<tr>
                          <td>'.$value["id"].'</td>
                          <td>'.$value["nombre"].'</td>
                          <td>'.$value["usuario"].'</td>';
                          if($value["foto"] != ""){
                            echo'<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';
                          }else{
                            echo'<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';
                          }
                          echo'<td>'.$value["perfil"].'</td>';
                          if($value["estado"]!=0)
                          echo'<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
                          else{
                            echo'<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
                          }
                          echo'<td>'.$value["ultimo_login"].'</td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'"  data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-danger btnEliminarUsuario" nombreUsuario="'.$value["nombre"].'" fotoUsuario="'.$value["foto"].'" idUsuario="'.$value["id"].'"><i class="fa fa-times"></i></button>
                            </div>
                          </td>
                        </tr>';
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  <!-- MODAL AGREGAR USUARIOS -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!--cabezera del modal -->
        <div class="modal-header" style="background: #ff851b; color: white;">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar usuario</h4>
        </div>
        <!-- contenido o body del modal -->
        <div class="modal-body">
          <div class="box-body">
            <!-- formulario del modal -->
            <!-- ENTRADA DE NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control input-lg" type="text" name="nuevoNombre" placeholder="Ingresar nombre" require>
              </div>
            </div>
            <!-- ENTRADA DE USUARIO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input class="form-control input-lg" type="text" name="nuevoUsuario" id="nuevoUsuario" placeholder="Ingresar usuario" require>
              </div>
            </div>
            <!-- ENTRADA DE CONTRASEÑA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input class="form-control input-lg" type="password" name="nuevoPassword" placeholder="Ingresar contraseña" require>
              </div>
            </div>
            <!-- ENTRADA DE TIPO DE PERFIL -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select name="nuevoPerfil" class="form-control input-lg">
                  <option value="">Seleccionar perfil</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Supervisor">Supervisor</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA DE FOTO-->
            <div class="form-group">
              <div class="panel">Subir foto</div>
              <input type="file" name="nuevaFoto" class="nuevaFoto">
              <p class="help-block">Peso maximo de la foto 2mb</p>
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previzualizar" width="100px">
            </div>
          </div>
        </div>
        <!-- pie de pagina del modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar usuario</button>
        </div>
          <?php
          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();
          ?>
      </form>
    </div>
  </div>
</div>
<div id="modalEditarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!--cabezera del modal -->
        <div class="modal-header" style="background: #ff851b; color: white;">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar usuario</h4>
        </div>
        <!-- contenido o body del modal -->
        <div class="modal-body">
          <div class="box-body">
            <!-- formulario del modal -->
            <!-- ENTRADA DE NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control input-lg" type="text" name="editarNombre" id="editarNombre" value="" require>
              </div>
            </div>
            <!-- ENTRADA DE USUARIO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input class="form-control input-lg" type="text" name="editarUsuario" id="editarUsuario" value="" readonly >
              </div>
            </div>
            <!-- ENTRADA DE CONTRASEÑA -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input class="form-control input-lg" type="password" name="editarPassword" placeholder="Ecriba la nueva contraseña" >
                <input type="hidden" id="passwordActual" name="passwordActual">
              </div>
            </div>
            <!-- ENTRADA DE TIPO DE PERFIL -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select name="editarPerfil" class="form-control input-lg">
                  <option value="" id="editarPerfil"></option>
                  <option value="Administrador">Administrador</option>
                  <option value="Supervisor">Supervisor</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA DE FOTO-->
            <div class="form-group">
              <div class="panel">Subir foto</div>
              <input type="file" name="editarFoto" class="nuevaFoto">
              <p class="help-block">Peso maximo de la foto 2mb</p>
              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
              <input type="hidden" name="fotoActual" id="fotoActual">
            </div>
          </div>
        </div>
        <!-- pie de pagina del modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Modicar usuario</button>
        </div>
          <?php
            $editarUsuario = new ControladorUsuarios();
            $editarUsuario -> ctrEditarUsuario();
          ?>
      </form>
    </div>
  </div>
</div>
<?php
  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario->ctrBorrarUsuario();
?>