<form id="updateComment" name="updateComment" action="index.php?op=comment-update&comment_id=<?php echo $data['comment_id'];?>" method="POST">
	<div class="col-lg-2"></div>
	<div class="col-lg-4 div-white">
		<label class="control-label lbl-color">Update Comment</label>
		<textarea class="form-control" name="content" cols="40" rows="5"><?php echo $data['content'];?></textarea>
		<input class="btn btn-md mrgn btn-info" type="submit" value="Update">
	</div>	
</form>

