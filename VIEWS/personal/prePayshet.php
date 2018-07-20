<?php 
	$cuadrillas = $personal->indexCuadrillas();

?>
<div class="clear">	</div>
<!-- <div class="mainContainer"> -->
	<div class="containerPanel">	
		<div class="headContent">
			<h4 class="text-bold">Reporte de nomina</h4>
		</div>
	
		<div class="mainContent ">
			<div class="filters">
				<div class="row">
					<form action="<?=URL?>personal/seePayshet/"  method="post" autocomplete="off" >
						<div class="col-lg-2 ">
							<label for="cuadrilla">Cuadrilla:</label> <br>
							<select name="cuadrilla" id="cuadrilla" required="" autocomplete="off" >
								<?php while ($row = mysqli_fetch_array($cuadrillas)) {?>
									<option value="<?= $row['id']; ?>">Cuadrilla <?= $row['id']; ?></option>
								<?php } ?>
								
							</select>
						</div>
						<div class="col-lg-2 ">
							<label for="">Inicio de semana:</label>
							<input type="text" name="startDate" id="startDate" class="block" autocomplete="off" required="">
						</div>

						<div class="col-lg-2 ">
							<label for="">Fin de semana:</label>
							<input type="text" name="endDate" id="endDate" class="block" autocomplete="off" required="">
						</div>
						<div class="col-lg-2 ">
					
							
							<input type="submit" value="Generar" class="btn blue" >
						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- </div> -->
