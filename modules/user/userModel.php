<?php

/**
 * Created by PhpStorm.
 * User: xhelenga
 * Date: 22.11.2016
 * Time: 16:48
 */
class userModel
{

    function checkUser($email,$pass){
        $db = new db();
        $db->select();
        $db->from("tbl_user");
        $db->where("email=? and pass=?", array($email,$pass));
        return $db->fetchOneArray();
    }
	
	function listUser(){
		$db = new db();
		$db->select();
		$db->from("tbl_user");
		return $db->fetchArray();
	}
	function saveUser($name,$surname,$email,$pass){
		
		$db = new db();
		$db->insert(array("name"=>$name,"surname"=>$surname,"email"=>$email,"pass"=>$pass),"tbl_user");
		
	}
	function editUser($userID){
		$db = new db();
		$db->select();
		$db->from("tbl_user");
		$db->where("user_id=?" , array($userID));
		return $db->fetchOneArray();
	}
	function updateUser($name,$surname,$email,$pass, $userID){
			$db = new db();
			$db->update(array("name"=>$name,"surname"=>$surname,"email"=>$email,"pass"=>$pass), "tbl_user");
			$db->where("user_id=?", array($userID));
			return $db->fetchOneArray();
		}
	function deleteUser($userID){
		$db = new db();
		$db->delete("tbl_user");
		$db->where("user_id=?", array($userID));
		return $db->fetchArray();
		}

}
