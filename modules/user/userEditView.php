<form id="updateUser" name="updateUser" action="index.php?op=user-update&user_id=<?php echo $data['user_id']; ?>" method="POST">
	<div class="col-lg-2 col-md-2 col-sm-2 "></div>
	<div class="col-lg-6 col-md-6 col-sm-6 div-white">
		<input type="hidden" name="user_id" id="user_id"/>
		<label class="control-label lbl-color">Name</label>
		<input class="form-control" type="text" name="name" id="name" placeholder="Name" value="<?php echo $data['name'];?>"/>
		<label class="control-label lbl-color mrgn">Last Name</label>
		<input class="form-control" type="text" name="surname" id="surname" placeholder="Last Name" value="<?php echo $data['surname'];?>"/>
		<label class="control-label lbl-color mrgn">E-Mail</label>
		<input class="form-control" type="text" name="email" id="email" placeholder="E-Mail"value="<?php echo $data['email'];?>"/>
		<label class="control-label lbl-color mrgn">Password: </label>
		<input class="form-control" type="text" name="pass" id="pass" placeholder="Password" value="<?php echo $data['pass'];?>"/>
		<input class="btn btn-info btn-block mrgn" type="submit" id="email" value="Update" />
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 "></div>
</form>