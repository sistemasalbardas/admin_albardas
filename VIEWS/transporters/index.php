<?php 
	$data = $transporters->index();

	$permits = $transporters->permits();

	$read = $permits[3];
	$write = $permits[4];
	$edit = $permits[5];
	$delete = $permits[6];
 ?>
<!-- <div class="mainContainer"> -->
	<div class="col-md-12">
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title text-600">
				   Control de transportistas
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
								<?php if ($write == 1) { ?>
									<a href="<?= URL?>transporters/add/" class="btn btn-primary sblue"><span class="icon-codeforces"></span>  Nuevo transportista</a>
								<?php } ?>
							</div>
						</div>
						<div class="clear"></div>
							<div class="containerTable table-responsive">
									<table id="tableTransporters">
										<thead>
											<tr>
												<td>IDD</td>
												<td>RAZÓN SOCIAL</td>
												<td>RFC	</td>
												<td>TELEFONO</td>
								
												<td>ACCIONES</td>
											</tr>
										</thead>	
										<tbody>
											<?php while($row = mysqli_fetch_array($data)){?>
												<tr>
													<th><?= $row['id']; ?></th>
													<th>
														<a href="viewWork/<?= $row['id'];?>"><?= $row['name']; ?></a></th>
													<th><?= $row['rfc']; ?></th>
													<th><?= $row['phone']; ?></th>
													<th>
														<?php if ($delete == 1) { ?>
															<a href="delete/?id=<?= $row['id'];?>" onclick="erase(this);" class="tool">
																<i class="btn btn-danger btn-xs btn_padd s16"><span class="icon-trash"></span></i>
																<span class="tooltext">Eliminar</span>
															</a>
														<?php } ?>
														<?php if ($edit == 1) { ?>
															<a href="edit/?id=<?= $row['id'];?>" class="tool">
																	<i class="btn btn-warning btn-xs s16 btn_padd"><span class="icon-pencil"></span></i>
																	<span  class="tooltext">Editar</span>
															</a>
														
															<a href="drivers/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tool">
																	<i class="btn btn-primary btn-xs material-icons  btn_padd">directions_car</i>
																	<span class="tooltext" >Choferes </span>
																	
															</a>
															<a href="box/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tool">
																<i class="btn btn-info btn-xs cBlue btn_padd s16"><span class="icon-sweden"></span></i>	
																<span class="tooltext">Cajas</span>
															</a>

															<a href="trucks/?id=<?= $row['id'];?>&name=<?= $row['name'] ?>" onclick=""  class="tool">
																<i class="btn btn-xs btn-success s16 cGreen btn_padd"><span class="icon-truck"></span></i>
																<span class="tooltext">Trailers</span>			
															</a>
														<?php } ?>
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
	
