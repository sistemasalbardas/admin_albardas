<?php 
	$data = $costumers->index();

	$permits = $costumers->permits();

	$read = $permits[3];
	$write = $permits[4];
	$edit = $permits[5];
	$delete = $permits[6];
 ?>
<!-- <div class="mainContainer"> -->
<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
		  <h3 class="box-title text-600">Listado de Clientes</h3>
		  <div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
	    </div>
		<div class="box-body padd10 bgWhite table-responsive">
			<?php if ($write == 1) { ?>
				<a href="<?=URL?>costumers/add/" class="btn btn-primary">
					Nuevo cliente
				</a>
			<?php } ?>
			
			<div class="clear"></div>
			<div class="containerTable table-responsive">
				<table id="tableCostumers" class="table bgWhite">
					<thead>
						<tr>
							<th scope="col" >ID</th>
							<th scope="col" >RAZÓN SOCIAL</th>
							<th scope="col" >RFC	</th>
							<th scope="col" >TELEFONO</th>
							<th scope="col" >EMBARQUES</th>
							<th scope="col" >ACCIONES</th>
						</tr>
					</thead>	
					<tbody>
						<?php while($row = mysqli_fetch_array($data)){?>
							<tr>
								  <th ><?= $row['id']; ?></th>
								  <th >	
									  <a href="#"><?= $row['name']; ?></a></th>
								  <th ><?= $row['rfc']; ?></th>
								  <th ><?= $row['phone']; ?></th>
								  <th ><?= $row['embark']; ?></th>
								  <th >
								  	<?php if ($delete == 1) { ?>
									  <a href="delete/?id=<?= $row['id'];?>" onclick="deleteCostumer(this);" class="tool">
										  <i class="btn btn-danger  btn-xs s16 cRed btn_padd"><span class="icon-trash"></span></i>
										   <span class="tooltext">Eliminar</span>
										   
									  </a>
									<?php } ?>
									<?php if ($edit == 1) { ?>
									  <a href="edit/?id=<?= $row['id'];?>" onclick=""  class="tool">
										  <i class="btn btn-warning btn-xs btn_padd s16"><span class="icon-pencil"></span></i>
										   <span class="tooltext">Editar </span>
										  
									  </a>
									 <?php } ?>
									  <a href="address/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tool">
										  <i class="btn btn-primary btn-xs s16 btn_padd"><span class="icon-add_location"></span></i>
										  <span class="tooltext">Direcciones</span>
										
									  </a>
								  </th>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>