<form id="updateTag" name="updateTag" action="index.php?op=tag-update&tag_id=<?php echo $data['tag_id']?>" method="POST">
	<div style="width:300px;clear:both">
		<label style="float:left">Update Tag</label>
	</div>
	<div style="width:300px;clear:both">
		<textarea style="float:right" name="tag" cols="40" rows="5"><?php echo $data['tag']?></textarea>
	</div>
	<div style="width:300px;clear:both">
		<input style="float:right" type="submit" value="Update">
	</div>
</form>
