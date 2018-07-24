<?php 
	$data = $costumers->index();
 ?>
<!-- <div class="mainContainer"> -->
<div class="col-md-10">
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title">Listado de clientes</h3>
	    </div>
		<div class="box-body padd10 bgWhite table-responsive">
			<table id="tableCostumers" class="table bgWhite">
				<thead>
					<tr>
						<th scope="col" class="s14 text-center">ID</th>
						<th scope="col" class="s14 text-center">RAZÓN SOCIAL</th>
						<th scope="col" class="s14 text-center">RFC	</th>
						<th scope="col" class="s14 text-center">TELEFONO</th>
						<th scope="col" class="s14 text-center">EMBARQUES</th>
						<th scope="col" class="s14 text-center">ACCIONES</th>
					</tr>
				</thead>	
				<tbody>
					<?php while($row = mysqli_fetch_array($data)){?>
					    <tr>
					      	<th class="s12"><?= $row['id']; ?></th>
					      	<th class="s12">	
					      		<a href="viewWork/<?= $row['id'];?>"><?= $row['name']; ?></a></th>
					      	<th class="s12"><?= $row['rfc']; ?></th>
					      	<th class="s12"><?= $row['phone']; ?></th>
					      	<th class="s12"><?= $row['embark']; ?></th>
					      	<th class="s12">
					      		<a href="delete/?id=<?= $row['id'];?>" onclick="deleteCostumer(this);" class="tool">
					      			<i class="btn btn-danger  btn-xs fas fa-trash cRed btn_padd"></i>
					      			 <span class="tooltext">Eliminar</span>
					      			 
					      		</a>
					      		<a href="edit/?id=<?= $row['id'];?>" onclick=""  class="tool">
					      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
					      			 <span class="tooltext">Editar </span>
					      			
					      		</a>
					      		<a href="address/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tool">
					      			<i class="btn btn-primary btn-xs fas fa-map-marker-alt btn_padd"></i>
					      			<span class="tooltext">Direcciones</span>
									
					      		</a>
					      	</th>
					    </tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="box-footer">
		</div>
	</div>
</div>