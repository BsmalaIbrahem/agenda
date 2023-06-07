<?php
 class check_inputs{

 	public function check_register_inputs($user_name, $email, $password, $confirm_password,$birth_date){
 		if(!$this->check_userName($user_name))
 			return "user_name must be containt character & mustn't be space & its length mustn't be longer than 150 character";
 		if($this->check_email_is_used($email))
 			return "this email is used ,before";
 		if(!$this->check_email($email))
 			return "this email is invalid";
 		if(! $this->check_password($password,$confirm_password))
 			return "this password wrong or password must containt 8 character or more musn't be space";

 		return true;
 	}

 	
 	public function check_userName($userName){
 		if(!$this->check_string_length($userName))
 			return false;
 		if($this->check_space($userName))
 			return false;
 		if(!$this->check_characters($userName))
 			return false;
 		return true;
 	}

 	public function check_email_is_used($email){
 		$result = DB::select_email($email);
 		if($result->num_rows > 0)
 			return true;
 		else
 			return false;
 	}
 	public function check_email($email){
 		if(filter_var($email, FILTER_VALIDATE_EMAIL))
 			return true;
 		else
 			return false;
 	}

 	public function check_password($password, $cofirm_password){
 		if($password == $cofirm_password){
 			if($this->check_password_characters_length($password) && !$this->check_space($password))
 				return true;
 		}
 		return false ;
 	}

 	



 	private function check_string_length($string){
 		if(strlen($string) <= 150)
 			return true;
 		else
 			return false;
 	}

 	private function check_space($value){
 		if(ctype_space($value))
 			return true;
 		else
 			return false;
 	}

 	private function check_characters($value){
 		for($i=0; $i<strlen($value); $i++){
 			if(!(ord($value[$i]) >= 97 && ord($value[$i] <= 122)) || !(ord($value[$i]) >= 65 && ord($value[$i] <= 90)) )
 				return false;
 		}
 		return true;
 	}

 	private function check_password_characters_length($password){
 		$length = 0;
 		for($i=0; $i < strlen($password); $i++){
 			if($this->check_characters($password[$i]))
 				$length+=1;
 		}
 		if($length >=8)
 			return true;
 		else
 			return false;
 	}

 }