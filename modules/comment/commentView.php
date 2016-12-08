
<form id="getComment" name="getComment" action="index.php?op=" method="POST">
	<div>
		<table>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<th>content</th>
				<th>operation_date</th>
				<th></th>
				<th></th>
			</tr>
			<?php
				for($i=0; $i<count($data); $i++){
					echo
						'<tr>
							<td>'.$data[$i]['content'].'</td>
							<td>'.$data[$i]['operation_date'].'</td>	
							<td><a href="index.php?op=comment-edit&comment_id='.$data[$i]['comment_id'].'">Edit</a></td>
							<td><a href="index.php?op=comment-delete&comment_id='.$data[$i]['comment_id'].'">Delete</a></td>
						<tr>';
				}
			?>
		</table>
	</div>
</form>

