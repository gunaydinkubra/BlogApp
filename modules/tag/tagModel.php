<?php
	class tagModel{
		function saveTag($tag){
			$db = new db();
			$db->insert(array("tag"=>$tag),"tbl_tag");
		}
		function listTag(){
			$db = new db();
			$db->select();
			$db->from("tbl_tag");
			return $db->fetchArray();
		}
		function editTag($tagID){
			$db = new db();
			$db->select();
			$db->from("tbl_tag");
			$db->where("tag_id=?",array($tagID));
			return $db->fetchOneArray();
		}
		function updateTag($tag,$tagID){
			$db = new db();
			$db->update(array("tag"=>$tag),"tbl_tag");
			$db->where("tag_id=?",array($tagID));
			$db->execute();
		}
		function deleteTag($tagID){
			$db = new db();
			$db->delete("tbl_tag");
			$db->where("tag_id=?",array($tagID));
			$db->execute();
		}
	}