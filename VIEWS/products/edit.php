<?php 
	$row = $products->edit();
 ?>
<div class="clear"></div>
<div class="mainContainer">
	<div class="containerPanel">	
		<form class="" method="post"  id="saveWork" autocomplete="off" action="<?=URL?>products/edit/">
			<input type="hidden" name="id" value="<?= $row['id']?>" >
			<div class="headContent">
				<h4 class="text-bold">Editar producto</h4>
			</div>
			<div class="mainContent mW600">
				<div class="row">
					<div class="col-lg-8">
						<label for="name">Nombre del producto:</label>
						<input type="text" name="name" id="name" class="inputStyle" value="<?= $row['name']?>" required> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-8">
						<label for="name">Tipo de empaque:</label>
						<select name="type_pack" id="type_pack" class="inputStyle">
							<option value="">Selecciona una opcion</option>
							<option value="Arpilla">Arpilla</option>
							<option value="Caja">Caja</option>
							<option value="kg">kg</option>
							<option value="Pieza">Pieza</option>
						</select>
					</div>
				</div>
				<div class="clear"></div>
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