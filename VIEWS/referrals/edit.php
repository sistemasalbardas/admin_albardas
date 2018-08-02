<?php 	
	$data = $referrals->selectCostumers();
	$dataProducts = $referrals->products();
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
	$datos = $referrals->index();
	//print_r($reftransportererrals->products());
	//$dataPrody = $referrals->selectCostumers();
	$costumer = $data['costumer'];
	$list = $data['list'];
	$dataH = $referrals->edit();

 ?>
 <div class="col-md-10">
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title text-600 text-uppercase">Editar informacion de remision</h3>
	     
	      <div class="box-tools pull-right">
                <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
           </div>
	    </div>
		<div class="box-body padd10">	

						
			<form action="" class="padd25 border form-horizontal block" method="post" action="" onsubmit="editRemision(this);">

				<input type="hidden" name="id" id="id" value="<?=  $_GET['id_ref'];?>">
				<input type="hidden" name="id_user" id="id_user" value="<?=  $_SESSION['user'][0]['id']; ?>">
     
				<input type="hidden" name="nCharge" value="<?= $_GET['nCharge']?>">
				<input type="hidden" name="tab" value="<?= $_GET['tab']?>">
				<input type="hidden" name="id_employe" value="<?= $_GET['employe']?>">
				<input type="hidden" name="id_costumer" value="<?= $_GET['costumer']?>">		
				<input type="hidden" name="city" id="city" value="<?= $add['city']?>">

				<input type="hidden" name="id_trasport" id="transport" value="<?= $_GET['transport']?>">
				<input type="hidden" name="id_driver" id="driver" value="<?= $_GET['driver']?>">
				<input type="hidden" name="id_box" id="id_box" value="<?= $_GET['box']?>">
				<input type="hidden" name="add" id="add" value="<?= $_GET['add']?>">
				<input type="hidden" name="id_truck" id="truck2" value="<?= $_GET['truck']?>">

				<input type="text" name="f_freight" value="<?= $dataH['data']['f_freight'];?>">
				<input type="text" name="f_embark" value="<?= $dataH['data']['f_embark'];?>">
				<input type="text" name="f_charge" value="<?= $dataH['data']['f_charge'];?>">

				<div class="row">	
					<div class="col-lg-12 text-center borderB">	
						<h3 class="s18 text-600 text-uppercase">Remision de salida</h3>
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-lg-offset-6 col-sm-4 col-lg-3">
						<div class="form-group">
							<label for="date" class="control-label col-md-2">Fecha: </label>
							<div class="col-md-10">
								<input type="date" class="form-control" name="date" id="date" required="" value="<?=$dataH['data']['date'];?>">
							</div>
						</div>
					</div>
					<div class=" col-sm-4 col-lg-3">
						<div class="form-group">
							<label for="time" class="control-label col-md-2">Hora:</label>
							<div class="col-md-8 text-right">
								<input type="time" class="form-control" name="time" id="time" required="" value="<?=$dataH['data']['time'];?>">
							</div>
						</div>
					</div>
				</div>
				<hr>	
				<div class="row">
					<div class="col-lg-12   m5 padd10 ">	

						<div class="row borderB">
							<div class="form-group">
								<label for="employe" class="control-label col-md-2"><b>EMPRESA:</b></label>
								<div class="col-md-5">
									<select name="name_employe" id="employe" onchange="setUrlEdit(this);" class="select block form-control selectpicker" data-live-search="true" required="">
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
									<input type="text" name="address_employe" id="address_employe" value="<?= $datos['addres'];?>" class="w100 block form-control" required="">
								</div>
							</div>
							<div class="form-group">
								<label for="rfc_employe" class="control-label col-md-2">RFC:</label>
								<div class="col-md-5">
									<input type="text" name="rfc_employe" id="rfc_employe" value="<?= $datos['rfc'];?>" class="w100 block form-control" required="">
								</div>
							</div>
							<div class="clear">
									<input type="hidden" name="id_employe" id="" value="<?= $datos['id'];?>" class="w100 block" required="">
							</div>
						</div>
						
						<!--CLIENTE-->
						<div class="clear">	</div>

						<div class="row borderB">
							<div class="form-group ">
								<label for="costumer" class="control-label col-md-2"><b>CLIENTE:</b></label>
								<div class="col-md-5">
									<select name="name_costumer" id="costumer" onchange="setUrlEdit(this);" required="" class="select form-control selectpicker"  data-live-search="true">
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
									<input type="text" name="address_costumer" id="name_costumer" value="<?= $costumer['address'];?>" required="" class="block form-control"> 	
								</div>
							</div>
							<div class="form-group">
								<label for="rfc_costumer" class="control-label col-md-2">RFC:</label>
								<div class="col-md-5">
									<input type="text" name="rfc_costumer" id="rfc_costumer" value="<?= $costumer['rfc'];?>" required=""  class="block form-control">
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
																<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
															    <span class="tooltext">Eliminar</span>
															</a>
														</th>
														

													</tr>
											<?php } }?>
												
													
										

										</tbody>
									</table>

									</div>
								<div class="block text-center">	
									<div class="clear">	</div>
									<button onclick="openModal(this,'searchP');" class="btn btn-primary s14 center	" type="button">
										Agregar Productos
									</button>
									<div class="clear">	</div>

								</div>
								<br>
							</div>
						</div>	
				
							
						<div class="row ">
							<div class="col-lg-6  padd5 border">
								<div class="row">
									<div class="form-group">
										<label for="transport" class="control-label col-md-4"><b>Transportista:</b></label>
										<div class="col-md-8">
											<select name="name_trasport" id="transport" class="block select form-control selectpicker" data-live-search="true"  onchange="setUrlEdit(this);">
												<option value="<?= $transporter['name']; ?>"><?= $transporter['name']; ?></option>
												<?php while ($row  = mysqli_fetch_array($transporters)) { ?>
												<option value="<?= $row['id']?>"><?= $row['name']?></option>
												<?php } ?>
										    </select>
										</div>
									</div>
								</div>
								
								<div class="row">	
									<div class="form-group">
										<label for="driver" class="control-label col-md-4">Chofer: </label>
										<div class="col-md-8">
											<select name="name_driver" id="driver" class="block select form-control selectpicker" data-live-search="true"  onchange="setUrlEdit(this)">
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
							<div class="col-lg-6  padd5 border">
								<div class="row ">	
									<div class="form-group">
										<label for="origin" class="control-label col-md-4 text-right">Origen: </label>
										<div class="col-md-8">
											<select name="origin" id="origin" class="block form-control selectpicker" data-live-search="true" required="">
												<!-- <option value="">SELECCIONA UNA OPCION </option> -->
												<option value="Parras de la fuente, ejido el calabacillal, Agricola las albardas.">ALBARDAS</option>
												<option value="Carretara Saltillo - matamoros, ejido el Mimbre Coah, Rancho magdalenas.">MAGDALENAS</option>
											</select>
										</div>
									</div>
								</div>
							

								<div class="row">
									<div class="form-group">
										<label for="add" class="control-label col-md-4">Destino: </label>
										<div class="col-md-8">
											<select name="destination" id="add" class="block form-control selectpicker" data-live-search="true" required onchange="setUrlEdit(this);">
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
							<div class="col-lg-4  border">
								<div class="clear"></div>
								<label for="" class="text-bold s18 text-uppercase">INF. tractor</label>
								<!-- <div class="clear">	</div> -->
								<div class="row">	
									<div class="form-group">
										<label for="truck" class="control-label col-md-4 s12 text-uppercase">Selecciona: </label>
										<div class="col-md-8">
											<select name="truck" id="truck" class="block form-control selectpicker" data-live-search="true" onchange="setUrlEdit(this);">
												<option value=""><?= $truck['brand'];?></option>
												<?php while ($row = mysqli_fetch_array($trucks)) {?>
													<option value="<?= $row['id'];?>"><?= $row['brand']?></option>
												<?php } ?>
											</select>
										</div>
									</div>	
								</div>
								<div class="row">	
									<div class="form-group">
										<label for="brand" class="control-label col-md-4 s12 text-uppercase">Marca: </label>
										<div class="col-md-8">
											<input type="text" name="brand" id="brand" class="block form-control" required="" value="<?= $truck['brand'];?>">
										</div>
									</div>	
								</div>
								<div class="row">	
									<div class="form-group">
										<label for="model" class="control-label col-md-4 s12 text-uppercase s12">Modelo: </label>
										<div class="col-md-8">
											<input type="number" name="model" id="model" class="block form-control" required="" value="<?= $truck['model'];?>">
										</div>
									</div>	
								</div>
								<div class="row">
								    <div class="form-group">
										<label for="N-econ" class="control-label col-md-4 s12 text-uppercase ">N econ: </label>
										<div class="col-md-8">
											<input type="text" name="n_economic" id="N-econ" class="block form-control" required="" value="<?= $truck['num_econ'];?>">
										</div>
									</div>		
								</div>

								<div class="row">
								    <div class="form-group">
										<label for="placas" class="control-label col-md-4 s12 text-uppercase">Placas: </label>
										<div class="col-md-8">
											<input type="text" name="plates_t" id="placas" class="block form-control" required="" value="<?= $truck['placa']." - ".$truck['placa_2']?>">
										</div>
									</div>			
								</div>
								
							</div>

							<!--INFORMACION DE LA CAJA-->
							<div class="col-lg-4  border">
								<div class="clear"></div>
								<label for="" class="text-bold s18 text-uppercase">Informacion de caja</label>
								
								<div class="row">	
									<div class="form-group">
										<label for="box" class="control-label col-md-4 text-uppercase s12">Selecciona: </label>
										<div class="col-md-8">
											<select name="box" id="box" class="block form-control selectpicker" data-live-search="true" onchange="setUrlEdit(this);">
												<option value="<?= $box['id']?>">
													<?= $box['type']." - ".$box['num_econ'];?></option>
												<?php while ($row = mysqli_fetch_array($boxes)) {?>
													<option value="<?= $row['id']?>"><?= $row['type']. "-".$row['num_econ']?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
							
								<div class="row">	
									<div class="form-group">
										<label for="box" class="control-label col-md-4 text-uppercase s12">Caja: </label>
										<div class="col-md-8">
											<input type="text" name="box" id="box" class="block form-control" required="" value="<?= $box['type']?>">
										</div>
									</div>
								</div>
								
								<div class="row">	
									<div class="form-group">
										<label for="temperature" class="control-label col-md-4  text-uppercase s12">Tempertura: </label>
										<div class="col-md-8">
											<div class="col-md-5">
												<input type="text" name="temperature" id="temperature" class="block form-control" required="" value="<?= $box['temperature']?>">
											</div>
											<div class="col-md-3">
												<select name="degrees" id="degrees" class="block form-control selectpicker" data-live-search="true" required="">
													<option value="<?= $box['grades']?>"><?= $box['grades']?></option>
													<option value="C °">C °</option>		
													<option value="F °">F °</option>		
													<option value="K °">K °</option>		
												</select>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">	
									<div class="form-group">
										<label for="n" class="control-label col-md-4  text-uppercase s12">N econ: </label>
										<div class="col-md-8">
											<input type="text" name="n_economicBox" id="n" class="block form-control" required="" value="<?= $box['num_econ']?>">
										</div>
									</div>
								</div>
								
								<div class="row">
								    <div class="form-group">
										<label for="p" class="control-label col-md-4  text-uppercase s12">Placas: </label>
										<div class="col-md-8">
											<input type="text" name="plates" id="p" class="block form-control" required="" value="<?= $box['placa']?>">
										</div>
									</div>	
								</div>
							</div>

							<!--Otros permisos-->
							<div class="col-lg-4  border ">
								<div class="clear"></div>
								<label for="" class="text-bold s18 text-uppercase">Otros permisos</label>
								
								<div class="clear"></div>
								<div class="clear"></div>
								<div class="row">	
									<div class="form-group">
										<label for="c" class="control-label col-md-4 s12">CAAT: </label>
										<div class="col-md-8">
											<input type="text" name="CAAT" id="c" class="block form-control" required="" value="<?= $transporter['caat']?>">
										</div>
									</div>
								</div>
								
								<div class="row">	
									<div class="form-group">
										<label for="a" class="control-label col-md-4 s12">ALPHA: </label>
										<div class="col-md-8">
											<input type="text" name="ALPHA" id="a" class="block form-control" required="" value="<?= $transporter['alpha']?>">
										</div>
									</div>
								</div>

								<div class="row">	
									<div class="form-group">
										<label for="i" class="control-label col-md-4 s12">ICCMX: </label>
										<div class="col-md-8">
											<input type="text" name="ICCMX" id="i" class="block form-control" required="" value="<?= $transporter['iccmx']; ?>">
										</div>
									</div>
								</div>
	
								<div class="row">
								    <div class="form-group">
										<label for="u" class="control-label col-md-4 s12">US DOT: </label>
										<div class="col-md-8">
											<input type="text" name="US_DOT" id="u" class="block form-control" required="" value="<?= $transporter['us_dot']; ?>">
										</div>
									</div>	
								</div>
								<div class="clear">	</div>
								<div class="clear">	</div>
								
							</div>
						</div>	

					
						<div class="row">
							<div class="clear">	</div>
							<div class="col-lg-12 border">
								<div class="block  text-left">	
									<div class="form-group">
											<div class="col-md-12">
												<div class="page-header">
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

				<button class="btn Green s14" type="submit" >
					<b>Generar remision</b>
				</button>
			</form>
		</div>
	</div>
</div>




<form class="modalContent " id="searchP">
	<div class="headModal">
		<h4 class="text-bold">Agregar productos </h4>
	</div>
	<div class="mainModal">
		<div class="containerTable">	
		<table id="tableProducts" class="block">	
			<thead>	
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Disponible</td>
					<td>Cantidad</td>
					<td>Acciones</td>

				</tr>
			</thead>
			<tbody>	
				<?php while($row = mysqli_fetch_array($dataProducts)){ ?>
					
				<tr>
			
					<th class="s12"><?= $row['id']?></th>
					<th class="s12"><?= $row['name_product']?></th>
					<th class="s12 quantity">
					<?php
					if (isset($listP)) {
					 	$n = 0;
						foreach ($listP as $key ) { 
							if ($key[0] == $row['id']) {

								$n += $key[2];

							}
						}
						$available = $row['quantity'] - $n;
						echo $available;
					 } else{
					 	echo $row['quantity'];
					 }
						
					?>
					
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


<div class="bgBlack " onclick="closeModal();"></div>