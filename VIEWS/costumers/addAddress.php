<div class="clear"></div>
<!-- <div class="mainContainer"> -->
	<div class="containerPanel">	
		<form action="<?=URL?>costumers/addAddress/" method="post"  id="addEmploye" autocomplete="off">
			<input type="hidden" name="id_costumer" value="<?= $_GET['id']?>">
			<input type="hidden" name="nameCostumer" value="<?= $_GET['name']?>">
			<div class="headContent">
				<h4 class="text-bold">Nueva direccion de entrega</h4>
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
						<label for="city">Ciudad:</label>
						<input type="text" name="city" id="city" class="inputStyle" required> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
				
					<div class="col-lg-10">
						<label for="address">Direccion :</label>
						<input type="text" name="address" id="address" placeholder="" class="inputStyle" required> 
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="row">
				
					<div class="col-lg-10">
						<label for="phone">Telefono:</label>
						<input type="text" name="phone" id="phone" placeholder="" class="inputStyle" required> 
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