<?php 
	namespace CONTROLLERS;
	$url
	parse_url($_GET);
	use MODELS\predios as predios;

	class routerController
	{
		public $action;
		public $args;
		private $costumers;

		public $list_keys = array(); 
		
	
		function index($data)
		{
			$action = $_GET['action'];
			switch ($action) {
				case 'get_user':
					error_log("si-getusaer");
					break;
				
				default:
					# code...
					break;
			}
		}
	}	
	$router = new routerController();

	$router::index($_GET);

?>