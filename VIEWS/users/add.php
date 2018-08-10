<div class="col-md-12">
	  <!-- general form elements -->
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title text-600">Nuevo usuario</h3>
				<div class="box-tools pull-right">
						<a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
				</div>
	    </div>
			<div class="box-body  padd10 bgWhite table-responsive">
					<form action="<?=URL?>users/add/" method="post"  id="addEmploye" autocomplete="off">
								<div class="form-group has-error <?= (isset($_GET['msg'])) ? null : 'hidden'?>">
										<label class="control-label" for="inputError"><i class="fas fa-exclamation-circle"></i>
										<?= $_GET['msg']?></label>
								</div>
								<div class="mainContent mW600">
											<div class="row">
											     <div class="col-lg-10">
															<label for="name">Nombre:  </label>
														<input type="text"  placeholder="Nombre" class="form-control" id="name" name="name" required="" >
													 </div>
											</div>
											<div class="clear"></div>
											<div class="row">
											     <div class="col-lg-10">
															<label for="rfc">Apellidos: </label>
														<input type="text"  placeholder="Apellidos" class="form-control" id="last_name" name="last_name" required="">
													 </div>
											</div>
											<div class="clear"></div>
											<div class="row">
											     <div class="col-lg-10">
															<label for="email">Correo: </label>
														<input type="email"  placeholder="Correo" class="form-control" id="email" name="email" required="">
													 </div>
											</div>
											<div class="clear"></div>
											<div class="row">
											     <div class="col-lg-10">
															<label for="phone">Telefono: </label>
															<input type="phone" placeholder="Telefono" class="form-control" id="phone" name="phone" required="">
													 </div>
											</div>
											<div class="clear"></div>
											<div class="row">
											     <div class="col-lg-10">
															<label for="ranch">Rancho: </label>
															<select name="ranch" id="ranch" class="form-control selectpicker" data-live-search="true">
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
															<select name="department" id="department" class="form-control selectpicker" data-live-search="true">
																<option value="">SELCCIONA</option>
																<option value="Administracion">Administracion</option>
																<option value="Operciones">OPERACIONES</option>
																<option value="Empaque">EMPAQUE</option>
																<option value="Agroquimicos">Agroquimicos</option>
															</select>
													 </div>
											</div>
											<div class="clear"></div>
											<div class="row">
											     <div class="col-lg-10">
															<label for="password">Contraseña : </label>
															<input type="password"  placeholder="Contraseña" class="form-control" id="password" name="password" required="">
													 </div>
											</div>
											<div class="clear"></div>
											<div class="row">
											     <div class="col-lg-10">
															<label for="r_pass">Confirma contraseña: </label>
															<input type="password" placeholder="Confirmar contraseña"  class="form-control" id="r_pass" name="r_pass" required="" onkeyup="validatePass(this);">
															<label class=" s12 text-normal cRed hidden incorrect">Las contraseñas no coinciden</label>
															<label class=" s12 text-normal cGreen hidden correct">Las contraseñas son correctas</label>
												
															<input type="text" class="hidden" name="validate" id="validate" required="" value="">
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
