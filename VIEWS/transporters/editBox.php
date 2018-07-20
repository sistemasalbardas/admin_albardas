<?php 
	$row = $transporters->editBox();
 ?>


<div class="clear"></div>
<!-- <div class="mainContainer"> -->
	
	<div class="containerPanel">	
		<form action="<?=URL?>transporters/editBox/" method="post"  >
			<input type="text" name="id" value="<?= $_GET['id']?>">
			<input type="text" name="id_box" value="<?= $row['id']?>">
			<input type="text" name="nameTransport" value="<?= $_GET['nameTransport']?>">
			<div class="headContent">
				<h4 class="text-bold">Editar caja</h4>
			</div>

			<div class="mainContent mW600">
				<div class="row">
					<div class="col-lg-7">
						<label for="type">Tipo de caja:</label>
						<select name="type" id="type" required class="inputStyle">

							<option value="Remolque" <?= ($row['type'] == 'Remolque') ? 'selected' :null ; ?>>Remolque</option>
							<option value="Estaca" <?= ($row['type'] == 'Estaca') ? 'selected' : null ; ?>>Estaca</option>
							<option value="Refrigerado"  <?= ($row['type'] == 'Refrigerado') ? 'selected' : null ; ?> >Refrigerado</option>
							<option value="Tolva"  <?= ($row['type'] == 'Tolva') ? 'selected' : null ; ?> >Tolva</option>
							<option value="Cama baja"  <?= ($row['type'] == 'Cama baja') ? 'selected' : null ; ?>>Cama baja</option>
							<option value="Plataforma" <?= ($row['type'] == 'Plataforma') ? 'selected' : null ; ?>>Plataforma</option>
						</select>
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-4">
						<label for="temperature">Temperatura:</label>
						<input type="text" name="temperature" id="temperature" class="inputStyle" required value="<?= $row['temperature']?>"> 
					</div>
					<div class="col-lg-3">
						<label for="degrees">Grados:</label>
						<select name="degrees" id="degrees" class="inputStyle" required="">
							<option value="C °">C °</option>		
							<option value="F °">F °</option>		
							<option value="K °">K °</option>		
						</select>
					</div>
					
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-7">
						<label for="placa"> Numero de Placa:</label>
						<input type="text" name="placa" id="placa" class="inputStyle" required value="<?= $row['placa']?>"> 
					</div>
				</div>
				
				<div class="clear"></div>
				<div class="row">
				
					<div class="col-lg-7">
						<label for="num_econ">Numero economico</label>
						<input type="text" name="num_econ" id="num_econ" placeholder="" class="inputStyle" required value="<?= $row['num_econ']?>"> 
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