<?php
class tagController{
	function getTag(){
		
	}
	function getTagList(){
		$model = new tagModel();
		$result = $model->listTag();
		b::template("default", "tag/tag", $result);
	}
	function createNewTag(){
		b::template("default", "tag/tagAdd");
	}
	function save(){
		$tag = $_POST['tag'];
		$model = new tagModel();
		$result = $model->saveTag($tag);
	}
	function edit(){
		$tagID = $_GET['tag_id'];
		$model = new tagModel();
		$result = $model->editTag($tagID);
		b::template("default","tag/tagEdit", $result);
	}
	function update(){
		$tagID = $_GET['tag_id'];
		$tag = $_POST['tag'];
		$model = new tagModel();
		$model->updateTag($tag,$tagID);
	}
	function delete(){
		$tagID = $_GET['tag_id'];
		$model = new tagModel();
		$model->deleteTag($tagID);
	}
}