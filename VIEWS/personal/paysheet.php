<?php
	

	if(isset($_GET['start_date'])){

		$Start_date = strtotime($_GET['start_date']);
		$date2 = strtotime($_GET['end_date']);
	
		$s_year =  date("Y", $Start_date);
		$s_month  = date("m", $Start_date); 
		$s_day =  date("d", $Start_date);

		$e_year =  date("Y", $date2);
		$e_month  = date("m", $date2); 
		$e_day =  date("d", $date2);

		$start_date = $s_year."-".$s_month."-".$s_day;
		$end_date = $e_year."-".$e_month."-".$e_day;


	}
	$data = $personal->paysheet();

?>
<div class="clear">	</div>
<!-- <div class="mainContainer"> -->
	<div class="containerPanel">	
		
			
			<div class="headContent">
				<h4 class="text-bold">Capturar nomina de cuadrilla</h4>
			</div>
			
			<div class="mainContent ">
				<div class="filters">
					<div class="row">
						<form action="#"  method="post" autocomplete="off" onsubmit="range_date(this);">
							<div class="col-lg-2 ">
								<label for="">Inicio de semana:</label>
								<input type="text" name="startDate" id="startDate" class="block" autocomplete="off">
							</div>

							<div class="col-lg-2 ">
								<label for="">Fin de semana:</label>
								<input type="text" name="endDate" id="endDate" class="block" autocomplete="off">
							</div>
							<div class="col-lg-2 ">
								<br>
								
								<input type="submit" value="Generar" onclick="setDates();">
							
							</div>
						</form>
					</div>
				</div>

				<div class="clear"></div>

				
				<?php 
				while ($row = mysqli_fetch_array($data)) {
						$x = 1;
					$name = $row['name']." ".$row['second_name']." ".$row['last_name']." ".$row['second_last_name']; ?>
					<div class="clear"></div>
					<div class="row <?= (!isset($_GET['start_date'])) ? 'hidden' : null ; ?>">
						<div class="col-lg-12 ">
							<div class="containerTableClose">
								<div class="row headC">
									<div class="col-lg-11">
										<div class="block h40">
											<div class="content middle">
												<h5><?= $name ?></h5>
											</div>
												
										</div>
										
									</div>
									<div class="col-lg-1">
										<div class="block h40">
											<div class="content middle">
												<i class="material-icons">
												keyboard_arrow_down
												</i>
											</div>
												
										</div>
									
									</div>
								</div>
								<div class="row mainC h0">
									<form class="containerTable" action="" autocomplete="off" method="post" class="bgRed padd10" onsubmit="savePayshet(this);">
										<div class="containerTable">
											<input type="hidden" name="id_work" id="" value="<?= $row['id'];?>">
											<table>
												<thead>
													<tr>
														<td>FECHA</td>
														<td>ASISTENCIA</td>
														<td>TIEMPO EXTRA</td>
														<td>LUGAR</td>
														<td>PRECIO</td>
														

													</tr>
												</thead>
												<tbody>
			
													<?php for ($i=$start_date;$i<=$end_date; $i = date("Y-m-d", strtotime($i ."+ 1 days"))){ ?>
										    
														<tr>
															
															<th>
																<?= $i ?>
																<input type="hidden" name="date_<?= $x?>" value="<?= $i?>">
																<input type="hidden" name="nDays" value="<?= $x?>">
																</th>
															<th>
																<select name="assistence_<?= $x ?>" id="assistence" class="day">
													      			<option value="1">1</option>
													      			<option value="0.5">.5</option>
													      			<option value="0">0</option>
													      		</select>
															</th>
															<th>
																<input type="number" width="50" name="time_<?= $x ?>" value="0">
															</th>
															<th>
																<select name="place_<?= $x ?>" id="place" onchange="selectPlace(this);">
													      			<option value="1">empaque</option>
													      			<option value="2">campo</option>
													      			<option value="3">destajo</option>
													      		</select>
															</th>
															<th>
																<input type="number" width="50" name="price_<?= $x ?>"  value="0">
															</th>

														</tr>
													<?php $x++; } ?>
									

												
												</tbody>
											</table>
										</div>
										
										<div class="footerC">
											<div class="row">
												<div class="col-lg-2 ">
													<button class="btn Green s14" type="submit">
														Guardar nomina
													</button>
												</div>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

		<div class="row">
			<div class="col-lg-2">
		<a href="<?=URL?>personal/" class="padd10 block">Volver</a>
				
			</div>
			<div class="col-lg-2">
				<?php if(isset($_GET['start_date'])){ ?>
					<a href="<?=URL?>personal/prePayshet/" class="padd10 block">Prenomina</a>
				<?php 	} ?>
				
			</div>
		</div>
	
	</div>

<!-- </div> -->
