<?php 
	$users = $inventories->listUsers();
 ?>
<div class="clear"></div>
<div class="mainContainer">
	
	<div class="containerPanel">	
		<form action="<?=URL?>inventories/add/" method="post"  id="addEmploye">
			<div class="headContent">
				<h4 class="text-bold">Nuevo almacen</h4>
			</div>

			<div class="mainContent mW600">
				<div class="row">
					<div class="col-lg-10">
						<label for="name">Nombre:</label>
						<input type="text" name="name" id="name" class="inputStyle" required> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-10">
						<label for="utility">Uso :</label>
						<select name="utility" id="utility" class="inputStyle">
							<option value="1">Producto Terminado</option>
						</select>
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-10">
						<label for="responsable">Responsable :</label>
						<select name="responsable" id="responsable" class="inputStyle">
						<?php while($row = mysqli_fetch_array($users)){ ?>

							<option value="<?= $row['name']." ".$row['last_name'] ?>"><?= $row['name']." ".$row['last_name'] ?></option>
						<?php } ?>
						</select>
					</div>
				</div>
				<div class="clear"></div>
				
				
				<div class="row">
				
					<div class="col-lg-10">
						<label for="description">Descripcion:</label>
						<textarea name="description" id="description" class="inputStyle h70"></textarea>
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