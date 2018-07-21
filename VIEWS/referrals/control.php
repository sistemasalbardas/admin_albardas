<?php 
	$data = $referrals->control();

?>
<div class="mainContainer">
	<div class="clear"></div>
	<div class="containerPanel">
	
		<div class="headContent">
			<h4 class="text-bold">Control de remisiones</h4>
		</div>
		<div class="mainContent">
			<div class="containerTable">
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
					      		<a href="<?=URL?>VIEWS/pdf_files/referrals/rem_<?= $row['name_file']; ?>" target="_blank" class="tooltip">
					      			<i class="material-icons s14"> open_in_new </i>
									 <span class="tooltiptext">Remision</span>
								</a>
								<a href="<?=URL?>VIEWS/pdf_files/responsives/res_<?= $row['name_file']; ?>" target="_blank" class="tooltip">
					      			<i class="material-icons s14"> open_in_new </i>
									 <span class="tooltiptext">Responsiva</span>
								</a>
					      	</th>
					      	
					      	<th>
					      		<a href="deleteWork/<?= $row['id'];?>" onclick="deleteWork(this);" class="tooltip">
					      			<i class="material-icons s20 cRed">delete</i>
					      			 <span class="tooltiptext">Eliminar</span>
					      		</a>
					      		<a href="<?= URL?>referrals/editRemision/?id_ref=<?= $row['id'];?>"  class="tooltip">
					      			<i class="material-icons s20 cBlue">edit</i>
									<span class="tooltiptext">Modificar remision</span>
					      		</a>
					      		<a href="<?= URL?>referrals/refarralsReport/?id=<?= $row['id'];?>" class="tooltip">
									<i class="material-icons">assessment</i>
									<span class="tooltiptext">Reporte remision</span>

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