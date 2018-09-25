<?php 
	$row = $purchasing->editsupplier(); 
 ?>
<div class="col-md-6">
	  <!-- general form elements -->
	<div class="box box-success">
	    <div class="box-header with-border">
	      <h3 class="box-title">Editar proveedor</h3>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
    	<form role="form" onsubmit="editProvider(this);" method="post">
    		<input type="hidden" name="id" id="id" value="<?=$row['id']?>">
         	<div class="modal-body">
        
	            <div class="box-body">
	                <div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <label for="name">Razon social: </label>
	                      <input type="name" class="form-control" id="name" placeholder="" name="name" required="" value="<?=$row['name']?>">
	                    </div>
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <label for="rfc">R F C: </label>
	                      <input type="rfc" class="form-control" id="rfc" placeholder="" name="rfc" required="" value="<?=$row['rfc']?>">
	                    </div>
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <label for="address">Direccion: </label>
	                      <input type="text" class="form-control" id="address" placeholder="" name="address" required="" value="<?=$row['address']?>">
	                    </div>
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-md-6 col-sm-6 ">
	                    <div class="form-group">
	                      <label for="fixed_phone">Telefono fijo: </label>
	                      <input type="number" class="form-control" id="fixed_phone" placeholder="" name="fixed_phone" required="" value="<?=$row['fixed_phone']?>">
	                    </div>
	                  </div>
	            
	                  <div class="col-md-6 col-sm-6 ">
	                    <div class="form-group">
	                      <label for="mobile_phone">Telefono movil: </label>
	                      <input type="number" class="form-control" id="mobile_phone" placeholder="" name="mobile_phone" value="<?=$row['mobile_phone']?>" >
	                    </div>
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <label for="email">Correo: </label>
	                      <input type="email" class="form-control" id="email" placeholder="" name="email" required="" value="<?=$row['email']?>">
	                    </div>
	                  </div>
	                </div>
	                 <div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <label for="name_contact">Nombre de contacto: </label>
	                      <input type="text" class="form-control" id="name_contact" placeholder="" name="name_contact" required="" value="<?=$row['name_contact']?>">
	                    </div>
	                  </div>
	                </div>
	             <div class="row">
	               <div class="col-md-12">
	                 <div class="form-group">
	                 <label for="comments">Comentarios: </label>
	                 <textarea name="comments" id="comments" class="form-control" required=""><?=$row['comments']?></textarea>
	               </div>
	               </div>
	             </div>
	            </div>

	            <div class="modal-footer">
	              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	              <button type="submit" class="btn btn-primary">Guardar</button>
	            </div>

         	</div>
    	</form>
	</div>
</div>
