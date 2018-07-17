<?php
	namespace CONTROLLERS;
	use MODELS\inventories as inventories;

	class inventoriesController{
		private $inventories;

		public function __construct(){
			$this->inventories = new inventories();
		}
		
		public function index()
		{
			$this->inventories->set("ranch", $_SESSION['user'][0]['ranch']);
			$data = $this->inventories->list_inventory_ranch();
			return $data;
		}

		public function listInventories()
		{
			$data = $this->inventories->list_inventories();
			return $data;
		}

		public function add(){
			if($_POST){
				$this->inventories->set("name", $_POST['name']);
				$this->inventories->set("utility", $_POST['utility']);
				$this->inventories->set("description", $_POST['description']);
				$this->inventories->set("responsable", $_POST['responsable']);
				$this->inventories->add();
				header("Location: ".URL."inventories/");
			}else{
				return false;
			}
		
		}

		public function listUsers()
		{
			$data = $this->inventories->list_users();
			return $data;
		}

		public function listProducts(){
			$data = $this->inventories->list_products();
			return $data;
		}

	

		public  function newEntry()
		{
			if($_POST){
				$this->inventories->set("id_inventory", $_POST['id']);
				$this->inventories->set("id_product", $_POST['id_product']);
				$this->inventories->set("name_product", $_POST['name_product']);
				$this->inventories->set("quantity", $_POST['quantity']);
				$this->inventories->set("concept", $_POST['concept']);
				$this->inventories->set("receiver", $_POST['receiver']);
				$this->inventories->set("comments", $_POST['comments']);
				$this->inventories->new_entry();
				header("Location:".URL."inventories/inventory/?id=".$_POST['id']."&inventorie=".$_POST['inventorie']);

			}else{
				return false;
			}
		}

		
		public function inventory()
		{
			if(isset($_GET['id'])){
				$this->inventories->set("id_inventory", $_GET['id']);
				$data = $this->inventories->list_inventory();
				return $data;			
			}else{
				return false;
			}
		}

		public function transfer()
		{
			if ($_POST) {

				$this->inventories->set("exit", $_POST['exit']);
				$this->inventories->set("entry", $_POST['entry']);
				$this->inventories->set("prod", $_POST['prod']);
				$this->inventories->set("quantity", $_POST['quantity']);
				$this->inventories->set("id_product", $_POST['id_product']);
				$this->inventories->set("name_product", $_POST['name_product']);
				$this->inventories->inventory_transfer();
				header("Location:".URL."inventories/");
				
			}
		}
		
		
	}
	
	$inventories = new inventoriesController();
 ?>	