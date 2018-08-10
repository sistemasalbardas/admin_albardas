<div class="mainContainer">
	<div class="clear"></div>
	<div class="container bgLightGrey border">
		<div class="row">
			<div class="col-lg-12">
				<div class="block ">
					<h4 class="text-uppercase text-bold">Nueva trabajo</h4>
				</div>
			</div>
		</div>
		
		<div class="clear"></div>
		<div class="row">
			<div class="col-lg-3">
				<div class="block ">
					<label for="" class="s12">Nombre del cliente:</label>
					<input type="text" name="" id="" class="inputStyle">
				</div>
			</div>
			<div class="col-lg-3">
				<div class="block ">
					<label for="" class="s12">Telefono:</label>
					<input type="text" name="" id="" class="inputStyle">
				</div>
			</div>
			<div class="col-lg-3">
				<div class="block ">
					<label for="" class="s12">Tipo de evento:</label>
					<select name="" id="" class="inputStyle">
						<option value="">XV AÑOS</option>
						<option value="">Boda</option>
						<option value="">bautiso</option>
					</select>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">
			<div class="col-lg-3">
				<div class="block ">
					<label for="" class="s12">Nombre del cliente:</label>
					<input type="text" name="" id="" class="inputStyle">
				</div>
			</div>
			<div class="col-lg-3">
				<div class="block ">
					<label for="" class="s12">Tiempo de validez:</label>
					<select name="" id="" class="inputStyle">
						<option value="">15 dias</option>
						<option value="">30 dias</option>
						<option value="">60 dias</option>
					</select>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">
			<div class="col-lg-3">
				<div class="block ">
					<button class="btn green" onclick="modal_prod();">Agregar productos</button>
				</div>
			</div>
			
		</div>
		<div class="bgModal modal hidden
		" onclick="closeModal();"></div>
		<div class="containerModal hidden
		">
			<h3 class="title">Agregar productos</h3>
			<div class="clear"></div>
			<div class="row noMargin">
				<div class="col-lg-5">
					<label for="" class="s12">Codigo producto:</label>
					<input type="text" name="" id="" class="inputStyle" onkeyup="search(this);">
				</div>
			</div>
			<div class="clear"></div>
			<table class="table">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							Nombre
						</th>
						<th>
							precio
						</th>
						<th>
							Cantidad
						</th>
						<th>
							Total
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>
							150
						</th>
						<th>
							Paquete de fotografia
						</th>
						<th>
							$1500
						</th>
						<th>
							1
						</th>
						<th>
							$1500
						</th>
					</tr>
				</tbody>
			</table>
		</div>
		<form enctype="multipart/form-data" method="post" action="" onsubmit="saveEvent(this);">
			<input type="text" name="title" id="title"><br>
			<textarea name="description" id="description" cols="30" rows="5"></textarea>
		 	<input name="image[]" required="" type="file" multiple />
		 	<br>
			<input type="submit" value="Upload">
		</form>
	</div>
</div>