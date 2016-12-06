<?php


class categoryController
{
	function getCategory(){
		
	}
	function getCategoryList(){
		if( isset($_SESSION['user'])){
		b::template("default", "category/category");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
	function createNewCategory(){
		if( isset($_SESSION['user'])){
		b::template("default", "category/categoryAdd");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
	function save(){
		$category_name = $_POST['category_name'];
		$model  = new categoryModel();
		$result = $model->saveCategory($category_name);
	}
	
	function updateCategory(){
		if( isset($_SESSION['user'])){
		b::template("default", "category/categoryEdit");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
	function deleteCategory(){
		if( isset($_SESSION['user'])){
		b::template("default", "category/category");
		}else{
		b::template("login", "user/userLogin");	
		}
	}
}