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

		public function payments(){
			if (isset($_GET['id'])) {
				$this->freights->set('f_flete', $_GET['id']);
				$data = $this->freights->list_payments();
				return $data;
			}else{
				return false;
			}	
		}
		public function balance($id)
		{
			
			$this->freights->set('f_flete', $id);
			$data = $this->freights->list_payments();
			while ($row = mysqli_fetch_array($data)) {
				$p += $row['amount'];
			}
			return $p;
		}
		public function newPayment(){
			if ($_POST) {
				
				$this->freights->set('f_freight', $_POST['f_freight']);
				$this->freights->set('date', $_POST['date']);
				$this->freights->set('concept', $_POST['concept']);
				$this->freights->set('amount', $_POST['amount']);
				$this->freights->set('coments', $_POST['coments']);
				$this->freights->new_payment();
			}

		}
		public function chargeInvoice(){
		
			$uploadDirectory = ROOT."VIEWS".DS."pdf_files".DS."freights_bills".DS;

			if(isset($_FILES['documento'])){
				$first_name = $_FILES['documento']['tmp_name'];
				$final_name = 'invoice_'.$_POST['folio'].'.pdf';

				$uploadDirectory = ROOT."/VIEWS/pdf_files/freights_bills/";

				if(move_uploaded_file ($_FILES['documento']['tmp_name'] , $uploadDirectory.$final_name)){ 
					$this->freights->set('name_invoice', $final_name);
					$this->freights->set('folio', $_POST['folio']);
					$this->freights->set('n_bills', $_POST['n_bills']);
					$this->freights->set_invoice();
				}else{ 
				   return false;
				}  

				
				;
			}
		}

		public function delete()
		{
			if (isset($_GET['id'])) {
				$this->freights->set('id', $_GET['id']);
				$this->freights->delete_payment();
			}else{
				return false;
			}
		}

		public function editpay()
		{
			if ($_POST) {
				$this->freights->set('id', $_POST['id']);
				$this->freights->set('f_freight', $_POST['f_freight']);
				$this->freights->set('date', $_POST['date']);
				$this->freights->set('concept', $_POST['concept']);
				$this->freights->set('amount', $_POST['amount']);
				$this->freights->set('comments', $_POST['comments']);
				$this->freights->update_pay();
				header("Location: ".URL."freights/status/?id=".$_POST['f_freight']);
			}else{

				$this->freights->set('id', $_GET['id']);
				$row = $this->freights->select_pay_id();
				return $row;
			}
		}


	}
	
	$freights = new freightsController();
 ?>	