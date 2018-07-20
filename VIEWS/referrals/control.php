<?php 
	$data = $referrals->control();

?>
<!-- <div class="mainContainer">
	<div class="clear"></div> -->
	<div class="containerPanel">
	
		<div class="headContent">
			<h4 class="text-bold">Control de remisiones</h4>
		</div>
		<div class="mainContent">
			<div class="containerTable">
			<div class="table-responsive">
				<table id="tableWorks">
					<thead>
						<tr>
							<td>ID</td>
							<td>FECHA</td>
							<td>FLETE</td>
							<td>EMBARQUE</td>
							<td>CARGA</td>
							<td>USUARIO</td>
							<td>ARCHIVOS</td>
							<td>ACCIONES</td>
						</tr>
					</thead>	
					<tbody>
						<?php while($row = mysqli_fetch_array($data)){?>
						    <tr>
				
						      	<th><?= $row['id']; ?></th>
						      	<th><?= $row['date']; ?></th>
						      	<th><?= $row['f_flete']; ?></th>
						      	<th><?= $row['f_embarque']; ?></th>
						      	<th><?= $row['f_carga']; ?></th>
						      	<th><?= $row['user']; ?></th>
						      	<th>
						      		<a href="<?=URL?>VIEWS/pdf_files/referrals/rem_<?= $row['name_file']; ?>" target="_blank" class="">
						      			<span title="Remisión">
									      	<i class="btn btn-primary btn-xs far fa-file-pdf btn_padd"></i>
										</span>
									</a>
									<a href="<?=URL?>VIEWS/pdf_files/responsives/res_<?= $row['name_file']; ?>" target="_blank" class="">
						      			<span title="Responsiva">
									      	<i class="btn btn-primary btn-xs far fa-file-pdf btn_padd"></i>
										</span>
									</a>
						      	</th>
						      	
						      	<th>
						      		<a href="deleteWork/<?= $row['id'];?>" onclick="deleteWork(this);" class="">
						      			<span title="Eliminar">
						      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
						      			 </span>
						      		</a>
						      		<a href="<?= URL?>referrals/editRemision/?id_ref=<?= $row['id'];?>"  class="">
						      			 <span title="Editar">
							      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
						      			 </span>
						      		</a>
						      		<a href="<?= URL?>referrals/refarralsReport/?id=<?= $row['id'];?>" class="">
										<span title="Reporte Remisión">
							      			<i class="btn btn-success btn-xs fas fa-dollar-sign btn_padd"></i>
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
	</div>
<!-- </div> -->