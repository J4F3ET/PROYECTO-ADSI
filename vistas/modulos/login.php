<div id="back"></div>
<div class="login-box">

  <div class="login-logo">
    <img src="vistas/img/plantilla/logo-login.png"class="img-responsive" style="padding:0px 90px 0px 90px" >
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body text-black" style="border:solid 0px; border-radius:6px ">
    <p class="login-box-msg">Ingresar al sistema</p>
    <form method="post">
        <div class="form-group has-feedback">
            <input style="border:solid 1px; border-radius:3px " type="text" class="form-control" placeholder="Usuario" name="ingUsuario" require>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input style="border:solid 1px; border-radius:3px " type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-block btn-flat">Ingresar</button>
        </div>  
        <div>
          <?php
            $login = new ControladorUsuarios();
            $login -> ctrIngregarUsuario();
          ?>
        </div>
    </form>
  </div>
  <strong> Copyright &copy; 2022 SERVIDIESEL.FL.</strong> 
</div>