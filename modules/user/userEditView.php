<form id="updateUser" name="updateUser" action="index.php?op=user-update&user_id=<?php echo $data['user_id']; ?>" method="POST">
	<div id="div1">
		<input id="input1" type="hidden" name="user_id" id="user_id"/>
	</div>
	<div id="div1">
		<label id="label1">Name:</label>
		<input id="input1" type="text" name="name" id="name" placeholder="Name" value="<?php echo $data['name'];?>" />
	</div>
	<div id="div1">
		<label id="label1">Last Name:</label>
		<input id="input1" type="text" name="surname" id="surname" placeholder="Last Name" value="<?php echo $data['surname'];?>" />
	</div><br>
	<div id="div1">
		<label id="label1">E-Mail:</label>
		<input id="input1" type="text" name="email" id="email" placeholder="E-Mail"value="<?php echo $data['email'];?>" />
	</div>
	<div id="div1">
		<label id="label1">Password: </label>
		<input id="input1" type="text" name="pass" id="pass" placeholder="Password" value="<?php echo $data['pass'];?>" />
	</div>
	<div id="div1">
		<input id="input1" type="submit" id="email" value="Update" />
	</div>
</form>
