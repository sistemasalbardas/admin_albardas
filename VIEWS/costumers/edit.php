<?php 
	$row = $costumers->edit();
 ?>

<div class="clear"></div>
<div class="mainContainer">
	
	<div class="containerPanel">	
		<form action="<?=URL?>costumers/edit/" method="post"  id="editEmploye">
			<input type="hidden" name="id" id="id" value="<?= $row['id'];?>">
			<div class="headContent">
				<h4 class="text-bold">Editar empresa</h4>
			</div>
			
			<div class="mainContent mW600">
				<div class="row">
					<div class="col-lg-10">
						<label for="name">Razón social:</label>
						<input type="text" name="name" id="name" class="inputStyle" required="" value="<?= $row['name'];?>"> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-10">
						<label for="rfc">R F C:</label>
						<input type="text" name="rfc" id="rfc" class="inputStyle" required="" value="<?= $row['rfc'];?>"> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
				
					<div class="col-lg-10">
						<label for="address">Direccion fiscal:</label>
						<input type="text" name="address" id="address" placeholder="" class="inputStyle" required="" value="<?= $row['address'];?>"> 
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="row">
				
					<div class="col-lg-10">
						<label for="phone">Telefono:</label>
						<input type="text" name="phone" id="phone" placeholder="" class="inputStyle" required="" value="<?= $row['phone'];?>"> 
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