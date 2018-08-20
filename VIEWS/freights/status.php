<?php 	
  $data = $freights->status();
	$payments = $freights->payments();
 ?>
<div class="col-md-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title text-600">
         <i class="fa fa-file-invoice-dollar"></i> 
            ESTADO DE CUENTA 
      </h3>
      <div class="box-tools pull-right">
                        
              <a href="../" class="btn btn-box-tool tool"><i class="fas fa-arrow-left"></i><span class="tooltext">Volver</span></a>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
          
         </div>
    </div>
     
    <div class="box-body padd10 bgWhite table-responsive">
      <div class="row invoice-info ">
          <div class="col-sm-4 invoice-col">
            Trasportista
            <address>
              <strong><?=$data['name']?></strong><br>
              <?=$data['address']?><br>
              Telefono: <?=$data['phone']?><br>
           
            </address>
          </div>
        
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <br>
              <b>Flete: #<?=$_GET['id']?></b><br>
              <b>Total: $ <?= number_format($data['total']); ?></b><br>
              
              <small class=""> <b> </b></small>
              <b>Fecha:</b> 2/22/2014<br>
              <a  href="<?=URL?>VIEWS/pdf_files/referrals/<?= $data['file_remision']; ?>" target="_blank" download>
                <i class="fas fa-file-pdf"></i>
                Remision
              </a> <br> 
              <?php if (!empty($data['file_edited'])) {?>
                  <a href="<?=URL?>VIEWS/pdf_files/referrals/EDIT_REM_<?= $data['file_edited']; ?>.pdf" target="_blank" download>
                      <i class="fas fa-file-pdf"></i>
                      Remision modificada
                  </a>
              <?php } ?>
              <?php if (empty($data['bills'])) {?>
                <form method="post" enctype="multipart/form-data" onsubmit="saveBill(this);">
                  <input type="hidden" name="folio" id="folio" value="<?=$data['f_freight']?>">
                  <input type="file" name="documento">
                  <input type="submit">
                </form>
              
              <?php } else { ?>
                <a href="<?=URL?>VIEWS/pdf_files/freights_bills/<?= $data['bills']; ?>" target="_blank" download>
                      <i class="fas fa-file-pdf"></i>
                      Factura
                  </a>
              <?php } ?>
             
           
            
          </div>
          <!-- /.col -->
        </div>
      <hr>

      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
        Abonar
      </button>

      <table class="table bgWhite">
            <thead>
            <tr>
              <th>Pago</th>
              <th>Fecha</th>
              <th>Concepto</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
              <?php 
                $i = 1;
                while ($row = mysqli_fetch_array($payments)) {
                $p += $row['amount'];
                $subtotal = $data['total'] - $p;
                ?>
                <tr>
                  <th><?=$i;?></th>
                  <th><?=$row['date']?></th>
                  <th><?=$row['concept']?></th>
                  <th>$ <?=$row['amount']?></th>  
                  <th>$ <?= number_format($subtotal); ?></th>
                </tr>
             <?php 
              $i++;

              } ?>
             
            </tbody>
            <tfoot>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>
                  <b>$ <?=$p;?></b>
                </th>
                <th>
                  
                </th>
              </tr>
            </tfoot>
      </table>

    </div>
    <div class="box-footer">
      <footer class="main-footer text-center">
        <strong class="">Copyright © 2018-2018 <a href="#">Agricola Las Albardas</a>.</strong> Todos los derechos reservados.
      </footer>
    </div>
  </div>
</div>



  <div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Nuevo abono</h4>
               
              </div>
              <form role="form" onsubmit="newPayment(this);" method="post">
                <div class="modal-body">
                   <input type="hidden" name="f_freight" value="<?= $_GET['id']; ?>">
                  <div class="box-body">

                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                            <label for="date">Fecha: </label>
                            <input type="date" class="form-control" id="date" placeholder="" name="date">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-10">
                           <div class="form-group">
                            <label for="concept">Concepto: </label>
                            <select name="concept" id="concept" class="form-control" >
                              <option value="">SELCCIONA</option>
                              <option value="abono">Abono</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-7">
                          <div class="form-group">
                          <label for="amount">Monto: </label>
                          <input type="number" name="amount" class="form-control" id="amount" placeholder="$ 00.00" >
                        </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                          <label for="coments">Comentarios: </label>
                          <textarea name="coments" id="coments" class="form-control"></textarea>
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