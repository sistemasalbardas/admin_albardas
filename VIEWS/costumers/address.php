<?php 
	$data = $costumers->address();
 ?>

<div class="clear"></div>
<div class="mainContainer">
	
	<div class="containerPanel">	
		
			<div class="headContent">
				<h4 class="text-bold">Direcciones de entrega - <b><?= $_GET['name'];?></b></h4>
			</div>
			
			<div class="mainContent ">
				<div class="row">
				<div class="col-lg-2 padd10 ">
					
					<a href="<?= URL?>costumers/addAddress/?id=<?=$_GET['id']?>&name=<?=$_GET['name']?>" class="btn bgBlue s14">Nueva direccion </a>
				</div>
				
			</div>
			<div class="clear"></div>

					<div class="containerTable">
						<table id="tableCostumers">
							<thead>
								<tr>
									<td>ID</td>
									<td>NOMBRE</td>
									<td>DIRECCION	</td>
									<td>TELEFONO</td>
									<td>ACCIONES</td>
									
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($data)){?>
								    <tr>

								      	<th><?= $row['id']; ?></th>
								      	<th>
								      		<a href="viewWork/<?= $row['id'];?>"><?= $row['name']; ?></a>
								      	</th>
								      	<th><?= $row['address']; ?></th>
								      	<th><?= $row['phone']; ?></th>
								      	<th>
								      		<a href="<?=URL?>costumers/deleteAddres/?id=<?= $row['id'];?>" onclick="deleteAddress(this);" class="tooltip">
								      			<i class="material-icons s20 cRed">delete</i>
								      			 <span class="tooltiptext">Eliminar</span>
								      		</a>
								      		<a href="<?=URL?>costumers/editAddress/?id=<?= $row['id'];?>" onclick=""  class="tooltip">
								      			<i class="material-icons s20 cBlue">edit</i>
												<span class="tooltiptext">Editar</span>
								      		</a>
								      		

											
								      	</th>
								      	
								    </tr>
								<?php } ?>
							</tbody>
						</table>
					</div>

			

			</div>
			<div class="footerModal">
			
			
			</div>
		</form>
	</div>
</div>