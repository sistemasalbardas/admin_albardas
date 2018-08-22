<?php 
	$row = $freights->editpay();
?>

<div class="col-md-6">
	 
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title">Editar pago</h3>
	    </div>

	    <!-- form start -->
	    <form action="<?=URL?>freights/editpay/" method="post" autocomplete="off">
	    	<input type="text" name="f_freight" id="" value="<?=$row['f_freight']?>">
	    	<input type="text" name="id" value="<?= $row['id']?>">
	      	<div class="box-body">
		        <div class="form-group">
		          	<label for="date">Fecha:  </label>
		          	<input type="date" class="form-control" id="date" name="date" required="" value="<?= $row['date']?>" >
		        </div>
		        <div class="form-group">
		          	<label for="f_embark">Concepto: </label>
		          	<select name="concept" id="concept" class="form-control" required="">
                      <option value="">SELCCIONA</option>
                      <option value="abono">Abono</option>
                      <option value="Devolucion">Devolucion</option>
                    </select>
		     
		        </div>
		        <div class="form-group">
		         	<label for="price">Monto: </label>
		          	<input type="number" class="form-control" id="amount" name="amount" required="" value="<?= $row['amount']?>" >
		        </div>
		     	<div class="form-group">
		     		<label for="comments">Comentarios:</label>
		     		<textarea name="comments" id="comments" class="form-control"><?=$row['comments']?></textarea>
		     	</div>
		    </div>
	      	<div class="box-footer">
	        	<button type="submit" class="btn btn-primary">Guardar</button>
	      	</div>
	    </form>
	</div>
</div>
