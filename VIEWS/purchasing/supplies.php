<div class="col-md-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title text-600">Insumos</h3>
      <div class="box-tools pull-right">
                        
              <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
          
         </div>
    </div>
    <div class="box-body padd10 bgWhite table-responsive">
        <a href="#" data-toggle="modal" data-target="#new_supplie" class="pull-right btn btn-success btn-sm">Nuevo +</a>
        <table id="tbl_supplies" class="table-table-striped">
          <thead>
            <th>Clave</th>
            <th>Nombre</th>
            <th>Grupo</th>
            <th>Ingrediente Activo</th>
            <th>Precio</th>
            <th>Unidad de Compra</th>
            <th>Unidad de uso</th>
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

<div class="modal fade" id="new_supplie" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">NUEVO INSUMO</h4>
         
        </div>
        <form role="form" onsubmit="addProvider(this);" method="post">
          <div class="modal-body">
             <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input name="clave" type="text" class="form-control" id="clave" placeholder="Clave">
                  </div>
                  <div class="form-group">
                    <label for="insumo">Nombre del Insumo</label>
                    <input type="text" class="form-control" id="insumo" placeholder="Insumo" name="insumo">
                  </div>
                  <div class="form-group">
                    <label for="medida">Unidad de Medida</label>
                    <select name="medida" id="medida" class="form-control selectpicker" data-live-search="true">
                      <option value="">Unidad de medida</option>
                      <option value="">Kg</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12"> 
                      <div class="form-group">
                        <label for="precio">Precio Unitario</label>
                        <input type="number" class="form-control" id="precio" placeholder="Precio" name="precio">
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12"> 
                      <div class="form-group">
                          <label for="precio">Divisa</label>
                          <select name="divisa" id="divisa" class="form-control selectpicker" data-live-search="true">
                            <option value="">Peso Mexicano</option>
                            <option value="">USD</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="medida">Grupo</label>
                    <select name="medida" id="medida" class="form-control selectpicker" data-live-search="true">
                      <option value="">Fertilizantes</option>
                      <option value="">Agroquimico</option>
                    </select>
                  </div>
             </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control" id="descripcion">
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="ingrediente">Ingrediente Activo</label>
                    <select name="ingrediente" name="ingrediente" class="selectpicker form-control" multiple data-max-options="2" data-live-search="true">
                      <option data-content="<span class='badge badge-success'>Anavale produce corp</span>">Anavale produce corp</option>
                      <option data-content="<span class='badge badge-danger'>Oxido Nitrico</span>">Oxido Nitrico</option>
                      <option data-content="<span class='badge badge-warning'>Relish</span>">Relish</option>
                      <option data-content="<span class='badge badge-primary'>Relish</span>">Relish</option>
                    </select>

                  </div>
             </div>

             <div class="col-lg-12 col-md-12 col-sm-12">
               
                  <div class="form-group">
                    <label for="proveedores">Proveedores que venden este insumo</label>
                    <select name="ingrediente" id="ingrediente" class="selectpicker form-control" data-live-search="true">
                    <option value="">Proveedores</option>
                    <option value="">Aron Ramirez</option>
                      <option value="">Agrochimallo</option>
                    </select>
                  </div>  
             </div>

            <!-- <label for="precio">Factor de Conversion</label> -->
             <div class="col-lg-4 col-md-4 col-sm-12"> 
                  <div class="form-group">
                    <h2>1 = </h2>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12"> 
                  <div class="form-group">
                    <input type="number" class="form-control" id="fact" placeholder="Cantidad" name="fact">
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <select name="uni_uso" name="uni_uso" class="selectpicker form-control" data-live-search="true">
                    <option value="">Unidad de Uso</option>
                      <option value="">Lt</option>
                      <option value="">Kg</option>
                    </select>
                  </div>  
             </div>

             <div class="clearfix"></div>
             
             
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar y Nuevo</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
</div>

  