<?php
	class commentModel{
		function saveComment($content){
			$db = new db();
			$db->insert(array("content"=>$content),"tbl_comment");
		}
		function listComment(){
			$db = new db();
			$db->select();
			$db->from("tbl_comment");
			return $db->fetchArray();
			
		}
		function editComment($commentID){
			$db = new db();
			$db->select();
			$db->from("tbl_comment");
			$db->where("comment_id=?",array($commentID));
			return $db->fetchOneArray();
		}
		function updateComment($content,$commentID){
			$db = new db();
			$db->update(array("content"=>$content),"tbl_comment");
			$db->where("comment_id=?",array($commentID));
			$db->execute();
		}
		function deleteComment($commentID){
			$db = new db();
			$db->delete("tbl_comment");
			$db->where("comment_id=?",array($commentID));
			$db->execute();
		}
		
	}