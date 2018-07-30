<?php 
	$users = $inventories->listUsers();
 ?>
<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
				Nuevo almacen
			</h3>
			<div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<form action="<?=URL?>inventories/add/" method="post"  id="addEmploye">
				<div class="mainContent mW600">
					<div class="row">
						<div class="col-lg-10">
							<label for="name">Nombre:</label>
							<input type="text" name="name" id="name" class="form-control" required> 
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-10">
							<label for="utility">Uso :</label>
							<select name="utility" id="utility" class="form-control selectpicker" data-live-search="true">
								<option value="1">Producto Terminado</option>
							</select>
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-10">
							<label for="responsable">Responsable :</label>
							<select name="responsable" id="responsable" class="form-control selectpicker" data-live-search="true">
							<?php while($row = mysqli_fetch_array($users)){ ?>

								<option value="<?= $row['name']." ".$row['last_name'] ?>"><?= $row['name']." ".$row['last_name'] ?></option>
							<?php } ?>
							</select>
						</div>
					</div>
					<div class="clear"></div>
					
					
					<div class="row">
					
						<div class="col-lg-10">
							<label for="description">Descripcion:</label>
							<textarea name="description" id="description" class="h70 form-control"></textarea>
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
	
	
