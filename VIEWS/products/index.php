<?php 
	$data = $products->index();
 ?>

<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title text-600">Listado de productos</h3>
	      <div class="box-tools pull-right">
	      	                
                <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            
           </div>
	    </div>
		<div class="box-body padd10 bgWhite table-responsive">
			<div class="row">
				<div class="col-lg-2  ">
					<a href="<?= URL?>products/add/" class="btn btn-primary s14">Nuevo producto</a>
				</div>
				
			</div>
			<div class="clear"></div>
			<table id="tableCostumers" class="table bgWhite">
				<thead>
					<tr>
						<th scope="col" >ID</th>
						<th scope="col" >NOMBRE</th>
						<th scope="col" >CALIDAD</th>
						<th scope="col" >TAMAÑO</th>
						<th scope="col" >EMPAQUE</th>
						<th scope="col" >MARCA</th>
						<th scope="col" >PESO</th>
						<th scope="col" >ACCIONES</th>
					</tr>
				</thead>	
				<tbody>
					<?php while($row = mysqli_fetch_array($data)){?>
					    <tr>
					    	<th><?= $row['id']; ?></th>
								      	<th>
								      		<?= $row['name']; ?>
								      	</th>
								      	<th><?= $row['quality']; ?></th>
								      	<th><?= $row['size']; ?></th>
								      	<th><?= $row['pack']; ?></th>
								      	<th><?= $row['brand']; ?></th>
								      	<th>
								      		<?= $row['weight'].' '.$row['unit_measure']; ?>
								      	</th>
								      	
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
		<div class="box-footer">
		</div>
	</div>
</div>