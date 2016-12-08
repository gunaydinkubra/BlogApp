<?php
class categoryController
{
	function getCategory(){
		
	}
	function getCategoryList(){
		$model = new categoryModel();
		$result = $model->listCategory();
		b::template("default", "category/category",$result);
		
	}
	function createNewCategory(){
		
		b::template("default", "category/categoryAdd");	
		
	}
	function save(){
		$category_name = $_POST['category_name'];
		$model  = new categoryModel();
		$result = $model->saveCategory($category_name);
	}
	function edit(){
		$categoryID = $_GET['category_id'];
		$model = new categoryModel();
		$result = $model->editCategory($categoryID);
		b::template("default", "category/categoryEdit", $result);
		
	}
	function update(){
		$categoryID = $_GET['category_id'];
		$category_name = $_POST['category_name'];
		$model = new categoryModel();
		$model->updateCategory($category_name,$categoryID);
	}
	function delete(){
		$categoryID = $_GET['category_id'];
		$model = new categoryModel();
		$model->deleteCategory($categoryID);
	}
}