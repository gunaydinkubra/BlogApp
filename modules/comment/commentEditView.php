<form id="updateComment" name="updateComment" action="index.php?op=comment-update&comment_id=<?php echo $data['comment_id'];?>" method="POST">
	<div>
		<label style="float:left">Update Comment</label>
	</div>
	
	<div style="width:300px">
		<textarea style="float:right" name="content" cols="40" rows="5"><?php echo $data['content'];?></textarea>
	</div>
	
	<div style="width:300px">
		<input style="float:right" type="submit" value="Update">
	</div>	
</form>

