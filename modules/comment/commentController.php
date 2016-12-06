<?php

/**
 * Created by PhpStorm.
 * User: xhelenga
 * Date: 22.11.2016
 * Time: 16:49
 */
class commentController
{
	
	function getCommentList(){
		if( isset($_SESSION['user'])){
		b::template("default", "comment/comment");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
	function createNewComment(){
		if( isset($_SESSION['user'])){
		b::template("default", "comment/commentAdd");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
	function save(){
		$content = $_POST['content'];
		$model = new commentModel();
		$result = $model->saveComment($content);
	}
	
	function updateComment(){
		if( isset($_SESSION['user'])){
		b::template("default", "comment/commentEdit");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
	function deleteComment(){
		if( isset($_SESSION['user'])){
		b::template("default", "comment/comment");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
}