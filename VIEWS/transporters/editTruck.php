<?php 
	$row = $transporters->editTruck();
 ?>

<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
				Editar camion
			</h3>
			<div class="box-tools pull-right">
					<a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
			</div>
		</div>
		<div class="box-body">
			<form action="<?=URL?>transporters/editTruck/" method="post"  >
				<input type="hidden" name="id" value="<?= $_GET['id']?>">
				<input type="hidden" name="id_truck" value="<?= $row['id']?>">
				<input type="hidden" name="nameTransport" value="<?= $_GET['nameTransport']?>">
				<div class="mainContent mW600">
					<div class="row">
						<div class="col-lg-8">
							<label for="brand">Marca de camion:</label>
							<select name="brand" id="brand" required class="form-control selectpicker" data-live-search="true">
								<option value="Kenwort">Kenwort</option>
								<option value="International">International</option>
								<option value="Volvo">Volvo</option>
								<option value="Dina">Dina</option>
							</select>
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-4">
							<label for="model">Modelo:</label>
							<input type="number" name="model" id="model" class="form-control" required value="<?= $row['model']?>"> 
						</div>
						<div class="col-lg-4">
							<label for="color">Color:</label>
							<input type="text" name="color" id="color" class="form-control" required value="<?= $row['color']?>"> 
						
						</div>
						
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-8">
							<label for="num_econ">Numero economico:</label>
							<input type="text" name="num_econ" id="num_econ" class="form-control" required value="<?= $row['num_econ']?>"> 
						</div>
					</div>
					
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-4">
							<label for="placa">Placa 1</label>
							<input type="text" name="placa" id="placa" placeholder="" class="form-control" required value="<?= $row['placa']?>"> 
						</div>
						<div class="col-lg-4">
							<label for="placa_2">Placa 2</label>
							<input type="text" name="placa_2" id="placa_2" placeholder="" class="form-control" required value="<?= $row['placa_2']?>"> 
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
	
	
	
