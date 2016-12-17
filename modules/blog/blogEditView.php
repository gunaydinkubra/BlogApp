<?php
//print_r($data);
$blog = $data['blog'];
$categoryList = $data['category'];
?>
<form id="updateBlog" name="updateBlog" action="index.php?op=blog-update&blog_id=<?php echo $blog['blog_id']; ?>" method="POST">
	<div class ="col-lg-2 col-md-2 col-sm-2"></div>
	<div class="col-lg-6 col-md-6 col-sm-6 div-white">
		<h2 class="lbl-color">Update Blog</h2>
		<label class="control-lbl lbl-color">Title</label>
		<input class="form-control" type="text" name="title" id="title" value="<?php echo $blog['title']?>"/>
		<label class="control-lbl lbl-color">Topic</label>
		<textarea class="form-control" name="content"  cols="100" rows="30" ><?php echo $blog['content']?></textarea>
		<label class="control-lbl lbl-color">Select Category</label>
		<select class="form-control" name="category_id">
			<?php
				for($i=0;$i<count($categoryList);$i++){
					if( $categoryList[$i]['category_id'] == $blog['category_id'] ){
						echo '<option value="'.$categoryList[$i]['category_id'].'" selected>'.$categoryList[$i]['category_name'].'</option>';
					}else{
						echo '<option value="'.$categoryList[$i]['category_id'].'">'.$categoryList[$i]['category_name'].'</option>';
					}
				}
			?>
		</select>
		<input class="btn btn-info mrgn"type="submit" id="title" value="Update"/>	
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1"></div>
	<div class="col-lg-2 col-md-2 col-sm-2 div-white">
		<label class="control-lbl lbl-color">Tags Space</label>
		<textarea class="form-control" name="tags" cols="40" rows="15"><?php echo $blog['tags']?></textarea>
	</div>
</form>

