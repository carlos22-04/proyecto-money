<div class="container">
<h3>Inicio de sesión</h3>

<form class="form-horizontal" action="<?php echo APP_URL."/users/login"; ?>" method="post">
<div class="form-group">
        <label for="username" class="col-xs-12">Usuario:</label>
        <div class="col-xs-12">
            <input type="text" class="form-control" id="username" name="username">
        </div>
  </div>

  <div class="form-group">
        <label for="password" class="col-xs-12">Password:</label>
        <div class="col-xs-12">
            <input type="password" class="form-control" id="password" name="password">
        </div>
  </div>
<br>
    <div class="form-group">
    <div class="col-xs-12">
      <input class="btn btn-success" type="submit" value="Entrar">
    </div> 
    </div>

</form>
</div>