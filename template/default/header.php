<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="tr">
<title> Blog App</title>
<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css" >
<link rel="stylesheet" type="text/css" href="lib/datatable/css/jquery.dataTables.css" >
<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/custom.css" >
<link rel="stylesheet" type="text/css" href="lib/jquery-1.12.4.js" >
<script src="lib/jquery-1.12.4.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/datatable/js/jquery.dataTables.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="col-lg-12 h100">
			<div class="col-lg-2"></div>
			<div class="col-lg-7"></div>
			<div class="col-lg-3">
				<label class="control-lbl mrgn padd lbl-color"><a href="index.php?op=user-logout">Logout</a></label>
			</div>
		</div>
		<div class="col-lg-2"></div>
		<div class="col-lg-8 col-md-8 col-sm-8">
			<nav class="navbar ">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><a href="index.php?op=blog-createNewBlog">New Blog</a></li>
					<li role="presentation" class="active"><a href="index.php?op=user-createNewUser">New User</a></li>
					<li role="presentation" class="active"><a href="index.php?op=category-createNewCategory">New Category</a></li>
					<li role="presentation" class="active"><a href="index.php?op=comment-createNewComment">New Comment</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-lg-2"></div>
	</div>
	<div class="container-fluid">