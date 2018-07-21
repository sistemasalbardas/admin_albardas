

<div class="clear"></div>
<!-- <div class="mainContainer"> -->
	
	<div class="containerPanel">	
		<form action="<?=URL?>transporters/addDriver/" method="post"  id="addEmploye">
			<input type="hidden" name="id" value="<?= $_GET['id']?>">
			<input type="hidden" name="nameTransport" value="<?= $_GET['nameTransport']?>">
			<div class="headContent">
				<h4 class="text-bold">Nuevo chofer</h4>
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
						<label for="last_name">Apellidos:</label>
						<input type="text" name="last_name" id="last_name" class="inputStyle" required> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
				
					<div class="col-lg-5">
						<label for="phone">Telefono:</label>
						<input type="text" name="phone" id="phone" placeholder="" class="inputStyle" required> 
					</div>
					
					
				</div>
				<div class="clear"></div>
				<div class="row">
				
					<div class="col-lg-10">
						<label for="num_lic">Numero de licencia:</label>
						<input type="text" name="num_lic" id="num_lic" placeholder="" class="inputStyle" required> 
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="row">
				
					<div class="col-lg-10">
						<label for="address">Direccion:</label>
						<input type="text" name="address" id="address" placeholder="" class="inputStyle" required> 
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
<!-- </div> -->