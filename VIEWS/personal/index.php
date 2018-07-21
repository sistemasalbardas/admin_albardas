<?php 
	
	if (!isset($_SESSION['user'])) {
		header("Location: ".URL."login/");
	
	}
	if(isset($_GET['tab'])){
		$tab = $_GET['tab'];
	}else{
		$tab = "1";
	}

	$row = $personal->index();
	$cuadrillas = $personal->indexCuadrillas();
	$cuadrillas2 = $personal->indexCuadrillas();
	$nRows = mysqli_num_rows($cuadrillas);

?>
<!-- <div class="mainContainer"> -->
	<div class="clear"></div>
	<div class="containerPanel">
				
		<div class="headContent">
			<h4 class="text-bold">Control de personal</h4>
		</div>
		<div class="mainContent">
			<div class="clear"></div>
			<div class="clear"></div>
			<button class="btn Green s14" onclick="openModal(this,'saveGroup');">
				<b>Nueva cuadrilla</b>
			</button>
			<div class="clear"></div>
		<div class="clear"></div>
		<?php if ($nRows > 1 ) {?>
		
			<ul class="tabs"> 
				<?php while($row = mysqli_fetch_array($cuadrillas)){?>
				 <li class="<?= ($tab == $row['id']) ? 'current' : null ; ?> tabP" id="<?= $row['id']?>"> 
				 	<a href="?tab=<?= $row['id']?>">Cuadrilla <?= $row['id']?></a>
				 </li>
				<?php } ?>
			</ul>
			<ul class="containerTabs">
		
				<li class="containerTable">

					<div class="row">
						<div class="col-lg-2 padd10 ">
							<button onclick="openModal(this,'searchWork');" class="btn blue s14">	Agregar trabajador
							</button>
						</div>
						<div class="col-lg-2 padd10">
							<a href="<?= URL?>personal/paysheet/?id=<?= $tab ?>" class="btn bgBlue s14">Capturar asistencia</a>
						</div>
						<div class="col-lg-2 padd10">
							<a href="<?= URL?>personal/contract/=id=<?= $tab ?>" class="btn bgBlue s14">Contratos </a>
						</div>
					</div>

					<form class="modal hidden" method="post" action="curp/"	 id="searchWork">
						<div class="headModal">
							<h4 class="text-bold">Ingresa la curp</h4>
						</div>
						<input type="hidden" name="cuadrilla" id="cuadrillas" value="<?= $tab?>">
				
						<div class="mainModal">
							<div class="row">
								<div class="col-lg-8">
									<label for="name">CURP:</label>
									<input type="text" name="curp" id="curp" placeholder="MORC96HCLRJR18" class="inputStyle"> 
								</div>
							</div>
						</div>	

						<div class="footerModal">
							<div class="row">
								<div class="col-lg-4 col-lg-offset-8">
									<input type="submit" value="Buscar" class="btn green">
								</div>
							</div>
						
						</div>
					</form>

					<div class="table-responsive">
						<table id="tableWorks">
							<thead>
								<tr>
									<td>ID</td>
									<td>NOMBRE</td>
									<td>FECHA NAC</td>
									<td>DIRECCION</td>
									<td>CURP</td>
									<td>Acciones</td>
								</tr>
							</thead>	
							<tbody>
								<?php while($row = mysqli_fetch_array($datos)){?>
								    <tr>

								      	<th><?= $row['id']; ?></th>
								      	<th>
								      		<a href="viewWork/<?= $row['id'];?>"><?= $row['name']; ?></a></th>
								      	<th><?= $row['date_bird']; ?></th>
								      	<th><?= $row['origin_place']; ?></th>
								      	<th><?= $row['curp']; ?></th>
								      	<th>
								      		<a href="deleteWork/<?= $row['id'];?>" onclick="deleteWork(this);" class="tool">
							      			 	<i class="btn btn-danger btn-xs fas fa-trash btn_padd"></i>
								      			<span class="tooltext">Eliminar</span>
								      			 
								      		</a>
								      		<a href="editWork/<?= $row['id'];?>" onclick="editWork();"  class="tool">
								      			<i class="btn btn-warning btn-xs fas fa-edit btn_padd"></i>
								      			<span class="tooltext">Editar</span>
								      			
								      		</a>
								      				

											
								      	</th>
								      	
								    </tr>
								<?php } ?>
							</tbody>
						</table>
					</div>

				</li>
				
				
				
			</ul>

		<?php } ?>
				

		</div>
	</div>

	<div class="clear"></div>
	
<!-- </div> -->
	
<!--FORMULARO PRA AGREGAR CUADRILLAS-->
<form class="modal hidden" action="#" onsubmit="saveGroup()" id="saveGroup">
	<div class="headModal">
		<h4 class="text-bold">Nueva cuadrilla</h4>
	</div>
	<div class="mainModal">
		<div class="row">
			<div class="col-lg-8">
				<label for="namec">Nombre de cuadrilla:</label>
				<input type="text" placeholder="Cuadrilla" name="name" id="namec" class="inputStyle">
			</div>
			<div class="col-lg-4">
				<label for="nPeople">Numero de personas:</label>
				<input type="number" placeholder="50" maxlength="2"  name="nPeople" id="nPeople" class="inputStyle"/>

			</div>
		</div>
		<hr>

		<div class="row">
			<div class="col-lg-8">
				<label for="liable">Nombre del responsable:</label>
				<input type="text" placeholder="responsable" name="liable" id="liable" class="inputStyle"><br>
			</div>
			<div class="col-lg-4">
				<label for="liable">Telefono:</label>
				<input type="number" placeholder="842 444 44 44" name="phone" id="phone" class="inputStyle">
			</div>
		</div>
		<div class="clear"></div>
		<div class="row">
			<div class="col-lg-12">
				<label for="coments">Comentarios sobre la cuadrilla:</label>
				<textarea name="coments" id="coments" class="inputStyle h70"></textarea>
				
			</div>
			
		</div>
		<div class="clear"></div>

	</div>
	<div class="footerModal">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-8  ">
				<input type="submit" value="Guardar" class="btn green">
			</div>
		</div>
		
	</div>
</form>
<div class="bgBlack hidden" onclick="closeModal();"></div>
