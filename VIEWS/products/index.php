<?php 
	$data = $products->index();

	$permits = $products->permits();
	$read = $permits[3];
	$write = $permits[4];
	$edit = $permits[5];
	$delete = $permits[6];

 ?>

<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title text-600">Listado de productos</h3>
	      <div class="box-tools pull-right">
	      	                
                <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            
           </div>
	    </div>
		<div class="box-body padd10 bgWhite table-responsive">
			<div class="row">
				<?php if ($write == 1) { ?>
					<div class="col-lg-2  ">
						<a href="<?= URL?>products/add/" class="btn btn-primary sblue">Nuevo producto <span class="icon-add s16"></span></a>
					</div>
				<?php } ?>
			</div>
			<div class="clear"></div>
			<div class="containerTable table-responsive">
				<table id="tableProducts" class="table bgWhite">
					<thead>
						<tr>
							<th scope="col" >ID</th>
							<th scope="col" >NOMBRE</th>
							<th scope="col" >CALIDAD</th>
							<th scope="col" >TAMAÑO</th>
							<th scope="col" >EMPAQUE</th>
							<th scope="col" >MARCA</th>
							<th scope="col" >PESO</th>
							<th scope="col" >ACCIONES</th>
						</tr>
					</thead>	
					<tbody>
						<?php while($row = mysqli_fetch_array($data)){?>
							<tr>
								<th><?= $row['id']; ?></th>
											  <th>
												  <?= $row['name']; ?>
											  </th>
											  <th><?= $row['quality']; ?></th>
											  <th><?= $row['size']; ?></th>
											  <th><?= $row['pack']; ?></th>
											  <th><?= $row['brand']; ?></th>
											  <th>
												  <?= $row['weight'].' '.$row['unit_measure']; ?>
											  </th>
											  
											  <th>
											  	<?php if ($delete == 1) { ?>
												  <a href="delete/?id=<?= $row['id'];?>" onclick="erase(this);" class="tool">
													   <i class="btn btn-danger btn-xs s16 btn_padd"><span class="icon-trash"></span></i>
													  <span class="tooltext">Eliminar</span>
													   
												  </a>
												<?php } ?>
												<?php if ($edit == 1) { ?>
												  <a href="edit/?id=<?= $row['id'];?>" class="tool">
													  <i class="btn btn-warning btn-xs s16 btn_padd"><span class="icon-pencil"></span></i>
													  <span class="tooltext">Editar</span>	 
												  </a>
												<?php } ?>
												  
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
