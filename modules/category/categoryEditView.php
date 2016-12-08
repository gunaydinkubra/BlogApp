<form id="updateCategory" name="updateCategory" action="index.php?op=category-update&category_id=<?php echo $data['category_id']; ?>" method="POST">
	<div style="width:300px; clear:both">
		<label style="float:left;">Update Category:</label>
	</div>
	<div style="width:300px; clear:both">
		<textarea style="float:right" cols="40" rows="5" name="category_name" > <?php echo $data['category_name'];?></textarea>
	</div>
	<div style="width:300px; clear:both">
		<input style="float:right" type="submit" value="Update" />
	</div>
</form>
