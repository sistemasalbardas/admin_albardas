<?php 
	$data = $referrals->refarralsReport();
 ?>

<!-- <div class="mainContainer"> -->
	<div class="clear"></div>
	<div class="containerPanel padd10">
		<div class="headContent">
			<h4 class="text-bold text-uppercase">Reporte de remisiones</h4>
		</div>
		<div class="clear"></div>
			<div class="mW900">	
				<form action="" class="padd25 border" method="post" action="" onsubmit="generateRemision(this);">

					
					<div class="row">	
						<div class="col-lg-12 text-center borderB">	
							<h3 class="s18 text-600 text-uppercase">Reporte de remision</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12   m5 padd10 ">	
							<!--EMPRESA-->
							<div class="row borderB">
								
								<div class="col-lg-2 ">
									<label for=""><b>EMPRESA:</b></label> <br>
									<label for="">DOMICILIO:</label> <br>
									<label for="">RFC:</label> <br>
									<div class="clear">	</div>
								</div>

								<div class="col-lg-7 col-md-7  ">
									<input type="text" name="costumer" value="<?= $data['employe']['name'];?>" class="w100 block" >
									<input type="text" name="address_employe" id=""  value="<?= $data['employe']['addres'];?>" class="w100 block" required="">
									<input type="text" name="rfc_employe" id=""  value="<?= $data['employe']['rfc'];?>" class="w100 block" required=""><br>
								</div>	

								<div class="col-lg-3">
									<br>					
								</div>	
							</div>
							
							<!--CLIENTE-->
							<div class="clear">	</div>
							<div class="row borderB">
								<div class="col-lg-2 ">
									<label for="">CLIENTE:</label> <br>
									<label for="">DOMICILIO:</label> <br>
									<label for="">RFC:</label> <br>
									<div class="clear">	</div>

								</div>

								<div class="col-lg-7 col-md-7  ">
							 		
									<input type="text" name="name_costumer" value="<?= $data['costumer']['name'];?>" id="" class="w100 block">
									
									<input type="text" name="address_costumer" id="name_costumer" value="<?= $data['costumer']['address'];?>" required="" class="block"> 	
									<input type="text" name="rfc_costumer" id="name_costumer" value="<?= $data['costumer']['rfc'];?>" required=""  class="block">
								</div>	
							</div>

							<!--PRODUCTOS-->
							<div class="row">	
								<div class="col-lg-12 ">	
									<br>
									<div class="containerTable">	

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
																<a href="<?= $id;?>" onclick="eraseP(this);" class="block">Eliminar</a>
															</th>
															

														</tr>
												<?php } }
														
													?>
													
														
											

											</tbody>
										</table>

										</div>
									<div class="block text-center">	
										<div class="clear">	</div>
										<button onclick="openModal(this,'searchP');" class="btn blue s14 center	" type="button">	
											Agregar Productos
										</button>
										<div class="clear">	</div>

									</div>
									
									<br>
									
								</div>
								
							</div>	
								
							
							<?php  if ($_GET['tab'] == 1 ){ ?>
								
							
								<div class="row">
									<div class="col-lg-6 border padd5">
										<div class="row">	
											<div class="col-lg-4 ">	
												<label for="" class="W100 ">Transportista: </label>
											</div>
											<div class="col-lg-8">	
												
												<select name="name_trasport" id="transport" class="block select" onchange="setUrl(this);">
													<option value="<?= $transporter['name']; ?>"><?= $transporter['name']; ?></option>
													<?php while ($row  = mysqli_fetch_array($transporters)) { ?>
														<option value="<?= $row['id']?>"><?= $row['name']?></option>
													<?php } ?>
												</select>
											</div>
											
										</div>
										<div class="clear"></div>
										<div class="row">	
											<div class="col-lg-4 ">	
												<label for="" class="W100 ">Chofer: </label>
											</div>
											<div class="col-lg-8">	
											

											<select name="name_driver" id="driver" class="block select"  onchange="setUrl(this)">
												<option value="<?= $driver['name']?>"><?= $driver['name'];?></option>
												<?php while ($row  = mysqli_fetch_array($drivers)) { ?>
													<option value="<?= $row['id']?>"><?= $row['name']?></option>
												<?php } ?>
											</select>
											<input type="hidden" name="phone_driver" value="<?= $driver['phone'];?>">


											</div>
											
										</div>
																	 
									</div>
									<div class="col-lg-6 border padd5">
										<div class="row">	
											<div class="col-lg-2 ">	
												<label for="" class="W100 ">Origen:</label>
											</div>
											<div class="col-lg-10">	
												<input type="text" placeholder="Trasportes Albardas" class="block" value="Parras de la fuente, ejido el calabacillal, Agricola las albardas" name="origin" required="">
											</div>
											
										</div>
										<div class="clear"></div>

										<div class="row">	
											<div class="col-lg-2 ">	
												<label for="" class="W100 ">Destino: </label>
											</div>
											<div class="col-lg-10">	
												<select name="destination" id="add" class="block" required onchange="setUrl(this);">
													<option value="<?= $_GET['add']?>"><?= $_GET['add']?></option>
													<?php while ($row = mysqli_fetch_array($addreses)) {?>
														<option value="<?= $row['address'].'<br> Telefono: '.$row['phone']?>"><?= $row['name']?></option>

														
													<?php } ?>
													
												</select>
											

											</div>
											
										</div>
																	 
									</div>
								</div>

								<div class="clear">	</div>

								<div class="row">	
									<!--INFORMACION DEL TRACTOR-->
									<div class="col-lg-4  border">
										<div class="clear">	</div>
										<label for="" class="text-bold s18 ">Informacion del tractor</label>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Selecciona: </label>
											</div>
											<div class="col-lg-8">	
												<select name="truck" id="truck" class="block" onchange="setUrl(this);">
													<option value=""><?= $truck['brand'];?></option>
													<?php while ($row = mysqli_fetch_array($trucks)) {?>
														<option value="<?= $row['id'];?>"><?= $row['brand']?></option>

														
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="clear"></div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Marca: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="brand" id="brand" class="block" required="" value="<?= $truck['brand'];?>">
											</div>
										</div>
										<div class="clear">	</div>

										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Modelo: </label>

											</div>
											<div class="col-lg-8">	
												<input type="number" name="model" id="model" class="block" required="" value="<?= $truck['model'];?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">N econ: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="n_economic" id="" class="block" required="" value="<?= $truck['num_econ'];?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Placas: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="plates_t" id="" class="block" required="" value="<?= $truck['placa']." - ".$truck['placa_2']?>">
											</div>
										</div>
										<div class="clear">	</div>
									</div>
									<!--INFORMACION DE LA CAJA-->
									<div class="col-lg-4  border">
										<div class="clear">	</div>
										<label for="" class="text-bold s18 ">Informacion de caja</label>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Selecciona: </label>
												

											</div>
											<div class="col-lg-8">	
												
												<select name="box" id="box" class="block" onchange="setUrl(this);">
													<option value="<?= $box['id']?>">
														<?= $box['type']." - ".$box['num_econ'];?></option>
													<?php while ($row = mysqli_fetch_array($boxes)) {?>
														<option value="<?= $row['id']?>"><?= $row['type']. "-".$row['num_econ']?></option>

														
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="clear"></div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Caja: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="box" id="" class="block" required="" value="<?= $box['type']?>">
											</div>
										</div>
										<div class="clear">	</div>
										
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Tempertura: </label>
											</div>
											<div class="col-lg-5">	
												<input type="text" name="temperature" id="" class="block" required="" value="<?= $box['temperature']?>">
											</div>
											<div class="col-lg-3">	
												<select name="degrees" id="degrees" class="block" required="">
													<option value="<?= $box['grades']?>"><?= $box['grades']?></option>
													<option value="C °">C °</option>		
													<option value="F °">F °</option>		
													<option value="K °">K °</option>		
												</select>
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">N econ: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="n_economicBox" id="" class="block" required="" value="<?= $box['num_econ']?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Placas: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="plates" id="" class="block" required="" value="<?= $box['placa']?>">
											</div>
										</div>
										<div class="clear">	</div>
									</div>

									<!--Otros permisos-->
									<div class="col-lg-4  border">
										<div class="clear">	</div>
										<label for="" class="text-bold s18 ">Otros permisos</label>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">CAAT: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="CAAT" id="" class="block" required="" value="<?= $transporter['caat']?>">
											</div>
										</div>
										<div class="clear">	</div>
										
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">ALPHA: </label>
											</div>
											<div class="col-lg-8">	
												<input type="text" name="ALPHA" id="" class="block" required="" value="<?= $transporter['alpha']?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">ICCMX: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="ICCMX" id="" class="block" required="" value="<?= $transporter['iccmx']; ?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">US DOT: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="US_DOT" id="" class="block" required="" value="<?= $transporter['us_dot']; ?>">
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
									<div class="col-lg-4  border">
										<div class="clear">	</div>
										<label for="" class="text-bold s18 ">Informacion de caja</label>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Selecciona: </label>
												

											</div>
											<div class="col-lg-8">	
												
												<select name="box" id="box" class="block" onchange="setUrl(this);">
													<option value="<?= $box['id']?>">
														<?= $box['type']." - ".$box['num_econ'];?></option>
													<?php while ($row = mysqli_fetch_array($boxes)) {?>
														<option value="<?= $row['id']?>"><?= $row['type']. "-".$row['num_econ']?></option>

														
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="clear"></div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Caja: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="box" id="" class="block" required="" value="<?= $box['type']?>">
											</div>
										</div>
										<div class="clear">	</div>
										
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Tempertura: </label>
											</div>
											<div class="col-lg-5">	
												<input type="text" name="temperature" id="" class="block" required="" value="<?= $box['temperature']?>">
											</div>
											<div class="col-lg-3">	
												<select name="degrees" id="degrees" class="block" required="">
													<option value="<?= $box['grades']?>"><?= $box['grades']?></option>
													<option value="C °">C °</option>		
													<option value="F °">F °</option>		
													<option value="K °">K °</option>		
												</select>
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">N econ: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="n_economicBox" id="" class="block" required="" value="<?= $box['num_econ']?>">
											</div>
										</div>
										<div class="clear">	</div>
										<div class="row">	
											<div class="col-lg-4">	
												<label for="">Placas: </label>

											</div>
											<div class="col-lg-8">	
												<input type="text" name="plates" id="" class="block" required="" value="<?= $box['placa']?>">
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
							<div class="clear">	</div>
							<div class="row">
							<div class="clear">	</div>

								<div class="col-lg-12 border">
									<div class="block  text-left">	
										<div class="clear"></div>
										<label for="" class="text-bold s18 ">Comentarios</label> <br>
										<textarea name="comments" id="comments" cols="40" rows="3" class="block padd5 r5"></textarea>
										<div class="clear"></div>

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
			
		
		<div class="clear"></div>

	</div>
	
<!-- </div> -->
</div>
<div class="clear"></div>

<form class="modal hidden" id="searchP">
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
					
				<tr>
			
					<th class="s12"><?= $row['id']?></th>
					<th class="s12"><?= $row['name_product']?></th>
					<th class="s12 quantity">
				
					
					</th>
					<th class="quant">
						<input type="number" placeholder="50" class="mW50" onchange="quantity(this)">
					</th>
					<th>
						<a href="<?= $row['id'];?>" onclick="addP(this);" class="little-btn blue adjust s12 mW30 text-600"><i class="material-icons s12">add</i>
						</a>
						
					</th>
				</tr>	
					
				
				
				
				
			</tbody>
		</table>
		</div>
	</div>
</form>

<div class="bgBlack hidden" onclick="closeModal();"></div>
