<?php
	class session{
	static function set($variable,$value){
		$_SESSION[$variable] = $value;
	}
	static function get($variable){
		return $_SESSION[$variable];
	}
	static function check(){
		if( !isset($_SESSION['user']) ){
			b::template("login", "user/userLogin");
			exit;
			}
		}
	}
?>