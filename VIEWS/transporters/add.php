

<div class="col-md-12">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title text-600">
			  Nuevo trasportista
			</h3>
			<div class="box-tools pull-right">
			    <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
		</div>
		<div class="box-body padd10 bgWhite table-responsive">
			<form action="<?=URL?>transporters/add/" method="post"  id="addEmploye">
				<div class="mainContent mW600">
					<div class="row">
						<div class="col-lg-10">
							<label for="name">Razón Social:</label>
							<input type="text"  placeholder="Razón Social" name="name" id="name" class="form-control" required> 
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
						<div class="col-lg-10">
							<label for="rfc">R F C:</label>
							<input type="text"  placeholder="R F C" name="rfc" id="rfc" class="form-control" required> 
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-10">
							<label for="address">Direccion Fiscal:</label>
							<input type="text"  placeholder="Direccion Fiscal" name="address" id="address" placeholder="" class="form-control" required> 
						</div>
					</div>
					<div class="clear"></div>
					
					<div class="row">
					
						<div class="col-lg-10">
							<label for="phone">Telefono:</label>
							<input type="text"  placeholder="Telefono" name="phone" id="phone" placeholder="" class="form-control" required> 
						</div>
					</div>
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-5">
							<label for="caat">CAAT:</label>
							<input type="text"  placeholder="CAAT" name="caat" id="caat" placeholder="" class="form-control" required> 
						</div>
						<div class="col-lg-5">
							<label for="alpha">ALPHA:</label>
							<input type="text"  placeholder="ALPHA" name="alpha" id="alpha" placeholder="" class="form-control" required> 
						</div>
						
					</div>
					<div class="clear"></div>
					<div class="row">
					
						<div class="col-lg-5">
							<label for="iccmx">ICCMX:</label>
							<input type="text"  placeholder="ICCMX" name="iccmx" id="iccmx" placeholder="" class="form-control" required> 
						</div>
						<div class="col-lg-5">
							<label for="us_dot">US DOT:</label>
							<input type="text"  placeholder="US DOT" name="us_dot" id="us_dot" placeholder="" class="form-control" required> 
						</div>
						
					</div>
					<div class="clear"></div>

				</div>
				<div class="col-lg-4 ">
					<input type="submit" value="Guardar" class="btn btn-success sgreen">
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
	
