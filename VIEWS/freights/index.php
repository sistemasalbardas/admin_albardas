<?php 
	$data = $freights->index();
	$costumers = $freights->listCostumers();
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
									<td>FOLIO EMBARQUE</td>
									<td>CLIENTE</td>
									
									<td>PRECIO	</td>
									<td>TOTAL	</td>
									<td>ACCIONES</td>
									
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($data)){?>
								    <tr>
								      	<th><?= $row['id']; ?></th>
								      	<th><?= $row['f_flete']; ?></th>
								      	<th><?= $row['f_embark']; ?></th>
								      	<th><?php
								      		if ($row['id_client']  == 1) {
								      			echo "Albardas";
								      		}else{
								      			echo $row['id_client'];
								      		}
								      	?></th>
								      	<th> $ <?= $row['price']. " - ".$row['currency']; ?></th>
								      	<th> $ <?= $row['total']; ?></th>
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