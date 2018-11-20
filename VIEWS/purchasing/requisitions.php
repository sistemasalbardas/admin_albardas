<div class="col-md-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title text-600">Ordenes de Requisisiones</h3>
      <div class="box-tools pull-right">
                        
              <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
          
         </div>
    </div>
    <div class="box-body padd10 bgWhite table-responsive">
        <a href="#" data-toggle="modal" data-target="#new_provider" class="pull-right btn btn-success btn-sm">Nuevo +</a>
        <table id="tbl_requisitions" class="table-table-striped">
          <thead>
            <th>Codigo</th>
            <th>Productos</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Fecha de entrega</th>
            <th>Responsable</th>
            <th>Status</th>
            <th>Acciones</th>
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

<div class="modal fade" id="new_provider" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">NUEVO ORDEN DE REQUISICION</h4>
         
        </div>
        <form role="form" onsubmit="addProvider(this);" method="post">
          <div class="modal-body">
            <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="nomb_com">Nombre Comercial</label>
                    <input name="nomb_com" type="text" class="form-control" id="nomb_com" placeholder="Proveedor">
                  </div>
                  <div class="form-group">
                    <label for="raz_soc">Razon Social</label>
                    <input type="text" class="form-control" id="raz_soc" placeholder="Razon Social" name="raz_soc">
                  </div>
                  <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input type="text" class="form-control" id="rfc" placeholder="RFC" name="rfc">
                  </div>
                  <div class="form-group">
                    <label for="nom_cont">Nombres Del Contacto Principal</label>
                    <input type="text" class="form-control" id="nom_cont" placeholder="Contacto Principal" name="nom_cont">
                  </div>
                  <div class="form-group">
                    <label for="ap_cont">Apellidos Del Contacto Principal</label>
                    <input type="text" class="form-control" id="ap_cont" placeholder="Contacto Principal" name="ap_cont">
                  </div>
                  <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
                  </div>
                  
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                  <label for="tel">Telefonos</label>
                  <input type="text" class="form-control" id="tel" placeholder="Telefonos" name="tel">
              </div>
              <div class="form-group">
                  <label for="estatus">Estatus</label>
                  <select name="estatus" id="estatus" class="form-control selectpicker" data-live-search="true">
                    <option value="">Seleccione Estatus</option>
                    <option value="">Activo</option>
                    <option value="">Inactivo</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" class="form-control" id="descripcion">
                </textarea>
              </div>                
            </div>    
          </div>
          <div class="clearfix"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
</div>

  