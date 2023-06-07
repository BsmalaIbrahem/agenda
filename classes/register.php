<?php 
trait register{
	private $user_name;
	private $email;
	private $password;
	private $confirm_password;
	private $birth_date;

	public function register($user_name, $email, $password, $confirm_password,$birth_date){
		$this->assign_register_parameters_to_variables($user_name, $email, $password, $confirm_password,$birth_date);
		$this->set_register_inputs_into_dataBase();
		
	}

	private function assign_register_parameters_to_variables($user_name, $email, $password, $confirm_password,$birth_date){

	    $this->user_name        = $user_name;
		$this->email            = $email;
		$this->password         = $password;
		$this->confirm_password = $confirm_password;
		$this->birth_date       = $birth_date;
	}

	private function set_register_inputs_into_dataBase(){
		$check = new check_inputs();
		$check_result = $check->check_register_inputs($this->user_name, $this->email, $this->password, $this->confirm_password,$this->birth_date);

		if($check_result === true){
			DB::insert_register_inputs($this->user_name, $this->email, $this->password,$this->birth_date);			
		}
		else
			echo $check_result;
	}


	


}