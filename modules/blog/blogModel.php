<?php
class blogModel{
	function saveBlog($title,$content,$category_id,$tags){
		$db = new db();
		$db->insert(array("title"=>$title, "content"=>$content, "category_id"=>$category_id, "tags"=>$tags),"tbl_blog");
	}
	function listBlog(){
		$db = new db();
		$db->select();
		$db->from("tbl_blog");
		return $db->fetchArray();
	}
	function editBlog($blogID){
		$db = new db();
		$db->select();
		$db->from("tbl_blog");
		$db->where("blog_id=?",array($blogID));
		return $db->fetchOneArray();
	}
	function updateBlog($title,$content,$blogID, $category_id,$tags){
		$db = new db();
		$db->update(array("title"=>$title, "content"=>$content, "category_id"=>$category_id,"tags"=>$tags),"tbl_blog");
		$db->where("blog_id=?",array($blogID));
		return $db->execute();
	}
	function deleteBlog($blogID){
		$db = new db();
		$db->delete('tbl_blog');
		$db->where("blog_id=?",array($blogID));
		return $db->execute();
	}	
}
