
<?php 
	$fecha = $datos['start_date'];
	$nuevafecha = strtotime ( '+'.$datos['contract_time'].' day' , strtotime ( $fecha ) ) ;
	$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
	//echo $nuevafecha; 

	
?>
<!-- <div class="mainContainer"> -->
	<div class="containerPanel">	
		<form action="" method="post" class="saveWork" onsubmit="updateWork(this);">
		
			<div class="headContent">
				<h4 class="text-bold">Informacion del trabajador: <?= $datos['name'];?></h4>
			</div>

			<div class="mainContent mW800">
					<input type="hidden" name="id" value="<?= $datos['id'];?>">
					<input type="hidden" name="cuadrilla" id="cuadrilla" value="<?= $datos['cuadrilla'] ?>">
					<div class="row">
					<div class="col-lg-2">
						<img src="<?= URL_IMG ?>/profile.jpg" alt="" width="100%">
						
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="row">
								<div class="col-lg-10 ">
									<label for="second_name" class="text-600 s16">Nombre:</label> 
									<span class="s14 ">
										<i>
									<?= $datos['name'].' '.$datos['second_name'].' '.$datos['last_name'].' '.$datos['second_last_name']?>
										</i>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 ">
									<label for="second_name" class="text-600 s16">Curp:</label> 
									<span class="s14 "><i><?= $datos['curp']?></i></span>
								</div>
								<div class="col-lg-6 ">
									<label for="second_name" class="text-600 s16">Fecha nac:</label> 
									<span class="s14 "><i><?= $datos['date_bird']?></i></span>
								</div>
							</div>
						

							<!--SLARIO POR DIA / t contrato / Status actiañ-->
							<div class="row">
								<div class="col-lg-4 ">
									<label for="second_name" class="text-600 s16">Salario dia:</label> 
									<span class="s14 "><i> $ <?= $datos['salary_day']?></i></span>
								</div>
								<div class="col-lg-4 ">
									<label for="second_name" class="text-600 s16">T contrato:</label> 
									<span class="s14 "><i><?= $datos['contract_time']?> dias</i></span>
								</div>
								<div class="col-lg-4 ">
									<label for="second_name" class="text-600 s16">Status:</label> 
									<span class="s14 ">
										<i>
											<?php if($datos['status'] == 1){
											echo "Activo";
											}else if($datos['status'] == 2){
												echo "In - activo";
											}else if($datos['status'] == 3){
												echo "Baja";
											}?>
										</i>
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<label for="second_name" class="text-600 s16">Inicio de contrato:</label>
									<?= $datos['start_date']?>
								</div>
								<div class="col-lg-6">
									<label for="second_name" class="text-600 s16">Fin de contrato:</label>
									<?= $nuevafecha; ?>
								</div>
							</div>
							

							<div class="row">
								<div class="col-lg-12">
									<label for="second_name" class="text-600 s16">Direccion:</label> 
									<span class="s14 "><i><?= $datos['origin_place']?> </i></span>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label for="second_name" class="text-600 s16">Comentarios / enfermedades:</label> 
									<span class="s14 "><i><?= $datos['diaseases']?> </i></span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="footerModal">
				<div class="row">
					<div class="col-lg-2 ">
						<a href="../" class="text-bold">
							<i class="material-icons s14 text-bold">arrow_back_ios</i>Volver</a>
					</div>
					<div class="col-lg-2 ">
						<a href="<?= URL?>personal/editWork/<?= $datos['id'];?>" class="text-bold">
							
							Editar</a>
					</div>
					<div class="col-lg-2 ">
						<a href="<?= URL?>personal/deleteWork/<?= $datos['id'];?>" class="text-bold">
							Eliminar</a>
					</div>
				</div>
			</div>
		</form>
	</div>
<!-- </div> -->

