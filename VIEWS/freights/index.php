<?php 
	$data = $freights->index();
	$costumers = $freights->listCostumers();
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
				<table id="tableCostumers" class="table bgWhite">
					<thead>
						<tr>
							<th scope="col" >ID</th>
							<th scope="col" >FOLIO FLETE</th>
							<th scope="col" >FOLIO EMBARQUE</th>
							<th scope="col" >CLIENTE</th>
							<th scope="col" >PRECIO</th>
							<th scope="col" >TOTAL</th>
							<th scope="col" >ACCIONES</th>
						</tr>
					</thead>	
					<tbody>
						<?php while($row = mysqli_fetch_array($data)){?>
							<tr>
								<th><?= $row['id']; ?></th>
								  <th><?= $row['f_flete']; ?></th>
								  <th><?= $row['f_embark']; ?></th>
								  <th><?php
									  if ($row['id_client']  == 1) {
										  echo "Albardas";
									  }else{
										  echo $row['id_client'];
									  }
								  ?></th>
								  <th> $ <?= $row['price']. " - ".$row['currency']; ?></th>
								  <th> $ <?= $row['total']; ?></th>
				
				
				
				
								
								  <th>
									  <a href="delete/?id=<?= $row['id'];?>" onclick="erase(this);" class="tool">
										   <i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
										  <span class="tooltext">Eliminar</span>
										   
									  </a>
									  <a href="edit/?id=<?= $row['id'];?>" class="tool">
										  <i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
										  <span class="tooltext">Editar</span>	 
									  </a>
									  
								  </th>
				
							</tr>
						<?php } ?>
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