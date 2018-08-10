<?php
	namespace CONTROLLERS;
	use MODELS\transporters as transporters;

	class transportersController{
		private $transporters;

		public function __construct(){
			$this->transporters = new transporters();

		}
		
		public function index()
		{
		
			$data = $this->transporters->listar();
			return $data;
			
		}

		public function delete(){
			$this->transporters->set("id", $_GET['id']);
			$this->transporters->delete();
		}

		public function add(){
			if($_POST){
				$this->transporters->set("name", $_POST['name']);
				$this->transporters->set("address", $_POST['address']);
				$this->transporters->set("rfc", $_POST['rfc']);
				$this->transporters->set("phone", $_POST['phone']);
				$this->transporters->set("caat", $_POST['caat']);
				$this->transporters->set("alpha", $_POST['alpha']);
				$this->transporters->set("iccmx", $_POST['iccmx']);
				$this->transporters->set("us_dot", $_POST['us_dot']);
				$this->transporters->add();
				header("Location: ".URL."transporters/");

			}else{
				return false;
			}
		}

		public function edit(){
			if ($_GET['id']){

				$this->transporters->set("id", $_GET['id']);
				$row = $this->transporters->selectTransport();
				return $row;

			} else if ($_POST) {

				$this->transporters->set("id", $_POST['id']);
				$this->transporters->set("name", $_POST['name']);
				$this->transporters->set("address", $_POST['address']);
				$this->transporters->set("rfc", $_POST['rfc']);
				$this->transporters->set("phone", $_POST['phone']);
				$this->transporters->set("caat", $_POST['caat']);
				$this->transporters->set("alpha", $_POST['alpha']);
				$this->transporters->set("iccmx", $_POST['iccmx']);
				$this->transporters->set("us_dot", $_POST['us_dot']);
				$this->transporters->update();
				header("Location: ".URL."transporters/");

			}
		}
		//FUNCIONES DE CHOFERES

		public function drivers(){
			$this->transporters->set("id", $_GET['id']);
			$data = $this->transporters->listDrivers();
			return $data;
		}
		public function addDriver(){
			if($_POST){
				$this->transporters->set("id", $_POST['id']);
				$this->transporters->set("name", $_POST['name']);
				$this->transporters->set("last_name", $_POST['last_name']);
				$this->transporters->set("phone", $_POST['phone']);
				$this->transporters->set("address", $_POST['address']);
				$this->transporters->set("num_lic", $_POST['num_lic']);
				$this->transporters->add_driver();
				header("Location: ".URL."transporters/drivers/?id=".$_POST['id']."&name=".$_POST['nameTransport']);


			}

		}

		public function deleteDriver(){
			$this->transporters->set("id", $_GET['id']);
			$this->transporters->delete_driver();
	
		}

		public function editDriver(){
			if ($_POST) {
				$this->transporters->set("id", $_POST['id']);
				$this->transporters->set("name", $_POST['name']);
				$this->transporters->set("last_name", $_POST['last_name']);
				$this->transporters->set("phone", $_POST['phone']);
				$this->transporters->set("address", $_POST['address']);
				$this->transporters->set("num_lic", $_POST['num_lic']);
				$this->transporters->update_driver();
				header("Location: ".URL."transporters/drivers/?id=".$_POST['id']."&name=".$_POST['nameTransport']);
			}else{
				$this->transporters->set("id", $_GET['id_driver']);
				$row = $this->transporters->select_driver();
				return $row;
			}
		}

		//FUNCIONES DE cajas

		public function box(){
			$this->transporters->set("id", $_GET['id']);
			$data = $this->transporters->list_boxes();
			return $data;
		}

		public function addBox(){
			if($_POST){
				$this->transporters->set("id", $_POST['id']);
				$this->transporters->set("type", $_POST['type']);
				$this->transporters->set("temperature", $_POST['temperature']);
				$this->transporters->set("grades", $_POST['degrees']);
				$this->transporters->set("placa", $_POST['placa']);
				$this->transporters->set("num_econ", $_POST['num_econ']);
				$this->transporters->add_box();
				header("Location: ".URL."transporters/box/?id=".$_POST['id']."&name=".$_POST['nameTransport']);


			}

		}

		public function deleteBox(){
			$this->transporters->set("id", $_GET['id']);
			$this->transporters->delete_box();
	
		}
		public function editBox(){
			if ($_POST) {
				$this->transporters->set("id", $_POST['id_box']);
				$this->transporters->set("type", $_POST['type']);
				$this->transporters->set("grades", $_POST['degrees']);
				$this->transporters->set("temperature", $_POST['temperature']);
				$this->transporters->set("degrees", $_POST['degrees']);
				$this->transporters->set("placa", $_POST['placa']);
				$this->transporters->set("num_econ", $_POST['num_econ']);
				
				$this->transporters->update_box();
				header("Location: ".URL."transporters/box/?id=".$_POST['id']."&name=".$_POST['nameTransport']);
			}else{
				$this->transporters->set("id", $_GET['id_box']);
				$row = $this->transporters->select_box();
				return $row;
			}
		}


		//FUNCIONES DE TRAILERS
		public function trucks(){
			$this->transporters->set("id", $_GET['id']);
			$data = $this->transporters->list_trucks();
			return $data;
		}


		public function addTruck(){
			if($_POST){
				$this->transporters->set("id", $_POST['id']);
				$this->transporters->set("brand", $_POST['brand']);
				$this->transporters->set("model", $_POST['model']);
				$this->transporters->set("color", $_POST['color']);
				$this->transporters->set("num_econ", $_POST['num_econ']);
				$this->transporters->set("placa", $_POST['placa']);
				$this->transporters->set("placa_2", $_POST['placa_2']);
				$this->transporters->add_truck();
				header("Location: ".URL."transporters/trucks/?id=".$_POST['id']."&name=".$_POST['nameTransport']);


			}

		}

		public function deleteTruck(){
			$this->transporters->set("id", $_GET['id']);
			$this->transporters->delete_truck();
		}

		public function editTruck(){
			if ($_POST) {
				$this->transporters->set("id", $_POST['id_truck']);
				$this->transporters->set("brand", $_POST['brand']);
				$this->transporters->set("model", $_POST['model']);
				$this->transporters->set("color", $_POST['color']);
				$this->transporters->set("num_econ", $_POST['num_econ']);
				$this->transporters->set("placa", $_POST['placa']);
				$this->transporters->set("placa_2", $_POST['placa_2']);
				$this->transporters->edit_truck();
				header("Location: ".URL."transporters/trucks/?id=".$_POST['id']."&name=".$_POST['nameTransport']);
			}else{
				$this->transporters->set("id", $_GET['id_box']);
				$row = $this->transporters->select_truck();
				return $row;
			}
		}

		public function permits()
		{
			$p_trasports = $_SESSION['user'][0]['permits'][7];
			return $p_trasports;
		}


	}
	
	$transporters = new transportersController();
 ?>	