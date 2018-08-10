<?php 
	$data = $requisitions->listSuplies();

 ?>

<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
				Requisiciones
			</h3>
			<div class="box-tools pull-right">
				<a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
			</div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<div class="clear"></div>
			<div class="row">
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
			<div class="mainContent">
				<div class="clear"></div>
				<div class="clear"></div>
				<button class="btn btn-success sgreen" onclick="openModal(this,'saveGroup');">
					<b>Nueva requisicion</b>
				</button>
				<div class="clear"></div>
				<div class="clear"></div>

			</div>
			<div class="clear"></div>
			<div class="bgBlack hidden" onclick="closeModal();"></div>
		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>

		
