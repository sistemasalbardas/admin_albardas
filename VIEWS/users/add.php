<div class="col-md-6">
	  <!-- general form elements -->
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title">Nuevo usuario</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	    	<form action="<?=URL?>users/add/" method="post"  id="addEmploye" autocomplete="off">
	    		
	    	
	      	<div class="box-body">
	      		<div class="form-group has-error <?= (isset($_GET['msg'])) ? null : 'hidden'?>">
	    			<label class="control-label" for="inputError"><i class="fas fa-exclamation-circle"></i>
	    			<?= $_GET['msg']?>
                    </label>
	    		</div>
		        <div class="form-group">
		          <label for="name">Nombre:  </label>
		          <input type="text" class="form-control" id="name" name="name" required="" >
		        </div>
		        <div class="form-group">
		          <label for="rfc">Apellidos: </label>
		          <input type="text" class="form-control" id="last_name" name="last_name" required="">
		        </div>
		        <div class="form-group">
		          <label for="email">Correo: </label>
		          <input type="email" class="form-control" id="email" name="email" required="">
		        </div>
		        <div class="form-group">
		          <label for="phone">Telefono: </label>
		          <input type="phone" class="form-control" id="phone" name="phone" required="">
		        </div>
		        <div class="form-group">
		          <label for="ranch">Rancho: </label>
		          <select name="ranch" id="ranch" class="form-control">
		          	<option value="">SELCCIONA</option>
		          	<option value="1">Albardas</option>
		          	<option value="2">Magdalenas</option>
		          </select>
	
		        </div>

				<div class="form-group">
		          <label for="department">Departamento: </label>
		          <select name="department" id="department" class="form-control">
		          	<option value="">SELCCIONA</option>
		          	<option value="1">ADMIN</option>
		          	<option value="2">OPERACIONES</option>
		          </select>
	
		        </div>

		        <div class="form-group">
		          <label for="password">Contraseña : </label>
		          <input type="password" class="form-control" id="password" name="password" required="">
		        </div>
		        <div class="form-group">
		          <label for="r_pass">Confirma contraseña: </label>
		          <input type="password" class="form-control" id="r_pass" name="r_pass" required="" onkeyup="validatePass(this);">
		          <label class=" s12 text-normal cRed hidden incorrect">Las contraseñas no coinciden</label>
		          <label class=" s12 text-normal cGreen hidden correct">Las contraseñas son correctas</label>

		          <input type="text" class="hidden" name="validate" id="validate" required="" value="">
		        </div>
	      </div>
	      <!-- /.box-body -->

	      <div class="box-footer">
	        <button type="submit" class="btn btn-primary">Guardar</button>
	      </div>
	    </form>
	</div>
</div>
