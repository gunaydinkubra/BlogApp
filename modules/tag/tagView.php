<form name="getTagList" id="getTagList" action="index.php?op=tag-getTagList" method="POST">
	<div class="col-lg-2"></div>
	<div class="col-lg-8 div white">
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th><input type="text" placeholder="Search" /></th>
					<th></th>
					<th><a href="index.php?op=tag-createNewTag" class="btn btn-info active btn-xs" role="button" >New Tag</a></th>
				</tr>
				<tr class="active">
					<th>tag</th>
					<th></th>
					<th></th>
					
				</tr>
				<?php
					for($i=0; $i<count($data); $i++){
						echo
						
							'<tr>
								<td>'.$data[$i]['tag'].'</td>
								<td><a href="index.php?op=tag-edit&tag_id='.$data[$i]['tag_id'].'" class="btn btn-info active btn-xs" role="button">Edit</a></td>
								<td><a href="index.php?op=tag-delete&tag_id='.$data[$i]['tag_id'].'" class="btn btn-info active btn-xs" role="button">Delete</a></td>	
							</tr>';
					}
				?>
		</table>
		</div>
	</div>
</form>