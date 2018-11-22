<div class="col-md-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title text-600">Ciclos</h3>
      <div class="box-tools pull-right">
                        
              <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
          
         </div>
    </div>
    <div class="box-body padd10 bgWhite table-responsive">
        <a href="#" data-toggle="modal" data-target="#new_cycle" class="pull-right btn btn-success btn-sm">Nuevo Ciclo +</a>
        <table id="tbl_cycles" class="display responsive nowrap table table-striped" style="width:100%">
          <thead>
            <th data-priority="1">Clave</th>
            <th data-priority="2">Nombre</th>
            <th>Segmento/ Cultivo</th>
            <th data-priority="4">Tablas</th>
            <th data-priority="5">Estatus</th>
            <th data-priority="6">Fecha de Inicio</th>
            <th data-priority="7">Fecha de Fin</th>
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

<div class="modal fade" id="new_cycle" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">NUEVO CICLO</h4>
         
        </div>
        <form role="form" onsubmit="newInsumo(this, event);" method="post">
          <div class="modal-body">
             <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input name="clave" type="text" readonly class="form-control" id="clave" placeholder="Clave" required>
                  </div>
                  <div class="form-group">
                    <label for="ciclo">Nombre del Ciclo</label>
                    <input type="text" class="form-control" id="ciclo" placeholder="Ciclo" name="ciclo" required>
                  </div>
                  <div class="form-group">
                    <label for="segmento">Segmento/ Cultivo</label>
                    <select name="segmento" id="segmento" class="form-control selectpicker" title="Elige El Segmento" data-live-search="true" required>
                      <option value="1">Poblano</option>
                      <option value="2">Jalapeño</option>
                      <option value="3">Morron</option>
                      <option value="4">Chilaca</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tablas">Tablas</label>
                    <select name="tablas" id="tablas" class="selectpicker form-control" title="Elige las Valbulas" multiple data-max-options="200" data-live-search="true">
                      <option data-content="<span class='badge badge-success'>V1</span>">V1</option>
                      <option data-content="<span class='badge badge-danger'>V2</span>">V2</option>
                      <option data-content="<span class='badge badge-warning'>V3</span>">V3</option>
                      <option data-content="<span class='badge badge-primary'>V4</span>">V4</option>
                      <option data-content="<span class='badge badge-primary'>V5</span>">V5</option>
                      <option data-content="<span class='badge badge-success'>M1</span>">M1</option>
                      <option data-content="<span class='badge badge-danger'>M2</span>">M2</option>
                      <option data-content="<span class='badge badge-warning'>M3</span>">M3</option>
                      <option data-content="<span class='badge badge-primary'>M4</span>">M4</option>
                      <option data-content="<span class='badge badge-warning'>M5</span>">M5</option>
                      <option data-content="<span class='badge badge-success'>P1</span>">P1</option>
                      <option data-content="<span class='badge badge-danger'>P2</span>">P2</option>
                      <option data-content="<span class='badge badge-warning'>P3</span>">P3</option>
                      <option data-content="<span class='badge badge-primary'>P4</span>">P4</option>
                      <option data-content="<span class='badge badge-danger'>P5</span>">P5</option>
                      <option data-content="<span class='badge badge-success'>I1</span>">I1</option>
                      <option data-content="<span class='badge badge-danger'>I2</span>">I2</option>
                      <option data-content="<span class='badge badge-warning'>I3</span>">I3</option>
                      <option data-content="<span class='badge badge-primary'>I4</span>">I4</option>
                      <option data-content="<span class='badge badge-primary'>I5</span>">I5</option>
                      <option data-content="<span class='badge badge-success'>J1</span>">J1</option>
                      <option data-content="<span class='badge badge-danger'>J2</span>">J2</option>
                      <option data-content="<span class='badge badge-warning'>J3</span>">J3</option>
                      <option data-content="<span class='badge badge-primary'>J4</span>">J4</option>
                      <option data-content="<span class='badge badge-success'>J5</span>">J5</option>
                    </select>
                  </div>
                  
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="estatus">Estatus</label>
                    <select name="estatus" id="estatus" class="form-control selectpicker" title="Elige El Estatus" data-live-search="true" required>
                    <option value="1">Activa</option>
                    <option value="2">Cancelada</option>
                    <option value="3">Finalizada</option>
                    <option value="4">Planeacion</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha_ini">Fecha de Inicio</label>
                    <div class="form-group has-feedback">
                        <input type="date" name="fecha_ini" class="form-control inputStyle2" placeholder="Fecha de Inicio">
                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fecha_fin">Fecha de Fin</label>
                    <div class="form-group has-feedback">
                        <input type="date" name="fecha_fin" class="form-control inputStyle2" placeholder="Fecha de Fin">
                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                    </div>
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

<div class="modal fade" id="edit_supplie" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">EDITAR INSUMO</h4>
         
        </div>
        <form role="form" onsubmit="editInsumo(this, event);" method="post">
          <div class="modal-body">
             <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <input type="hidden" id="id_insumo" name="id">
                    <label for="clave">Clave</label>
                    <input name="clave" type="text" readonly class="form-control" id="edit_clave" placeholder="Clave" required>
                  </div>
                  <div class="form-group">
                    <label for="insumo">Nombre del Insumo</label>
                    <input type="text" class="form-control" id="edit_insumo" placeholder="Insumo" name="insumo" required>
                  </div>
                  <div class="form-group">
                    <label for="medida_id">Unidad de Medida</label>
                    <select name="medida_id" id="edit_medida_id" class="form-control selectpicker" title="Elige la Unidad de Medida" data-live-search="true" required>
                      <option value="1">Unidad de medida</option>
                      <option value="2">Kg</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12"> 
                      <div class="form-group">
                        <label for="precio">Precio Unitario</label>
                        <input type="number" class="form-control" id="edit_precio" placeholder="Precio" name="precio" required>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12"> 
                      <div class="form-group">
                          <label for="precio">Divisa</label>
                          <select name="divisa" id="edit_divisa" class="form-control selectpicker" title="Elige una Divisa" data-live-search="true" required>
                            <option value="Peso Mexicano">Peso Mexicano</option>
                            <option value="Dolar">USD</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="grupo_id">Grupo</label>
                    <select name="grupo_id" id="edit_grupo_id" class="form-control selectpicker" title="Elige el Grupo" data-live-search="true" required>
                      <option value="3">Fertilizantes</option>
                      <option value="4">Agroquimico</option>
                    </select>
                  </div>
             </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control" id="edit_descripcion" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="ingrediente">Ingrediente Activo</label>
                    <select name="ingrediente[]" id="edit_ingrediente" class="selectpicker form-control" title="Elige los Activos" multiple data-max-options="2" data-live-search="true">
                      <option data-content="<span class='badge badge-success'>Anavale produce corp</span>">Anavale produce corp</option>
                      <option data-content="<span class='badge badge-danger'>Oxido Nitrico</span>">Oxido Nitrico</option>
                      <option data-content="<span class='badge badge-warning'>Relish</span>">Relish</option>
                      <option data-content="<span class='badge badge-primary'>Relish</span>">Relish</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Marca:</label>
                    <input type="text" name="marca" id="edit_marca" class="form-control" placeholder="Marca" required>
                  </div>
                  <div class="form-group">
                    <label for="">DH</label>
                    <input type="number" step="any" name="dh" id="edit_dh" min="0" class="form-control" placeholder="Docis por Hectarea">
                  </div>
             </div>

             <div class="col-lg-12 col-md-12 col-sm-12">
               
                  <div class="form-group">
                    <label for="proveedor_id">Proveedores que venden este insumo</label>
                    <select name="proveedor_id" id="edit_proveedor_id" class="selectpicker form-control" title="Elige Proveedor" data-live-search="true">
                    <option value="">Proveedores</option>
                    <option value="1">Aron Ramirez</option>
                      <option value="2">Agrochimallo</option>
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
                    <input type="number" step="any" class="form-control" id="edit_factor" placeholder="Cantidad" name="factor" required>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group">
                    <select name="medida_uso" id="edit_medida_uso" class="selectpicker form-control"title="Elige la Unidad de Uso" data-live-search="true">
                    <option value="">Unidad de Uso</option>
                      <option value="1">Lt</option>
                      <option value="2">Kg</option>
                    </select>
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

  