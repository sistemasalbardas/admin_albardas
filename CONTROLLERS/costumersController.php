<?php
	namespace CONTROLLERS;
	
	use MODELS\costumers as costumers;

	class costumersController{
		private $costumers;

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

		public function add(){
			if($_POST){
				$this->costumers->set("name", $_POST['name']);
				$this->costumers->set("address", $_POST['address']);
				$this->costumers->set("rfc", $_POST['rfc']);
				$this->costumers->set("phone", $_POST['phone']);
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
	

	}
	
	$costumers = new costumersController();
 ?>	