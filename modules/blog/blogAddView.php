<form id="createNewBlog" name="createNewBlog" action="index.php?op=blog-save" method="POST">
	<div>	
		<label>Title</label><br>
		<input type="text" name="title" id="title" /><br>
	</div>
	<div>
		<label>Topic</label><br>
		<textarea name="content"  cols="100" rows="30"></textarea><br>
	</div>	
	<div>
		<label>Select Category</label>
		<select name="category_id">
		<?php
			for($i=0; $i<count($data); $i++){
				echo
					'<option value="'.$data[$i]['category_id'].'">'.$data[$i]['category_name'].'</option>';
			}
		?>
		</select><br><br>
	</div>
	<div>
		<input type="submit" id="title" value="Save"/>
		<input type="submit" id="title" value="Publish"/>				
	</div>	
</form>
