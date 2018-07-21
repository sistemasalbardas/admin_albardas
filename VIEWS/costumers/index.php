<?php 
	$data = $costumers->index();
 ?>
<div class="mainContainer">
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de clientes</h4>
		</div>
		<div class="mainContent">
			<div class="row">
				<div class="col-lg-2 padd10 ">
					
					<a href="<?= URL?>costumers/add/" class="btn bgBlue s14">Nuevo cliente </a>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="containerTable">
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
												<span class="tooltiptext">Direcciones</span>
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