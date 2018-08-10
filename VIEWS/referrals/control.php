<?php 
	$data = $referrals->control();

	//PREMISOS PARA REMISIONES
	$permits = $referrals->permits();
	$read = $permits[3];
	$write = $permits[4];
	$edit = $permits[5];
	$delete = $permits[6];

?>
<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title text-600">Control de remisiones</h3>
	      <div class="box-tools pull-right">
	      	                
                <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            
           </div>
	    </div>
		<div class="box-body padd10 bgWhite table-responsive">

			<?php if ($write == 1) { ?>
				<a href="<?=URL?>referrals/" class="btn btn-primary">Nueva remision</a>
			<?php } ?>
			<div class="clear"></div>

			<table id="tableCostumers" class="table bgWhite">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">FECHA</th>
						<th scope="col">FLETE</th>
						<th scope="col">EMBARQUE</th>
						<th scope="col">CARGA</th>
						<th scope="col">ARCHIVOS</th>
						<th scope="col">ACCIONES</th>
					</tr>
				</thead>	
				<tbody>
					<?php while($row = mysqli_fetch_array($data)){?>
						<tr>
				    		<th><?= $row['id']; ?></th>
					      	<th><?= $row['date']; ?></th>
					      	<th><?= $row['f_freight']; ?></th>
					      	<th><?= $row['f_embark']; ?></th>
					      	<th><?= $row['f_charge']; ?></th>
					      	<th>
					      		<a href="<?=URL?>VIEWS/pdf_files/referrals/<?= $row['file_remision']; ?>" target="_blank" class="tool" download>
							      	<i class="btn btn-primary btn-xs fas fa-file-invoice btn_padd s16"></i>
					      			<span class="tooltext">Remisión</span>
								</a>
								<a href="<?=URL?>VIEWS/pdf_files/responsives/<?= $row['file_responsive']; ?>" target="_blank" class="tool" download>
							      	<i class="btn btn-primary btn-xs fas fa-file-alt  btn_padd s16"></i>
					      			<span class="tooltext">Responsiva</span>
								</a>
								<?php 
								if (!empty($row['file_edited'])) {?>
									<a href="<?=URL?>VIEWS/pdf_files/referrals/EDIT_REM_<?= $row['file_edited']; ?>.pdf" target="_blank" class="tool" download>
											<i class="btn btn-success btn-xs fas fa-file-invoice btn_padd s16"></i>
						      			<span class="tooltext">Remision modificada</span>
									</a>
									<a href="<?=URL?>VIEWS/pdf_files/responsives/EDIT_RES_<?= $row['file_edited']; ?>.pdf" target="_blank" class="tool" download>
								      	<i class="btn btn-success btn-xs far fa-file-alt btn_padd s16"></i>
						      			<span class="tooltext">Responsiva modificada</span>
									</a>
								<?php } ?>
					      	</th>
					      	<th>
					      		<?php if ($delete == 1) { ?>
						      		<a href="deleteWork/<?= $row['id'];?>" onclick="deleteWork(this);" class="tool">
						      			<i class="btn btn-danger btn-xs fas fa-trash btn_padd "></i>
								      	<span class="tooltext">Eliminar</span>
						      		</a>
					      		<?php } ?>

					      		<?php if ($edit == 1) { ?>
						      		<a href="<?= URL?>referrals/edit/?id_ref=<?= $row['id'];?>&employe=<?= $row['id_employe'];?>&costumer=<?= $row['id_costumer'];?>&transport=<?= $row['id_trasport'];?>&driver=<?= $row['id_driver'];?>&box=<?= $row['id_box'];?>&truck=<?= $row['id_truck'];?>&add=<?= $row['id_add'];?>"  class="tool">
						      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
						      			<span class="tooltext">Editar</span>
						      			 
						      		</a>


						      		<a href="<?= URL?>referrals/refarralsReport/?id=<?= $row['id'];?>" class="tool">
						      			<i class="btn btn-success btn-xs fas fa-dollar-sign btn_padd"></i>
										<span class="tooltext">Rep. Remisión</span>			 
									</a>
								<?php } ?>
			 				</th>
					    </tr>
					<?php } ?>
				</tbody>
			</table>

		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>