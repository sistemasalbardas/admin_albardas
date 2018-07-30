<?php 
	$data = $transporters->box();
 ?>
<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
			Control de cajas de  <span class="text-decoration"><?= $_GET['name'];?></span>
			</h3>
			<div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
		</div>
		<div class="box-body padd10 bgWhite">
			<div class="mainContent">
				<div class="row">
					<div class="col-lg-2 padd10 ">
						<a href="<?= URL?>transporters/addBox/?id=<?= $_GET['id'];?>&nameTransport=<?= $_GET['name'] ?>" class="btn btn-primary sblue "><i class="fas fa-truck-loading"></i> Nueva caja</a>
					</div>
				</div>
				<div class="clear"></div>
				<div class="containerTable table-responsive">
							<table id="tableCostumers">
								<thead>
									<tr>
										<td>ID</td>
										<td>TIPO</td>
										<td>TEMPERATURA</td>
										<td>PLACAS</td>
										<td>ECONOMICO</td>
										<td>ACCIONES</td>
									</tr>
								</thead>	
								<tbody>
									<?php while($row = mysqli_fetch_array($data)){?>
										<tr>
											<th><?= $row['id']; ?></th>
											<th>
												<a href="viewWork/<?= $row['id'];?>"><?= $row['type']?></a>
											</th>
											<th><?= $row['temperature'].' '.$row['grades']; ?></th>
											<th><?= $row['placa']; ?></th>
											<th><?= $row['num_econ']; ?></th>
											<th>
												<a href="<?=URL?>transporters/deleteBox/?id=<?= $row['id'];?>" onclick="erase(this);" class="tool">
													<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
													<span class="tooltext">Eliminar</span>
													
												</a>
												<a href="<?=URL?>transporters/editBox/?id_box=<?= $row['id'];?>&id=<?= $_GET['id'] ?>&nameTransport=<?= $_GET['name'] ?>" class="tool">
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
		</div>
		<div class="box-footer">
				<footer class="main-footer text-center">
					<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
				</footer>
		</div>
	</div>
</div>
