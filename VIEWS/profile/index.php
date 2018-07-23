<?php 
	$row = $profile->index();
?>
<div class="containerPanel">	

		
	<form action="<?=URL?>transporters/add/" method="post"  id="addEmploye">
		<input type="hidden" name="id" value="<?= $row['id']?>">
		<div class="headContent">
			<h4 class="text-bold">Editar informacion de perfil</h4>
		</div>

		<div class="mainContent mW600">
			<div class="row">
				<div class="col-lg-10">
					<label for="name">Nombre:</label>
					<input type="text" name="name" id="name" class="inputStyle" required value="<?= $row['name']?>"> 
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-10">
					<label for="last_name">Apellidos:</label>
					<input type="text" name="last_name" id="last_name" class="inputStyle" required value="<?= $row['last_name']?>"> 
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-10">
					<label for="email">Correo electronico:</label>
					<input type="text" name="email" id="email" class="inputStyle" required value="<?= $row['email']?>"> 
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-10">
					<label for="phone">Telefono:</label>
					<input type="text" name="phone" id="phone" class="inputStyle" required value="<?= $row['phone']?>"> 
				</div>
			</div>
		</div>
		<div class="footerModal">
			<div class="row">
				<div class="col-lg-4 ">
					<input type="submit" value="Actalizar" class="btn green">
				</div>
			</div>
		
		</div>
	</form>
</div>

