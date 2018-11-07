<?php
	namespace CONTROLLERS;
	
	use MODELS\costumers as costumers;

	class costumersController{
		private $costumers;
		public $list_keys = array(); 
		
		public function __construct(){
			$this->costumers = new costumers();

		}
		
		public function index()
		{
		
			$data = $this->costumers->listar();
			return $data;
			
		}

		public function delete(){
			$this->costumers->set("id", $_GET['id']);
			$this->costumers->delete();

		}

		public function name($name, $position)
		{

			$n_words = str_word_count($name, 0);
			if ($n_words >= 2){

				$nWord = list($palabra1, $palabra2) = explode(' ', $name);
				$resultado1 = substr($palabra1, 0 , 1);
				$resultado2 = substr($palabra2, $position, 1);
				
				$key = strtoupper($resultado1 . $resultado2);

			}else{

				$nWord = list($palabra1) = explode(' ', $name);
				$resultado3 = substr($palabra1, 0 , 2);
				$key = strtoupper($resultado3);
			}
			
			if (in_array($key, $this->list_keys, true)) {
			   
			    $new_position = $position + 1;
			   	$key =  $this->name($name, $new_position);

			}
			
			return $key;
		}

		public function generate_code($name)
		{
			//QUE EL CICLO SE EJECUTE
			$n_words = str_word_count($name, 0);

			if ($n_words >= 2){

				$nWord = list($palabra1, $palabra2) = explode(' ', $name);
				$resultado1 = substr($palabra1, 0 , 1);
				$resultado2 = substr($palabra2, 0, 1);

				$code = strtoupper($resultado1 . $resultado2);

			}else{

				$nWord = list($palabra1) = explode(' ', $name);
				$resultado3 = substr($palabra1, 0 , 2);
				$code = strtoupper($resultado3);
			
			}
			
			return $code;
		}

		public function verify_code($costumers)
		{

			while($row = mysqli_fetch_array($costumers)){
				array_push($this->list_keys, $row['code']);
			}
		
		}


		public function add(){
			if($_POST){

				$this->verify_code($this->index());


				$code = $this->name($_POST['name'], null);
				error_log(print_r($this->list_keys, true));
				error_log($code);
				$this->costumers->set("name", $_POST['name']);
				$this->costumers->set("address", $_POST['address']);
				$this->costumers->set("rfc", $_POST['rfc']);
				$this->costumers->set("phone", $_POST['phone']);
				$this->costumers->set("code", $code);
				$this->costumers->add();
				header("Location: ".URL."costumers/");

			}else{
				return false;
			}
		}

		public function edit(){
			if ($_GET['id']){

				$this->costumers->set("id", $_GET['id']);
				$row = $this->costumers->selectCostumer();
				return $row;

			} else if ($_POST) {

				$this->costumers->set("id", $_POST['id']);
				$this->costumers->set("name", $_POST['name']);
				$this->costumers->set("address", $_POST['address']);
				$this->costumers->set("rfc", $_POST['rfc']);
				$this->costumers->set("phone", $_POST['phone']);
				$this->costumers->update();
				header("Location: ".URL."costumers/");

			}
		}

		/////FUNCIONES PARA LAS DIRECCIONES
		public function address(){
			if(isset($_GET['id'])){
				$this->costumers->set("id_costumer", $_GET['id']);
				$data = $this->costumers->addresses_delevery();
				return $data;
			}else{
				header("Location: ".URL."costumers/");

			}
		}

		public function addAddress(){
			if ($_POST){
				$this->costumers->set("id", $_POST['id_costumer']);
				$this->costumers->set("name", $_POST['name']);
				$this->costumers->set("address", $_POST['address']);
				$this->costumers->set("phone", $_POST['phone']);
				$this->costumers->set("city", $_POST['city']);
				$this->costumers->add_address();
				header("Location: ".URL."costumers/address/?id=".$_POST['id_costumer']."&name=".$_POST['nameCostumer']);
			} else {
				return false;
			}
		}

		public function deleteAddres(){
			$this->costumers->set("id",$_GET['id']);
			$this->costumers->delete_addres();
			header("Location: ".URL."costumers/address/");

		}

		public function editAddress(){
			if ($_POST){
				$this->costumers->set("id", $_POST['id']);
				$this->costumers->set("name", $_POST['name']);
				$this->costumers->set("address", $_POST['address']);
				$this->costumers->set("phone", $_POST['phone']);
				$this->costumers->set("city", $_POST['city']);
				$this->costumers->update_address();
				header("Location: ".URL."costumers/address/");
				
			}else{
				$this->costumers->set("id",$_GET['id']);
				$row = $this->costumers->selectAddress();
				return $row;
			}
		}

		public function permits()
		{
			$p_costumers = $_SESSION['user'][0]['permits'][6];
			return $p_costumers;
		}
	

	}
	
	$costumers = new costumersController();
?>	