<div class="col-md-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title text-600">Programacion de Aplicaciones</h3>
      <div class="box-tools pull-right">
                        
              <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
          
         </div>
    </div>
    <div class="box-body padd10 bgWhite table-responsive">
        <a href="#" data-toggle="modal" data-target="#new_programming" class="pull-right btn btn-success btn-sm">Nueva Programacion +</a>
        <table id="tbl_supplies" class="table-table-striped">
          <thead>
            <th>Codigo</th>
            <th>Valvula</th>
            <th>Producto</th>
            <th>Dosis</th>
            <th>Aplicacion Total</th>
            <th>Segmento</th>
            <th>Responsable</th>
            <th>Fecha</th>
            <th>Fecha de aplicacion</th>
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

<div class="modal fade" id="new_programming" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">NUEVO PROGRAMACION</h4>
         
        </div>
        <form role="form" onsubmit="addProvider(this);" method="post">
          <div class="modal-body">
            <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="codigo">Codigo</label>
                      <input name="codigo" disabled type="text" value="P-1-0003" class="form-control" id="codigo" placeholder="Codigo">
                  </div>
                  <div class="form-group">
                    <label>Selecciona la Valvula</label> <br>
                    <label for="nomb_com">Morrones</label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="M1" value="M1"> M1
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="M2" value="M2"> M2
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="M3" value="M3"> M3
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="M5" value="M5"> M5
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="M6" value="M6"> M6
                    </label>
                    <div class="clearfix"></div><br>
                    <label for="nomb_com">Jalapeños</label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="V1" value="V1"> V1
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="V2" value="V2"> V2
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="V3" value="V3"> V3
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="V5" value="V5"> V5
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="V6" value="V6"> V6
                    </label>
                    <div class="clearfix"></div><br>
                    <label for="nomb_com">Chilacas</label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="C1" value="C1"> C1
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="C2" value="C2"> C2
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="C3" value="C3"> C3
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="C5" value="C5"> C5
                    </label>
                    <label class="checkbox-inline">
                      <input type="checkbox" id="C6" value="C6"> C6
                    </label>
                  </div>
                  <div class="form-group">
                    <label for="prod">Selecciona Productos</label>
                    <select name="prod" name="prod" class="selectpicker form-control" multiple data-max-options="10" data-live-search="true">
                      <option data-content="<span class='badge badge-success'>Malation</span>">Malation</option>
                      <option data-content="<span class='badge badge-danger'>Bionex</span>">Bionex</option>
                      <option data-content="<span class='badge badge-warning'>Amino Acidos</span>">Amino Acidos</option>
                      <option data-content="<span class='badge badge-primary'>EXCYTE</span>">EXCYTE</option>
                      <option data-content="<span class='badge badge-success'>BENOMIL</span>">BENOMIL</option>
                      <option data-content="<span class='badge badge-danger'>BIOACTIVE</span>">BIOACTIVE</option>
                      <option data-content="<span class='badge badge-warning'>CYREN 480</span>">CYREN 480</option>
                      <option data-content="<span class='badge badge-primary'>DEFENSE AX</span>">DEFENSE AX</option>
                      <option data-content="<span class='badge badge-success'>EXPANDER</span>">EXPANDER</option>
                      <option data-content="<span class='badge badge-danger'>FOSFONITRATO</span>">FOSFONITRATO</option>
                      <option data-content="<span class='badge badge-warning'>HORTIMIX</span>">HORTIMIX</option>
                      <option data-content="<span class='badge badge-primary'>IBAI ENGORDE</span>">IBAI ENGORDE</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="seg">Segmento</label>
                    <select name="seg" name="seg" class="selectpicker form-control" multiple data-max-options="2" data-live-search="true">
                      <option data-content="<span class='badge badge-success'>Morrones</span>">Morrones</option>
                      <option data-content="<span class='badge badge-danger'>Jalapeños</span>">Jalapeños</option>
                      <option data-content="<span class='badge badge-warning'>Chilacas</span>">Chilacas</option>
                    </select>
                  </div>
            </div>   
            <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                      <label for="res">Responsble</label>
                      <select name="res" id="res" class="form-control selectpicker" data-live-search="true">
                        <option value="">Seleccione El Responsable</option>
                        <option value="">Fredy</option>
                        <option value="">Macario</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <div class="form-group has-feedback">
                      <input type="date" id="fecha" name="fecha" class="form-control inputStyle2" placeholder="año-mes-dia">
                      <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fecha_ap">Fecha de Aplicacion</label>
                    <div class="form-group has-feedback">
                      <input type="date" id="fecha_ap" name="fecha_ap" class="form-control inputStyle2" placeholder="año-mes-dia">
                      <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                    </div>
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

  