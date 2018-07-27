
<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
			Nuevo registro de caja
			</h3>
			<div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<form action="<?=URL?>transporters/addBox/" method="post"  >
				<input type="hidden" name="id" value="<?= $_GET['id']?>">
				<input type="hidden" name="nameTransport" value="<?= $_GET['nameTransport']?>">
				<div class="mainContent mW600">
					<div class="row">
						<div class="col-lg-7">
							<label for="type">Tipo de caja:</label>
							<select name="type" id="type" required class="inputStyle">
								<option value="Remolque">Remolque</option>
								<option value="Estaca">Estaca</option>
								<option value="Refrigerado">Refrigerado</option>
								<option value="Tolva">Tolva</option>
								<option value="Cama baja">Cama baja</option>
								<option value="Plataforma">Plataforma</option>
							</select>
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-4">
							<label for="temperature">Temperatura:</label>
							<input type="text" name="temperature" id="temperature" class="inputStyle" required> 
						</div>
						<div class="col-lg-3">
							<label for="degrees">Grados:</label>
							<select name="degrees" id="degrees" class="inputStyle" required="">
								<option value="C °">C °</option>		
								<option value="F °">F °</option>		
								<option value="K °">K °</option>		
							</select>
						</div>
						
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-7">
							<label for="placa"> Numero de Placa:</label>
							<input type="text" name="placa" id="placa" class="inputStyle" required> 
						</div>
					</div>
					
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-7">
							<label for="num_econ">Numero economico</label>
							<input type="text" name="num_econ" id="num_econ" placeholder="" class="inputStyle" required> 
						</div>
					</div>
					<div class="clear"></div>
				</div>
					<div class="col-lg-4 ">
						<input type="submit" value="Guardar" class="button blue">
					</div>
			</form>
		</div>
		<div class="box-footer">
			<footer class="main-footer text-center">
				<strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
			</footer>
		</div>
	</div>
</div>	
