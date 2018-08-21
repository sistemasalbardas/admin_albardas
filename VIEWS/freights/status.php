<?php   
  $inf = $freights->status();
  $data = mysqli_fetch_array($inf);
  $payments = $freights->payments();
 ?>
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-file-invoice-dollar"></i> Estado de cuenta 
            <a href="" target="_blank" class="btn btn-default pull-right no-print" onclick="window.print();"><i class="fa fa-print"></i> Impimir</a>
          </h2>
        </div>
          
<!-- this row will not appear when printing -->


      </div>

       <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Transportista
          <address>
            <strong><?=$data['name']?></strong><br>
            <?=$data['address']?><br>
            Telefono: <?=$data['phone']?><br>
            Rfc: <?=$data['rfc']?><br>
          </address>


            <address>
            
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
         Cliente
          <address>
            <strong><?=$data[19]?></strong><br>
            Telefono: <?=$data[21]?> <br>
              
            <strong class="no-print">Archivos:</strong> <br> 
       

             <a href="<?=URL?>VIEWS/pdf_files/referrals/<?= $data['file_remision']; ?>" target="_blank" class="tool no-print" download>
                <i class="btn btn-success btn-xs fas fa-dollar-sign btn_padd"></i>
                <span class="tooltext">Remision</span>   
              </a>
              <?php if (!empty($data['bills'])){ ?>
              <a href="<?=URL?>VIEWS/pdf_files/freights_bills/<?= $data['bills']; ?>" target="_blank" class="tool no-print" download>
                <i class="btn btn-success btn-xs fas fa-dollar-sign btn_padd"></i>
                <span class="tooltext">Factura</span>   
              </a>        
              <?php  } ?>

                   
   
         
      
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
       
           <?php if (empty($data['bills'])) {?>
                <form method="post" enctype="multipart/form-data" onsubmit="saveBill(this);">
                  <label for="documento">Factura: <input type="text" name="n_bills" id="n_bills" required=""> <br></label>
                  <input type="hidden" name="folio" id="folio" value="<?=$data['f_freight']?>">
                  <input type="file" name="documento" id="documento" required=""> 
                
                  
                  <input type="submit" value="Guardar">
                </form>
              
              <?php }else{ ?>
                <b>Factura # <?=$data[38]?></b>
              <?php } ?>
          <br>
          <b>Flete:</b> <?= $data['f_freight'];?><br>
          <b>Embarque:</b> <?= $data['f_embark'];?><br>
          <b>Carga:</b><?= $data['f_charge'];?><br>

          
          <b>Fecha:</b> <?= $data['date']?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">

            <table class="table bgWhite">
            <thead>
            <tr>
              <th>Pago</th>
              <th>Fecha</th>
              <th>Concepto</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
              <th class="no-print">Acciones</th>
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
                  <th class="no-print">
                    <a href="#">Eliminar</a>
                    <a href="#">Editar</a>
                  </th>
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
                <th> </th>
                <th> </th>
              </tr>
            </tfoot>
      </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
     
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
      
    
          <p class="lead">Resumen flete: <?= $data['f_freight'];?></p>


          <div class="table-responsive">
            <table class="table">
              <tbody><tr>
                <th style="width:50%">
                  <b>TOTAL FLETE:</b>
                </th>
                <th>$ <?= number_format($data['total']); ?></th>
              </tr>
             
              <tr>
                <th>
                  <b> ABONOS :</b>
                </th>
                <th>
                  $ <?= number_format($p);?>
                </th>
              </tr>
              <tr>
                <th>
                  <b>PENDIENTE:</b>
                </th>
                <?php 
                  $pending = ($data['total'] - $p);
                 ?>
                <th>$ <?= number_format($pending); ?> </th>
              </tr>
            </tbody></table>
          </div>
  

          

        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      
    </section>