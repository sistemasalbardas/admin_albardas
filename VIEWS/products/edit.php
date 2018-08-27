<?php 
	$row = $products->edit();
?>
<div class="col-md-6">
	  <!-- general form elements -->
	<div class="box box-success">

	    <div class="box-header with-border">
	      <h3 class="box-title">Editar producto</h3>
	      <div class="box-tools pull-right">
	      	                
                <a href="../" class="btn btn-box-tool tool">
                	<i class="fas fa-arrow-left"></i>
                	<span class="tooltext">Volver</span>
                </a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                	<i class="fa fa-minus"></i>
                </button>
            
           </div>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
	    <form class="box-body" method="post"  id="saveWork" autocomplete="off" action="<?=URL?>products/edit/">
			<input type="hidden" name="id" value="<?= $row['id']?>" >

	      	<div class="box-body">
		        <div class="form-group">
		          	
					<label for="name">Nombre del producto:</label>
					<input type="text" name="name" id="name" class="form-control" value="<?= $row['name']?>" required> 
		        </div>
		        <div class="form-group">
		         
		          <label for="quality">Calidad:</label>
					<select name="quality" id="quality" class="form-control" required="">
						<option value="">SELECCIONA</option>
						<option value="1 RA">1 RA </option>
						<option value="2 DA">2 DA</option>
					</select>
		        </div>
		        <div class="form-group">
		        	<label for="size">Tamaño:</label>
					<select name="size" id="size" class="form-control" required="">
						<option value="">SELECCIONA</option>
						<optgroup label="TAMAÑOS DE CHILES">
						    <option value="XL"> XL</option>
							<option value="L"> L</option>
							<option value="M"> M</option>
							<option value="CH"> CH</option>
						</optgroup>
						<optgroup label="TAMAÑOS DE CEBOLLAS">
						    <option value="LG"> LG</option>
							<option value="LM"> LM</option>
							<option value="PP"> PP</option>
							<option value="J"> J</option>
						</optgroup>
					</select>

				
		        </div>
		        <div class="form-group">
		          <label for="pack">Empaque:</label>
					<select name="pack" id="pack" class="form-control" required="">
						<option value="">SELECCIONA</option>
						<optgroup label="EMPAQUE CHILES">
						    <option value=" CARTON 1 1/9">  CARTON 1 1/9</option>
						    <option value=" ARPILLA ">  ARPILLA </option>
						</optgroup>
						<optgroup label="EMPAQUES DE CEBOLLAS">
						    <option value="ARPILLA FRESA">ARPILLA FRESA </option>
							<option value="ARPILLA SELECCIONADA">ARPILLA SELECCIONADA </option>
							<option value="ARPILLA MORADA">ARPILLA MORADA</option>
							<option value="ARPILLA MEXICAN">ARPILLA MEXICAN </option>
						</optgroup>
					</select>
					
		        </div>
		        <div class="form-group">
		        	<label for="brand">Marca:</label>
					<select name="brand" id="brand" class="form-control" required="">
						<option value="">SELECCIONA</option>
						<option value="GENERICO">GENERICO</option>
					    <option value="ANAVALE">ANAVALE </option>
						<option value="TRIPLE H">TRIPLE H </option>
						<option value="ALEK">ALEK </option>
						<option value="PICOSITO">PICOSITO</option>
						<option value="CHILOSO">CHILOSO </option>
						<option value="CASCO"> CASCO</option>
					</select>
					
		        </div>	
		        <div class="form-group">
		        	<div class="row">
		        		
			        	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
							<label for="weight">Peso:</label>
							<input type="number" id="weight" name="weight" class="form-control" required="" value="<?= $row['weight']?>">
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
							<label for=""> <br></label>
							<select name="unit_measure" id="unit_measure" class="form-control" required="">
								<option value=""></option>
								<option value="LBS">LBS</option>
								<option value="KG">KG</option>
							    
							</select>
						</div>
				
		        	
					</div>
			    </div>
	      </div>
	      <!-- /.box-body -->

	      <div class="box-footer">
	        <button type="submit" class="btn btn-primary">Guardar</button>
	      </div>
	    </form>
	</div>
</div>