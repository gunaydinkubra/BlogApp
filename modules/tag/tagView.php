<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 70%;
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
		<form name="getTagList" id="getTagList" action="index.php?op= method="POST">
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
				
				<tr>
					<td>innovation</td>
					<td><a href="tagEditView.php">Edit</a></td>
					<td><a href="">Delete</a></td>	
				</tr>
				
			</table>
		
		</form>