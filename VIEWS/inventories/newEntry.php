
<?php 
	$users = $inventories->listUsers();
	$products = $inventories->listProducts();
 ?>
<div class="clear"></div>
<!-- <div class="mainContainer"> -->
	<div class="containerPanel">	
		<form action="<?=URL?>inventories/newEntry/" method="post"  id="addEmploye">
			<input type="hidden" name="id" id="id" value="<?=$_GET['id']?>">
			<input type="hidden" name="inventorie" id="inventorie" value="<?= $_GET['inventorie']?>">
			<input type="hidden" name="concept" id="concept" value="entrada">
			<div class="headContent">
				<h4 class="text-bold">Nueva entrada - <?= $_GET['inventorie']?></h4>
			</div>

			<div class="mainContent ">
				
				<div class="row">
					<div class="col-lg-6">
						<label for="receiver">Recibe :</label>
						<select name="receiver" id="receiver" class="inputStyle" required="">
							<?php while ($row = mysqli_fetch_assoc($users)) {?>
								<option value="<?= $row['name']." ". $row['last_name'];?>"><?= $row['name']." ". $row['last_name'];?></option>
							<?php } ?>
						</select>
					</div>
					<div class="clear">	</div>
					<div class="col-lg-6">
						<label for="comments">Comentarios :</label>
						<textarea name="comments" id="comments" class="inputStyle h70" ></textarea>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-6 ">
						<label for="id_product">Producto:</label>
						<select name="id_product" id="id_product" class="inputStyle" required="">
							<?php while ($row = mysqli_fetch_assoc($products)) {?>
								<option value="<?= $row['id']?>"><?= $row['name']." ". $row['quality']." ". $row['size']." ". $row['pack']." ". $row['brand']." ". $row['weight']." ". $row['unit_measure'];?></option>
							<?php } ?>
						</select>
						<input type="hidden" name="name_product" id="name_product" value="">
						
					</div>
					<div class="clear">	</div>
					<div class="col-lg-4">
						<label for="quantity">Cantidad</label>
						<input type="number" class="inputStyle" name="quantity" id="quantity" required="" >
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
<!-- </div> -->