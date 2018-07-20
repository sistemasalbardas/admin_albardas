<?php 
	$data = $personal->seePayshet();
	$cuadrillas = $personal->index();



 ?>

 <div class="mainContainer">
	<div class="containerPanel">	
		<div class="headContent">
		
					<?php

				
					$i = 0;
					
					while ($row = mysqli_fetch_array($cuadrillas)) {
							
							$days = 0;
							
							while ($row2 = mysqli_fetch_array($data[$i])) {
								//echo $row2['assis'] . "<br>";
								
								$days += (DOUBLE)$row2['assis'];
								  

							}

							

							$days = (DOUBLE)$days;
						

							$i++;

						?>
						<div class="clear"></div>
						<hr>
						<div class="row ">
						<div class="col-lg-9 ">	
							<div class="block ">	

								<div class="row">	
									<div class="col-lg-4 text-left">
										Recibo de Nomina <br>	
										UUID
									</div>
									<div class="col-lg-4 text-center">
										Joranelero
									</div>
									<div class="col-lg-4">
										RFC: XAXX-010101-00C
									</div>
								</div>
								<div class="row ">
									<div class="col-lg-12 border">	
										<div class="row">	
											<div class="col-lg-6">
												#0037  <?= $row['name']." ".$row['second_name']." ".$row['last_name']." ".$row['second_last_name'];?>
											</div>

											<div class="col-lg-6">
												RFC: MORC-960807-3D0 
											</div>
										</div>
										<div class="row">	
											<div class="col-lg-4">
												Departamento: Sistemas
											</div>

											<div class="col-lg-4">
												<?= $days; ?> dias laborados  - periodo #23 semanal
											</div>

											<div class="col-lg-4">
												31/may/2018 - 03/jun/2018
											</div>

										</div>
									</div>
									<div class="col-lg-12">	
										<div class="row">	
											<div class="col-lg-6 text-center border">
												PERCEPCIONES
											</div>
											<div class="col-lg-6 text-center border">
												DEDUCCIONES
											</div>
										</div>
										<div class="row">	
											<div class="col-lg-6 text-center border">
												<div class="row">	
													<div class="col-lg-6">
														Concepto
													</div>
													<div class="col-lg-6">
														Importe
													</div>
												</div>
											</div>
											<div class="col-lg-6 text-center border">
												<div class="row">	
													<div class="col-lg-6">
														Concepto
													</div>
													<div class="col-lg-6">
														Importe
													</div>
												</div>
											</div>
										</div>
										<div class="row">	
											
											<div class="col-lg-6 text-center border">
												<div class="block h120">
													<div class="row">	
														<div class="col-lg-8">
															<div class="row">	
																<div class="col-lg-8 text-left s12">
																	1 sueldo	
																</div>
																<div class="col-lg-4">
																	6.00	
																</div>
															</div>
															<div class="row">	
																<div class="col-lg-8 text-left s12">
																	3 spetimo dia	
																</div>
																<div class="col-lg-4">
																	285.72	
																</div>
															</div>
														</div>
														<div class="col-lg-4">
															<label for="" class="block text-right">
																$ 3
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 text-center border">
												<div class="block h120 ">
													<div class="row">
														<div class="row">	
															<div class="col-lg-6">
																Concepto
															</div>
															<div class="col-lg-6">
																Importe
															</div>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										<div class="row">	
											
											<div class="col-lg-6 text-center border">
												<div class="block h30">
													<div class="row">	
														<div class="col-lg-8">
														
															<label for="">Suma de percepciones $</label>
														</div>
														<div class="col-lg-4">
															<label for="" class="block text-right">
																$ <?php echo number_format($days * 160 ); ?>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 text-center border">
												<div class="block h30">
													<div class="row">	
														<div class="col-lg-8">
														
															<label for="">Suma de deducciones $</label>
														</div>
														<div class="col-lg-4">
															<label for="" class="block text-right">
																$ 500.00
															</label>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
								
					<?php 
							
						} 
					
							//echo $data[0]['name'];
						 	

							
					?>
		
		</div>
		<div class="mainContent">	
			<div class="row">	
				
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>