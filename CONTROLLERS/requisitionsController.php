<?php 
	namespace CONTROLLERS;
	
	use MODELS\requisitions as requisitions;

	class requisitionsController
	{

		private $id;
		private $requisitions;

		public function __construct(){
			$this->requisitions = new requisitions();
		}

		public function index(){
			$data = $this->requisitions->list();
			return $data;
		}

		public function config(){
			return false;
		}

		public function saveCategory(){
			if ($_POST) {
				$this->requisitions->set("name", htmlentities($_POST['name']));
				$this->requisitions->set("description", htmlentities($_POST['description']));
				$this->requisitions->saveCategory();
		
				header("Location: ".URL."requisitions/config/");
			}
		}

		public function deleteCategory(){
			if ($_GET) {
				$this->requisitions->set("id", $_GET['id']);
				$this->requisitions->delete();
		
				header("Location: ".URL."requisitions/config/");
			}
		}


		public function saveSupplies(){
			if ($_POST) {
				//(id,category, unit, name, ingredient, price, coin,status
				$this->requisitions->set("category", htmlentities($_POST['category']));
				$this->requisitions->set("unit", htmlentities($_POST['unit']));
				$this->requisitions->set("name", htmlentities($_POST['name']));
				$this->requisitions->set("ingredient", htmlentities($_POST['ingredient']));
				$this->requisitions->set("price", htmlentities($_POST['price']));
				$this->requisitions->set("coin", htmlentities($_POST['coin']));
				$this->requisitions->set("status", htmlentities($_POST['status']));
				$this->requisitions->saveSuplies();
		
				header("Location: ".URL."requisitions/config/?tab=2");
			}
		}
		
		public function listSuplies(){
			$data = $this->requisitions->listSuplies();
			return $data;
		}

		public function editSupplies(){
			if ($_GET) {
				$this->requisitions->set("id", $_GET['id']);
				$row = $this->requisitions->selectSupplies();
				return $row;
			}
		}

		public function updateSupplies(){
			if ($_POST) {
				//(id,category, unit, name, ingredient, price, coin,status
				$this->requisitions->set("id", htmlentities($_POST['id']));
				$this->requisitions->set("category", htmlentities($_POST['category']));
				$this->requisitions->set("unit", htmlentities($_POST['unit']));
				$this->requisitions->set("name", htmlentities($_POST['name']));
				$this->requisitions->set("ingredient", htmlentities($_POST['ingredient']));
				$this->requisitions->set("price", htmlentities($_POST['price']));
				$this->requisitions->set("coin", htmlentities($_POST['coin']));
				$this->requisitions->set("status", htmlentities($_POST['status']));
				$this->requisitions->updateSuplies();
		
				header("Location: ".URL."requisitions/config/?tab=2");
			}
		}
		
		
	}

	$requisitions = new requisitionsController;

 ?>	

