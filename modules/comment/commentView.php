<form id="getComment" name="getComment" action="index.php?op=" method="POST">
	<div class="col-lg-2"></div>
	<div class="col-lg-8 div-white">
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				<tr class="active">
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
								<td><a href="index.php?op=comment-edit&comment_id='.$data[$i]['comment_id'].'" class="btn btn-info active btn-xs" role="button">Edit</a></td>
								<td><a href="index.php?op=comment-delete&comment_id='.$data[$i]['comment_id'].'" class="btn btn-info active btn-xs" role="button">Delete</a></td>
							<tr>';
					}
				?>
			</table>
		</div>
	</div>
	<div class="col-lg-2"></div>
</form>

