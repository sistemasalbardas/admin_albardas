<div class="col-md-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title text-600">Compras</h3>
      <div class="box-tools pull-right">
                        
              <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
          
         </div>
    </div>
    <br>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group">
          <select name="orCom" id="orCom" class="form-control selectpicker" data-live-search="true">
            <option value="">Todos</option>
            <option value="">Aprobada</option>
            <option value="">En revision</option>
            <option value="">No Aprobada</option>
            <option value="">Eliminada</option>
          </select>
        </div>     
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group">
          <select name="emp" id="emp" class="form-control selectpicker" data-live-search="true">
            <option value="">Todas las Empresas</option>
            <option value="">El Calabacillal</option>
            <option value="">El Cegador</option>
            <option value="">Ricardo Gonzalez</option>
            <option value="">Las Albardas</option>
          </select>
        </div>     
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group">
          <select name="prov" id="prov" class="form-control selectpicker" data-live-search="true">
            <option value="">Todos Los Proveedores</option>
            <option value="">Aron Rojas</option>
            <option value="">Acero Climas</option>
            <option value="">ADOSA</option>
          </select>
        </div>      
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="form-group">
          <button type="button" id="btn_nuevo"  data-toggle="modal" data-target="#new_purchase" class="btn btn-success btn-md pull-right">Nueva +</button>
        </div>      
    </div>
    <div class="clearfix"></div>
    <div class="box-body padd10 bgWhite table-responsive">
        <table id="tbl_purchase" class="table-table-striped">
          <thead>
            <th>Folio</th>
            <th>Fecha</th>
            <th>Empresa</th>
            <th>Proveedor</th>
            <th>Concepto</th>
            <th>Facturas</th>
            <th>Total</th>
            <th>Saldo</th>
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

<div class="modal fade" id="new_purchase" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">NUEVO ORDEN DE COMPRA</h4>
         
        </div>
        <form role="form" onsubmit="addProvider(this);" method="post">
          <div class="modal-body">
             <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="folio">Folio</label>
                    <input name="folio" disabled type="text" value="--/----" class="form-control" id="folio" placeholder="Folio">
                </div>
                <div class="form-group">
                    <label for="prov">Proveedor</label>
                    <select name="prov" id="prov" class="form-control selectpicker" data-live-search="true">
                      <option value="">Selecciona Proveedor</option>
                      <option value="">Aron Rojas</option>
                      <option value="">Acero Climas</option>
                      <option value="">ADOSA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="precio">Divisa</label>
                    <select name="divisa" id="divisa" class="form-control selectpicker" data-live-search="true">
                      <option value="">Peso Mexicano</option>
                      <option value="">USD</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="precio">Concepto</label>
                    <input type="text" name="concep" id="concep" placeholder="Concepto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control" id="descripcion">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="obser">Observaciones</label>
                    <textarea name="obser" class="form-control" id="obser">
                    </textarea>
                </div>
            </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="est">Estatus</label>
                  <div class="form-group has-feedback">
                    <input type="text" id="est" name="est" value="En Revision" disabled class=" form-control inputStyle2" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="fecha">Fecha</label>
                  <div class="form-group has-feedback">
                    <input type="date" id="fecha" name="fecha" class="form-control inputStyle2" placeholder="año-mes-dia">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="fechaEntr">Fecha Estimada de Entrega</label>
                  <div class="form-group has-feedback">
                    <input type="date" id="fechaEntr" name="fechaEntr" class="form-control inputStyle2" placeholder="año-mes-dia">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="empresa">Empresa que compra</label>
                  <select id="empresa" name="empresa" class="selectpicker form-control" data-live-search="true">
                    <option>Seleccion de Empresa</option>
                    <option>El Calabacillal</option>
                    <option>El Cegador</option>
                    <option>Las Albardar</option>
                    <option>Ricardo Gonzalez</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pago">Condiciones de Pago</label>
                  <select id="pago" name="pago" class="selectpicker form-control" data-live-search="true">
                  <option>Selecciona una condicion de pago</option>
                  <option>Contado</option>
                  <option>Credito</option>
                  <option>Anticipio</option>
                  <option>Contra Entrega</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="credito">Dias de Credito</label>
                  <div class="form-group has-feedback">
                    <input type="number" id="credito" name="credito" min="0"  class="form-control inputStyle2" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="fechaVenc">Fecha de vencimiento</label>
                  <div class="form-group has-feedback">
                    <input type="date" id="fechaVenc" name="fechaVenc" class="form-control inputStyle2" placeholder="año-mes-dia">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="credito">Elabora</label>
                  <div class="form-group has-feedback">
                   <h4 class="">David Adrian Gonzalez Morales</h4>
                  </div>
                </div>
                <div class="form-group">
                    <label for="aprovar">Empleados autorizados para aprobar</label>
                    <select name="aprovar" name="aprovar" class="selectpicker form-control" multiple data-max-options="2" data-live-search="true">
                      <option data-content="<span class='badge badge-success'>David Adrian Gonzalez Morales</span>">David Adrian Gonzalez Morales</option>
                      <option data-content="<span class='badge badge-danger'>Ricardo Gonzalez Sada</span>">Ricardo Gonzalez Sada</option>
                      <option data-content="<span class='badge badge-warning'>Fredy</span>">Fredy</option>
                      <option data-content="<span class='badge badge-primary'>Felipe Zanchez</span>">Felipe Zanchez</option>
                    </select>
                </div>
             </div>
              <hr>

             <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="folio">185/2018</label>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <select name="nombre" id="nombre" class="selectpicker form-control" data-live-search="true">
                    <option value="">Morin</option>
                    <option value="">Malation</option>
                      <option value="">Malation 75</option>
                    </select>
                </div> 
                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="text" class="form-control" id="clave" placeholder="Clave" name="clave">
                </div> 
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="cantidad">Cantidad</label>
                      <input type="number" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidad">
                  </div> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="precio">Precio</label>
                      <input type="number" class="form-control inputStyle2" id="precio" placeholder="Precio" name="precio">
                      <span class="glyphicon glyphicon-usd form-control-feedback"></span>
                  </div> 
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

  