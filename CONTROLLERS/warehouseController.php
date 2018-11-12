<?php
	namespace CONTROLLERS;
	
	use MODELS\warehouse as warehouse;

	class warehouseController{
		private $warehouse;

		public function __construct(){
			$this->warehouse = new warehouse();

		}
		
		public function index()
		{
			return false;
		}
		
		
	}
	
	$warehouse = new warehouseController();
?>	