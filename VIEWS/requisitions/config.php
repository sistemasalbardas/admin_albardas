

<?php 
	$tab = 1;
	if (isset($_GET['tab'])) {
		$tab = $_GET['tab'];
	}

	$data = $requisitions->index();
	$dataTable = $requisitions->index();
	$dataSupplies = $requisitions->listSuplies();

 ?>
<!-- <div class="mainContainer"> -->
	<div class="clear"></div>
	<div class="containerPanel">
		<div class="headContent">
			<h4 class="text-bold">	Configuracion </h4>
		</div>
		<div class="mainContent">
			
			<!--TABS-->
			<ul class="tabs"> 
				
				<li class="<?= ($tab == 1) ? 'current' : null ; ?> tabP" id="1"> 
				 	<a href="?tab=1">Categorias</a>
				</li>
				<li class="<?= ($tab == 2) ? 'current' : null ; ?> tabP" id="2"> 
				 	<a href="?tab=2">Productos</a>
				</li>
			
			</ul>
		
		
			<ul class="containerTabs">

				<li class="<?= ($tab == 1) ? null : 'hidden' ; ?> containerTable">
					<div class="row">
						<div class="col-lg-2">
							
						</div>
					</div>
					

				
					<div class="row">
						<div class="col-lg-10">
							<div class="">
								<div class="row">
									<div class="col-lg-2 padd10 ">
										<button onclick="openModal(this,'saveCategory');" class="btn blue s14">	Agregar categoria
										</button>
									</div>
									
								</div>
								<div class="table-responsive">
									<table id="tableWorks">
										<thead>
											<tr>
												<td>ID</td>
												<td>name</td>
												<td>Acciones</td>
											</tr>
										</thead>	
										<tbody>
											<?php while($row = mysqli_fetch_array($dataTable)){?>
											    <tr>
									
											      	<th><?= $row['id']; ?></th>
											      	<th><?= $row['name']; ?></th>
											      	
											      
											      	
											      	<th>
											      		<a href="<?= URL?>requisitions/deleteCategory/?id=<?=$row['id'];?>" onclick="deleteWork(this);" class="">
											      			<span title="Eliminar">
											      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
											      		    </span>
											      		</a>
											      		<a href="editWork/<?= $row['id'];?>" onclick="editWork();"  class="">
											      			<span title="Editar Remisión">
												      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
										      			    </span>
											      		</a>		
														 					      	</th>
											      	
											    </tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="<?= ($tab == 2) ? null : 'hidden' ; ?> containerTable">
					<div class="row">
						<div class="col-lg-10">
							<div class="">
								<div class="row">
									<div class="col-lg-2 padd10 ">
										<button onclick="openModal(this,'saveSupplies');" class="btn blue s14">	Agregar producto
										</button>
									</div>
									
								</div>
								<table id="tableSupplies">
									<thead>
										<tr>
											<td>ID</td>
											<td>Nombre</td>
											<td>Category</td>
											<td>Unidad</td>
											<td>Precio</td>
											<td>Moneda</td>
											<td>Status</td>
											<td>Acciones</td>
										</tr>
									</thead>	
									<tbody>
										<?php while($row = mysqli_fetch_array($dataSupplies)){?>
										    <tr>

										      	<th><?= $row['id']; ?></th>
										      	<th><?= $row['name']; ?></th>
										      	<th><?= $row['category']; ?></th>
										      	<th><?= $row['unit']; ?></th>
										      	<th><?= $row['precio']; ?></th>
										      	<th><?= $row['coin']; ?></th>
										      	<th><?=  ($row['status'] == 1) ? 'Activo' : 'Inctivo' ; ?></th>
										      	
										      
										      	
										      	<th>
										      		<a href="<?= URL?>requisitions/deleteSupplies/?id=<?=$row['id'];?>" onclick="deleteWork(this);" class="">
										      			<span title="Eliminar">
										      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
										      			</span>
										      		</a>
										      		<a href="<?= URL?>requisitions/editSupplies/?id=<?=$row['id'];?>" class="">
										      			<span title="Editar Insumo">
											      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
										      			</span>
										      		</a>		
					 					      	</th>
										      	
										    </tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					
				</li>
			</ul>


			
<!-- 	</div> -->

	<div class="clear"></div>
	
</div>
<div class="bgBlack hidden" onclick="closeModal();"></div>


	<form class="modal hidden" method="post" action="<?= URL?>requisitions/saveCategory/" id="saveCategory">
		<div class="headModal">
			<h4 class="text-bold">Guardar categoria</h4>
		</div>

		<div class="mainModal">
			<div class="row">
			<div class="col-lg-8">
	
				<label for="name">Nombre categoria:</label>
				<input type="text" name="name" id="name" placeholder="Nombre" value="<?= $datos['name'] ?>" class="inputStyle">
			</div>
			
		</div>
		<div class="clear"></div>
		<div class="row">
			<div class="col-lg-8">
				<label for="description">Descripcion:</label>
				<textarea name="description" id="description" cols="20" rows="3" placeholder="enfernmedades" class="inputStyle h70"></textarea>
			</div>
		</div>
		</div>	

		<div class="footerModal">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-8">
					<input type="submit" value="Guardar" class="btn green">
				</div>
			</div>
		
		</div>
	</form>

	<form class="modal hidden" action="<?= URL?>requisitions/saveSupplies/" method="post"  autocomplete="off" id="saveSupplies" onsubmit="saveSupplies(this);">
		<div class="headModal">
			<h4 class="text-bold">Guardar insumo</h4>
		</div>
		<div class="mainModal">
		
			
			<div class="row">
				
				<div class="col-lg-4">
					<label for="name">Categoria:</label>
					<select name="category" id="category" class="inputStyle" required="">
						<?php while($row = mysqli_fetch_array($data)){ ?>
							<option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-lg-4">
					<label for="name">Status:</label>
					<select name="status" id="status" class="inputStyle">
						<option value="1">Activo</option>
						<option value="0">Inactivo</option>
					</select>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="row">
				
				<div class="col-lg-8">
					<label for="name">Nombre:</label>
					<input type="text" name="name" id="name" class="inputStyle" placeholder="" required="">
				</div>

				<div class="col-lg-4">
					<label for="name">Unidad de medida:</label>
					<select name="unit" id="unit" class="inputStyle" required="">
						<option value="Kg">Kg</option>
						<option value="Toneladas">Toneladas</option>
						<option value="Lt">Lt</option>
						<option value="Mililitros">Mililitros</option>
						<option value="Kw">Kw</option>
						<option value="Bote lt">Bote lt</option>
						<option value="libra">libra</option>
						<option value="Gr">Gr</option>
						<option value="Tmb">Tmb</option>
						<option value="Lata">Lata</option>
						<option value="Garrafa">Garrafa</option>
						<option value="Cubeta">Cubeta</option>
						<option value="Pza">Pza</option>
						<option value="Rollo">Rollo</option>
						<option value="M lineales">M lineales</option>
						<option value="Cm">Cm</option>
						<option value="M 3">M 3</option>
						<option value="Caja">Caja</option>
						<option value="Sacos">Sacos</option>
						<option value="Bultos">Bultos</option>
						<option value="Bolsas">Bolsas</option>
						<option value="N A">N A</option>
						<option value="HA">HA</option>
						<option value="Charola">Charola</option>
						<option value="Millar">Millar</option>
						<option value="Par">Par</option>
					</select>
				</div>
				
			</div>
			<div class="clear"></div>
			<div class="row">
				<div class="col-lg-9">
					<label for="ingredient">Ingrediente Activo:</label>
					<input type="text" name="ingredient" id="ingredient" class="inputStyle" placeholder="" >
				</div>
			
			</div>
			<div class="clear"></div>
			<div class="row">
				
				<div class="col-lg-5">
					<label for="price">Precio:</label>
					<input type="text" name="price" id="price" class="inputStyle" placeholder="" >
				</div>
				<div class="col-lg-4">
					<label for="name">Moneda:</label>
					<select name="coin" id="coin" class="inputStyle">
						<option value="MXN">MXN</option>
						<option value="USD">USD</option>
					</select>
				</div>
			</div>
			
			<div class="clear"></div>
		
		</div>

		<div class="footerModal">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-8">
					<input type="submit" value="Guardar" class="btn green">
				</div>
			</div>
		
		</div>
	</form>