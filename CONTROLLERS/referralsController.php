<?php 

	namespace CONTROLLERS;
	
	use MODELS\referrals as referrals;
	
	class referralsController 
	{
		public $id;
		public $folio;
		public $name;
		public $con;
		public $quantity;
		public $products = array();
		public $f_freight;
		public $f_embark;
		public $f_charge;
		public $user;
		public $file;
		public $id_employe;
		public $id_costumer;
		//private $id;	

		public function __construct()
		{
			$this->referrals = new referrals();
		}

		public function index()
		{
			if (!isset($_GET['employe'])) {
				$this->referrals->set("id_employe", 1);
				$datos = $this->referrals->getEmploye();
				//error_log(print_r($datos,true));
				return $datos;
			}else{
				$this->referrals->set("id_employe", $_GET['employe']);
				$datos = $this->referrals->getEmploye();
				//error_log(print_r($datos,true));
				return $datos;
			}
		}

		public function products()
		{
			$this->referrals->set("id_inventory", $_SESSION['user'][0]['ranch']);
			$datos = $this->referrals->listProducts();
			return $datos;
		}

		public function selectCostumers()
		{

			if (isset($_GET['costumer'])) {
					
				$listCostumer = $this->referrals->listCostumer();
				
				$this->referrals->set("id_costumer", $_GET['costumer']);
				$costumer = $this->referrals->getCostumer();
			
				$array = array(	'list' => $listCostumer,
								'costumer' => $costumer );

				return $array;

			}
		}

		public function addProduct()
		{
			if (isset($_GET['id'])) {
				$this->referrals->set("id", $_GET['id']);
				$this->referrals->set("quantity", $_GET['quantity']);
				$data = $this->referrals->productsRemision();
				return $data;
			}else{
							
				return false;	
			}
		}

		public function listarP()
		{
			if ($_SESSION) {
				return $_SESSION['products'];
			}else{
				return false;
			}
		}

		public function delete($id)
		{
			$this->referrals->set("id", $id);
			$this->referrals->deleteP();
		}

		public function folio_carga()
		{
			$nWord = list($palabra1, $palabra2) = explode(' ', $_POST['name_costumer']);
			
			$this->referrals->set("id_costumer", $_POST['id_costumer']);
			$year = substr( date ("Y") , -2 , 2);
			$name = $_POST['name_costumer'];
			$row = $this->referrals->selectCharge();

			$newEmbark = $row['embark'];
			
			$resultado1 = substr($palabra1, 0 , 1);
			$resultado2 = substr($palabra2, 0 , 1);
			$resultado3 = substr($palabra1, 0 , 2);

			$nString = strlen($newEmbark); 

			if (count($nWord) > 1) {
				
				switch ($nString) {
					case 0:
						return $year."-".strtoupper($resultado1.$resultado2)."-000".$newEmbark;
						break;

					case 1:
						return $year."-".strtoupper($resultado1.$resultado2)."-000".$newEmbark;
						break;

					case 2:
						return $year."-".strtoupper($resultado1.$resultado2)."-00".$newEmbark;
						break;
					
					case 3:
						return $year."-".strtoupper($resultado1.$resultado2)."-0".$newEmbark;
						break;
					case 4:
						return $year."-".strtoupper($resultado1.$resultado2)."-".$newEmbark;
						break;
				}

			}else{

				switch ($nString) {
					case 0:
						return $year."-".strtoupper($resultado3)."-000".$newEmbark;
						break;

					case 1:
						return $year."-".strtoupper($resultado3)."-000".$newEmbark;
						break;

					case 2:
						return $year."-".strtoupper($resultado3)."-00".$newEmbark;
						break;
					
					case 3:
						return $year."-".strtoupper($resultado3)."-0".$newEmbark;
						break;

					case 4:
						return $year."-".strtoupper($resultado3)."-".$newEmbark;
						break;
			
				}
			}
		}

		public function folio_embark()
		{
			$year = substr( date ("Y") , -2 , 2);
			$this->referrals->set("id", 1);
			$row = $this->referrals->selectFolio();
			
			$result_new = $row['f_embark'];
			$nString = strlen($result_new); 

			switch ($nString) {
				case 0:
					return $year."000".$result_new;
					break;

				case 1:
					return $year."000".$result_new;
					break;

				case 2:
					return $year."00".$result_new;
					break;
				
				case 3:
					return $year."0".$result_new;
					break;

				case 4:
					return $year.$result_new;
					break;
			}
		}

		public function folio_freight()
		{
			$year = substr( date ("Y") , -2 , 2);
			$this->referrals->set("id", 1);
			$row = $this->referrals->selectFolio();

			if (isset($_POST['f_freight'])) {
				$result_new = $row['f_freight'];
				
			}else{
				$result_new = $row['f_freight'] + 1;
			}
			
			$nString = strlen($result_new); 

			switch ($nString) {
				case 0:
					return $year."000".$result_new;
					break;

				case 1:
					return $year."000".$result_new;
					break;

				case 2:
					return $year."00".$result_new;
					break;
				
				case 3:
					return $year."0".$result_new;
					break;

				case 4:
					return $year.$result_new;
					break;
			}
		}

		public function savefreight()
		{
			$infoFreight = array();
			$infoFreight[]  = $_POST;
			$_SESSION['infoFreight'] = $infoFreight;
		}

		public function folios()
		{
			$folios = array('folio_charge' => $this->folio_carga(),
							'folio_embark' => $this->folio_embark(), 
							'folio_freight' => $this->folio_freight());
			//error_log($folios);
			return $folios;
		}

	

		public function generateRemision()
		{
			error_log(print_r($_POST,true));

			if (isset($_POST['f_embark'] , $_POST['f_charge'])) {
				//ACTUALIACION DE FOLIO DE CARGA
				if (isset($_POST['name_trasport'])) {
					$infoExtra = array(
						'name_trasport' => $_POST['name_trasport'],
						'name_driver' => $_POST['name_driver'],
						'phone' => $_POST['phone_driver'],
						'origin' => $_POST['origin'],
						'destination' => $_POST['destination'],
						'city' => $_POST['city'],
						'brand' => $_POST['brand'],
						'model' => $_POST['model'],
						'n_economic' => $_POST['n_economic'],
						'plates' => $_POST['plates'],
						'plates_t' => $_POST['plates_t'],
						'box' => $_POST['box'],
						'temperature' => $_POST['temperature'],
						'degrees' => $_POST['degrees'],
						'n_economicBox' => $_POST['n_economicBox'],
						'CAAT' => $_POST['CAAT'],
						'ALPHA' => $_POST['ALPHA'],
						'ICCMX' => $_POST['ICCMX'],
						'US_DOT' => $_POST['US_DOT']
						);

					$_SESSION['remision'] = $infoExtra;
				}else if(isset($_POST['box'])){
					$infoExtra = array(
						'name_trasport' => $_SESSION['remision']['name_trasport'],
						'name_driver' => $_SESSION['remision']['name_driver'],
						'phone' => $_SESSION['remision']['phone'],
						'origin' => $_SESSION['remision']['origin'],
						'destination' => $_SESSION['remision']['destination'],
						'city' => $_SESSION['remision']['city'],
						'brand' => $_SESSION['remision']['brand'],
						'model' => $_SESSION['remision']['model'],
						'n_economic' => $_SESSION['remision']['n_economic'],
						'plates' =>$_POST['plates'],
						'plates_t' => $_SESSION['remision']['plates_t'],
						'box' => $_POST['box'],
						'temperature' => $_POST['temperature'],
						'degrees' => $_POST['degrees'],
						'n_economicBox' => $_POST['n_economicBox'],
						'CAAT' => $_SESSION['remision']['CAAT'],
						'ALPHA' => $_SESSION['remision']['ALPHA'],
						'ICCMX' => $_SESSION['remision']['ICCMX'],
						'US_DOT' => $_SESSION['remision']['US_DOT']						
						);
					$_SESSION['remision'] = $infoExtra;
				}
				
				$this->referrals->set("id_costumer",$_POST['id_costumer']);
				//$this->referrals->set("date", date('y-m-d'));	
				$this->referrals->set("date", $_POST['date']);	
				$this->referrals->set("time", $_POST['time']);	
				$this->referrals->set("id_user", $_SESSION['user'][0]['id']);
				$this->referrals->set("id_employe",  $_POST['id_employe']);

				if (isset($_POST['f_freight'])) {
					$row = $this->referrals->updatef_freight();
					//unset($_SESSION['infoFreight']);
				
				}
				//MANDAMOS LLAMAR LA FUCNCION DEL MODELO PARA GUARDAR
				$row = $this->referrals->updatef_charge();
				//ACTUALIACION DE FOLIO DE EMBARQUE
				$row = $this->referrals->updatef_embark();

				$folios = $this->folios();
				$this->referrals->set("f_freight", $folios['folio_freight']);
				$this->referrals->set("f_embark", $folios['folio_embark']);
				$this->referrals->set("f_charge", $folios['folio_charge']);	
				$this->referrals->set("file_remision", "REM_".$folios['folio_charge'].".pdf");
				$this->referrals->set("file_responsive", "RES_".$folios['folio_charge'].".pdf");
				$this->referrals->set("nTab", $_POST['nTab']);

				//INFORMACION PARA FLETES
				$this->referrals->set("price", 580);
				$this->referrals->set("tab", $_POST['tab']);
				$this->referrals->set("ncharge", $_POST['nCharge']);
				//$this->referrals->set("id_employe", $_POST['tab']);
				$this->referrals->set("id_trasport", $_POST['transport']);
				$this->referrals->set("id_truck", $_POST['truck2']);
				$this->referrals->set("id_driver", $_POST['driver']);
				$this->referrals->set("id_box", $_POST['id_box']);
				$this->referrals->set("id_client", $_POST['costumer']);
				$this->referrals->set("id_add", $_POST['add']);
				$this->referrals->set("status", 1);
				
				$this->referrals->save_freight();
				$this->referrals->saveProducts();
				$this->referrals->save_remision();
					
			}else{
				return false;
			}
		}
	
		

		public function control()	
		{
			$data = $this->referrals->view();
			return $data;
		}
		//Traer lista de direcciones de entrega de la empresa
		public function selectAddres()
		{
			if ($_GET['costumer']) {
				$this->referrals->set("id", $_GET['costumer']);
				$data = $this->referrals->select_addreses();
				return $data;			
			}
		}

		public function selectAdd()
		{
			if ($_GET['add']) {
				$this->referrals->set("add", $_GET['add']);
				$data = $this->referrals->select_addres();
				return $data;			
			}
		}

		public function selectTransporters()
		{
			$data = $this->referrals->select_transporters();
			return $data;
		}

		public  function selectTransporter()
		{
			if ($_GET['transport']) {
				$this->referrals->set("id", $_GET['transport']);
				$row = $this->referrals->select_transporter();
				return $row;
			}
		}

		public function drivers()
		{
			if (isset($_GET['transport'])) {
				$this->referrals->set("id", $_GET['transport']);
				$data = $this->referrals->list_driver();
				return $data;
			}
		}

		public function driver()
		{
			if (isset($_GET['driver'])) {
				$this->referrals->set("id", $_GET['driver']);
				$row = $this->referrals->select_driver();
				return $row;
			}
		}

		public function trucks()
		{
			if (isset($_GET['transport'])) {
				$this->referrals->set("id", $_GET['transport']);
				$data = $this->referrals->list_trucks();
				return $data;
			}else{
				return false;
			}
		}

		public function truck()
		{
			if (isset($_GET['truck'])) {
				$this->referrals->set("id", $_GET['truck']);
				$row = $this->referrals->list_truck();
				return $row;
			}else{
				return false;
			}
		}

		public function boxes()
		{
			if (isset($_GET['transport'])) {
				$this->referrals->set("id", $_GET['transport']);
				$data = $this->referrals->list_boxes();
				return $data;
			}else{
				return false;
			}
		}

		public function box()
		{
			if (isset($_GET['box'])) {
				$this->referrals->set("id", $_GET['box']);
				$row = $this->referrals->list_box();
				return $row;
			}else{
				return false;
			}
		}

		//FUNCION PARA TRAER LA INFORMACION DEL INDEX
		public function refarralsReport()
		{
			$this->referrals->set("id", $_GET['id']);
			$data = $this->referrals->selectRemison();
			return $data;
		}

		public function edit()
		{
			if ($_POST) {
				# code...
				$this->referrals->set("id", $_POST['id']);
				$this->referrals->set("date", $_POST['date']);
				$this->referrals->set("time", $_POST['time']);
				$this->referrals->set("id_employe", $_POST['id_employe']);
				$this->referrals->set("id_costumer", $_POST['id_costumer']);
				$this->referrals->set("id_trasport", $_POST['id_trasport']);
				$this->referrals->set("id_truck", $_POST['id_truck']);
				$this->referrals->set("id_box", $_POST['id_box']);
				$this->referrals->set("id_driver", $_POST['id_driver']);
				$this->referrals->set("id_user", $_POST['id_user']);
				$this->referrals->set("file_edited", $_POST['f_charge']);
				$this->referrals->edit_remision();

			}else{
				$this->referrals->set("id", $_GET['id_ref']);
				$data = $this->referrals->selectRemison();
				return $data;
			}
			
	
		}

		public function editRemision()
		{
			
			if ($_POST) {
				# code...
				$this->referrals->set("id", $_POST['id']);
				$this->referrals->set("date", $_POST['date']);
				$this->referrals->set("time", $_POST['time']);
				$this->referrals->set("id_employe", $_POST['id_employe']);
				$this->referrals->set("id_costumer", $_POST['id_costumer']);
				$this->referrals->set("id_trasport", $_POST['id_trasport']);
				$this->referrals->set("id_truck", $_POST['id_truck']);
				$this->referrals->set("id_box", $_POST['id_box']);
				$this->referrals->set("id_driver", $_POST['id_driver']);
				$this->referrals->set("id_user", $_POST['id_user']);
				$this->referrals->set("f_charge", $_POST['f_charge']);
				$this->referrals->edit_remision();
				

			}else{
				return false;
			}
		}
	}

	$referrals = new referralsController();

 ?>	

