<?php 
	$data = $transporters->index();
 ?>
<div class="mainContainer">
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de transportistas</h4>
		</div>
		<div class="mainContent">
			<div class="row">
				<div class="col-lg-2 padd10 ">
					
					<a href="<?= URL?>transporters/add/" class="btn bgBlue s14">Nuevo transportista</a>
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
								      	<th>
								      		<a href="delete/?id=<?= $row['id'];?>" onclick="erase(this);" class="tooltip">
								      			<i class="material-icons s20 cRed">delete</i>
								      			 <span class="tooltiptext">Eliminar</span>
								      		</a>
								      		<a href="edit/?id=<?= $row['id'];?>" class="tooltip">
								      			<i class="material-icons s20 cblue">edit</i>
								      			 <span class="tooltiptext">Editar</span>
								      		</a>
								      		<a href="drivers/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tooltip">
								      			<i class="material-icons s20 cBlue">airline_seat_recline_normal</i>
												<span class="tooltiptext">choferes</span>
								      		</a>
								      		<a href="box/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tooltip">
								      			<i class="material-icons s20 cBlue">branding_watermark</i>
												<span class="tooltiptext">cajas</span>
								      		</a>
								      		<a href="trucks/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tooltip">
								      			<i class="material-icons s20 cGreen">local_shipping</i>
												<span class="tooltiptext">Trailers</span>
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