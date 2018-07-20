<?php 
	$data = $requisitions->listSuplies();

 ?>
<!-- <div class="mainContainer"> -->
	<div class="clear"></div>
	<div class="containerPanel">

		<div class="headContent">
			<div class="row">
				<div class="col-lg-10">
					<div class="block h50 ">
						<div class="content middle text-left">
							<h4 class="text-bold">Requisiciones </h4>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="block h50 ">
						<div class="content middle text-left">
							<a href="<?=URL?>requisitions/config/" class="tooltip">
								<i class="material-icons s30 cBlack">
								settings
								</i>
								<span class="tooltiptext">Configurar</span>
							</a>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		<div class="mainContent">
			<div class="clear"></div>
			<div class="clear"></div>
			<button class="btn Green s14" onclick="openModal(this,'saveGroup');">
				<b>Nueva requisicion</b>
			</button>
			<div class="clear"></div>
			<div class="clear"></div>

		</div>
	</div>

	<div class="clear"></div>
	
<!-- </div> -->
<div class="bgBlack hidden" onclick="closeModal();"></div>
