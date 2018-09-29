<?php 
	$row = $purchasing->editcategory(); 
 ?>
<div class="col-md-6">
	<!-- general form elements -->
	<div class="box box-success">
	    <div class="box-header with-border">
				<h3 class="box-title">Editar proveedor</h3>
				<div class="box-tools pull-right">
			          <!-- <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a> -->
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
          </div>
	    </div>
	    <!-- /.box-header -->
	    <!-- form start -->
    	<form role="form" onsubmit="editCategory(this);" method="post">
    		<input type="hidden" name="id" id="id" value="<?=$row['id']?>">
         	<div class="modal-body">
        
	            <div class="box-body">
	                <div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <label for="name">Nombre: </label>
	                      <input type="name" class="form-control" id="name" placeholder="" name="name" required="" value="<?=$row['name']?>">
	                    </div>
	                  </div>
	                </div>
	                
             		<div class="row">
		               <div class="col-md-12">
		                 <div class="form-group">
			                 <label for="description">Comentarios: </label>
			                 <textarea name="description" id="description" class="form-control" required=""><?=$row['description']?></textarea>
			               </div>
		               </div>
	             	</div>
	            </div>

	            <div class="modal-footer">
	              <button type="submit" class="btn btn-primary">Guardar</button>
	            </div>

         	</div>
    	</form>
	</div>
</div>
