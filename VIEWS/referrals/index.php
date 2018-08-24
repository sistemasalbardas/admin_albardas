<?php 	

	$data = $referrals->selectCostumers();
	$dataProducts = $referrals->allPorducts();
	$listP = $referrals->listarP();
	$addreses = $referrals->selectAddres();
	$add = $referrals->selectAdd();
	$transporters = $referrals->selectTransporters();
	$transporter = $referrals->selectTransporter();
	$drivers = $referrals->drivers();
	$driver = $referrals->driver();
	$trucks	= $referrals->trucks();
	$truck = $referrals->truck();
	$boxes = $referrals->boxes();
	$box = $referrals->box();
	//print_r($reftransportererrals->products());
	//$dataPrody = $referrals->selectCostumers();
	$costumer = $data['costumer'];
	$list = $data['list'];
	
	//print_r($data['list']);
 ?>
 <div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header with-border padd10">
	      <h3 class="box-title text-600">Generador de remisiones</h3>
	      <div class="box-tools pull-right">
	      	                
                <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            
           </div>
	    </div>
		<div class="box-body padd10">
				<?php if (!isset($_GET['nCharge'])){
				unset($_SESSION['infoFreight']);
			?>
			<div class="row ">	
				<div class="col-lg-3 ">	
					<div class="block h40 text-center">	
						<div class="middle content">
							<label for="nCharge">Numero de embarques:</label>
						</div>
					</div>	
				</div>	
				<div class="col-lg-1 col-md-2">	
					<select name="n" id="nCharge" class="form-control" onchange="nCharge(this);" required="">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</div>
			</div>
		    <?php 	} ?>

			<?php 	if (isset($_GET['nCharge'])	) {
				$nCharge  = $_GET['nCharge'];
				$tab  = $_GET['tab'];
				?>
			<ul class="tabs"> 
				<?php 	
					$x = 1;
					while( $x <= $nCharge ) { ?>
						<li class="<?= ($tab == $x) ? 'current' : null ; ?> tabP" id="" > 
							<a href="#">Remision <?= $x?></a>
						</li>
				<?php $x++; }  ?>
			</ul>
			<div class="tam_frm">
				<form action="" class=" frm_rem padd25 padd10 border form-horizontal block" method="post" action="" onsubmit="generateRemision(this);">
				
					<input type="hidden" name="nCharge" value="<?= $_GET['nCharge']?>">
					<input type="hidden" name="tab" value="<?= $_GET['tab']?>">
					<input type="hidden" name="employe" value="<?= $_GET['employe']?>">
					<input type="hidden" name="costumer" value="<?= $_GET['costumer']?>">
					<input type="hidden" name="city" id="city" value="<?= $add['city']?>">
				
					<input type="hidden" name="transport" id="transport" value="<?= $_GET['transport']?>">
					<input type="hidden" name="driver" id="driver" value="<?= $_GET['driver']?>">
					<input type="hidden" name="id_box" id="id_box" value="<?= $_GET['box']?>">
					<input type="hidden" name="add" id="add" value="<?= $_GET['add']?>">
					<input type="hidden" name="truck2" id="truck2" value="<?= $_GET['truck']?>">
				
				
				
				
				
					<input type="hidden" name="f_embark" value="f_embark">
					<input type="hidden" name="f_charge" value="f_charge">
				
					
					<?php if ($_GET['tab'] == $_GET['nCharge']) {?>
						<input type="hidden" name="f_freight" value="f_freight">
					<?php } ?>
				
					<div class="row">	
						<div class="col-lg-12 text-center border padd10B">	
							<h3 class="s18 text-600 text-uppercase">Remision de salida</h3>
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="bxs col-lg-offset-5 col-xs-12 col-sm-6 col-lg-3">
							<div class="clear"></div>
								<div class="form-group">
									<label for="datepicker" class="control-label">Fecha: </label>
									<div class="input-group date" >	
										<input type="date" name="date" id="date" class="form-control" required="">				
										<!--<input type="text" class="form-control" id="datepicker" name="date" required="">-->
										<span class="input-group-addon">
										<i class="fas fa-calendar-alt"></i>
										</span>
									</div>
								</div>
						</div>
						<div class="bxs col-lg-offset-1 col-xs-12 col-sm-6 col-lg-3">
							<div class="clear"></div>
								<div class="form-group">
									<label for="datetime" class="control-label">Hora: </label>
									<div class="input-group date" >
										<input type="time" class="form-control" id="datetimepicker3" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-time"></span>
										</span>
									</div>
								</div>
						</div>
						<!-- hbk -->
							<!-- <div class="form-group">
								<label for="time" class="control-label col-md-2">Hora:</label>
								<div class="col-md-10">
									<input type="time" class="form-control" name="time" id="time" required="">
								</div>
							</div> -->
						
					</div>
					<hr>	
					<div class="row">
						<div class="col-lg-12 m5 padd10 ">	
							<!--EMPRESA-->
							<div class="row border padd10">
								<div class="form-group">
									<label for="employe" class="control-label col-md-2"><b>EMPRESA:</b></label>
									<div class="col-md-5">
										<select name="name_employe" id="employe" onchange="setUrl(this);" class="select block selectpicker form-control form-control-sm" data-live-search="true" required="">
										<option value="<?=  $datos['name'];?>"><?=  $datos['name'];?></option>
										<option value="4">El Cegador SPR de RL de CV</option>
										<option value="3">Las Albardas SPR de RL de CV</option>
										<option value="1">El Calabacillal SPR de RL de CV</option>
									</select>
									</div>
								</div>
								<div class="form-group">
									<label for="address_employe" class="control-label col-md-2">DOMICILIO:</label>
									<div class="col-md-5">
										<input type="text" name="address_employe" id="address_employe" value="<?= $datos['addres'];?>" class="w100 block form-control input-sm" required="">
									</div>
								</div>
								<div class="form-group">
									<label for="rfc_employe" class="control-label col-md-2">RFC:</label>
									<div class="col-md-5">
										<input type="text" name="rfc_employe" id="rfc_employe" value="<?= $datos['rfc'];?>" class="w100 block form-control input-sm" required="">
									</div>
								</div>
								<div class="clear">
										<input type="hidden" name="id_employe" id="" value="<?= $datos['id'];?>" class="w100 block" required="">
								</div>
							</div>
							
							<!--CLIENTE-->
							<div class="clear">	</div>
				
							<div class="row border padd10">
								<div class="form-group ">
									<label for="costumer" class="control-label col-md-2"><b>CLIENTE:</b></label>
									<div class="col-md-5">
										<select name="name_costumer" id="costumer" onchange="setUrl(this);" required="" class="select form-control form-control-sm selectpicker"  data-live-search="true">
											<option value="<?= $costumer['name'];?>"><?= $costumer['name'];?></option>
											<?php while($row = mysqli_fetch_array($list)){ ?>
											<option value="<?= $row['id'];?>"><?= $row['name']; ?></option>
										<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="name_costumer" class="control-label col-md-2">DOMICILIO:</label>
									<div class="col-md-5">
										<input type="text" name="address_costumer" id="name_costumer" value="<?= $costumer['address'];?>" required="" class="block form-control input-sm"> 	
									</div>
								</div>
								<div class="form-group">
									<label for="rfc_costumer" class="control-label col-md-2">RFC:</label>
									<div class="col-md-5">
										<input type="text" name="rfc_costumer" id="rfc_costumer" value="<?= $costumer['rfc'];?>" required=""  class="block form-control input-sm">
									</div>
								</div>
								<div class="clear">
									<input type="hidden" name="id_costumer" id="id_costumer" value="<?= $costumer['id'];?>">
									<input type="hidden" name="phone_costumer" value="<?= $costumer['phone'];?>">
								</div>
								
							</div>
							<!--PRODUCTOS-->
							<div class="row">	
								<div class="col-lg-12 ">	
									<br>
									<div class="containerTable table-responsive">	
				
										<table  class="block tableP" id="tableRemisions">	
											<thead>	
												<tr>
													<td>Cantidad</td>
													<td>Concepto</td>
													<td>Precio</td>
													<td>Acciones</td>
												</tr>
											</thead>
											<tbody>	
												<?php
													if (isset($listP)) {
													
													$i = 0;
													foreach ($listP as $key ) {
														$i++;
														$id = key($listP);
														next($listP);
														?>	
														<tr>
															<th class="s12">
																<input type="hidden" name="cant_<?= $i?>" value="<?= $key[2]?>">
																<?= $key[2]?>
															</th>
															<th class="s12">
																<input type="hidden" name="nTab" value="<?=$i?>">
																<input type="hidden" name="name_<?= $i?>" value="<?= $key[1]?>">
				
																<?= $key[1]?>
															</th>
															<th class="s12">$ 0.00</th>
															<th class="s12 text-center">
																<a href="<?= $id;?>" onclick="eraseP(this);" class="tool">
																	<i class="btn btn-danger btn-xs s16 btn_padd"><span class="icon-trash"></span></i>
																	<span class="tooltext">Eliminar</span>
																</a>
															</th>
															
				
														</tr>
												<?php } }
														
													?>
													
														
											
				
											</tbody>
										</table>
				
										</div>
									<div class="block text-center  ">	
										<div class="clear">	</div>
										<button onclick="openModal(this,'searchP');" class="btn btn-primary sblue" type="button">
											Agregar Productos
										</button>
										<div class="clear">	</div>
				
									</div>
									<br>
								</div>
							</div>	
							<?php  if ($_GET['tab'] == 1 ){ ?>
								
								<div class="row">
									<div class="col-lg-6 border padd30">
										<div class="row wh">
											<div class="form-group">
												<label for="transport" class="control-label col-md-4"><b>Transportista:</b></label>
												<div class="col-md-8">
													<select name="name_trasport" id="transport" class="block select form-control form-control-sm selectpicker" data-live-search="true"  onchange="setUrl(this);">
														<option value="<?= $transporter['name']; ?>"><?= $transporter['name']; ?></option>
														<?php while ($row  = mysqli_fetch_array($transporters)) { ?>
														<option value="<?= $row['id']?>"><?= $row['name']?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
										
										<div class="row wh">	
											<div class="form-group">
												<label for="driver" class="control-label col-md-4">Chofer: </label>
												<div class="col-md-8">
													<select name="name_driver" id="driver" class="block select form-control form-control-sm selectpicker" data-live-search="true"  onchange="setUrl(this)">
														<option value="<?= $driver['name']?>"><?= $driver['name'];?></option>
														<?php while ($row  = mysqli_fetch_array($drivers)) { ?>
														<option value="<?= $row['id']?>"><?= $row['name']?></option>
														<?php } ?>
													</select>
												</div>
												<input type="hidden" name="phone_driver" value="<?= $driver['phone'];?>">
											</div>
										</div>						 
									</div>
									<div class="col-lg-6 border padd30">
										<div class="row wh">	
											<div class="form-group">
												<label for="origin" class="control-label col-md-4">Origen: </label>
												<div class="col-md-8">
													<select name="origin" id="origin" class="block form-control form-control-sm selectpicker" data-live-search="true" required="">
														<!-- <option value="">SELECCIONA UNA OPCION </option> -->
														<option value="Parras de la fuente, ejido el calabacillal, Agricola las albardas.">ALBARDAS</option>
														<option value="Carretara Saltillo - matamoros, ejido el Mimbre Coah, Rancho magdalenas.">MAGDALENAS</option>
													</select>
												</div>
											</div>
										</div>
									
				
										<div class="row wh">
											<div class="form-group">
												<label for="add" class="control-label col-md-4">Destino: </label>
												<div class="col-md-8">
													<select name="destination" id="add" class="block form-control form-control-sm selectpicker" data-live-search="true" required onchange="setUrl(this);">
														<option value="<?= $add['address'].' - '.$add['city'].' - '.$add['phone']?>">
															<?= $add['address'].' - '.$add['city'].' - '.$add['phone']?>	
														</option>
														<?php while ($row = mysqli_fetch_array($addreses)) {?>
															<option value="<?= $row['id']?>"><?= $row['name']?>	</option>
														<?php } ?>
													</select>
												</div>
											</div>	
										</div>				 
									</div>
								</div>
				
								<div class="clear">	</div>
				
								<div class="row">	
									<!--INFORMACION DEL TRACTOR-->
									<div class="col-lg-4  border padd10">
										
										<label for="" class="text-bold s18 ">Informacion del tractor</label>
										<!-- <div class="clear">	</div> -->
										<div class="row wh">	
											<div class="form-group">
												<label for="truck" class="control-label col-md-4">Selecciona: </label>
												<div class="col-md-8">
													<select name="truck" id="truck" class="block form-control form-control-sm selectpicker" data-live-search="true" onchange="setUrl(this);">
														<option value=""><?= $truck['brand'];?></option>
														<?php while ($row = mysqli_fetch_array($trucks)) {?>
															<option value="<?= $row['id'];?>"><?= $row['brand']. '-' .$row['model'].'-'.$row['color'];?> </option>
														<?php } ?>
														</select>
												</div>
											</div>	
										</div>
										<div class="row wh">	
											<div class="form-group">
												<label for="brand" class="control-label col-md-4">Marca: </label>
												<div class="col-md-8">
													<input type="text" name="brand" id="brand" class="block form-control input-sm" required="" value="<?= $truck['brand'];?>">
												</div>
											</div>	
										</div>
										<div class="row wh">	
											<div class="form-group">
												<label for="model" class="control-label col-md-4">Modelo: </label>
												<div class="col-md-8">
													<input type="number" name="model" id="model" class="block form-control input-sm" required="" value="<?= $truck['model'];?>">
												</div>
											</div>	
										</div>
										<div class="row wh">
											<div class="form-group">
												<label for="N-econ" class="control-label col-md-4">N econ: </label>
												<div class="col-md-8">
													<input type="text" name="n_economic" id="N-econ" class="block form-control input-sm" required="" value="<?= $truck['num_econ'];?>">
												</div>
											</div>		
										</div>
				
										<div class="row wh">
											<div class="form-group">
												<label for="placas" class="control-label col-md-4">Placas: </label>
												<div class="col-md-8">
													<input type="text" name="plates_t" id="placas" class="block form-control input-sm" required="" value="<?= $truck['placa']." - ".$truck['placa_2']?>">
												</div>
											</div>			
										</div>
										
									</div>
				
									<!--INFORMACION DE LA CAJA-->
									<div class="col-lg-4  border padd10">
										
										<label for="" class="text-bold s18 ">Informacion de caja</label>
										
										<div class="row wh">	
											<div class="form-group">
												<label for="sel" class="control-label col-md-4">Selecciona: </label>
												<div class="col-md-8">
													<select name="box" id="box" class="block form-control form-control-sm selectpicker" data-live-search="true" onchange="setUrl(this);">
														<option value="<?= $box['id']?>"><?= $box['type']." - ".$box['num_econ'];?></option>
														<?php while ($row = mysqli_fetch_array($boxes)) {?>
															<option value="<?= $row['id']?>"><?= $row['type']. "-".$row['num_econ']?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
									
										<div class="row wh">	
											<div class="form-group">
												<label for="box" class="control-label col-md-4">Caja: </label>
												<div class="col-md-8">
													<input type="text" name="box" id="box" class="block form-control input-sm" required="" value="<?= $box['type']?>">
												</div>
											</div>
										</div>
										
										<div class="row wh">	
											<div class="form-group">
												<label for="temperature" class="control-label col-md-4">Tempertura: </label>
												<div class="col-md-8">
													<div class="col-md-5">
														<input type="text" name="temperature" id="temperature" class="block form-control input-sm" required="" value="<?= $box['temperature']?>">
													</div>
													<div class="col-md-3">
														<select name="degrees" id="degrees" class="block form-control form-control-sm selectpicker" data-live-search="true" required="">
															<option value="<?= $box['grades']?>"><?= $box['grades']?></option>
															<option value="C °">C °</option>		
															<option value="F °">F °</option>		
															<option value="K °">K °</option>		
														</select>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row wh">	
											<div class="form-group">
												<label for="n" class="control-label col-md-4">N econ: </label>
												<div class="col-md-8">
													<input type="text" name="n_economicBox" id="n" class="block form-control input-sm" required="" value="<?= $box['num_econ']?>">
												</div>
											</div>
										</div>
										
										<div class="row wh">
											<div class="form-group">
												<label for="p" class="control-label col-md-4">Placas: </label>
												<div class="col-md-8">
													<input type="text" name="plates" id="p" class="block form-control input-sm" required="" value="<?= $box['placa']?>">
												</div>
											</div>	
										</div>
									</div>
				
									<!--Otros permisos-->
									<div class="col-lg-4  border padd10">
										<label for="" class="text-bold s18 ">Otros permisos</label>
										<div class="row wh">	
											<div class="form-group">
												<label for="c" class="control-label col-md-4">CAAT: </label>
												<div class="col-md-8">
													<input type="text" name="CAAT" id="c" class="block form-control input-sm" required="" value="<?= $transporter['caat']?>">
												</div>
											</div>
										</div>
									
										<div class="row wh">	
											<div class="form-group">
												<label for="a" class="control-label col-md-4">ALPHA: </label>
												<div class="col-md-8">
													<input type="text" name="ALPHA" id="a" class="block form-control input-sm" required="" value="<?= $transporter['alpha']?>">
												</div>
											</div>
										</div>
				
										<div class="row wh">	
											<div class="form-group">
												<label for="i" class="control-label col-md-4">ICCMX: </label>
												<div class="col-md-8">
													<input type="text" name="ICCMX" id="i" class="block form-control input-sm" required="" value="<?= $transporter['iccmx']; ?>">
												</div>
											</div>
										</div>
				
										<div class="row wh">
											<div class="form-group">
												<label for="u" class="control-label col-md-4">US DOT: </label>
												<div class="col-md-8">
													<input type="text" name="US_DOT" id="u" class="block form-control input-sm" required="" value="<?= $transporter['us_dot']; ?>">
												</div>
											</div>	
										</div>
										<div class="clear">	</div>
										<div class="clear">	</div>
										<div class="clear">	</div>
										<div class="clear">	</div>
									</div>
								</div>	
				
							<?php }else{ ?>
				
								<div class="row">
									<!--INFORMACION DE LA CAJA-->
									<div class="col-lg-4  border padd10">
										
										<label for="" class="text-bold s18 ">Informacion de caja</label>
										
										<div class="row wh">	
											<div class="form-group">
												<label for="sel" class="control-label col-md-4">Selecciona: </label>
												<div class="col-md-8">
													<select name="box" id="sel" class="block form-control form-control-sm selectpicker" data-live-search="true" onchange="setUrl(this);">
														<option value="<?= $box['id']?>">
															<?= $box['type']." - ".$box['num_econ'];?></option>
														<?php while ($row = mysqli_fetch_array($boxes)) {?>
															<option value="<?= $row['id']?>"><?= $row['type']. "-".$row['num_econ']?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
									
										<div class="row wh">	
											<div class="form-group">
												<label for="box" class="control-label col-md-4">Caja: </label>
												<div class="col-md-8">
													<input type="text" name="box" id="box" class="block form-control input-sm" required="" value="<?= $box['type']?>">
												</div>
											</div>
										</div>
										
										<div class="row wh">	
											<div class="form-group">
												<label for="temperature" class="control-label col-md-4">Tempertura: </label>
												<div class="col-md-9">
													<div class="col-md-6">
														<input type="text" name="temperature" id="temperature" class="block form-control input-sm" required="" value="<?= $box['temperature']?>">
													</div>
													<div class="col-md-3">
														<select name="degrees" id="degrees" class="block form-control form-control-sm selectpicker" data-live-search="true" required="">
															<option value="<?= $box['grades']?>"><?= $box['grades']?></option>
															<option value="C °">C °</option>		
															<option value="F °">F °</option>		
															<option value="K °">K °</option>		
														</select>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row wh">	
											<div class="form-group">
												<label for="n" class="control-label col-md-4">N econ: </label>
												<div class="col-md-8">
													<input type="text" name="n_economicBox" id="n" class="block form-control input-sm" required="" value="<?= $box['num_econ']?>">
												</div>
											</div>
										</div>
										
										<div class="row wh">
											<div class="form-group">
												<label for="p" class="control-label col-md-4">Placas: </label>
												<div class="col-md-8">
													<input type="text" name="plates" id="p" class="block form-control input-sm" required="" value="<?= $box['placa']?>">
												</div>
											</div>	
										</div>
									</div>
								</div>
				
							<?php } ?>
						
							<div class="row">
								<div class="clear">	</div>
								<div class="col-lg-12 border">
									<div class="block  text-left">	
										<div class="form-group">
												<div class="col-md-12">
													<div>
														<h4 class="">Comentarios</h4>
													</div>
													<textarea name="comments" id="comments" cols="40" rows="3" class="block padd5 r5 form-control"></textarea>
												</div>
										</div>	
									</div>		 
								</div>
							</div>
							<div class="clear">	</div>
						</div>
					</div>
				
					<button class="btn btn-success sgreen" type="submit" >
						<b>Generar remision</b>
					</button>
				</form>	
			</div>
			<?php } ?>
		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#" class="">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>




<form class="modalContent frm_prod " id="searchP">
	<div class="modal-header">
		<h4 class="text-bold">Agregar productos </h4>
	</div>
	<div class="mainModal">
		<div class="containerTable table-responsive">	
		<table id="tableProducts" class="block">	
			<thead>	
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Marca</td>
					<td>Cantidad</td>
					<td>Acciones</td>

				</tr>
			</thead>
			<tbody>	
				<?php while($row = mysqli_fetch_array($dataProducts)){ ?>
					<tr>
				
						<th class="s12"><?= $row['id']?></th>
						<th class="s12"><?= $row['name'].' '.$row['quality'].' '.$row['size'].' '.$row['pack'].' '.$row['brand'].' '.$row['weight'].' '.$row['unit_measure']?></th>
						<th class="s12 quantity">
								<?=$row['brand']?>
						</th>
						<th class="quant">
							<input type="number" placeholder="50" class="mW50" onchange="quantity(this)">
						</th>
						<th>
							<a href="<?= $row['id'];?>" onclick="addP(this);" class="little-btn blue adjust s12 mW30 text-600"><i class="material-icons s12">add</i>
							</a>

							
						</th>
					</tr>	
					
				<?php } ?>	
				
				
			</tbody>
		</table>
		</div>
	</div>
</form>

<?php if (isset($_GET['nCharge'])){ 
	if (!$_SESSION['infoFreight']) { ?>
	<form class="modal2 " id="freight" onsubmit="saveFreight(this);" method="post">
		<div class="modal-header">
			<h4 class="text-bold text-center modal-title"> INFORMACION DEL FLETE  </h4>
		</div>
		<div class="modal-body">
		
				<div class="row">
					<div class="col-lg-3 col-md-4 col-lg-offset-7">
						<label for="">Precio:</label> <br>
						<input type="number" name="quantity" id="quantity" class="block border padd5" required="">
					</div>
					<div class="col-lg-2 col-md-2">
						<label for="">Moneda:</label> <br>
						<select name="currency" id="currency" required="" class="block border padd5 ">
							<option value=""></option>
							<option value="MXN">MXN</option>
							<option value="USD">USD</option>
						</select> 
					</div>

				</div>
				<div class="clear"></div>
				<div class="containerTable table-responsive">
					<table>
						<thead>
						<tr>
							<?php 	
							$e = 1;
							while( $e <= $nCharge ) { ?>
								<td class="text-center">
									Remision <?= $e?>
								</td>

						<?php $e++; }  ?>
							<td>
								Agricola	
							</td>
							<td>
								Total	
							</td>
							
						</tr>
						</thead>
						<tbody>
							<tr>
									<?php 	
							$e = 1;
							while( $e <= $nCharge ) { ?>
								<th class="text-center">
									<input type="number" name="<?= $e?>" id="" class="mW100 border padd5 remision" required="">
								</th>

						<?php $e++; }  ?>
								<th class="text-center">
									<input type="number" name="agricola" id="" class="mW100 border padd5 remision" required="" >
								</th>
								<th class="text-center">
									<input type="number" name="total" id="importe_total" class="mW100 border padd5 total">
								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="clear"></div>
		</div>
		<div class="modal-footer">
				<div class="col-lg-offset-7 col-md-offset-7 col-lg-4 col-md-4">
					<input type="submit" value="Guardar informacion" class="little-btn blue adjust s12  text-600">
				</div>
		</div>
	</form>
	<div class="bgBlack2 " id="bgBlack2"></div>
<?php  } } ?>
<div class="bgBlack " onclick="closeModal();"></div>