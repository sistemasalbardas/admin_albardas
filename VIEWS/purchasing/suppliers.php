<?php 
   $data = $purchasing->suppliers();
 ?>

<div class="col-md-12">
  <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title text-600">Control de proveedores</h3>
        <div class="box-tools pull-right">
                          
                <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            
           </div>
      </div>
    <div class="box-body padd10 bgWhite table-responsive">
      <div class="row">
        <div class="col-lg-4">
          <button type="button" class="btn btn-primary sblue" data-toggle="modal" data-target="#modal-supplier">
            Nuevo proveedor
          </button>
        </div>
      </div>
      <div class="clear"></div>
      <div class="containerTable table-responsive">
        <table id="tableProducts" class="table bgWhite">
          <thead>
            <tr>
              <th scope="col" >ID</th>
              <th scope="col" >RAZON SOCIAL</th>
              <th scope="col" >RFC</th>
              <th scope="col" >CORREO</th>
              <th scope="col" >DIRECCION</th>
              <th scope="col" >CONTACTO</th>
              <th scope="col" >TELEFONOS</th>
              <th scope="col" >ACCIONES</th>
            </tr>
          </thead>  
          <tbody>
            <?php while($row = mysqli_fetch_array($data)){?>
              <tr>
                <th><?= $row['id']; ?></th>
                        <th>
                          <?= $row['name']; ?>
                        </th>
                        <th><?= $row['rfc']; ?></th>
                        <th>
                           <?= $row['email']; ?>
                        </th>
                        <th><?= $row['address']; ?></th>
                        <th>
                          <?= $row['name_contact']; ?>
                        </th>
                        <th>
                           <b>F</b> <?= $row['fixed_phone']; ?> <br> 
                           <b>M</b> <?= $row['mobile_phone']; ?>
                        </th>
                        
                      
                       
                        
                        <th>
 
 
                          <a href="<?= $row['id'];?>" onclick="deleteProvider(this);" class="tool">
                             <i class="btn btn-danger btn-xs s16 btn_padd"><span class="icon-trash"></span></i>
                            <span class="tooltext">Eliminar</span>
                             
                          </a>
               

          

                          <a href="<?=URL?>purchasing/editsupplier/?id=<?= $row['id'];?>" class="tool">
                            <i class="btn btn-warning btn-xs s16 btn_padd"><span class="icon-pencil"></span></i>
                            <span class="tooltext">Editar</span>   
                          </a>
                 

                        </th>
        
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="box-footer">
      <footer class="main-footer text-center">
        <strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
      </footer>
    </div>
  </div>
</div>

<!--MODAL PARA DAR DE ALTA NUEVO PROVEEDOR-->
<div class="modal fade" id="modal-supplier" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">NUEVO PROVEEDOR</h4>
         
        </div>
        <form role="form" onsubmit="addProvider(this);" method="post">
          <div class="modal-body">
            <div class="box-body">
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group">
                      <label for="name">Razon social: </label>
                      <input type="name" class="form-control" id="name" placeholder="" name="name" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group">
                      <label for="rfc">R F C: </label>
                      <input type="rfc" class="form-control" id="rfc" placeholder="" name="rfc" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group">
                      <label for="address">Direccion: </label>
                      <input type="text" class="form-control" id="address" placeholder="" name="address" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5 col-sm-6 ">
                    <div class="form-group">
                      <label for="fixed_phone">Telefono fijo: </label>
                      <input type="number" class="form-control" id="fixed_phone" placeholder="" name="fixed_phone" required="">
                    </div>
                  </div>
            
                  <div class="col-md-5 col-sm-6 ">
                    <div class="form-group">
                      <label for="mobile_phone">Telefono movil: </label>
                      <input type="number" class="form-control" id="mobile_phone" placeholder="" name="mobile_phone" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group">
                      <label for="email">Correo: </label>
                      <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                    </div>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-10">
                    <div class="form-group">
                      <label for="name_contact">Nombre de contacto: </label>
                      <input type="text" class="form-control" id="name_contact" placeholder="" name="name_contact" required="">
                    </div>
                  </div>
                </div>
             <div class="row">
               <div class="col-md-10">
                 <div class="form-group">
                 <label for="comments">Comentarios: </label>
                 <textarea name="comments" id="comments" class="form-control" required=""></textarea>
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
        <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
  </div>