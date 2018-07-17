
<?php 
	$data = $inventories->listInventories();
	$inventories = $inventories->inventory();
 ?>
<div class="clear"></div>
<div class="mainContainer">
	<div class="containerPanel">	
		<form action="<?=URL?>inventories/transfer/" method="post"  id="addEmploye" autocomplte="off">
			<input type="hidden" name="id" id="id" value="<?=$_GET['id']?>">
			<input type="hidden" name="inventorie" id="inventorie" value="<?= $_GET['inventorie']?>">
			<input type="hidden" name="concept" id="concept" value="entrada">
			<div class="headContent">
				<h4 class="text-bold">Tranferencia entre invetarios - <?= $_GET['inventorie']?></h4>
			</div>

			<div class="mainContent ">
				
				<div class="row">
					<div class="col-lg-4">
						<label for="exit">Almacen de salida :</label>
						<select name="exit" id="exit" class="inputStyle" required="">
							<option value="<?= $_GET['id']?>"> <?= $_GET['inventorie']?></option>
							
						</select>	
					</div>
					<div class="col-lg-5 ">
						<label for="entry">Almacen de entrada :</label>
						<select name="entry" id="entry" class="inputStyle" required="" onchange="validateEntry(this);">
							<option value="">SELECCIONA UNA OPCION</option>
							<?php while ($row = mysqli_fetch_array($data)) { ?>
							<option value="<?= $row['id']?>" > <?= $row['name']?></option>

							<?php } ?>
							
						</select>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-6 ">
						<label for="prod">Producto:</label>
						<select name="prod" id="prod" class="inputStyle" required="" onchange="selectId(this);">
							<?php while ($row = mysqli_fetch_assoc($inventories)) {?>
								<option value="<?= $row['id']?>" data-quantity="<?= $row['quantity'];?>"  data-id="<?= $row['id_product'];?>" data-name="<?= $row['name_product']?>"><?= $row['name_product']." - ". $row['quantity'];?></option>

							<?php } ?>
						</select>	
						<input type="hidden" name="id_product" id="id_product">
						<input type="hidden" name="name_product" id="name_product">
						
						
					</div>
					<div class="clear">	</div>
					<div class="col-lg-4">
						<label for="quantity">Cantidad</label>
						<input type="number" class="inputStyle" name="quantity" id="quantity" required="" onkeyup="validateQuantity(this);">
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