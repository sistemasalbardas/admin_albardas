
<div class="col-md-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title text-600">Inventarios</h3>
      <div class="box-tools pull-right">
                        
              <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
          
         </div>
    </div>
    <div class="box-body padd10 bgWhite table-responsive">
      <div class="row">
        <div class="col-md-12">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#inventario" aria-controls="inventario" role="tab" data-toggle="tab">Inventario</a></li>
          <li role="presentation"><a href="#almacenes" aria-controls="almacenes" role="tab" data-toggle="tab">Almacenes</a></li>      
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="inventario">
            <br>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <button type="button" data-toggle="modal" data-target="#entrada" class="btn btn-info">Entrada</button>
              <button type="button" data-toggle="modal" data-target="#salida" class="btn btn-info">Salida</button>
              <button type="button" data-toggle="modal" data-target="#transferencia" class="btn btn-info">Transferencia</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <button type="button" data-toggle="modal" data-target="#nuevoAlmacen"  class="pull-right btn btn-info">Nuevo Almacen</button>
            </div>
            <div class="clearfix"></div>
            <hr>
            <table id="tbl_wharehouse" class="table-table-striped active">
              <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Grupo</th>
                <th>Disponible</th>
                <th>Costo</th>
                <th>Acciones</th>
              </thead>
            </table>
          </div>
          <div role="tabpanel" class="tab-pane" id="almacenes">
            <br>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <button type="button" data-toggle="modal" data-target="#entrada" class="btn btn-info">Entrada</button>
              <button type="button" data-toggle="modal" data-target="#salida" class="btn btn-info">Salida</button>
              <button type="button" data-toggle="modal" data-target="#transferencia" class="btn btn-info">Transferencia</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <button type="button" data-toggle="modal" data-target="#nuevoAlmacen"  class="pull-right btn btn-info">Nuevo Almacen</button>
            </div>
            <div class="clearfix"></div>
            <hr>
            <table id="tbl_wharehouse" class="table-table-striped">
              <thead>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Superficie</th>
                <th>Uso</th>
                <th>Acciones</th>
              </thead>
            </table>
          </div>
        </div>
          <!-- /.nav-tabs-custom -->
        </div>
      </div>
    </div>
    <div class="box-footer">
      <footer class="main-footer text-center">
        <strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
      </footer>
    </div>
  </div>
</div>

<div class="modal fade" id="entrada" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">NUEVA ENTRADA</h4>
         
        </div>
        <form role="form" onsubmit="addProvider(this);" method="post">
          <div class="modal-body">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                  <label for="orden">Orden de Compra</label>
                  <select name="orden" id="orden" class="form-control selectpicker" data-live-search="true">
                    <option value="">Seleccione orden de compra</option>
                    <option value="">Sin orden de Comprar</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="almacen">Almacen</label>
                  <select name="almacen" id="almacen" class="form-control selectpicker" data-live-search="true">
                    <option value="">Seleccione el Almacen</option>
                    <option value="">Fertirriegos</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="fecha">Fecha</label>
                  <div class="form-group has-feedback">
                    <input type="date" name="fecha" class="form-control inputStyle2" placeholder="Fecha">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                  </div>
                </div>

               
               
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                  <label for="recep">Recepciona</label>
                  <select name="recep" id="recep" class="form-control selectpicker" data-live-search="true">
                    <option value="">Seleccione al Responsable</option>
                    <option value="">Fredy</option>
                  </select>
              </div> 
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control" id="descripcion">
                    </textarea>
                  </div>
             
            </div>

         

             <div class="clearfix"></div>
             
             
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Recibir compra</button>
          </div>
        </form>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
</div>

<div class="modal fade" id="salida" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span></button>
          <h4 class="modal-title">SALIDAS</h4>
         
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12">
          <table id="tbl_wharehouse_salidas" class="table-table-striped">
                <thead>
                  <th>Folio</th>
                  <th>Fecha/Hora</th>
                  <th>Descripcion de salida</th>
                  <th>Recibio</th>
                  <th>Estatus</th>
                  <th>Acciones</th>
                </thead>
          </table>
        </div>
        

         <div class="clearfix"></div>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
</div>

<div class="modal fade" id="transferencia" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">TRANSFERENCIA</h4>
         
        </div>
        <form role="form" onsubmit="addProvider(this);" method="post">
          <div class="modal-body">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="alm_sal">Almacen de Salida</label>
                  <select name="alm_sal" id="alm_sal" class="form-control selectpicker" data-live-search="true">
                    <option value="">Seleccione el almacen</option>
                    <option value="">Almacen De Casco Bodega</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="alm_ent">Almacen de Entrada</label>
                  <select name="alm_ent" id="alm_ent" class="form-control selectpicker" data-live-search="true">
                    <option value="">Seleccione el Almacen</option>
                    <option value="">Almacen de Fertirriegos</option>
                  </select>
                </div> 
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                  <label for="fecha">Fecha</label>
                  <div class="form-group has-feedback">
                    <input type="date" name="fecha" class="form-control inputStyle2" placeholder="Fecha">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                  </div>
              </div>
              <div class="form-group">
                  <label for="resp">Responsable</label>
                  <select name="resp" id="resp" class="form-control selectpicker" data-live-search="true">
                    <option value="">Seleccione al Responsable</option>
                    <option value="">Fredy</option>
                    <option value="">Macario</option>
                  </select>
              </div> 
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="obs">Observaciones</label>
                    <textarea name="obs" class="form-control" id="obs">
                    </textarea>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="form-group">
                    <label for="prod">Producto herramienta o insumo</label>
                    <select name="prod" id="prod" class="form-control selectpicker" data-live-search="true">
                      <option value="">Seleccione Producto</option>
                      <option value="">Combustible Disel</option>
                      <option value="">Combustible Magna</option>
                    </select>
                    <label for="disp">Disponible: </label>
              </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="form-group">
                  <label for="cant">Cantidad</label>
                  <div class="form-group has-feedback">
                    <input type="number" name="cant" class="form-control inputStyle2" placeholder="Cantidad">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                  </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="form-group">
                  <label for="btn"></label>
                  <div class="form-group has-feedback">
                   <button type="button" class="btn btn-info btn-sm">Agregar + </button>
                  </div>
              </div>
            </div>


         

             <div class="clearfix"></div>
             <div class="col-lg-10 col-md-12 col-sm-12">
                <table id="tbl_wharehouse_transfers" class="table-table-striped">
                  <thead>
                    <th>Codigo</th>
                    <th>Producto o Insumo</th>
                    <th>Cantidad</th>
                    <th>Unidad de medida</th>
                    <th>Acciones</th>
                  </thead>
                </table>
             </div>
             <div class="clearfix"></div>
            
             
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
</div>

<div class="modal fade" id="nuevoAlmacen" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">NUEVA ALMACEN</h4>
         
        </div>
        <form role="form" onsubmit="addProvider(this);" method="post">
          <div class="modal-body">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="nom_alm">Nombre</label>
                  <input type="text" name="nom_alm" class="form-control inputStyle2" placeholder="Nombre">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control" id="descripcion">
                    </textarea>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                  <label for="sup">Superficie</label>
                  <input type="number" name="sup" class="form-control inputStyle2" placeholder="Superficie">
              </div>
              <div class="form-group">
                  <label for="uso">Uso</label>
                  <select name="uso" id="uso" class="form-control selectpicker" data-live-search="true">
                    <option value="">Uso</option>
                    <option value="">Insumos</option>
                    <option value="">Cosecha</option>
                    <option value="">Producto Terminado</option>
                    <option value="">Unidad de Servicio</option>

                  </select>
                </div>
            </div>

            

         

             <div class="clearfix"></div>
             
             
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
</div>
  <!--TABS CONTENTS-->

  