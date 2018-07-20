<?php

	namespace CONTROLLERS;

	use MODELS\freights as freights;

	class freightsController{

		private $freights;

		public function __construct(){
			$this->freights = new freights();

		}
		
		public function index()
		{
			$data = $this->freights->list();
			return $data;
			
		}

		public function listCostumers()
		{
			$costumers = $this->freights->costumers();
			return $costumers;

		}

		public function delete()
		{
			$this->freights->set('id', $_GET['id']);
			$this->freights->erase();
		}

		

		public function add()
		{
			if ($_POST) {
				$this->freights->set('f_', $_POST['name']);
				$this->freights->set('type_pack', $_POST['type_pack']);
				$this->freights->save();
				header("Location:".URL."freights/");
			}
		}

		public function edit(){	
			if ($_POST) {
				$this->freights->set('id', $_POST['id']);
				$this->freights->set('name', $_POST['name']);
				$this->freights->set('type_pack', $_POST['type_pack']);
				$this->freights->update();
				header("Location:".URL."freights/");

				
			}else{
				$this->freights->set('id', $_GET['id']);
				$row = $this->freights->product_id();
				return $row;
			}
		}
		
	}
	
	$freights = new freightsController();
 ?>	