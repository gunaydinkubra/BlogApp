<form name="getCategory" id="getCategory" action="index.php" method="POST">
	<div class="col-lg-2"></div>
	<div class="col-lg-8 div-white">
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th><input type="text" id="search" name="search" placeholder="Search"/></th>
					<th></th>
					<th><a href="index.php?op=category-createNewCategory" class="btn btn-info active btn-xs" role="button">New Category</a></th>
				</tr>
				<tr class="active">
					<th>category_name</th>
					<th></th>
					<th></th>
				</tr>
				<?php
					for($i=0; $i<count($data); $i++){
					echo
						'<tr>
							<td>'.$data[$i]['category_name'].'</td>
							<td><a href="index.php?op=category-edit&category_id='.$data[$i]['category_id'].'" class="btn btn-info active btn-xs" role="button">Edit</a></td>
							<td><a href="index.php?op=category-delete&category_id='.$data[$i]['category_id'].'" class="btn btn-info active btn-xs" role="button">Delete</a></td>
						</tr>';
					}
					?>
			</table>
		</div>
	</div>
	<div class="col-lg-2"></div>
</form>	
