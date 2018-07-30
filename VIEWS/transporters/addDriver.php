<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
			   Nuevo chofer
			</h3>
			<div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<form action="<?=URL?>transporters/addDriver/" method="post"  id="addEmploye">
				<input type="hidden" name="id" value="<?= $_GET['id']?>">
				<input type="hidden" name="nameTransport" value="<?= $_GET['nameTransport']?>">
				<div class="mainContent mW600">
					<div class="row">
						<div class="col-lg-10">
							<label for="name">Nombre:</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required> 
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-10">
							<label for="last_name">Apellidos:</label>
							<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Apellidos" required> 
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-5">
							<label for="phone">Telefono:</label>
							<input type="text" name="phone" id="phone"  class="form-control" placeholder="Telefono" required> 
						</div>
						
						
					</div>
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-10">
							<label for="num_lic">Numero de licencia:</label>
							<input type="text" name="num_lic" id="num_lic"  class="form-control" placeholder="Numero de licencia" required> 
						</div>
					</div>
					<div class="clear"></div>
					
					<div class="row">
					
						<div class="col-lg-10">
							<label for="address">Dirección:</label>
							<input type="text" name="address" id="address"  class="form-control" placeholder="Dirección" required> 
						</div>
					</div>
					<div class="clear"></div>
					

				</div>
				<div class="col-lg-4 ">
					<input type="submit" value="Guardar" class="btn btn-success sgreen">
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
		
		

