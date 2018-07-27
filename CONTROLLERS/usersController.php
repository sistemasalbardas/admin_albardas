<?php
	namespace CONTROLLERS;

	use MODELS\users as users;
	use CONTROLLERS\encrypt as encrypt;


	class usersController {

		public $users;
		public $encrypt;

		public $cadena;


		public function __construct(){
			$this->users = new users();
			$this->encrypt = new encrypt();
			
		}
				
		public function index(){
			$data = $this->users->list();
			return $data;
		}
			
		public function add(){
			if ($_POST) {
				
				$pass_encryp = $this->encrypt->openCypher('encrypt',$_POST['password']);
				$this->users->set('name', $_POST['name']);
				$this->users->set('last_name', $_POST['last_name']);
				$this->users->set('email', $_POST['email']);
				$this->users->set('phone', $_POST['phone']);
				$this->users->set('ranch', $_POST['ranch']);
				$this->users->set('password', $pass_encryp);
				$this->users->set('department', $_POST['department']);
				$this->users->save_user();

			}else{
				return false;
			}
			
		}

		public function edit()
		{
			if ($_POST) {
				$this->users->set('id', $_POST['id']);
				$this->users->set('name', $_POST['name']);
				$this->users->set('last_name', $_POST['last_name']);
				$this->users->set('email', $_POST['email']);
				$this->users->set('phone', $_POST['phone']);
				$this->users->set('ranch', $_POST['ranch']);
				$this->users->set('department', $_POST['department']);
				$this->users->set('status', $_POST['status']);
				$this->users->update_user();
			}else{
				$this->users->set('id', $_GET['id']);
				$row = $this->users->select_user();
				return $row;
			}


			# code...
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
		
	}
	
	$users = new usersController();

 ?>	