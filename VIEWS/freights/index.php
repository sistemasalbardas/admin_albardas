<?php 
	$data = $freights->index();
	$costumers = $freights->listCostumers();
 ?>

<div class="mainContainer">
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de fletes </h4>
		</div>
		<div class="mainContent">

			<div class="clear"></div>
			<div class="containerTable">
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
								      		<a href="delete/?id=<?= $row['id'];?>" onclick="deleteCostumer(this);" class="tooltip">
								      			<i class="material-icons s20 cRed">delete</i>
								      			 <span class="tooltiptext">Eliminar</span>
								      		</a>
								      		<a href="edit/?id=<?= $row['id'];?>" onclick=""  class="tooltip">
								      			<i class="material-icons s20 cBlue">edit</i>
												<span class="tooltiptext">Editar</span>
								      		</a>
								      		<a href="address/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tooltip">
								      			<i class="material-icons s20 cBlue">list</i>
												<span class="tooltiptext">Ver</span>
								      		</a>
								      	</th>
								    </tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
		</div>
	</div>
</div>