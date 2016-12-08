<?php
	class categoryModel{
		function saveCategory($category_name){
			$db = new db();
			$db->insert(array("category_name"=>$category_name),"tbl_category");
		}
		function listCategory(){
			$db = new db();
			$db->select();
			$db->from("tbl_category");
			return $db->fetchArray();
		}
		function deleteCategory($categoryID){
			$db = new db();
			$db->delete("tbl_category");
			$db->where("category_id=?", array($categoryID));
			$db->execute();
		}
		function editCategory($categoryID){
			$db = new db();
			$db->select();
			$db->from('tbl_category');
			$db->where("category_id=?", array($categoryID));
			return $db->fetchOneArray();
		}
		function updateCategory($category_name,$categoryID){
			$db = new db();
			$db->update(array("category_name"=>$category_name),"tbl_category");
			$db->where("category_id=?",array($categoryID));
			$db->execute();
			
		}
	}