<?php




	class tagModel{
		
		
		function saveTag($tag){
			$db = new db();
			$db->insert(array("tag"=>$tag),"tbl_tag");
		}
	}