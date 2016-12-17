<form id="createNewBlog" name="createNewBlog" action="index.php?op=blog-save" method="POST">
<div class="col-lg-2 col-md-2 col-sm-2 "></div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 div-white">
		<h2 class="lbl-color">New Blog</h2>
		<label class="control-label lbl-color">Title</label>
		<input class="form-control" type="text" name="title" id="title" />
		<label class="control-label lbl-color">Topic</label>
		<textarea class="form-control" name="content"  cols="70" rows="30"></textarea>
		<label class="control-label lbl-color">Select Category</label>
		<select class="form-control" name="category_id">
		<?php
			for($i=0; $i<count($data); $i++){
				echo
					'<option value="'.$data[$i]['category_id'].'">'.$data[$i]['category_name'].'</option>';
			}
		?>
		</select>
		<input class="btn btn-md mrgn btn-info" type="submit" id="title" value="Save"/>
		<input class="btn btn-md mrgn btn-info" type="submit" id="title" value="Publish"/>
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1"></div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 div-white">
		<label class="control-label lbl-color">Tags Space</label>
		<textarea class="form-control" name="tags" cols="30" rows="15"></textarea>
	</div>
</form>

