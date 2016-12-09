<div class="container">
  <h2>Agregar categoria</h2>

<form class="form-horizontal" action="<?php echo APP_URL."/categories/add"; ?>" method="POST">
    <div class="form-group" >
        <label for="name" class="col-xs-12">Nombre:</label>
        <div class="col-xs-12">
        	<input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="form-group">
    <div class="col-xs-12">
      <input class="btn btn-success" type="submit" value="Guardar">
    </div> 
    </div>

</form>
</div>