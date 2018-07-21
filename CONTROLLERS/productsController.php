<?php

	namespace CONTROLLERS;

	use MODELS\products as products;

	class productsController{

		private $products;

		public function __construct(){
			$this->products = new products();

		}
		
		public function index()
		{
			$data = $this->products->list();
			return $data;
			
		}

		public function delete()
		{
			$this->products->set('id', $_GET['id']);
			$this->products->erase();
		}

		public function add()
		{
			if ($_POST) {
				$this->products->set('name', $_POST['name']);
				$this->products->set('quality', $_POST['quality']);
				$this->products->set('size', $_POST['size']);
				$this->products->set('pack', $_POST['pack']);
				$this->products->set('brand', $_POST['brand']);
				$this->products->set('weight', $_POST['weight']);
				$this->products->set('unit_measure', $_POST['unit_measure']);
				$this->products->save();
				header("Location:".URL."products/");
			}
		}

		public function edit(){	
			if ($_POST) {
				$this->products->set('id', $_POST['id']);
				$this->products->set('name', $_POST['name']);
				$this->products->set('type_pack', $_POST['type_pack']);
				$this->products->update();
				header("Location:".URL."products/");

				
			}else{
				$this->products->set('id', $_GET['id']);
				$row = $this->products->product_id();
				return $row;
			}
		}
		
	}
	
	$products = new productsController();
 ?>	