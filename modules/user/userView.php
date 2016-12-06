<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
table {
    width: 90%;
	border-collapse:collapse;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
th{
	background-color:#dddddd
}
</style>
</head>

	<body>
		<form name="getUserList" id="getUserList" action="index.php" method="POST">
			<div>
				<table>
				
					<tr>
						<th><input type="text" name="search" placeholder="Search" /></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th><a href="index.php?op=user-createNewUser">New User</a></th>
					</tr>
					
					<tr>
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
									<td><a href="index.php?op=user-edit&user_id='.$data[$i]['user_id'].'">Edit</a></td>
									<td><a href="index.php?op=user-delete&user_id='.$data[$i]['user_id'].'">Delete</a></td>
								</tr>';
						}
					
					?> 
					
				</table>
			</div>
		</form>
	