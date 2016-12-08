<form name="getBlogList" id="getBlogList" action="index.php" method="POST">
	<div>
		<table>
			<tr>
				<th><input type="text" name="search" placeholder="Search" /></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th><a href="blogAddView.php">New Blog</a></th>
			</tr>
			<tr>
				<th>title</th>
				<th>content</th>
				<th>operation_date</th>
				<th>likes</th>
				<th>dislikes</th>
				<th></th>
				<th></th>
			</tr>
			<?php //print_R($data)
				for( $i=0; $i<count($data); $i++){
					echo
						'<tr>
							<td>'.$data[$i]['title'].'</td>
							<td>'.$data[$i]['content'].'</td>
							<td>'.$data[$i]['operation_date'].'</td>
							<td>'.$data[$i]['likes'].'</td>
							<td>'.$data[$i]['dislikes'].'</td>
							<td><a href="index.php?op=blog-edit&blog_id='.$data[$i]['blog_id'].'">Edit</a></td>
							<td><a href="index.php?op=blog-delete&blog_id='.$data[$i]['blog_id'].'">Delete</a></td>
						</tr>';
			}
			?>
		</table>
	</div>
</form>
