
<!-- </div> -->


<div class="col-md-6">
	  <!-- general form elements -->
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title">Nueva direccion de entrega</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	   <form action="<?=URL?>costumers/addAddress/" method="post"  id="addEmploye" autocomplete="off">
			<input type="hidden" name="id_costumer" value="<?= $_GET['id']?>">
			<input type="hidden" name="nameCostumer" value="<?= $_GET['name']?>">
	    	
	      	<div class="box-body">
		        <div class="form-group">
		          <label for="name">Nombre: </label>
		          <input type="text" class="form-control" id="name" name="name" required="" >
		        </div>
		        <div class="form-group">
		          <label for="city">Ciudad: </label>
		          <input type="text" class="form-control" id="city" name="city" required="">
		        </div>
		        <div class="form-group">
		          <label for="address">Direccion: </label>
		          <input type="text" class="form-control" id="address" name="address" required="">
		        </div>
		        <div class="form-group">
		          <label for="phone">Telefono: </label>
		          <input type="phone" class="form-control" id="phone" name="phone" required="">
		        </div>
	      	</div>
		      <!-- /.box-body -->

		    <div class="box-footer">
		        <button type="submit" class="btn btn-primary">Guardar</button>
		    </div>
	    </form>
	</div>
</div>
