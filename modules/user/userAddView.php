<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
div{
	width: 300px;
	clear: both;
}
label{
	float: left;
}
input{
	float: right;
}
</style>
</head>

	<body>
		<form id="createUser" name="createUser" action="index.php?op=user-save" method="POST">
			<div>
				<label>Name:</label>
				<input type="text" name="name" id="name" placeholder="Name" />
			</div>
			<div>
				<label>Last Name:</label>
				<input type="text" name="surname" id="surname" placeholder="Last Name" />
			</div><br>
			<div>
				<label>E-Mail:</label>
				<input type="text" name="email" id="email" placeholder="E-Mail" />
			</div>
			<div>
				<label>Password: </label>
				<input type="text" name="pass" id="pass" placeholder="Password" />
			</div>
			<div>
				<input type="submit" id="email" value="Save" />
			</div>
		
		</form>
