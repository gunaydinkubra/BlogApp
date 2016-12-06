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
	<?php// print_R($data)  ?>
		<form id="updateUser" name="updateUser" action="index.php?op=user-update&user_id=<?php echo $data['user_id']; ?>" method="POST">
			<div>
				<input type="hidden" name="user_id" id="user_id"/>
			</div>
			<div>
				<label>Name:</label>
				<input type="text" name="name" id="name" placeholder="Name" value="<?php echo $data['name'];?>" />
			</div>
			<div>
				<label>Last Name:</label>
				<input type="text" name="surname" id="surname" placeholder="Last Name" value="<?php echo $data['surname'];?>" />
			</div><br>
			<div>
				<label>E-Mail:</label>
				<input type="text" name="email" id="email" placeholder="E-Mail"value="<?php echo $data['email'];?>" />
			</div>
			<div>
				<label>Password: </label>
				<input type="text" name="pass" id="pass" placeholder="Password" value="<?php echo $data['pass'];?>" />
			</div>
			<div>
				<input type="submit" id="email" value="Update" />
			</div>
		
		</form>