<?php 
	$data = $freights->index();

	$permits = $freights->permits();
	$read = $permits[3];
	$write = $permits[4];
	$edit = $permits[5];
	$delete = $permits[6];
 ?>


<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title text-600">Control de fletes </h3>
	      <div class="box-tools pull-right">
	      	                
                <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            
           </div>
	    </div>
		<div class="box-body padd10 bgWhite table-responsive">
			
			<div class="clear"></div>
			<div class="containerTable table-responsive">
				<table id="tableFreights" class="table bgWhite">
					<thead>
						<tr>
							<th scope="col" >ID</th>
							<th scope="col" >FECHA</th>
							<th scope="col" >FOLIO FLETE</th>
							<th scope="col" >FOLIO EMBARQUE</th>
							<th scope="col" >FACTURA</th>
							<th scope="col" >CLIENTE</th>
							<th scope="col" >PRECIO</th>
							<th scope="col" >TOTAL</th>
							<th scope="col" >ACCIONES</th>
						</tr>
					</thead>	
					<tbody>
						<?php $total_final = 0; ?>
						<?php while($row = mysqli_fetch_array($data)){?>
							<?php $total_final = $total_final + $row['total'];?>
							<tr>
								<th><?= $row['id']; ?></th>
								<th><?= $row['date']; ?></th>
								  <th><?= $row['f_freight']; ?></th>
								  <th><?= $row['f_embark']; ?></th>
								  <th><?= $row['n_bills']; ?></th>
								  <th><?php
									  if ($row['id_client']  == 1) {
										  echo "Albardas";
									  }else{
										  echo $row['name'];
									  }
								  ?></th>
								  <th> $ <?= $row['price']. " - ".$row['currency']; ?></th>
								  <th> $ <?= $row['total']; ?></th>
				
				
				
				
								
								  <th>
								  	<?php if ($edit == 1) { ?>
									  <a href="delete/?id=<?= $row['id'];?>" onclick="erase(this);" class="tool">
										   <i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
										  <span class="tooltext">Eliminar</span>
										   
									  </a>
									<?php } ?>
									<?php if ($delete == 1) { ?>
									  <a href="edit/?id=<?= $row['id'];?>" class="tool">
										  <i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
										  <span class="tooltext">Editar</span>	 
									  </a>
									  <a href="status/?id=<?= $row['f_freight'];?>" class="tool">
										  <i class="btn btn-success btn-xs fas fa-dollar-sign btn_padd"></i>
										  <span class="tooltext">Status</span>	 
									  </a>
									<?php } ?>
									  
								  </th>
				
							</tr>
						<?php } ?>
							<tr role="row">
								<th>Monto</th>
								<th></th>
								<th></th>
								<th></th>
								<th class="text-right">Total</th>
								<th class="text-left"><?=number_format($total_final,2,'.',',')?></th>
								<th></th>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>