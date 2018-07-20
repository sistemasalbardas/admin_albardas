<?php 
	$data = $transporters->index();
 ?>
<!-- <div class="mainContainer"> -->
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
			<div class="containerTable table-responsive">
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
								      		<a href="drivers/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="">
												<span title="Choferes">
									      			<i class="btn btn-primary btn-xs fas fa-car  btn_padd"></i>
												</span>
								      		</a>
								      		<a href="box/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="">
												<span title="Cajas">
									      			<i class="btn btn-info btn-xs fas fa-truck-loading cBlue btn_padd"></i>	
												</span>
								      		</a>

								      		<a href="trucks/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="">
												<span title="Trailers">
								      			<i class="btn btn-xs btn-success fas fa-truck cGreen btn_padd"></i>
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