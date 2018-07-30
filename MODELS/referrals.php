<?php
namespace MODELS;
	
	class referrals
	{
		public $id;
		public $tab;
		public $date;
		public $time;
		public $ncharge;
		public $nTab;
		public $folio;
		public $name;
		public $cant;
		public $con;
		public $inv;
		public $quantity;
		public $products = array();
		public $f_freight;
		public $f_embark;
		public $f_charge;
		public $user;
		public $file;
		public $id_employe;
		public $id_costumer;
		public $data;
		public $employe;
		public $id_client;
		public $id_trasport;
		public $id_driver;
		public $id_truck;
		public $id_box;
		public $id_add;
		public $id_user;
		public $file_remision;
		public $file_responsive;

	
		public function __construct(){
			$this->con = new conexion();
			$this->inv = new inventories();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function getEmploye(){
			$sql = "SELECT * FROM employes WHERE id = '{$this->id_employe}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}



		public function getCostumer(){
			$sql = "SELECT * FROM costumers WHERE id = '{$this->id_costumer}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

		public function getProducts(){
			$sql = "SELECT * FROM productos_refarrls WHERE f_embarque = '{$this->f_embark}'";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
		
		public function listCostumer(){
			$sql = "SELECT * FROM costumers";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function listProducts(){
			$sql = "SELECT * FROM inventory where id_inventory = '{$this->id_inventory}'";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		
		public function productsRemision(){
			$sql = "SELECT * FROM inventory WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			
			$products = array();
 
			array_push($products, $row['id'], $row['name_product'], $this->quantity);

			$_SESSION['products'][] = $products;
			$data = $_SESSION['products'];
			return $data;
		}

		public function deleteP(){
			session_start();
			$id = $this->id;

			if ($id == null) {
				$id = 0;
			}else{
				$id = $id;
				unset($_SESSION['products'][$id]);
			}

			
			return false;

		}

		public function selectCharge(){
			$sql = "SELECT * FROM costumers WHERE id = '{$this->id_costumer}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}
		public function select_addreses(){
			$sql = "SELECT * FROM delivery_addresses WHERE id_costumer = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;

		}

		public function select_addres(){
			$sql = "SELECT * FROM delivery_addresses WHERE id = '{$this->add}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_array($datos);
			return $row;

		}

		public function select_transporters(){
			$sql = "SELECT * FROM transporters";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function select_transporter(){
			$sql = "SELECT * FROM transporters WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_array($datos);
			return $row;
		}
		public function selectFolio(){
			$sql = "SELECT * FROM accountant WHERE id = 1";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_array($datos);
			return $row;
		}

		public function list_driver()
		{
			$sql = "SELECT * FROM drivers WHERE id_transporters = {$this->id}";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function select_driver()
		{
			$sql = "SELECT * FROM drivers WHERE id = {$this->id}";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_array($datos);
			return $row;
		}
	
		public function list_trucks()
		{
			$sql = "SELECT * FROM trucks WHERE id_transporters = {$this->id}";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function list_truck()
		{
			$sql = "SELECT * FROM trucks WHERE id = {$this->id}";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}
		
		public function list_boxes()
		{
			$sql = "SELECT * FROM boxes WHERE id_transporters = {$this->id}";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function list_box()
		{
			$sql = "SELECT * FROM boxes WHERE id = {$this->id}";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_array($datos);
			return $row;
		}

		public function updatef_embark(){
			$row = $this->selectFolio();
			$nFolio = ($row['f_embark'] + 1);
			$sql = "UPDATE accountant SET f_embark = '$nFolio' WHERE id = 1";
			$datos = $this->con->consultaSimple($sql);
		}

		public function updatef_charge(){
			$row = $this->selectCharge();
			$embark = ($row['embark'] + 1);
			$id = $row['id'];
			$sql = "UPDATE costumers SET embark = '$embark' WHERE id = '$id'";
			$this->con->consultaSimple($sql);

		}

		public function updatef_freight(){
			//SOLO AHY QUE REVISAR ESTO 
			$row = $this->selectFolio();
			$nFolio = ($row['f_freight']+1);
			$sql = "UPDATE accountant SET f_freight = '$nFolio' WHERE id = 1";
			$this->con->consultaSimple($sql);
		}

		
		public function save_remision(){

			$sql = "INSERT INTO remisions (id, date, time, f_freight, f_embark, f_charge, id_employe, id_costumer, id_trasport, id_truck, id_box, id_driver, id_user, file_remision, file_report, file_edited, file_responsive) VALUES(
				'',
				'{$this->date}',
				'{$this->time}',
				'{$this->f_freight}',
				'{$this->f_embark}',
				'{$this->f_charge}',
				'{$this->id_employe}',
				'{$this->id_costumer}',
				'{$this->id_trasport}',
				'{$this->id_truck}',
				'{$this->id_box}',
				'{$this->id_driver}',
				'{$this->id_user}',
				'{$this->file_remision}',
				'',
				'',
				'{$this->file_responsive}')";

				$this->con->consultaSimple($sql);
		}
	
		public function saveProducts(){
			session_start();
			$data = $_SESSION['products'][0];
			$nRows = count($data);	
		
			for ($i=0; $i < $nRows; $i++) {
				$sql = "INSERT INTO productos_refarrls (id, f_embarque, count, concept) VALUES
				(null, '{$this->f_embark}', '".$_SESSION['products'][$i][2]."','".$_SESSION['products'][$i][1]."')";
				$this->con->consultaSimple($sql);	
			}
		}

		public function save_freight()
		{
			session_start();
			$data = $_SESSION['infoFreight'][0];

			$value = $_SESSION['infoFreight'][0][$this->tab];

			$sql = "INSERT INTO freights (id, f_flete, f_embark, price, id_trasport, id_truck, id_driver, id_box, id_client, id_add, currency, total, date) VALUES
			(null, '{$this->f_freight}', '{$this->f_embark}','$value', '{$this->id_trasport}', '{$this->id_truck}', '{$this->id_driver}', '{$this->id_box}', '{$this->id_costumer}', '{$this->id_add}', '".$data['currency']."', '".$data['total']."', '{$this->date}')";
			$this->con->consultaSimple($sql);
				
			if ($this->tab == $this->ncharge) {
				if ($data['agricola'] >= 0) {
					$sql = "INSERT INTO freights (id, f_flete, f_embark, price, id_trasport, id_truck, id_driver, id_box, id_client, id_add, currency, total, date) VALUES (null, '{$this->f_freight}', '{$this->f_embark}','".$data['agricola']."', '{$this->id_trasport}', '{$this->id_truck}', '{$this->id_driver}', '{$this->id_box}', '1', '{$this->id_add}', '".$data['currency']."', '".$data['total']."', '{$this->date}' )";
					$this->con->consultaSimple($sql);
				}
			}
			
		}



		public function view(){	
			$sql = "SELECT * FROM remisions";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		public function selectRemison(){	
			//CONSULTA PARA TRAER LA INFORMACION DE REMISION
			$sql = "SELECT * FROM remisions WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);

			$this->set("id_costumer", $row['id_costumer']);
			$this->set("id_employe", $row['id_employe']);
			$this->set("f_embark", $row['f_embark']);

			$dataCostumer = $this->getCostumer();
			$datEmploye = $this->getEmploye();
			$getProducts = $this->getProducts();

			$data = array(	'costumer' => $dataCostumer, 
							'employe' => $datEmploye, 
							'data' => $row,
							'products' => $getProducts);


			return $data;
		}

		public function output_inventory()
		{
			$this->inv->output();
		}

		



	} 


 ?>