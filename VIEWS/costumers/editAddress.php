<?php 
	$row = $costumers->editAddress();
 ?>

<!-- </div> -->

<div class="col-md-6">
	  <!-- general form elements -->
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title">Editar direccion</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->

	    <form action="<?=URL?>costumers/editAddress/" method="post"   autocomplete="off">

    		<input type="hidden" name="id_costumer" value="<?= $_GET['id']?>">
			<input type="hidden" name="nameCostumer" value="<?= $_GET['name']?>">
	      	<div class="box-body">
		        <div class="form-group">
		          	<input type="hidden" name="id" value="<?= $row['id'];?>">
		          	<label for="name">Nombre:</label>
					<input type="text" name="name" id="name" class="form-control" required="" value="<?= $row['name'];?>"> 
		        </div>
		        <div class="form-group">
		        	<label for="city">Ciudad:</label>
					<input type="text" name="city" id="city" class="form-control" required="" value="<?= $row['city'];?>"> 
		        </div>
		        <div class="form-group">
		        	<label for="address">Direccion :</label>
					<input type="text" name="address" id="address" placeholder="" class="form-control" required="" value="<?= $row['address'];?>"> 

		        </div>
		        <div class="form-group">
		          <label for="phone">Telefono: </label>
		          <input type="phone" class="form-control" id="phone" name="phone" required="" value="<?= $row['phone'];?>">
		        </div>
		  
	      	</div>

	      <!-- /.box-body -->

		      <div class="box-footer">
		        <button type="submit" class="btn btn-primary">Actualizar</button>
		      </div>
	    </form>
	</div>
</div>
