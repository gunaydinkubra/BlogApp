<form name="getUserList" id="getUserList" action="index.php" method="POST">
	<div class="col-lg-2 col-md-2 col-sm-2 "></div>
	<div class="col-lg-8 col-md-8 col-sm-8 div-white">
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th><input type="text" name="search" placeholder="Search" /></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th><a href="index.php?op=user-createNewUser" class="btn btn-info active btn-xs" role="button" >New User</a></th>
				</tr>
				<tr class="active">
					<th>user_id</th>
					<th>email</th>
					<th>pass</th>
					<th>name</th>
					<th>surname</th>
					<th></th>
					<th></th>
				</tr>
				<?php //print_R($data); 
					for ( $i=0; $i<count($data); $i++ ){
						
						echo '<tr>
								<td>'.$data[$i]['user_id'].'</td>
								<td>'.$data[$i]['email'].'</td>
								<td>'.$data[$i]['pass'].'</td>
								<td>'.$data[$i]['name'].'</td>
								<td>'.$data[$i]['surname'].'</td>
								<td><a href="index.php?op=user-edit&user_id='.$data[$i]['user_id'].'" class="btn btn-info active btn-xs" role="button">Edit</a></td>
								<td><a href="index.php?op=user-delete&user_id='.$data[$i]['user_id'].'" class="btn btn-info active btn-xs" role="button">Delete</a></td>
							</tr>';
					}
				?> 
			</table>
		</div>
	</div>
</form>