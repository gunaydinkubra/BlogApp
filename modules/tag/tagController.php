<?php

/**
 * Created by PhpStorm.
 * User: xhelenga
 * Date: 22.11.2016
 * Time: 16:49
 */
class tagController
{
	function getTag(){
		
	}
	function getTagList(){
		if( isset($_SESSION['user'])){
		b::template("default", "tag/tag");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
	function createNewTag(){
		if( isset($_SESSION['user'])){
		b::template("default", "tag/tagAdd");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
	function save(){
		$tag = $_POST['tag'];
		$model = new tagModel();
		$result = $model->saveTag($tag);
	}
	function updateTag(){
		if( isset($_SESSION['user'])){
		b::template("default", "tag/tagEdit");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
}