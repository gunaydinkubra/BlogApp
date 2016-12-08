<?php
//print_r($data);
$blog = $data['blog'];
$categoryList = $data['category'];
?>
<form id="updateBlog" name="updateBlog" action="index.php?op=blog-update&blog_id=<?php echo $blog['blog_id']; ?>" method="POST">
	<div>	
		<label>Title</label><br>
		<input type="text" name="title" id="title" value="<?php echo $blog['title']?>"/><br>
	</div>
	<div>
		<label>Topic</label><br>
		<textarea name="content"  cols="100" rows="30" ><?php echo $blog['content']?></textarea><br>
	</div>	
	<div>
		<label>Select Category</label>
		<select name="category_id">
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
	</div>
	<div>
		<input type="submit" id="title" value="Update"/>				
	</div>	
</form>

