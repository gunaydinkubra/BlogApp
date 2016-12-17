<form id="updateCategory" name="updateCategory" action="index.php?op=category-update&category_id=<?php echo $data['category_id']; ?>" method="POST">
	<div class="col-lg-2"></div>
	<div class="col-lg-4">
		<label class="control-lbl lbl-color" >Update Category:</label>
		<textarea  class="form-control" cols="40" rows="5" name="category_name" > <?php echo $data['category_name'];?></textarea>
		<input class="btn btn-info btn-md mrgn" type="submit" value="Update"/>
	</div>
	<div class="col-lg-6"></div>
</form>
