<?php 
	$cuadrillas = $personal->indexCuadrillas();

?>

<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
				Reporte de nomina
			</h3>
			<div class="box-tools pull-right">
				<a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
			</div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<div class="mainContent ">
				<div class="filters">
					<div class="row">
						<form action="<?=URL?>personal/seePayshet/"  method="post" autocomplete="off" >
							<div class="col-lg-2 ">
								<label for="cuadrilla">Cuadrilla:</label> <br>
								<select name="cuadrilla" class="form-control selectpicker" data-live-search="true" id="cuadrilla" required="" autocomplete="off" >
									<?php while ($row = mysqli_fetch_array($cuadrillas)) {?>
										<option value="<?= $row['id']; ?>">Cuadrilla <?= $row['id']; ?></option>
									<?php } ?>
									
								</select>
							</div>
							<div class="col-lg-2 ">
								<label for="">Inicio de semana:</label>
								<input type="text" name="startDate" id="startDate" class="block form-control" autocomplete="off" required="">
							</div>

							<div class="col-lg-2 ">
								<label for="">Fin de semana:</label>
								<input type="text" name="endDate" id="endDate" class="block form-control" autocomplete="off" required="">
							</div>
							<div class="clear"></div>
							<div class="col-lg-2 ">
								<input type="submit" value="Generar" class="btn btn-primary sblue" >
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>


	
	
	
		

