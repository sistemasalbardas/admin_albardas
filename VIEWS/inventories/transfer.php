<?php 
	$data = $inventories->listInventories();
	$inventories = $inventories->inventory();
?>
<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
				Tranferencia entre invetarios - <?= $_GET['inventorie']?>
			</h3>
			<div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<form action="<?=URL?>inventories/transfer/" method="post"  id="addEmploye" autocomplte="off">
				<input type="hidden" name="id" id="id" value="<?=$_GET['id']?>">
				<input type="hidden" name="inventorie" id="inventorie" value="<?= $_GET['inventorie']?>">
				<input type="hidden" name="concept" id="concept" value="entrada">
				<div class="mainContent ">
					
					<div class="row">
						<div class="col-lg-6">
							<label for="exit">Almacen de salida :</label>
							<select name="exit" id="exit" class="form-control selectpicker" data-live-search="true" required="">
								<option value="<?= $_GET['id']?>"> <?= $_GET['inventorie']?></option>
								
							</select>	
						</div>
						<div class="col-lg-6">
							<label for="entry">Almacen de entrada :</label>
							<select name="entry" id="entry" class="form-control selectpicker" data-live-search="true" required="" onchange="validateEntry(this);">
								<option value="">SELECCIONA UNA OPCION</option>
								<?php while ($row = mysqli_fetch_array($data)) { ?>
								<option value="<?= $row['id']?>" > <?= $row['name']?></option>

								<?php } ?>
								
							</select>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6 ">
							<label for="prod">Producto:</label>
							<select name="prod" id="prod" class="form-control selectpicker" data-live-search="true" required="" onchange="selectId(this);">
								<?php while ($row = mysqli_fetch_assoc($inventories)) {?>
									<option value="<?= $row['id']?>" data-quantity="<?= $row['quantity'];?>"  data-id="<?= $row['id_product'];?>" data-name="<?= $row['name_product']?>"><?= $row['name_product']." - ". $row['quantity'];?></option>

								<?php } ?>
							</select>	
							<input type="hidden" name="id_product" id="id_product">
							<input type="hidden" name="name_product" id="name_product">
							
							
						</div>
						<div class="clear">	</div>
						<div class="col-lg-4">
							<label for="quantity">Cantidad</label>
							<input type="number" class="form-control" name="quantity" id="quantity" required="" onkeyup="validateQuantity(this);">
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 ">
					<input type="submit" value="Guardar" class="btn btn-success sgreen">
				</div>
			</form>
		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>

	
	