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
					<tr>
						<td>Education</td>
						<td><a href="categoryEditView.php">Edit</a></td>
						<td><a href="">Delete</a></td>
					</tr>
				</table>
			</div>
			
		</form>	
			
	</body>
	
	
</html>
