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
		b::getModule("category");
		$model = new categoryModel();
		$result =$model->listCategory();
		b::template("default","blog/blogAdd",$result);
	}
	function save(){
		$title = $_POST['title'];
		$content = $_POST['content'];
		$category_id = $_POST['category_id'];
		$tags = $_POST['tags'];
		$model = new blogModel();
		$result = $model->saveBlog($title,$content,$category_id,$tags);
	}
	function edit(){
		$blogID = $_GET['blog_id'];
		$model = new blogModel();
		$result = $model->editBlog($blogID);
		b::getModule("category");
		$categoryModel = new categoryModel();
		$categoryList = $categoryModel->listCategory();
		$data = array( "blog" => $result, "category" => $categoryList );
		b::template("default", "blog/blogEdit", $data);
	}
	function update(){
		$blogID = $_GET['blog_id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$tags = $_POST['tags'];
		$category_id = $_POST['category_id'];
		$model = new blogModel();
		$model->updateBlog($title,$content,$blogID,$category_id,$tags);
		
	}
	function delete(){
		$blogID = $_GET['blog_id'];
		$model = new blogModel();
		$model->deleteBlog($blogID);
	}
}
