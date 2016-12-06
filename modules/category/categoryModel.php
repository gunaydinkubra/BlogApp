<?php


	class categoryModel{
		
		function saveCategory($category_name){
			$db = new db();
			$db->insert(array("category_name"=>$category_name),"tbl_category");
		}
		
		
		
	}