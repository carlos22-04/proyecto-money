<div class="container">
<h2>Listado de Cuentas</h2>
<h4>Número de Cuentas: <?php echo $accountsCount; ?></h4>
<div class="row">
<div class="col-xs-12">
<div class="table-responsive">
<?php if(!empty($accounts)): ?>
<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>User</th>
		<th>Name</th>
		<th>Options</th>
	</tr>
	<?php
		foreach ($accounts as $account): 
	?>
	<tr>
		<td><?php echo $account["accounts"]["id"]; ?></td>
		<td><?php echo $account["users"]["username"]; ?></td>
		<td><?php echo $account["accounts"]["name"]; ?></td>
		<td>
            <?php
            echo $this->Html->link("Edit", array(
                "controller"=>"accounts",
                "method"=>"edit",
                "arg"=>$account["accounts"]["id"]
));?> |
            <?php
           echo $this->Html->link("Delete", array(
                "controller"=>"accounts",
                "method"=>"delete",
                "arg"=>$account["accounts"]["id"]
            ));?>
        </td>
			<!--<a href="<?php echo APP_URL."/accounts/edit/".$account["accounts"]["id"]; ?>">Edit</a>-->
			<!--<a href="<?php echo APP_URL."/accounts/delete/".$account["accounts"]["id"]; ?>">Delete</a>-->
		</td>
	</tr>
	<?php 
		endforeach; 
	?>
</table>
<?php endif; ?>
</div>
</div>
</div>
</div>