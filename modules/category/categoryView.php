<form name="getCategory" id="getCategory" action="index.php" method="POST">
	<div>
		<table>
			<tr>
				<th><input type="text" id="search" name="search" placeholder="Search"/></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<th>category_name</th>
				<th></th>
				<th></th>
			</tr>
			<?php
				for($i=0; $i<count($data); $i++){
				echo
					'<tr>
						<td>'.$data[$i]['category_name'].'</td>
						<td><a href="index.php?op=category-edit&category_id='.$data[$i]['category_id'].'">Edit</a></td>
						<td><a href="index.php?op=category-delete&category_id='.$data[$i]['category_id'].'">Delete</a></td>
					</tr>';
				}
				?>
		</table>
	</div>
</form>	
