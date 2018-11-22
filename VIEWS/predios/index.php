<div class="col-md-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title text-600">Predios</h3>
      <div class="box-tools pull-right">
                        
              <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
          
         </div>
    </div>
    <div class="box-body padd10 bgWhite table-responsive">
        <a href="#" data-toggle="modal" data-target="#new_predio" class="pull-right btn btn-success btn-sm">Nuevo Predio +</a>
        <table id="tbl_predios" class="display responsive nowrap table table-striped" style="width:100%">
          <thead>
            <th data-priority="1">Clave</th>
            <th data-priority="2">Nombre</th>
            <th>Superficie Total</th>
            <th>Superficie Riego</th>
            <th data-priority="4">Lts/S</th>
            <th data-priority="5">Geo Referencia</th>
            <th data-priority="3">Acciones</th>
          </thead>
        </table>
    </div>
    <div class="box-footer">
      <footer class="main-footer text-center">
        <strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
      </footer>
    </div>
  </div>
</div>

<div class="modal fade" id="new_predio" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">NUEVO PREDIO</h4>
         
        </div>
        <form role="form" onsubmit="newInsumo(this, event);" method="post">
          <div class="modal-body">
             <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input name="clave" type="text" readonly class="form-control" id="clave" placeholder="Clave" required>
                  </div>
                  <div class="form-group">
                    <label for="predio">Nombre del Predio</label>
                    <input type="text" class="form-control" id="predio" placeholder="Predio" name="predio" required>
				  </div>
				  <div class="form-group">
                    <label for="superficie">Superficie Total</label>
                    <input type="number" class="form-control" id="superficie" placeholder="Superficie" name="superficie" required>
				  </div>
			 </div>
			 <div class="col-lg-6 col-md-6 col-sm-12">
			 	<div class="form-group">
                    <label for="superficie_riego">Superficie De Riego</label>
                    <select name="superficie_riego[]" id="superficie_riego" class="selectpicker form-control" title="Elige las Superficies" multiple data-max-options="5" data-live-search="true">
                      <option data-content="<span class='badge badge-success'>Goteo</span>">Goteo</option>
                      <option data-content="<span class='badge badge-danger'>Aspercion</span>">Aspercion</option>
                      <option data-content="<span class='badge badge-warning'>Temporal</span>">Temporal</option>
                      <option data-content="<span class='badge badge-primary'>Inventario</span>">Inventario</option>
                    </select>
			    </div>
				<div class="form-group">
                    <label for="lts">Litros por Segundo</label>
                    <input type="number" class="form-control" id="lts" placeholder="Lts/s" name="lts" required>
				</div>
			 </div>
			      
                  
             <div class="clearfix"></div>       
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
</div>


  