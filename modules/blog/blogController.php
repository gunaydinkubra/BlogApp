<?php


class blogController
{
	function getBlog(){
		
	}
	function getBlogByTag(){
		
	}
	
	function getBlogList(){
		$model= new blogModel();
		$result = $model->listBlog();
		b::template("default", "blog/blog", $result);
		
	}
	
	
	
	function createNewBlog(){
		b::template("default","blog/blogAdd");
		
	}
	
	function save(){
		$title = $_POST['title'];
		$content = $_POST['content'];
		$category_name = $_POST['category_name'];
		$model = new blogModel();
		$result = $model->saveBlog($title,$content,$category_name);
	}
	
	function edit(){
		$blogID = $_GET['blog_id'];
		$model = new blogModel();
		$result = $model->editBlog($blogID);
		b::template("default", "blog/blogEdit", $result);
	}
	
	function update(){
		$blogID = $_GET['blog_id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		//$tags = $_POST['tags'];
		//$category_id = $_POST['category_id'];
		$model = new blogModel();
		$model->updateBlog($title,$content,$blogID);
		
	}
	function delete(){
		$blogID = $_GET['blog_id'];
		$model = new blogModel();
		$model->deleteBlog($blogID);
	}
}
