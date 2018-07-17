<?php 
	$datos = $requisitions->editSupplies();
	$data = $requisitions->index();

?>
<div class="mainContainer">
	<div class="containerPanel">	
	
		<form class="" action="<?= URL?>requisitions/updateSupplies/" method="post"  autocomplete="off" id="">
			<div class="headModal">
				<h4 class="text-bold">Guardar insumo</h4>
			</div>
			<div class="mainContent mW600">
				<input type="hidden" name="id" value="<?= $_GET['id'];?>">
				<div class="row">
					
					<div class="col-lg-5">
						<label for="name">Categoria:</label>
						<select name="category" id="category" class="inputStyle" required="">
							<?php while($row = mysqli_fetch_array($data)){ ?>
								<option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-lg-4">
						<label for="name">Status:</label>
						<select name="status" id="status" class="inputStyle">
							<option value="1">Activo</option>
							<option value="0">Inactivo</option>
						</select>
					</div>
					
				</div>
				<div class="clear"></div>
				<div class="row">
					
					<div class="col-lg-6">
						<label for="name">Nombre:</label>
						<input type="text" name="name" id="name" class="inputStyle" placeholder="" required="" value="<?= $datos['name'];?>">
					</div>

					<div class="col-lg-3">
						<label for="name">Medida:</label>
						<select name="unit" id="unit" class="inputStyle" required="">
							<option value="Kg">Kg</option>
							<option value="Lt">Lt</option>
							<option value="Gr">Gr</option>
							<option value="Lata">Lata</option>
							<option value="Garrafa">Garrafa</option>
							<option value="Pza">Pza</option>
							<option value="Rollo">Rollo</option>
							<option value="M lineales">M lineales</option>
							<option value="Cm">Cm</option>
							<option value="M 3">M 3</option>
							<option value="Caja">Caja</option>
							<option value="Sacos">Sacos</option>
							<option value="Bultos">Bultos</option>
							<option value="N A">N A</option>
						</select>
					</div>
					
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-9">
						<label for="ingredient">Ingrediente Activo:</label>
						<input type="text" name="ingredient" id="ingredient" class="inputStyle" placeholder="" value="<?= $datos['ingredient']?>" >
					</div>
				
				</div>
				<div class="clear"></div>
				<div class="row">
					
					<div class="col-lg-5">
						<label for="price">Precio:</label>
						<input type="text" name="price" id="price" class="inputStyle" placeholder="" value="<?= $datos['price']?>" >
					</div>
					<div class="col-lg-4">
						<label for="name">Moneda:</label>
						<select name="coin" id="coin" class="inputStyle">
							<option value="MXN">MXN</option>
							<option value="USD">USD</option>
						</select>
					</div>
				</div>
				
				<div class="clear"></div>
			
			</div>

			

			<div class="footerModal">
				<div class="row">
					<div class="col-lg-2 ">
						<a href="../" class="text-bold">
							<i class="material-icons s14 text-bold">arrow_back_ios</i>Volver
						</a>
					</div>
					<div class="col-lg-4 col-lg-offset-4">
						<input type="submit" value="Guardar" class="btn green">
					</div>
				</div>
			</div>
		</form>
	
	</div>
</div>
