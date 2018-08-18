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

		public function edit()
		{
			if ($_POST) {
				$this->freights->set('id', $_POST['id']);
				$this->freights->set('f_flete', $_POST['f_flete']);
				$this->freights->set('f_embark', $_POST['f_embark']);
				$this->freights->set('price', $_POST['price']);
				$this->freights->set('currency', $_POST['currency']);
				$this->freights->set('date', $_POST['date']);
				$this->freights->update_freight();
			}else{
				$this->freights->set('id', $_GET['id']);
				$row = $this->freights->select_freight();
				return $row;
			}

		}

		public function delete()
		{
			if (isset($_GET['id'])) {
				$this->users->set('id', $_GET['id']);
				$this->users->delete_user();
			}else{
				return false;
			}
		}
		public function status()
		{
			if (isset($_GET['id'])) {
				$this->freights->set('f_flete', $_GET['id']);
				$data = $this->freights->info_status();
				return $data;
			}else{
				return false;
			}	
		}

		public function permits()
		{
			$p_freights = $_SESSION['user'][0]['permits'][4];
			return $p_freights;
		}

		public function newPayment(){
			if ($_POST) {
				
				$this->users->set('f_freight', $_POST['f_freight']);
				$this->users->set('date', $_POST['date']);
				$this->users->set('concept', $_POST['concept']);
				$this->users->set('amount', $_POST['amount']);
				$this->users->set('coments', $_POST['coments']);
				$this->users->new_payment();
			}

		}
	}
	
	$freights = new freightsController();
 ?>	