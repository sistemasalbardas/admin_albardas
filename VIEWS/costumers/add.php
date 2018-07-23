
<div class="clear"></div>
<!-- <div class="mainContainer"> -->
	
	<div class="containerPanel">	
		<form action="<?=URL?>costumers/add/" method="post"  id="addEmploye">
			<div class="headContent">
				<h4 class="text-bold">Nueva cliente</h4>
			</div>

			<div class="mainContent mW600">
				<div class="row">
					<div class="col-lg-10">
						<label for="name">Razón social:</label>
						<input type="text" name="name" id="name" class="inputStyle" required> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-10">
						<label for="rfc">R F C:</label>
						<input type="text" name="rfc" id="rfc" class="inputStyle" required> 
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
				
					<div class="col-lg-10">
						<label for="address">Direccion fiscal:</label>
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