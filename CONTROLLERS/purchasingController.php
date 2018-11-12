<?php
	namespace CONTROLLERS;
	
	use MODELS\purchasing as purchasing;

	class purchasingController{
		private $purchasing;

		public function __construct(){
			$this->purchasing = new purchasing();

		}
		
		public function index()
		{
			return false;
		}
		
		public function suppliers()
		{
			$data = $this->purchasing->listar_suppliers();
			return $data;
		}

		// metodo para la vista de insumos
		public function supplies()
		{
			return false;
		}


		public function addsupplier()
		{
			if ($_POST) {

				$this->purchasing->set('name', $_POST['name']);
				$this->purchasing->set('rfc', $_POST['rfc']);
				$this->purchasing->set('address', $_POST['address']);
				$this->purchasing->set('fixed_phone', $_POST['fixed_phone']);
				$this->purchasing->set('mobile_phone', $_POST['mobile_phone']);
				$this->purchasing->set('email', $_POST['email']);
				$this->purchasing->set('name_contact', $_POST['name_contact']);
				$this->purchasing->set('comments', $_POST['comments']);
				$this->purchasing->save_supplier();
				//header("Location:".URL."purchasing/suppliers/");
			}else{
				header("Location:".URL."purchasing/suppliers/");
			}
		}

		public function editsupplier()
		{
			if ($_GET['id']) {
				$this->purchasing->set('id', $_GET['id']);
				$row = $this->purchasing->supplier_id();
				return $row;
			}else{
				error_log(print_r($_POST,true));
				$this->purchasing->set('id', $_POST['id']);
				$this->purchasing->set('name', $_POST['name']);
				$this->purchasing->set('rfc', $_POST['rfc']);
				$this->purchasing->set('address', $_POST['address']);
				$this->purchasing->set('fixed_phone', $_POST['fixed_phone']);
				$this->purchasing->set('mobile_phone', $_POST['mobile_phone']);
				$this->purchasing->set('email', $_POST['email']);
				$this->purchasing->set('name_contact', $_POST['name_contact']);
				$this->purchasing->set('comments', $_POST['comments']);
				$this->purchasing->update_suplier();
			}
		}

		

		public function deletesupplier()
		{
			if ($_GET) {
				$this->purchasing->set('id', $_GET['id']);
				$this->purchasing->delete_suplier();
			}
		}

		public function products()
		{
			$data = $this->purchasing->listar_suppliers();
			return $data;
		}


		///functions for categories - Controller (CRUD)

		public function categories()
		{
			$data = $this->purchasing->listar_categories();
			return $data;
		}

		public function addcategory()
		{
			if ($_POST) {

				$this->purchasing->set('name', $_POST['name']);
				$this->purchasing->set('description', $_POST['description']);
				$this->purchasing->save_category();
				//header("Location:".URL."purchasing/suppliers/");
			}else{
				header("Location:".URL."purchasing/suppliers/");
			}
		}

		public function editcategory()
		{
			if ($_GET['id']) {
				$this->purchasing->set('id', $_GET['id']);
				$row = $this->purchasing->cetegory_id();
				return $row;
			}else{
				//error_log(print_r($_POST,true));
				$this->purchasing->set('id', $_POST['id']);
				$this->purchasing->set('name', $_POST['name']);
				$this->purchasing->set('description', $_POST['description']);
				$this->purchasing->update_cetegory();
			}
		}

		public function deletecategory()
		{
			if ($_GET['id']) {
				$this->purchasing->set('id', $_GET['id']);
				$this->purchasing->delete_category();
			}
		}


	}
	
	$purchasing = new purchasingController();
?>	