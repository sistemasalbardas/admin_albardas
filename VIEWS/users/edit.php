<?php 
	$row = $users->edit();
?>
<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
<<<<<<< HEAD
	      <h3 class="box-title">Editar usuario</h3>
=======
	      <h3 class="box-title text-600">Nuevo usuario</h3>
				<div class="box-tools pull-right">
							<a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
				</div>
>>>>>>> 12afbdc163099bc043d29d274fe64fc9bfc4bc16
	    </div>
			<div class="box-body padd10 bgWhite table-responsive">
	    	<form action="<?=URL?>users/edit/" method="post"  id="addEmploye" autocomplete="off">
							<input type="hidden" name="id" value="<?= $row['id']?>">
							<div class="form-group has-error <?= (isset($_GET['msg'])) ? null : 'hidden'; ?>">
									<label class="control-label" for="inputError"><i class="fas fa-exclamation-circle"></i>
									<?= $_GET['msg']?></label>
							</div>
							<div class="mainContent mW600">
											<div class="row">
												<div class="col-lg-10">
														<label for="name">Nombre:  </label>
														<input type="text" class="form-control" id="name" name="name" required="" value="<?= $row['name']?>" >
												</div>
											</div>
											<div class="clear"></div>
											<div class="row">
												<div class="col-lg-10">
														<label for="rfc">Apellidos: </label>
														<input type="text" class="form-control" id="last_name" name="last_name" required="" value="<?= $row['last_name']?>" >
												</div>
											</div>
											<div class="clear"></div>
											<div class="row">
												<div class="col-lg-10">
														<label for="email">Correo: </label>
														<input type="email" class="form-control" id="email" name="email" required="" value="<?= $row['email']?>" >
												</div>
											</div>
											<div class="clear"></div>
											<div class="row">
												<div class="col-lg-10">
														<label for="phone">Telefono: </label>
														<input type="phone" class="form-control" id="phone" name="phone" required="" value="<?= $row['phone']?>" >
												</div>
											</div>
											<div class="clear"></div>
											<div class="row">
												<div class="col-lg-10">
														<label for="ranch">Rancho: </label>
														<select name="ranch" id="ranch" class="form-control selectpicker" data-live-search="true" required="">
															<option value="">SELCCIONA</option>
															<option value="1">Albardas</option>
															<option value="2">Magdalenas</option>
														</select>
												</div>
											</div>
											<div class="clear"></div>
											<div class="row">
												<div class="col-lg-10">
													<label for="department">Departamento: </label>
													<select name="department" id="department" class="form-control selectpicker" data-live-search="true" required="">
														<option value="">SELCCIONA</option>
														<option value="1">ADMIN</option>
														<option value="2">OPERACIONES</option>
													</select>
												</div>
											</div>
											<div class="clear"></div>
											<div class="row">
												<div class="col-lg-10">
														<label for="status">Status: </label>	
														<select name="status" id="status" class="form-control selectpicker" data-live-search="true" required="">
															<option value="">SELCCIONA</option>
															<option value="1">ACTIVO</option>
															<option value="0">INACTIVO</option>
														</select>
												</div>
											</div>
							</div>
							<div class="col-lg-4">
								<button type="submit" class="btn btn-success sgreen">Guardar</button>
							</div>
				</form>
			</div>
			<div class="box-footer">
					<footer class="main-footer text-center">
						<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
					</footer>
			</div>
	</div>
</div>
