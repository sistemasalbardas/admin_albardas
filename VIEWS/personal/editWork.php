
<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
				Editar trabajador: <?= $datos['name'];?>
			</h3>
			<div class="box-tools pull-right">
				<a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
			</div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<form action="" method="post" class="saveWork" onsubmit="updateWork(this);">
				<div class="mainContent mW600">
						<input type="hidden" name="id" value="<?= $datos['id'];?>">
						<input type="hidden" name="cuadrilla" id="cuadrilla" value="<?= $datos['cuadrilla'] ?>">
					<div class="row">
						<div class="col-lg-6">
							<label for="name">Nombre:</label>
							<input type="text" name="name" id="name" placeholder="Nombre" value="<?= $datos['name'] ?>" class="form-control">
						</div>
						<div class="col-lg-6">
							<label for="second_name">Segundo nombre:</label>
							<input type="text" name="second_name" id="second_name" placeholder="segundo nombre" value="<?= $datos['second_name'] ?>" class="form-control">
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-6">
				
							<label for="last_name">Primero Apellido:</label>
							<input type="text" name="last_name" id="last_name" placeholder="primer apellido" value="<?= $datos['last_name'] ?>" class="form-control">
						</div>
						<div class="col-lg-6">
							<label for="second_last_name">Segundo apellido:</label>
							<input type="text" name="second_last_name" id="second_last_name" value="<?= $datos['second_last_name'] ?>" class="form-control">
						</div>
					</div>

					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-6">
							<label for="curp">Curp:</label>
							<input type="text" name="curp" id="curp" placeholder="CURP" value="<?= $datos['curp'] ?>" class="form-control">
						</div>
						<div class="col-lg-6">
							<label for="date_bird">Fecha nacimiento:</label>
							<input type="date" name="date_bird" id="date_bird" value="<?= $datos['date_bird'] ?>" class="form-control">
						</div>
					</div>

					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-4">
							<label for="salary_day">Salario por dia:</label>
							<input type="text" name="salary_day" id="salary_day" placeholder="$ 150" value="<?= $datos['salary_day'] ?>" class="form-control">
							
						</div>
						<div class="col-lg-4">
							<label for="contract_time">Tiempo de contrato:</label>
							<input type="text" name="contract_time" id="contract_time" placeholder="30" value="<?= $datos['contract_time'] ?>" class="form-control">
						
						</div>
						<div class="col-lg-4">
							<label for="status">Status:</label>
							<select name="status" id="status" class="form-control selectpicker" data-live-search="true">
								<option value="1">Activo</option>
								<option value="2">In - Activo</option>
								<option value="3">Baja</option>
							</select>
						
						</div>
					</div>

					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-8">
							<label for="origin_place">Lugar de origen:</label>
							<input type="text" name="origin_place" id="origin_place" placeholder="Direccion" value="<?= $datos['origin_place'] ?>" class="form-control">
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-8">
							<label for="diaseases">Comentarios / enfermedades::</label>
							<textarea name="diaseases" id="diaseases" cols="20" rows="3" placeholder="enfernmedades" class="form-control h70"><?= $datos['diaseases'] ?></textarea>
						</div>
					</div>

				</div>
				<div class="col-lg-4 ">
					<input type="submit" value="Actualizar" class="btn btn-success sgreen">
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


	
		


