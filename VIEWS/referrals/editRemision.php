<?php 

  error_log("--------**-*-*-*-*-*-");
  error_log(print_r($_POST,true));

  $employe = $_POST['employe'];
  $costumer = $_POST['costumer'];

  $f_embark = $_POST['f_embark'];
  $f_freight = $_POST['f_freight'];
  $folios = $referrals->folios();
  $listP = $referrals->listarP();
  //$today = date('Y-m-j');
  $today = $_POST['date'];
  $tomorrow = strtotime ( '+1 day' , strtotime ( $today ) ) ;
  $tomorrow = date ( 'j-m-Y' , $tomorrow );




  $html = '<table class="table" style="font-size: 13px ; font-family: Calibri; border:2px solid #000;  background: url('.URL_IMG.'/logo2.png); background-position: center; padding: 10px; width: 100%; height:3308px; text-transform: uppercase;">
            <thead> 
  
              <tr>
                <th width="100%">
                  <br>  
                  <h4 style="font-family: Calibri; text-align: center !important;">REMISION DE SALIDA</h4>
                  <br>
                </th>
              </tr>

              <tr>
                <th width="100%">
                  <table style="border-bottom: 2px solid #000;">
                    <tr>
                      <th style="text-align: left; " width="70%">
                        <table width="100%">
                          <tr>
                            <th width="25%" style="text-align: right; font-size: 14px;">
                              <span style="padding:3px;"> <b>EMPRESA  :</b></span><br>
                              <span style="padding:3px;"> <b>DOMICILIO  :</b></span><br>
                              <span style="padding:3px;"> <b>RFC  :</b></span><br>
                            </th>
                            <th width="68%" style="text-align: left; font-size: 14px;">
                              <span style="font-weight: normal; padding:3px; text-transform: uppercase;">
                              '.$_POST['name_employe'].'</span><br>
                              <span style="font-weight: normal; padding:3px; text-transform: uppercase;">
                              '.$_POST['address_employe'].'
                              </span><br><span style="font-weight: normal; padding:3px; text-transform: uppercase;">'.$_POST['rfc_employe'].'
                              </span><br>
                            </th>
                          </tr>
                        </table>
                      </th>

                      <th style="text-align: left;" width="30%">
                        <table width="100%">
                          <tr>
                            <th width="40%" style="text-align: right; font-size: 14px; ">
                              <span> <b>FECHA :</b></span><br>
                              <span> <b>HORA  :</b></span><br>
                              <span> <b>TEL :</b></span><br><br>
                            </th>
                            <th width="60%" style="text-align: left; font-size: 14px;">
                            <span style="font-weight: normal; text-transform: uppercase;">'.$_POST['date'].'</span><br>
                            <span style="font-weight: normal; text-transform: uppercase;">'.$_POST['time'].'</span><br>
                            <span style="font-weight: normal;">(842) 422 - 01 - 05</span><br><br>
                            </th>
                          </tr>
                        </table>
                      </th>

                    </tr>
                  </table>
                </th>
              </tr>

              <tr>
                <th style=" width: 100%;">

                  <table width="100%" style=" border-bottom: 2px solid #000; width: 100%;">

                    <tr style="">

                      <th width="13.5%" style="text-align: right; font-size: 14px;">
                        <div style="padding: 2px;"> 
                          <b>CLIENTE  :</b>
                        </div>
                        <div style="padding: 2px;"> 
                          <b>DOMICILIO  :</b>
                        </div>
                        <div style="padding: 2px;"> 
                          <b>RFC  :</b>
                        </div>
                         <div style="padding: 2px;"> 
                          <b>TELEFONO :</b>
                        </div>
                      </th>

                      <th width="80%" style="text-align: left; font-size: 14px;">
                        <div style="padding: 2px;">
                          <span style="font-weight: normal; text-transform: uppercase;">'.$_POST['name_costumer'].'</span>
                        </div>
                        <div style="padding: 2px;">
                          <span style="font-weight: normal; text-transform: uppercase;">'.$_POST['address_costumer'].'</span>
                        </div> 
                        <div style="padding: 2px;">
                          <span style="font-weight: normal; text-transform: uppercase;">'.$_POST['rfc_costumer'].'
                          </span>
                        </div>
                        <div style="padding: 2px;">
                          <span style="font-weight: normal; text-transform: uppercase;">'.$_POST['phone_costumer'].'
                          </span>
                        </div>
                      </th>

                    </tr>
                  </table>

                </th>
              </tr>
              <tr>
                <th>
                <br>
                </th>
              </tr>
            </thead>
            <tbody>   
              <tr>
                <th width="100%"> 
                <table width="100%" style="vertical-align: top !important; ">
                <tr>
                  <th style="text-align: center; font-weight: bold; border-bottom:1px solid #000;">CANTIDAD</th>
                  <th style="text-align: center; font-weight: bold; border-bottom:1px solid #000;">CONCEPTO</th>
                  <th style="text-align: center; font-weight: bold; border-bottom:1px solid #000;">PRECIO</th>
                  <th style="text-align: center; font-weight: bold; border-bottom:1px solid #000;">IMPORTE</th>
                </tr>';
                        
              foreach ($listP as $key ) {
                $nartices = count($listP);
                $i++;
                $id = key($listP);
                next($listP);
            
        
            $html .= ' <tr style="">
                        <th style="padding: 2px; border-bottom: .5px solid #ccc;">
                          <span style="font-weight: normal; font-size: 14px; text-transform: uppercase;">'
                            .$key[2].' </span>
                        </th>
                        <th style="padding: 2px; border-bottom: .5px solid #ccc;">
                          <span style="font-weight: normal; font-size: 14px; text-transform: uppercase;">'
                          .$key[1].'</span>
                        </th>
                        <th style="padding: 2px; border-bottom: .5px solid #ccc;">
                          <span style="font-weight: normal; font-size: 14px; text-transform: uppercase;">$ 0.00</span>
                        </th>
                        <th style="padding: 2px; border-bottom: .5px solid #ccc;">
                          <span style="font-weight: normal; font-size: 14px; text-transform: uppercase;">$ 0.00</span>
                        </th>
                      </tr>';

            $totalunit += $key[2];
            
            $i++;   
            $id = $i+1;   
          } 

          if ($nartices <= 6) {

            $html .=' 
                    <tr>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                    </tr>
                    <tr>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                    </tr>
                    <tr>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                    </tr>
                    <tr>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                    </tr>
                    <tr>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                    </tr>
                    <tr>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                    </tr>';
          }else{
           $html .='<tr>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                      <th >
                        <br>
                      </th>
                    </tr>';

          }

          $html .='<tr style="">
              <th style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 5px 0px;">
                <span style="font-weight: bold; font-size: 15px; text-transform: uppercase;">'.$totalunit.'
                </span>
              </th>
              <th style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 5px 0px;">
                <span style="font-weight: bold; font-size: 14px; text-transform: uppercase;">
                </span>
              </th>
              <th style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 5px 0px;">
                <span style="font-weight: bold; font-size: 14px; ">$ 0.00
                </span>
              </th>
            
              <th style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 5px 0px;">
                <span style="font-weight: bold; font-size: 14px; text-transform: uppercase;">$ 0.00</span>
              </th>
            </tr></table></th>
          </tr>
          <tr>  
            <th>
              <table width="100%" style=" border-bottom: .5px solid #000;"> 
                <tr style="  width: 100%;" >
                  <td style="" width="40%">
                    <span style="font-weight: bold;"> </span>
                  </td>
                   
                </tr>
                <tr style="  width: 100%;" >

                  <td style="" width="40%">
                    <span style="font-weight: bold;"> </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold;"> </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold; color: white">  </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold; color: white;"> </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold; color: white;"> </span>
                  </td>

                  <td style="text-align: right; font-size: 14px;" width="10%">
                    IVA:
                  </td>

                  <td style="font-size: 14px;  text-align: center;" width="10%">
                    $0.00
                  </td>
                </tr>
                <tr style=" width: 100%;" >

                  <td style="" width="40%">
                    <span style="font-weight: bold;"> </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold;"> </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold; color: white">  </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold; color: white;"> </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold; color: white;"> </span>
                  </td>

                  <td style="text-align: right; font-size: 14px;" width="10%">
                    OTROS:
                  </td>

                  <td style="font-size: 14px;  text-align: center;" width="10%">
                    $0.00
                  </td>
                </tr>
                <tr style="  width: 100%;" >
                  <td style="" width="40%">
                    <span style="font-weight: bold;"> </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold;"> </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold; color: white">  </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold; color: white;"> </span>
                  </td>

                  <td style="" width="10%">
                    <span style="font-weight: bold; color: white;"> </span>
                  </td>

                  <td style="text-align: right; font-size: 14px;"  width="10%">
                    TOTAL:  
                  </td>
                  <td style=" font-size: 14px; text-align: center;" width="10%">
                    $0.00
                  </td>
                </tr>
          </table>
            </th>
          </tr>
        </tbody>

        <tfooter> 
          <tr>
            <th  width="100%" >
              <table width="100%">
                <tr>
                  <th width="33%" style="text-align: left; padding: 0px 15px; border: 1px solid #000; text-align: left; ">
                    FOLIO CARGA: <span style="font-weight: 400;">'.$_POST['f_charge'].'</span>
                  </th>
                  <th width="33%" style="border: 1px solid #000; text-align: left;"> 
                    FOLIO EMBARQUE: <span style="font-weight: 400;">'.$_POST['f_embark'].'</span>
                  </th>
                  <th width="33%" style="border: 1px solid #000; text-align: left;"> 
                    FOLIO FLETE: <span style="font-weight: 400;">FF- '.$_POST['f_freight'].'</span>
                  </th>
                </tr>
              </table>
            </th>
          </tr>
          <tr>
            <th  width="100%"  style="border: 1px solid #000; text-align: left;">
              <table width="100%">
                <tr>
                  <th width="100%" style="text-align: left; padding: 0px 15px; font-size: 14px; font-weight: bold;">
                   COSTOS DE ENVIÓ:
                  </th>
                </tr><tr>';
              
                  
                  $html .='<th width="100%" style="text-align: left;  padding: 0px 15px; color: #000;  text-transform: uppercase; font-weight: normal;">
                  ESTE FLETE SERA PAGADO POR : <br>'.$_POST['name_costumer'].' </span> POR LA CANTIDAD DE:  <span style="text-decoration:underline;">   "$ '.number_format($priceTab).' '.$currency.'".</span>
                  </th>';
              
              $html .='</tr>  
              </table>
            </th>
          </tr>
          <tr>
            <th>  
              <table width="100%">
                <tr>
                  <th width="50%" style="text-align: left; padding: 0px 15px; border: 1px solid #000; text-align: left; ">
                    <div>Trasportista:' . $_POST['name_trasport'] . '</div></br>
                    <div>Chofer: ' . $_POST['name_driver'] . '</div>
                    <div>Telefono: ' . $_POST['phone_driver']. '</div>
                  </th>
                  <th width="50%" style="border: 1px solid #000; text-align: left;"> 
                    <div style="display:block;">Origen:' .$_POST['origin']. '</div></br>
                    <div style="display:block;">Destino: ' . $_POST['destination'] . '</div>
                  </th>
                </tr>
              </table>
            </th>
          </tr>
          <tr>
            <th>
              
              <table width="100%">
                <tr>
                  <th width="33.33%" style="padding: 15px; text-align: left;  border: 1px solid #000; text-transform: uppercase;">
                    <span>Informacion del tractor</span>
                    <table width="100%">
                      
                      <tr>
                        <th width="50%" style=" text-align:left;" >
                          <span style="font-weight: 400; font-size: 14px;">Marca:</span>
                        </th width="50%">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['brand'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Modelo:</span>
                        </th width="50%" style=" text-align:left;">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['model'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">N economico:</span>
                        </th width="50%">
                        <th style=" text-align:left;"  style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['n_economic'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Placas:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                          '.$_POST['plates_t'].'
                          </span>
                        </th>
                      </tr>
                    </table>

                  </th>
                  <th width="33.33%" style="padding: 15px; text-align: left;  border: 1px solid #000; text-transform: uppercase;">
                    <span>Informacion de la caja</span>
                    <table width="100%">
                      
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Tipo de caja:</span>
                        </th width="50%">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['box'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Temperatura:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['temperature'].' - '.$_POST['degrees'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">N economico:</span>
                        </th width="50%">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['n_economicBox'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Placass:</span>
                        </th width="50%">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['plates'].'
                          </span>
                        </th>
                      </tr>
                      
                    </table>
                  </th>
                  <th width="33.33%" style="padding: 15px; text-align: left; vertical-align: top;  border: 1px solid #000; text-transform: uppercase; ">
                    <span>Otros</span>
                    <table width="100%">
                    
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">CAAT:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                          '.$_POST['CAAT'].'
                          </span>
                        </th>
                      </tr>

                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">ALPHA:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['ALPHA'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">ICCMX:</span>
                        </th width="50%" >
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['ICCMX'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">US DOT:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_POST['US_DOT'].'
                          </span>
                        </th>
                      </tr>
                  
                    </table>
                  </th>
                </tr>
              </table>
            </th>
          </tr>
          <tr>  
            <th style="padding: 15px; text-align: left;  border: 1px solid #000; margin:2px;">
             <span>Comentarios: </span> <br>'.$_POST['comments'].'
            </th>
          </tr>
          <tr>  
            <th>
              <table width="100%">
                <tr>
                  <th width="45%" style="padding: 15px;">
                    <br><br><br>
                    <hr>
                    <span style="font-weight: 300; padding: 5px; margin: 2px; font-size: 13px;">Persona que formula</span>
                  </th>
                  <th width="45%" style="padding: 15px;">
                    <br><br><br>
                    <hr>
                    <span style="font-weight: 300; padding: 5px; margin: 2px; font-size: 13px;">Persona que recibe</span>
                  </th>
                </tr>
            </table> 
            </th>
          </tr>
        </tfooter>
      </table>';
 
    unset($_SESSION['products']);

    //******
    $mpdf = new Mpdf();
    $mpdf->WriteHTML($html);
    ob_clean();

    $mpdf->Output(dirname(__FILE__).'/../pdf_files/referrals/EDIT_REM2_'.$_POST['f_charge'].'.pdf','F');
  
?>