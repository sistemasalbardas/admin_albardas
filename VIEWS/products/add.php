<div class="clear"></div>
<<<<<<< HEAD
<!-- <div class="mainContainer"> -->
<div class="containerPanel">	
	<form class="" method="post"  id="saveWork" autocomplete="off" action="<?=URL?>/products/add/">
		<div class="headContent">
			<h4 class="text-bold">Nuevo producto</h4>
		</div>
=======
<div class="mainContainer">
	<div class="containerPanel">	
>>>>>>> admin_lte


		<div class="mainContent mW600">
			<div class="row">
				<div class="col-lg-8">
					<label for="name">Nombre del producto:</label>
					<input type="text" name="name" id="name" class="inputStyle" value="" required> 
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-8">
					<label for="quality">Calidad:</label>
					<select name="quality" id="quality" class="inputStyle" required="">
						<option value="">SELECCIONA</option>
						<option value="1 RA">1 RA </option>
						<option value="2 DA">2 DA</option>
					</select>
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-8">
					<label for="size">TAMAÑO:</label>
					<select name="size" id="size" class="inputStyle" required="">
						<option value="">SELECCIONA</option>
						<optgroup label="TAMAÑOS DE CHILES">
						    <option value="XL"> XL</option>
							<option value="L"> L</option>
							<option value="M"> M</option>
							<option value="CH"> CH</option>
						</optgroup>
						<optgroup label="TAMAÑOS DE CEBOLLAS">
						    <option value="LG"> LG</option>
							<option value="LM"> LM</option>
							<option value="PP"> PP</option>
							<option value="J"> J</option>
						</optgroup>
						
					</select>
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-8">
					<label for="pack">EMPAQUE:</label>
					<select name="pack" id="pack" class="inputStyle" required="">
						<option value="">SELECCIONA</option>
						<optgroup label="EMPAQUE CHILES">
						    <option value=" CARTON 1 1/9">  CARTON 1 1/9</option>
						    <option value=" ARPILLA ">  ARPILLA </option>
						</optgroup>
						<optgroup label="EMPAQUES DE CEBOLLAS">
						    <option value="ARPILLA FRESA">ARPILLA FRESA </option>
							<option value="ARPILLA SELECCIONADA">ARPILLA SELECCIONADA </option>
							<option value="ARPILLA MORADA">ARPILLA MORADA</option>
							<option value="ARPILLA MEXICAN">ARPILLA MEXICAN </option>
						</optgroup>
						
					</select>
				</div>
			</div>
			

			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-8">
					<label for="brand">MARCA:</label>
					<select name="brand" id="brand" class="inputStyle" required="">
						<option value="">SELECCIONA</option>
						<option value="GENERICO">GENERICO</option>
					    <option value="ANAVALE">ANAVALE </option>
						<option value="TRIPLE H">TRIPLE H </option>
						<option value="ALEK">ALEK </option>
						<option value="PICOSITO">PICOSITO</option>
						<option value="CHILOSO">CHILOSO </option>
						<option value="CASCO"> CASCO</option>
					</select>
				</div>
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-2">
					<label for="weight">PESO:</label>
					<input type="number" id="weight" name="weight" class="inputStyle" required="">
					
				</div>
				<div class="col-lg-3">
					<label for=""> <br></label>
					<select name="unit_measure" id="unit_measure" class="inputStyle" required="">
						<option value=""></option>
						<option value="LBS">LBS</option>
						<option value="KG">KG</option>
					    
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
<<<<<<< HEAD
		</div>
	</form>
</div>

=======
		</form>
	</div>
</div>

		public $weight; 
>>>>>>> admin_lte
