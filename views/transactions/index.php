<div class="container">
<h2>Listado de transacciones</h2>
<div class="row">
<div class="col-xs-12">
<div class="table-responsive">
<h4>Número de transacciones: </h4><?php echo $transactionCount; ?>
<p>
	<strong>Total: </strong> $
	<?php
		echo number_format($transactionsSuma, 2, '.',',');
	?>
</p>
<?php if(!empty($transactions)): ?>
<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Cuenta</th>
		<th>Categoria</th>
		<th>Descripción</th>
		<th>Fecha</th>
		<th>Cantidad</th>
		<th>Options</th>
	</tr>
	<?php
		foreach ($transactions as $transaction): 
			$date = date_create($transaction["transactions"]["date"]);
			$amount = $transaction["transactions"]["amount"];

			if ($transaction["transactions"]["amount"]<0){
				$s = "$"; //se puede colocar el signo de menor
				$amount = number_format($amount, 2);
				$amount = '<div style= "color:red">&nbsp;'.$s.$amount.'<div>';
			}else{
				$s = "$";
				$amount = number_format($amount, 2);
				$amount = '<div style= "color:green">&nbsp;'.$s.$amount.'<div>';
			}
			?>
	<tr>
		<td><?php echo $transaction["transactions"]["id"]; ?></td>
		<td><?php echo $transaction["accounts"]["name"]; ?></td>
		<td><?php echo $transaction["categories"]["name"]; ?></td>
		<td><?php echo $transaction["transactions"]["description"]; ?></td>
		<td><?php echo date_format($date, 'd/m/Y'); ?></td>
		<td><?php echo $amount;  ?></td>
		<td>
            <?php
            echo $this->Html->link("Edit", array(
                "controller"=>"transactions",
                "method"=>"edit",
                "arg"=>$transaction["transactions"]["id"]
));?> |
            <?php
           echo $this->Html->link("Delete", array(
                "controller"=>"transactions",
                "method"=>"delete",
                "arg"=>$transaction["transactions"]["id"]
            ));?>
        </td>
			<!--<a href="<?php echo APP_URL."/transactions/edit/".$transaction["transactions"]["id"]; ?>">Edit</a>-->
			<!--<a href="<?php echo APP_URL."/transactions/delete/".$transaction["transactions"]["id"]; ?>">Delete</a>-->
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