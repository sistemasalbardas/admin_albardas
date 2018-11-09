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
			return false;
		}


		
		

	}
	
	$inventories = new inventoriesController();
 ?>	