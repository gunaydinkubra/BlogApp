<?php



	class commentModel{
		
		function saveComment($content){
			$db = new db();
			$db->insert(array("content"=>$content),"tbl_comment");
		}
		
	}