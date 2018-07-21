<?php 
	$row = $costumers->editAddress();
 ?>

<div class="clear"></div>
<div class="mainContainer">
	
	<div class="containerPanel">	
		<form action="<?=URL?>costumers/editAddress/" method="post"  id="addEmploye" autocomplete="off">
			<input type="hidden" name="id_costumer" value="<?= $_GET['id']?>">
			<input type="hidden" name="nameCostumer" value="<?= $_GET['name']?>">
			<div class="headContent">
				<h4 class="text-bold">Editar direccion de entrega</h4>
			</div>
			

			<div class="mainContent mW600">
				<div class="row">
					<div class="col-lg-10">
						<label for="name">Nombre:</label>
						<input type="hidden" name="id" value="<?= $row['id'];?>">
						<input type="text" name="name" id="name" class="inputStyle" required="" value="<?= $row['name'];?>"> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-10">
						<label for="city">Ciudad:</label>
				
						<input type="text" name="city" id="city" class="inputStyle" required="" value="<?= $row['city'];?>"> 
					</div>
				</div>
				
				<div class="clear"></div>
				<div class="row">
				
					<div class="col-lg-10">
						<label for="address">Direccion :</label>
						<input type="text" name="address" id="address" placeholder="" class="inputStyle" required="" value="<?= $row['address'];?>"> 
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="row">
				
					<div class="col-lg-10">
						<label for="phone">Telefono:</label>
						<input type="number" name="phone" id="phone" placeholder="" class="inputStyle" required="" value="<?= $row['phone'];?>"> 
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