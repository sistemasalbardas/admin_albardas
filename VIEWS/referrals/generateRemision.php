<?php 


  $nCharge = $_POST['nCharge'];
  $tab = $_POST['tab'] + 1;
  $employe = $_POST['employe'];
  $costumer = $_POST['costumer'];

  $f_embark = $_POST['f_embark'];
  $f_freight = $_POST['f_freight'];
  $folios = $referrals->folios();
  $listP = $referrals->listarP();
  $today = date('Y-m-j');
  $tomorrow = strtotime ( '+1 day' , strtotime ( $today ) ) ;
  $tomorrow = date ( 'j-m-Y' , $tomorrow );


  $html = '<table class="table" style="font-size: 13px ; font-family: Calibri; border:2px solid #000;  background: url('.URL_IMG.'/logo2.png); background-position: center; padding: 10px; width: 100%; height:3308px; ">
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
                    FOLIO CARGA: <span style="font-weight: 400;">'.$folios['folio_charge'].'</span>
                  </th>
                  <th width="33%" style="border: 1px solid #000; text-align: left;"> 
                    FOLIO EMBARQUE: <span style="font-weight: 400;">'.$folios['folio_embark'].'</span>
                  </th>
                  <th width="33%" style="border: 1px solid #000; text-align: left;"> 
                    FOLIO FLETE: <span style="font-weight: 400;">FF- '.$folios['folio_freight'].'</span>
                  </th>
                </tr>
              </table>
            </th>
          </tr>
          <tr>
            <th  width="100%">
              <table width="100%">
                <tr>
                  <th width="100%" style="text-align: left; padding: 0px 15px; font-size: 14px; font-weight: normal;">
                    Costos de envio:
                  </th>
                </tr><tr>';
                //TEMA DE FLETES  
        if (isset( $_SESSION['info_employes']['priceSend'])) {
          $html .='<th width="100%" style="text-align: left;  padding: 0px 15px; color: #000;  text-transform: uppercase;">
                Favor de pagar por gastos de envio <span style=" color: #000; text-decoration: underline;">'.$_SESSION['info_employes']['priceSend'].$_SESSION['info_employes']['type_currency'].' </span> en destino.
              </th>';
        }else{
          $html .='<th width="100%" style="text-align: left; padding: 0px 15px; color: #000; text-decoration: underline; text-transform: uppercase;">
          ESTE EMBARQUE NO GENERA GASTOS DE ENVIÓ AL CLIENTE
          </th>';
        }
          $html .='</tr>  
              </table>
            </th>
          </tr>
          <tr>
            <th>  
              <table width="100%">
                <tr>
                  <th width="50%" style="text-align: left; padding: 0px 15px; border: 1px solid #000; text-align: left; ">
                    <div>Trasportista:' . $_SESSION['remision']['name_trasport'] . '</div></br>
                    <div>Chofer: ' . $_SESSION['remision']['name_driver'] . '</div>
                    <div>Telefono: ' . $_SESSION['remision']['phone'] . '</div>
                  </th>
                  <th width="50%" style="border: 1px solid #000; text-align: left;"> 
                    <div style="display:block;">Origen:' .  $_SESSION['remision']['origin'] . '</div></br>
                    <div style="display:block;">Destino: ' . $_SESSION['remision']['destination'] . '</div>
                  </th>
                </tr>
              </table>
            </th>
          </tr>
          <tr>
            <th>
              
              <table width="100%">
                <tr>
                  <th width="33.33%" style="padding: 15px; text-align: left;  border: 1px solid #000;">
                    <span>Informacion del tractor</span>
                    <table width="100%">
                      
                      <tr>
                        <th width="50%" style=" text-align:left;" >
                          <span style="font-weight: 400; font-size: 14px;">Marca:</span>
                        </th width="50%">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['brand'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Modelo:</span>
                        </th width="50%" style=" text-align:left;">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['model'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">N economico:</span>
                        </th width="50%">
                        <th style=" text-align:left;"  style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['n_economic'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Placas:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                          '.$_SESSION['remision']['plates_t'].'
                          </span>
                        </th>
                      </tr>
                    </table>

                  </th>
                  <th width="33.33%" style="padding: 15px; text-align: left;  border: 1px solid #000;">
                    <span>Informacion de la caja</span>
                    <table width="100%">
                      
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Tipo de caja:</span>
                        </th width="50%">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['box'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Temperatura:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['temperature'].' - '.$_SESSION['remision']['degrees'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">N economico:</span>
                        </th width="50%">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['n_economicBox'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">Placass:</span>
                        </th width="50%">
                        <th style=" text-align:left;" >
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['plates'].'
                          </span>
                        </th>
                      </tr>
                      
                    </table>
                  </th>
                  <th width="33.33%" style="padding: 15px; text-align: left; vertical-align: top;  border: 1px solid #000;">
                    <span>Otros</span>
                    <table width="100%">
                    
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">CAAT:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                          '.$_SESSION['remision']['CAAT'].'
                          </span>
                        </th>
                      </tr>

                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">ALPHA:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['ALPHA'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">ICCMX:</span>
                        </th width="50%" >
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['ICCMX'].'
                          </span>
                        </th>
                      </tr>
                      <tr>
                        <th width="50%" style=" text-align:left;">
                          <span style="font-weight: 400; font-size: 14px;">US DOT:</span>
                        </th width="50%">
                        <th style=" text-align:left;">
                          <span style="font-weight: normal; font-size: 14px;">
                            '.$_SESSION['remision']['US_DOT'].'
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

$html2='';
$html2 .= '<table class="table" style="font-size: 13px ; font-family: Calibri; border:2px solid #000;  background: url('.URL_IMG.'/logo2.png); background-position: center; padding: 10px; width: 100%; height:3308px; ">
    <thead>
      
      <tr>
        <th>
          <h4 style="font-family: 15px !important;">CARTA RESPONSIVA</h4>
        </th>
      </tr>
      <tr>
        <th>
          <br>
        </th>
      </tr>
      <tr>
        <th style="width:100%; text-align: justify !important; border-bottom:1px solid #000; padding-botom:10px;">
        <p style="padding:3px; font-weight: normal; text-align: left !important; padding-botom:10px;">

          El suscrito <span style="text-decoration: underline ; ">' . $_SESSION['remision']['name_driver'] . '</span>   conductor del tracto camión marca <span style="text-decoration: underline  ;">  KW 1997 </span>  Placas: <span style="text-decoration: underline ;"> 955-DW-1 </span> que arrastra la caja refrigerada con placas <span style="text-decoration: underline  ;">804-WB-2</span>  propiedades de <span style="text-decoration: underline  ;"> Línea propia</span> hago constar que he recibido e inspeccionado la carga contenida en la caja <span style="text-decoration: underline  ;"> refrigerada </span> antes mencionada, la cual contiene exclusivamente:
        
        </p>
        </th>
      </tr>
      <tr>
        <th style="width:100%;">
          <br> 
          </th>
      </tr>
    </thead>
    <tbody>

      <tr width="100%">
        <th style="height: auto; vertical-align: top;">
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
                $html2 .= ' <tr style="">
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

                $totalunit2 += $key[2];
                
                $i++;   
                $id = $i+1;   
              } 

           $html2 .= '   <tr style="  width: 100%;" >
                <td style="  border-top: 1px solid #000; border-bottom: 1px solid #000;" width="20%">
                  <span style="font-weight: bold;">'.number_format($totalunit2).'</span>
                </td>
                <td style="padding: 5px; border-top: 1px solid #000; border-bottom: 1px solid #000;" width="10%">
                  <span style="font-weight: bold;"> </span>
                </td>
                <td style="padding: 5px; border-top: 1px solid #000; border-bottom: 1px solid #000;" width="10%">
                  <span style="font-weight: bold; color: white">  </span>
                </td>
                <td style="padding: 5px; border-top: 1px solid #000; border-bottom: 1px solid #000;" width="10%">
                  <span style="font-weight: bold; color: white;"> </span>
                </td>
            </tr>
            <tr style="  width: 100%;" >

                <td style="   width="20%">
                  <br>
                </td>

                <td style="padding: 5px;  width="10%">
                  <br><br>
                </td>

                <td style="padding: 5px;  width="10%">
                  <br><br>
                </td>

                <td style="padding: 5px;  width="10%">
                  <br><br>
                </td>
            </tr>
          
           </table>
        </th>
      </tr>
        <tr>
        <th style="width:100%; text-align: justify !important;  padding: 5px;">
        <p style="width:100%; padding: 5px; font-weight: normal; text-align: justify !important;">
          Que ira a una temperatura consta de   
          <span style="text-decoration: underline ; "> '.$_SESSION['remision']['temperature'].' - '.$_SESSION['remision']['degrees'].'</span> 
          con salida el día 
          <span style="text-decoration: underline ; ">'.date ( 'j-m-Y').'</span> a las 
          <span style="text-decoration: underline ; ">'.date('g:ia').'</span>, para llegar a la <br> ciudad de: <span style="text-decoration: underline;"> ' . $_SESSION['remision']['city'] . ' </span> mas tardar el día de: <span style="text-decoration: underline ; ">'.$tomorrow.'</span>. <br>
          En caso de no llegar al almacen de la fecha indicada, se descontara un 20% del flete.
          La que será conforma a la guía y remisión de embarque <span style="text-decoration: underline ; "> '.$folios['folio_embark'].'</span>. Por este conducto manifiesto haber estado presente y por lo tanto tener pleno conocimiento de <span style="text-decoration: underline ; "> '.$totalunit.'</span> cajas de producto antes mencionado, durante y hasta el momento de cerrar las puertas del camión a mi cargo correspondiente a este embarque. <br>
          Consciente de que me es prohibido trasportar ningún otro tipo de carga diferente a la qui señalada por lo que libero de toda responsabilidad tanto a la agrícola declarada anteriormente y de cualquier alteración que pueda surgir durante el trayecto a su destino final, de objetos o valores ajenos a este producto tanto en el tracto camión como en la caja refrigerada arrastrada por este. <br>
          Sin otro particular me es grato reiterarle a las seguridades de mi más alta y distinguida consideración suscribiéndome a sus órdenes para cualquier aclaración al respecto. 
        </p>
        </th>
      </tr>
      <tr>
        <th>
          <table width="100%">
            <tr>
              <th width="100%" style="text-align: left; border-top: 1px solid #ccc;  padding: 10px 5px;">
                <label style="font-family: 15px !important; text-transform: uppercase;">DATOS DEL COMPRADOR: </label>
                <br>  
                <label for="" style=" font-size: 12px;">NOMBRE:</label> <span style="font-weight: normal;">'.$_POST['name_costumer'].'</span>
                <br>  
                <label for="" style=" font-size: 12px;">DOMICLIO:</label><span style="font-weight: normal;">'.$_POST['address_costumer'].'</span> <br> 
                <label for="" style=" font-size: 12px;">RFC:</label> <span style="font-weight: normal;">'.$_POST['rfc_costumer'].'</span><br>  
                <label for="" style=" font-size: 12px;">TELEFONO:</label> <span style="font-weight: normal;">'.$_POST['phone_costumer'].'</span>
                 <span style="font-weight: normal; text-transform: uppercase;">'.$_POST['name_costumer'].'</span>
              </th>
            </tr>
            <tr>
              <th width="100%" style="text-align: left; border-top: 1px solid #ccc; padding-top: 10px;">
                <label style="font-family: 15px !important; text-transform: uppercase;">DATOS DEL CHOFER: </label>
                <br>  
                <label for="" style=" font-size: 12px;">NOMBRE:</label> <span style="font-weight: normal;">' . $_SESSION['remision']['name_driver'] . '</span>
                <br>  
                <label for="" style=" font-size: 12px;">TELEFONO:</label> <span style="font-weight: normal;">' . $_SESSION['remision']['phone'] . '</span>
              </th>
            </tr>
          </table>
        </th>
      </tr>
    </tbody>
    <footer>
      <tr>
        <th>
          <table width="100%" style="padding: 2px; border-top: .5px solid #ccc;  ">
            <tr>
              <th width="25%" style="margin-top: 45px;"></th>
              <th width="50%" style=" padding-top: 45px; vertical-align:botom;">
               <br>
              </th>
              <th width="25%" style="margin-top: 45px;">
              </th>
            </tr>
            <tr>
              <th width="25%" ></th>
              <th width="50%" style="border-top:1px solid #000; vertical-align:botom;">
                <span style="font-weight: 300; padding: 5px; margin: 2px; font-size: 13px;">
                  NOMBRE Y FIRMA DEL CHOFER.
                </span>
              </th>
              <th width="25%" >
              </th>
            </tr>
          </table>
        </th>
      </tr>
    </footer>
  </table>';
  unset($_SESSION['products']);

      
  $mpdf = new Mpdf();
  $mpdf->WriteHTML($html);
  ob_clean();

  $mpdf->Output(dirname(__FILE__).'/../pdf_files/referrals/rem_'.$folios['folio_charge'].'.pdf','F');

  $mpdf2 = new Mpdf();
  $mpdf2->WriteHTML($html2);
  ob_clean();
  $mpdf2->Output(dirname(__FILE__).'/../pdf_files/responsives/res_'.$folios['folio_charge'].'.pdf','F');

 // $mpdf->Output('rem'.$folios['folio_charge'].'.pdf','D');
 
  //header('Location: '.dirname(__FILE__).'referrals/');
  
?>