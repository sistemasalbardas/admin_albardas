<?php 
	$data = $costumers->address();

	$permits = $costumers->permits();


	$write = $permits[4];
	$edit = $permits[5];
	$delete = $permits[6];

 ?>

<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
		  <h3 class="box-title text-600">Direcciones de entrega - <b><?= $_GET['name'];?></h3>
		  <div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
          </div>
	    </div>
		<div class="box-body padd10 bgWhite table-responsive">
			<div class="row">
				<div class="col-lg-2">
					<?php if ($write == 1) { ?>
						<a href="<?= URL?>costumers/addAddress/?id=<?=$_GET['id']?>&name=<?=$_GET['name']?>" class="btn btn-primary sblue"><span class="icon-add_location"></span> Nueva direccion </a>
					<?php } ?>
					
				</div>
				<div class="clear"></div>
			</div>
			<table id="tableCostumersAddress" class="table bgWhite">
				<thead>
					<tr>
						<th scope="col" >ID</th>
						<th scope="col" >NOMBRE</th>
						<th scope="col" >DIRECCION	</th>
						<th scope="col" >TELEFONO</th>
						<th scope="col" >ACCIONES</th>
					</tr>
				</thead>	
				<tbody>
					<?php while($row = mysqli_fetch_array($data)){?>
					    <tr>
					      	<th ><?= $row['id']; ?></th>
					      	<th >	
					      		<a href="#"><?= $row['name']; ?></a></th>
					      	<th ><?= $row['address']; ?></th>
					      	<th ><?= $row['phone']; ?></th>
					      	<th >
					      		<?php if ($delete == 1) { ?>
						      		<a href="<?=URL?>costumers/deleteAddres/?id=<?= $row['id'];?>" onclick="deleteAddress(this);" class="tool">
					      			 	<i class="btn btn-danger btn-xs s16"><span class="icon-trash"></span></i>
						      			<span class="tooltext">Eliminar</span>
						      		</a>
					      		<?php } ?>
					      		<?php if ($edit == 1) { ?>
						      		<a href="<?=URL?>costumers/editAddress/?id=<?= $row['id'];?>" onclick=""  class="tool">
						      			<i class="btn btn-warning btn-xs s16"><span class="icon-pencil"></span></i>
						      			<span class="tooltext">Editar</span>
						      		</a>
					      		<?php } ?>
					      	</th>
					    </tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>