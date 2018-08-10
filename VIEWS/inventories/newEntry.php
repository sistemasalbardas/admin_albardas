
<?php 
	$users = $inventories->listUsers();
	$products = $inventories->listProducts();
 ?>


<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
				Nueva entrada - <?= $_GET['inventorie']?>
			</h3>
			<div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<form action="<?=URL?>inventories/newEntry/" method="post"  id="addEmploye">
				<input type="hidden" name="id" id="id" value="<?=$_GET['id']?>">
				<input type="hidden" name="inventorie" id="inventorie" value="<?= $_GET['inventorie']?>">
				<input type="hidden" name="concept" id="concept" value="entrada">

				<div class="mainContent ">
					
					<div class="row">
						<div class="col-lg-6">
							<label for="receiver">Recibe :</label>
							<select name="receiver" id="receiver" class="form-control selectpicker" data-live-search="true" required="">
								<?php while ($row = mysqli_fetch_assoc($users)) {?>
									<option value="<?= $row['name']." ". $row['last_name'];?>"><?= $row['name']." ". $row['last_name'];?></option>
								<?php } ?>
							</select>
						</div>
						<div class="clear">	</div>
						<div class="col-lg-6">
							<label for="comments">Comentarios :</label>
							<textarea name="comments" placeholer="Comentarios" id="comments" class="form-control h70" ></textarea>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6 ">
							<label for="id_product">Producto:</label>
							<select name="id_product" id="id_product" class=" form-control selectpicker" data-live-search="true" required="">
								<?php while ($row = mysqli_fetch_assoc($products)) {?>
									<option value="<?= $row['id']?>"><?= $row['name']." ". $row['quality']." ". $row['size']." ". $row['pack']." ". $row['brand']." ". $row['weight']." ". $row['unit_measure'];?></option>
								<?php } ?>
							</select>
							<input type="hidden" name="name_product" id="name_product" value="">
							
						</div>
						<div class="clear">	</div>
						<div class="col-lg-6">
							<label for="quantity">Cantidad</label>
							<input type="number" placeholer="Cantidad" class="form-control" name="quantity" id="quantity" required="" >
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

	
	