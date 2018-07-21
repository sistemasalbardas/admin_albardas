<?php 
	$data = $costumers->index();
 ?>
<!-- <div class="mainContainer"> -->
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de clientes</h4>
		</div>
		<!-- <div class="mainContent"> -->
			<div class="row">
				<div class="col-lg-2 padd10 ">
					
					<a href="<?= URL?>costumers/add/" class="btn btnblue" >Nuevo cliente </a>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="containerTable table-responsive">
						<table id="tableCostumers">
							<thead>
								<tr>
									<td>ID</td>
									<td>RAZÓN SOCIAL</td>
									<td>RFC	</td>
									<td>TELEFONO</td>
									<td>EMBARQUES</td>
									<td>ACCIONES</td>
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($data)){?>
								    <tr>
								      	<th><?= $row['id']; ?></th>
								      	<th>
								      		<a href="viewWork/<?= $row['id'];?>"><?= $row['name']; ?></a></th>
								      	<th><?= $row['rfc']; ?></th>
								      	<th><?= $row['phone']; ?></th>
								      	<th><?= $row['embark']; ?></th>
								      	<th>
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
		</div>
	</div>
<!-- </div> -->