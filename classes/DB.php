<?php
class DB{

	public static function connect(){
		$connect = new mysqli('localhost','root','', 'agenda');
		return $connect;
	}

	public static function insert_register_inputs($name, $email, $password, $birh_date){
		$connect = DB::connect();
		$query = $connect->prepare('insert into users set userName=? , email=?, password=?, birth_date=?');
		$query->bind_param("ssss",$name, $email, $password, $birh_date);
		$query->execute(); 
	}

	public static function select_email($email){
		$connect = DB::connect();
 		$query   = $connect->prepare('select * from users where email=?');
 		$query->bind_param('s',$email);
 		$query->execute();
 		$result = $query->get_result();
 		return $result;
	}

	public static function select_login_inputs($email, $password){
		$connect = DB::connect();
		$query   = $connect->prepare('select * from users where email =? and password=?');
		$query->bind_param('ss',$email, $password);
		$query->execute();
		$result = $query->get_result();
		return $result;
	}

	


}