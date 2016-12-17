<form id="updateTag" name="updateTag" action="index.php?op=tag-update&tag_id=<?php echo $data['tag_id']?>" method="POST">
	<div class="col-lg-2"></div>
	<div class="col-lg-4 div-white">
		<label class="control-label lbl-color">Update Tag</label>
		<textarea class="form-control" name="tag" cols="40" rows="5"><?php echo $data['tag']?></textarea>
		<input class="btn btn-md mrgn btn-info" type="submit" value="Update">
	</div>
	<div class="col-lg-6"></div>
</form>
