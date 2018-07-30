<?php 
	$inventories = $inventories->index();
?>

<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
				ALMACENES
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
						<a href="<?=URL?>/inventories/add" class="btn btn-primary sblue">
							Nuevo almacen
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
								<td>Uso	</td>
								
								<td>ACCIONES</td>
							</tr>
						</thead>	
						<tbody>
							<?php while($row = mysqli_fetch_array($inventories)){
								switch ($row['utility']) {
									case '1':
										$utility = "PRODUCTO TERMINADO";
										break;
									case '2':
										$utility = "INSUMOS";
										break;
									
									default:
										$utility = "PRODUCTO TERMINADO";
										break;
								}
								?>
								<tr>
									<th><?= $row['id']; ?></th>
									<th>
										<a href="viewWork/<?= $row['id'];?>"><?= $row['name']; ?></a></th>
									<th><?= $utility; ?></th>
								
									<th>
										<a href="delete/?id=<?= $row['id'];?>" onclick="deleteCostumer(this);" class="tool">
											<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
											<span class="tooltext">Eliminar </span>
											
										</a>
										<a href="edit/?id=<?= $row['id'];?>" onclick=""  class="tool">
											<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
											<span class="tooltext">Editar</span>
											
										</a>
										<a href="newEntry/?id=<?= $row['id'];?>&inventorie=<?= $row['name'] ?>" onclick=""  class="tool">
											<i class="btn btn-primary btn-xs fas fa-arrow-right  btn_padd"></i>
											<span class="tooltext">Nueva Entrada</span>
											
										</a>
										<a href="transfer/?id=<?= $row['id'];?>&inventorie=<?= $row['name'] ?>" onclick=""  class="tool">
											<i class="btn btn-info btn-xs fas fa-exchange-alt cBlue btn_padd"></i>	
											<span class="tooltext">Transferencia</span>
											
										</a>
										<a href="inventory/?id=<?= $row['id'];?>&inventorie=<?= $row['name'] ?>" onclick=""  class="tool">
											<i class="btn btn-xs btn-success fas fa-eye cGreen btn_padd"></i>
											<span class="tooltext">Ver Inventario</span>
											
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

		
