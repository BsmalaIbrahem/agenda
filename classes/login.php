<?php
trait login{
	private $email,
	        $password;
	public function login($email, $password){

		$this->assign_login_parameters_to_variables($email, $password);
		$this->check_login_inputs();


	}

	private function assign_login_parameters_to_variables($email, $password){
		$this->email    = $email;
		$this->password = $password;
	}

	private function check_login_inputs(){
		$check = new check_inputs();
		$check_email = $check->check_email_is_used($this->email);

		if($check_email === true){
			$result = DB::select_login_inputs($this->email, $this->password);
			if($result->num_rows <= 0){
				echo 'this password is wrong';
			}
			else{
				$this->set_loginInputs_to_session();
				$this->page_after_login();
			}
		}
		else
			echo 'this email isn\'t found';
	}

	private function page_after_login(){
		echo '<script>location = "home.php";</script>'; 
	}

	private function set_loginInputs_to_session(){
		$connect = new mysqli('localhost','root','', 'agenda');
 		$query   = $connect->prepare('select * from users where email=? and password=?');
 		$query->bind_param('ss',$this->email, $this->password);
 		$query->execute();
 		$result = $query->get_result();
 		$row    = $result->fetch_assoc();
 		session:: sessionStart();
 		session:: set_session('id', $row['id']);
 		session:: set_session('email', $row['email']);
 		session:: set_session('password', $row['password']);
 		session:: set_session('userName', $row['userName']);
 		session:: set_session('birth_date', $row['birth_date']);

	}




}