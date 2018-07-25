<?php 
	$data = $costumers->index();
 ?>
<!-- <div class="mainContainer"> -->
<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title text-600">Listado de clientes</h3>
	    </div>
		<div class="box-body padd10 bgWhite table-responsive">
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