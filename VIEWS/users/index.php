<?php 
	$data = $users->index();
	$permits = $users->permits();

	$read = $permits[3];
	$write = $permits[4];
	$edit = $permits[5];
	$delete = $permits[6];
 ?>

 <div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
	      	<h3 class="box-title text-600">Listado de usuarios</h3>
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
						<a href="add/" class="btn btn-primary sblue">
							Nuevo usuario
						</a>	
					<?php } ?>		

				</div>
			</div>
			<div class="clear"></div>
			<div class="containerTable table-responsive">
				<table id="tableUsers" class="table bgWhite">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">NOMBRE</th>
							<th scope="col">EMAIL</th>
							<th scope="col">TELEFONO</th>
							<th scope="col">DEPARTAMENT</th>
							<th scope="col">STATUS</th>
							<th scope="col">ACCIONES</th>
						</tr>
					</thead>	
					<tbody>
						<?php while($row = mysqli_fetch_array($data)){?>
							<tr>
								  <th ><?= $row['id']; ?></th>
								  <th >	
									  <?= $row['name']. " " . $row['last_name']; ?>
								  </th>
								  <th ><?= $row['email']; ?></th>
								  <th ><?= $row['phone']; ?></th>
								  <th ><?= $row['department']; ?></th>
								  <th>
									  <?= ($row['status'] == 1) ? 'Activo' : 'Inactivo'; ?>
								  </th>
								  <th >
									<?php if ($delete == 1) { ?>
									  <a href="delete/?id=<?= $row['id'];?>" onclick="erase(this);" class="tool">
										   <i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
										  <span class="tooltext">Eliminar</span>
										   
									  </a>
									<?php } ?>
									<?php if ($edit == 1) { ?>
									  <a href="edit/?id=<?= $row['id'];?>" onclick=""  class="tool">
										  <i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
										   <span class="tooltext">Editar </span>
									  </a>
									  <a href="permits/?id=<?= $row['id'];?>" onclick=""  class="tool">
										  <i class="btn btn-primary btn-xs fas fa-user-shield btn_padd"></i>
										   <span class="tooltext">Permisos </span>
										  
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