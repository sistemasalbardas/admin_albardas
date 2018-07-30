<?php 
	$row = $users->edit();
?>
<div class="col-md-6">

	  <!-- general form elements -->
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title">Editar usuario</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	    	<form action="<?=URL?>users/edit/" method="post"  id="addEmploye" autocomplete="off">
	    		<input type="hidden" name="id" value="<?= $row['id']?>">
	    		
	    	
	      	<div class="box-body">
	      		<div class="form-group has-error <?= (isset($_GET['msg'])) ? null : 'hidden'; ?>">
	    			<label class="control-label" for="inputError"><i class="fas fa-exclamation-circle"></i>
	    			<?= $_GET['msg']?>
                    </label>
	    		</div>
		        <div class="form-group">
		          <label for="name">Nombre:  </label>
		          <input type="text" class="form-control" id="name" name="name" required="" value="<?= $row['name']?>" >
		        </div>
		        <div class="form-group">
		          <label for="rfc">Apellidos: </label>
		          <input type="text" class="form-control" id="last_name" name="last_name" required="" value="<?= $row['last_name']?>" >
		        </div>
		        <div class="form-group">
		          <label for="email">Correo: </label>
		          <input type="email" class="form-control" id="email" name="email" required="" value="<?= $row['email']?>" >
		        </div>
		        <div class="form-group">
		          <label for="phone">Telefono: </label>
		          <input type="phone" class="form-control" id="phone" name="phone" required="" value="<?= $row['phone']?>" >
		        </div>
		        <div class="form-group">
		          <label for="ranch">Rancho: </label>
		          <select name="ranch" id="ranch" class="form-control" required="">
		          	<option value="">SELCCIONA</option>
		          	<option value="1">Albardas</option>
		          	<option value="2">Magdalenas</option>
		          </select>
	
		        </div>

				<div class="form-group">
		          <label for="department">Departamento: </label>
		          <select name="department" id="department" class="form-control" required="">
		          	<option value="">SELCCIONA</option>
		          	<option value="1">ADMIN</option>
		          	<option value="2">OPERACIONES</option>
		          </select>
	
		        </div>
		        <div class="form-group">
		          <label for="status">Status: </label>	
		          <select name="status" id="status" class="form-control" required="">
		          	<option value="">SELCCIONA</option>
		          	<option value="1">ACTIVO</option>
		          	<option value="0">INACTIVO</option>
		          </select>
	
		        </div>

		    </div>
	      <!-- /.box-body -->

	      <div class="box-footer">
	        <button type="submit" class="btn btn-primary">Guardar</button>
	      </div>
	    </form>
	</div>
</div>
