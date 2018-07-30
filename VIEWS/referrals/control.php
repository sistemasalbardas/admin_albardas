<?php 
	$data = $referrals->control();

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
						      		<a href="<?=URL?>VIEWS/pdf_files/referrals/<?= $row['file_remision']; ?>" target="_blank" class="tool">
								      	<i class="btn btn-primary btn-xs far fa-file-pdf btn_padd"></i>
						      			<span class="tooltext">Remisión</span>
										
									</a>
									<a href="<?=URL?>VIEWS/pdf_files/responsives/<?= $row['file_responsive']; ?>" target="_blank" class="tool">
								      	<i class="btn btn-primary btn-xs far fa-file-pdf btn_padd"></i>
						      			<span class="tooltext">Responsiva
										
									</a>
						      	</th>
						      	<th>
						      		<a href="deleteWork/<?= $row['id'];?>" onclick="deleteWork(this);" class="tool">
						      			<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
								      	<span class="tooltext">Eliminar</span>
						      		</a>
						      		<a href="<?= URL?>referrals/editRemision/?id_ref=<?= $row['id'];?>&employe=<?= $row['id_employe'];?>&costumer=<?= $row['id_costumer'];?>&transport=<?= $row['id_trasport'];?>&driver=<?= $row['id_driver'];?>&box=<?= $row['id_box'];?>&truck=<?= $row['id_truck'];?>&add=0"  class="tool">
						      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
						      			<span class="tooltext">Editar</span>
						      			 
						      		</a>

						      		<a href="<?= URL?>referrals/refarralsReport/?id=<?= $row['id'];?>" class="tool">
						      			<i class="btn btn-success btn-xs fas fa-dollar-sign btn_padd"></i>
										<span class="tooltext">Rep. Remisión</span>			 
									</a>
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