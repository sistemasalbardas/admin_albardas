<?php
	namespace CONTROLLERS;
	
	use MODELS\predios as predios;

	class prediosController{
		private $predios;
		public $list_keys = array(); 
		
		public function __construct(){
			$this->predios = new predios();

		}
		
		public function index()
		{
		
			return false;
			
		}
	}
	$predios = new prediosController();
?>	