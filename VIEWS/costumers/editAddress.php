<?php 
	$row = $costumers->editAddress();
 ?>

<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
				<h3 class="box-title text-600">Editar direccion</h3>
				<div class="box-tools pull-right">
								<a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
        </div>
	    </div>
	  	<div class="box-body  padd10 bgWhite table-responsive">
		  <form action="<?=URL?>costumers/editAddress/" method="post"   autocomplete="off">
						<input type="hidden" name="id_costumer" value="<?= $_GET['id']?>">
						<input type="hidden" name="nameCostumer" value="<?= $_GET['name']?>">
						<div class="mainContent mW600">
							<div class="row">
								<div class="col-lg-10">
									<input type="hidden" name="id" value="<?= $row['id'];?>">
									<label for="name">Nombre:</label>
									<input type="text" name="name" id="name" class="form-control" required="" value="<?= $row['name'];?>"> 
								</div>
							</div>
							<div class="clear"></div>
							<div class="row">
								<div class="col-lg-10">
									<label for="city">Ciudad:</label>
									<input type="text" name="city" id="city" class="form-control" required="" value="<?= $row['city'];?>"> 
								</div>
							</div>
							<div class="clear"></div>
							<div class="row">
								<div class="col-lg-10">
									<label for="address">Direccion :</label>
									<input type="text" name="address" id="address" placeholder="" class="form-control" required="" value="<?= $row['address'];?>"> 
								</div>
							</div>
							<div class="clear"></div>
							<div class="row">
								<div class="col-lg-10">
									<label for="phone">Telefono: </label>
									<input type="phone" class="form-control" id="phone" name="phone" required="" value="<?= $row['phone'];?>">
								</div>
							</div>
						<div/>
						<div class="clear"></div>
						<div class="col-lg-4">
							<button type="submit" class="btn btn-success sgreen">Actualizar</button>
						</div>
						<div class="clear"></div>
		</form>
			</div>
			<div class="box-footer">
				<footer class="main-footer text-center">
					<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
				</footer>
			</div>
	</div>
</div>









