<?php
	namespace CONTROLLERS;
	
	use MODELS\dashboard as dashboard;

	class dashboardController{

		private $dashboard;

		public function __construct(){
            
            $this->dashboard = new dashboard();

		}
		
		public function index()
		{
		
			return false;
			
		}


    }
	
	$dashboard = new dashboardController();
?>	