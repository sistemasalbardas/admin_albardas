<?php 
	$inventories = $inventories->index();
?>


<div class="mainContainer">
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">ALMACENES</h4>
		</div>
		<div class="mainContent">
			<div class="row">
					
				<div class="col-lg-2 padd10 ">
					<a href="<?=URL?>/inventories/add" class="btn Blue s14">
						Nuevo almacen
					</a>
					
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="containerTable">
				<table id="tableCostumers">
					<thead>
						<tr>
							<td>ID</td>
							<td>Nombre</td>
							<td>Uso	</td>
							
							<td>ACCIONES</td>
						</tr>
					</thead>	
					<tbody>
						<?php while($row = mysqli_fetch_array($inventories)){
							switch ($row['utility']) {
								case '1':
									$utility = "PRODUCTO TERMINADO";
									break;
								case '2':
									$utility = "INSUMOS";
									break;
								
								default:
									$utility = "PRODUCTO TERMINADO";
									break;
							}
							?>
						    <tr>
						      	<th><?= $row['id']; ?></th>
						      	<th>
						      		<a href="viewWork/<?= $row['id'];?>"><?= $row['name']; ?></a></th>
						      	<th><?= $utility; ?></th>
						      
						      	<th>
						      		<a href="delete/?id=<?= $row['id'];?>" onclick="deleteCostumer(this);" class="tooltip">
						      			<i class="material-icons s20 cRed">delete</i>
						      			 <span class="tooltiptext">Eliminar</span>
						      		</a>
						      		<a href="edit/?id=<?= $row['id'];?>" onclick=""  class="tooltip">
						      			<i class="material-icons s20 cBlue">edit</i>
										<span class="tooltiptext">Editar</span>
						      		</a>
						      		<a href="newEntry/?id=<?= $row['id'];?>&inventorie=<?= $row['name'] ?>" onclick=""  class="tooltip">
						      			<i class="material-icons s20 cBlue">arrow_forward</i>
										<span class="tooltiptext">Nueva entrada</span>
						      		</a>
						      		<a href="transfer/?id=<?= $row['id'];?>&inventorie=<?= $row['name'] ?>" onclick=""  class="tooltip">
						      			<i class="material-icons s22 cBlue">compare_arrows</i>
										<span class="tooltiptext">Trasferencia</span>
						      		</a>
						      		<a href="inventory/?id=<?= $row['id'];?>&inventorie=<?= $row['name'] ?>" onclick=""  class="tooltip">
						      			<i class="material-icons s20 cBlue">remove_red_eye</i>
										<span class="tooltiptext">Ver inventario</span>
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