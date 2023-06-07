<?php
class session{
	public static function sessionStart(){
		session_start();
	}

	public static function set_session($key, $value){
		$_SESSION[$key] = $value;
	}

	public static function get_session($key){
		return $_SESSION[$key];
	}

	public static function destroy_session(){
		session_unset();
		session_destroy();
	}
}