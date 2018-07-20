<?php 
	$data = $freights->index();
 ?>

<!-- <div class="mainContainer"> -->
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de fletes </h4>
		</div>
		<div class="mainContent">

				
			<div class="clear"></div>
			<div class="containerTable text-responsive">
						<table id="tableFreights">
							<thead>
								<tr>
									<td>ID</td>
									<td>FOLIO FLETE</td>
									<td>PRECIO	</td>
									<td>ACCIONES</td>
									
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($data)){?>
								    <tr>
								      	<th><?= $row['id']; ?></th>
								      	<th>
								      		<?= $row['name']; ?></th>
								      	<th><?= $row['rfc']; ?></th>
								      	<th><?= $row['phone']; ?></th>
								      	<th><?= $row['embark']; ?></th>
								      	<th>
								      		<a href="delete/?id=<?= $row['id'];?>" onclick="deleteCostumer(this);" class="tool">
							      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
								      			 <span class="tooltext">Eliminar</span>
								      			 
								      		</a>
								      		<a href="edit/?id=<?= $row['id'];?>" onclick=""  class="tool">
								      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
								      			<span class="tooltext">Editar</span>
								      			
								      		</a>
								      		<a href="address/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tool">
								      			<i class="btn btn-info btn-xs fas fa-list btn_padd"></i>
								      			<span class="tooltext">Ver</span>
								      			 
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