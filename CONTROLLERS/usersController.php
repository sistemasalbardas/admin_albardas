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

		public function getById()
		{
			$this->users->set('id', $_GET['id']);
			$row = $this->users->select_user();
			return $row;
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



		public function addPermits()
		{
			if ($_POST) {
				$nRegiters = count($_POST);
				$n_r = $nRegiters / 7;
				error_log($n_r);
					
				for ($i=1; $i < $n_r + 1 ; $i++) { 	
					error_log($i);

					$this->users->set('template', $_POST['template_'.$i.'']);
					$this->users->set('id_user', $_POST['id_user_'.$i.'']);
					$this->users->set('read', $_POST['read_'.$i.'']);
					$this->users->set('write', $_POST['write_'.$i.'']);
					$this->users->set('edit', $_POST['edit_'.$i.'']);
					$this->users->set('delete', $_POST['delete_'.$i.'']);		
					$this->users->set('status', $_POST['status_'.$i.'']);		
					$this->users->add_permits();
				}

			}else{
				return false;
			}	
			header("Location: ".URL."users/");
		}

		public function updatePermits(){
			if ($_POST) {
				$nRegiters = count($_POST);
				$n_r = $nRegiters / 7;
									
				for ($i=1; $i < $n_r + 1 ; $i++) { 	

					$this->users->set('id', $_POST['id_'.$i.'']);
					$this->users->set('read', $_POST['read_'.$i.'']);
					$this->users->set('write', $_POST['write_'.$i.'']);
					$this->users->set('edit', $_POST['edit_'.$i.'']);
					$this->users->set('delete', $_POST['delete_'.$i.'']);		
					$this->users->set('status', $_POST['status_'.$i.'']);		
					$this->users->update_permits();
				}
			}else {
				$this->users->set('id', $_GET['id']);
				$data = $this->users->select_permits();
				return $data;
			}
			header("Location: ".URL."users/");
		}

		public function permits()
		{

			$p_users = $_SESSION['user'][0]['permits'][5];
			return $p_users;
		}
		
			
	}

	$users = new usersController();

?>	