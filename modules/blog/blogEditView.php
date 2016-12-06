
<form id="updateBlog" name="updateBlog" action="index.php?op=blog-update&blog_id=<?php echo $data['blog_id']; ?>" method="POST">

	<div>	
		<label>Title</label><br>
		<input type="text" name="title" id="title" value="<?php echo $data['title']?>"/><br>
	</div>
	
	<div>
		<label>Topic</label><br>
		<textarea name="content"  cols="100" rows="30" ><?php echo $data['content']?></textarea><br>
	</div>	
	
	<div>
		<label>Select Category</label>
		<select name="category_name">
			<option value="<?php echo $data['category_id']?>"></select>
		</select>
	</div>
	
	<div>
		<input type="submit" id="title" value="Update"/>				
	</div>	
	
</form>

