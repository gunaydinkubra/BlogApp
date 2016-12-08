<?php
	class commentController{
		function getCommentList(){
			$model = new commentModel();
			$result = $model->listComment();
			b::template("default", "comment/comment", $result);
			
		}
		function createNewComment(){
			b::template("default", "comment/commentAdd");
		}
		function save(){
			$content = $_POST['content'];
			$model = new commentModel();
			$result = $model->saveComment($content);
		}
		function edit(){
			$commentID = $_GET['comment_id'];
			$model = new commentModel();
			$result = $model->editComment($commentID);
			b::template("default", "comment/commentEdit",$result);
			
		}
		function update(){
			$commentID = $_GET['comment_id'];
			$content = $_POST['content'];
			$model = new commentModel();
			$model->updateComment($content,$commentID);
		}
		function delete(){
			$commentID = $_GET['comment_id'];
			$model = new commentModel();
			$model->deleteComment($commentID);
		}
	}