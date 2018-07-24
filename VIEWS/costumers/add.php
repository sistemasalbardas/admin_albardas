<div class="col-md-6">
	  <!-- general form elements -->
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title">Nuevo cliente</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	    	<form action="<?=URL?>costumers/add/" method="post"  id="addEmploye">
	    	
	      	<div class="box-body">
		        <div class="form-group">
		          <label for="name">Razon social: </label>
		          <input type="text" class="form-control" id="name" name="name" required="" >
		        </div>
		        <div class="form-group">
		          <label for="rfc">RFC: </label>
		          <input type="text" class="form-control" id="rfc" name="rfc" required="">
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
