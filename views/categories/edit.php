<div class="container">
<h2>Editar tipo de usuario</h2>

<form class="form-horizontal" action="<?php echo APP_URL."/categories/edit"; ?>" method="POST">
	<input type="hidden" name="id" value="<?php echo $category["id"]; ?>">
    <div class="form-group">
        <label class="col-xs-12" for="name">Nombre:</label>
        <div class="col-xs-12">
        	<input type="text" class="form-control" name="name" value="<?php echo $category["name"]; ?>">
        </div>
    </div> 
    <div class="form-group">
    <div class="col-xs-12">
        <input class="btn btn-success" type="submit" value="Guardar">
    </div>
    </div> 

</form>
</div>