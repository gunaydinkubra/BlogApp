<form name="getTagList" id="getTagList" action="index.php?op=tag-getTagList" method="POST">
	<table>
		<tr>
			<th><input type="text" placeholder="Search" /></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<th>tag</th>
			<th></th>
			<th></th>
			
		</tr>
		<?php
			for($i=0; $i<count($data); $i++){
				echo
				
					'<tr>
						<td>'.$data[$i]['tag'].'</td>
						<td><a href="index.php?op=tag-edit&tag_id='.$data[$i]['tag_id'].'">Edit</a></td>
						<td><a href="index.php?op=tag-delete&tag_id='.$data[$i]['tag_id'].'">Delete</a></td>	
					</tr>';
			}
		?>
	</table>
</form>