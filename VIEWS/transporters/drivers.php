<?php 
	$data = $transporters->drivers();
 ?>
<div class="mainContainer">
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de choferes de  <span class="text-decoration"><?= $_GET['name'];?></span></h4>
		</div>
		<div class="mainContent">
			<div class="row">
				<div class="col-lg-2 padd10 ">
					
					<a href="<?= URL?>transporters/addDriver/?id=<?= $_GET['id'];?>&nameTransport=<?= $_GET['name'] ?>" class="btn bgBlue s14">Nuevo chofer</a>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="containerTable">
						<table id="tableCostumers">
							<thead>
								<tr>
									<td>ID</td>
									<td>NOMBRE</td>
									<td>LICENCIA	</td>
									<td>TELEFONO</td>
									<td>ACCIONES</td>
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($data)){?>
								    <tr>
								      	<th><?= $row['id']; ?></th>
								      	<th>
								      		<a href="viewWork/<?= $row['id'];?>"><?= $row['name'].' '.$row['last_name']; ?></a></th>
								      	<th><?= $row['num_lic']; ?></th>
								      	<th><?= $row['phone']; ?></th>
								      	<th>
								      		<a href="<?=URL?>transporters/deleteDriver/?id=<?= $row['id'];?>" onclick="erase(this);" class="tooltip">
								      			<i class="material-icons s20 cRed">delete</i>
								      			 <span class="tooltiptext">Eliminar</span>
								      		</a>
								      		<a href="<?=URL?>transporters/editDriver/?id_driver=<?= $row['id'];?>&id=<?= $_GET['id'] ?>&nameTransport=<?= $_GET['name'] ?>" class="tooltip">
								      			<i class="material-icons s20 cblue">edit</i>
								      			 <span class="tooltiptext">Editar</span>
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