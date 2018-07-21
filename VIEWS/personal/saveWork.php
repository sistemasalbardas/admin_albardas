
<?php
	
	$row = $_SESSION['data']['data'][0];
	
?>

<div class="mainContainer">
	<?php if (isset($_GET['msg'])): ?>
	<div class="msg"><?= $_GET['msg'];?></div>
	<div class="clear"></div>
<?php endif ?>
	<div class="containerPanel">	


		<form class="" method="post"  id="saveWork">
			<div class="headContent">
				<h4 class="text-bold">Nuevo trabajador</h4>
			</div>
			<input type="hidden" name="cuadrilla" id="cuadrilla" value="<?=$_GET['id']?>">

			<div class="mainContent mW600">
				<div class="row">
					<div class="col-lg-6">
						<label for="name">Primer nombre:</label>
						<input type="text" name="name" id="name" placeholder="Martin" class="inputStyle" value="<?= $row['name']; ?>" required> 
					</div>
					<div class="col-lg-6">
						<label for="second_name">Segundo nombre:</label>
						<input type="text" name="second_name" id="second_name" placeholder="Roberto" class="inputStyle" value="<?= $row['second_name']; ?>" required> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-6">
						<label for="last_name">Apellido paterno:</label>
						<input type="text" name="last_name" id="last_name" placeholder="primer apellido" class="inputStyle" value="<?= $row['last_name']; ?>" required>
					</div>
					<div class="col-lg-6">
						<label for="second_name">Apellido materno:</label>
						<input type="text" name="second_last_name" id="second_last_name" placeholder="segundo apellido" class="inputStyle" value="<?= $row['second_last_name']; ?>" required>
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-6">
						<label for="curp">CURP:</label>
						<input type="text" name="curp" id="curp" placeholder="CURP" placeholder="primer apellido" class="inputStyle" value="<?= $_GET['curp']?>" required>
					</div>
					<div class="col-lg-6">
						<label for="last_name">Fecha nacimiento:</label>
						<input type="date" name="date_bird" id="date_bird" placeholder="Nombre" class="inputStyle" value="<?= $row['date_bird']; ?>" required>  
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-4">
						<label for="curp">Salario por dia:</label>
						<input type="number" name="salary_day" id="salary_day" placeholder="$ 150" class="inputStyle" value="<?= $row['salary_day']; ?>" required>
					</div>
					<div class="col-lg-4">
						<label for="last_name">Tiempo de contrato:</label>
						<input type="number" name="contract_time" id="contract_time" placeholder="30" class="inputStyle" value="<?= $row['contract_time']; ?>" required>
					</div>
					<div class="col-lg-4">
						<label for="advance">Anticipo:</label>
						<input type="number" name="advance" id="advance" placeholder="500" class="inputStyle" value="<?= $row['contract_time']; ?>" required>
					</div>
				</div>
				
			

				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-10">
						<label for="second_name">Direccion:</label>
						<input type="text" name="origin_place" id="origin_place" placeholder="Direccion" class="inputStyle" value="<?= $row['origin_place']; ?>" required> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-10">
						<label for="last_name">Comentarios / enfermedades:</label>
						<textarea name="diaseases" id="diaseases" cols="20" rows="3" placeholder="enfernmedades" class="inputStyle h70" required><?= $row['diaseases']; ?></textarea><br>

					</div>
					
				</div>
			</div>	
			<div class="footerModal">
				<div class="row">
					<div class="col-lg-4 ">
						<input type="submit" value="Guardar" class="btn green">
					</div>
				</div>
			
			</div>
		</form>
	</div>
</div>