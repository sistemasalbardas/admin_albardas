<?php 
	$row = $freights->edit();
?>

<div class="col-md-6">
	  <!-- general form elements -->
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title">Editar flete</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	    <form action="<?=URL?>freights/edit/" method="post"  id="" autocomplete="off">
	    	<input type="hidden" name="id" value="<?= $row['id']?>">
	      	<div class="box-body">
		        <div class="form-group">
		          	<label for="f_flete">Folio de flete:  </label>
		          	<input type="text" class="form-control" id="f_flete" name="f_flete" required="" value="<?= $row['f_flete']?>" >
		        </div>
		        <div class="form-group">
		          	<label for="f_embark">Folio de embarque: </label>
		          	<input type="text" class="form-control" id="f_embark" name="f_embark" required="" value="<?= $row['f_embark']?>" >
		        </div>
		        <div class="form-group">
		         	<label for="price">Precio: </label>
		          	<input type="number" class="form-control" id="price" name="price" required="" value="<?= $row['price']?>" >
		        </div>
		        <div class="form-group">
		          	<label for="currency">Moneda: </label>
		          	<select name="currency" id="currency" class="form-control" required="">
		          		<option value="">SELECCIONA	</option>
		          		<option value="MXN">MXN</option>
		          		<option value="USD">USD</option>
		          	</select>
		         	
		        </div>
		        <div class="form-group">
		          	<label for="date">Fecha: </label>
		          	<input type="date" class="form-control" id="date" name="date" required="" value="<?= $row['date']?>" >
		        </div>
		    </div>
	      	<div class="box-footer">
	        	<button type="submit" class="btn btn-primary">Guardar</button>
	      	</div>
	    </form>
	</div>
</div>
