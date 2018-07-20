<?php 
	$data = $products->index();
 ?>
<!-- <div class="mainContainer">
	<div class="clear"></div> -->
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">Control de productos</h4>
		</div>
		<div class="mainContent">
			<div class="row">
				<div class="col-lg-2 padd10 ">
					
					<a href="<?= URL?>products/add/" class="btn bgBlue s14">Nuevo producto</a>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="containerTable table-responsive">
						<table id="tableCostumers">
							<thead>
								<tr>
									<td>ID</td>
									<td>NOMBRE</td>
									<td>EMPAQUE</td>
									
					
									<td>ACCIONES</td>
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($data)){?>
								    <tr>
								      	<th><?= $row['id']; ?></th>
								      	<th>
								      		<?= $row['name']; ?>
								      	</th>
								      	<th><?= $row['type_pack']; ?></th>
								      	
								      	<th>
								      		<a href="delete/?id=<?= $row['id'];?>" onclick="erase(this);" class="">
								      			<span title="Eliminar">
								      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
								      			 </span>
								      		</a>
								      		<a href="edit/?id=<?= $row['id'];?>" class="">
								      			<span title="Editar">
									      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
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