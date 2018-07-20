<?php 
	$data = $transporters->box();
 ?>
<!-- <div class="mainContainer"> -->
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de cajas de  <span class="text-decoration"><?= $_GET['name'];?></span></h4>
		</div>
		<div class="mainContent">
			<div class="row">
				<div class="col-lg-2 padd10 ">
					
					<a href="<?= URL?>transporters/addBox/?id=<?= $_GET['id'];?>&nameTransport=<?= $_GET['name'] ?>" class="btn bgBlue s14">Nuevo caja</a>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="containerTable table-responsive">
						<table id="tableCostumers">
							<thead>
								<tr>
									<td>ID</td>
									<td>TIPO</td>
									<td>TEMPERATURA</td>
									<td>PLACAS</td>
									<td>ECONOMICO</td>
									<td>ACCIONES</td>
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($data)){?>
								    <tr>
								      	<th><?= $row['id']; ?></th>
								      	<th>
								      		<a href="viewWork/<?= $row['id'];?>"><?= $row['type']?></a>
								      	</th>
								      	<th><?= $row['temperature'].' '.$row['grades']; ?></th>
								      	<th><?= $row['placa']; ?></th>
								      	<th><?= $row['num_econ']; ?></th>
								      	<th>
								      		<a href="<?=URL?>transporters/deleteBox/?id=<?= $row['id'];?>" onclick="erase(this);" class="tool">
							      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
								      			<span class="tooltext">Eliminar</span>
								      			
								      		</a>
								      		<a href="<?=URL?>transporters/editBox/?id_box=<?= $row['id'];?>&id=<?= $_GET['id'] ?>&nameTransport=<?= $_GET['name'] ?>" class="tool">
								      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
								      			<span class="tooltext">Editar</span>
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