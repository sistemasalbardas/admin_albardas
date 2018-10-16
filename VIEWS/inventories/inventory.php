<?php 
	$inventories = $inventories->inventory();
?>
<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
				<?=$_GET['inventorie']?>
			</h3>
			<div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			
				<div class="row">
					<div class="col-lg-2">
						<a href="<?=URL?>/inventories/newEntry/?id=<?=$_GET['id']?>&inventorie=<?= $_GET['inventorie'] ?>" class="btn btn-primary sblue">
							Nueva entrada
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
								<td>Disponible</td>
								
								<td>ACCIONES</td>
							</tr>
						</thead>	
						<tbody>
							<?php while($row = mysqli_fetch_array($inventories)){ 
									//print_r($row);
								?>
								<tr>
									<th><?= $row['id']; ?></th>
									<th>
										<a href="viewWork/<?= $row['id'];?>"><?= $row['name_product']; ?></a></th>
									<th><?= $row['quantity']; ?></th>
								
									<th>
										
									
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
	

	
		
		
