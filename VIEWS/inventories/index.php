<?php 
	$inventories = $inventories->index();
?>


<!-- <div class="mainContainer"> -->
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
			<div class="containerTable table-responsive">
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
						      		<a href="delete/?id=<?= $row['id'];?>" onclick="deleteCostumer(this);" class="">
						      			<span title="Eliminar">
						      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
						      			 </span>
						      		</a>
						      		<a href="edit/?id=<?= $row['id'];?>" onclick=""  class="">
						      			<span title="Editar">
							      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
						        		</span>
						      		</a>
						      		<a href="newEntry/?id=<?= $row['id'];?>&inventorie=<?= $row['name'] ?>" onclick=""  class="">
						      			<span title="Nueva Entrada">
							      			<i class="btn btn-primary btn-xs fas fa-arrow-right  btn_padd"></i>
										</span>
						      		</a>
						      		<a href="transfer/?id=<?= $row['id'];?>&inventorie=<?= $row['name'] ?>" onclick=""  class="">
						      			<span title="Transferencia">
							      			<i class="btn btn-info btn-xs fas fa-exchange-alt cBlue btn_padd"></i>	
										</span>
						      		</a>
						      		<a href="inventory/?id=<?= $row['id'];?>&inventorie=<?= $row['name'] ?>" onclick=""  class="">
						      			<span title="Ver Inventario">
							      			<i class="btn btn-xs btn-success fas fa-eye cGreen btn_padd"></i>
										</span>
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