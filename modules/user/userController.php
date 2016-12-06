<?php

	class userController
	{
		function login(){// That is called template function that is had login form parameters
			b::template("login","user/userLogin");
		}
		function check(){ //  that is controlled users who seved in the database
			if( isset($_POST['email']) && isset($_POST['pass']) ){
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$model = new userModel();
				$result = $model->checkUser($email,$pass);
			}else $result = 0;

			if( $result == 0 ){
				// kullanici bulunamadi
				b::template("login", "user/userLogin");
				echo "Kullanıcı adı veya şifre hatalı";
			}else{
				session::set("user", $result);
				echo "Hoşgeldin yeğen<br>";
				$this->getUserList();
			}
		}
		function logout(){   //that is exited from session
			session_destroy();
			echo "Exitt!!";
			header('Refresh:3; url=http://localhost/blog/index.php?op=user-login');
		}
		/*function getUser(){
			
		}*/
		function getUserList(){   
			$model = new userModel();
			$result = $model->listUser();
			b::template("default", "user/user", $result);
		}
		function createNewUser(){
			if( isset($_SESSION['user'])){
				b::template("default", "user/userAdd");
			}else{
				b::template("login", "user/userLogin");
			}
		}
		function save(){
			
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$model = new userModel();
			$model->saveUser($name,$surname,$email,$pass);
			
		}
		
		function edit(){
			$userID = $_GET['user_id'];
			$model = new userModel();
			$result = $model->editUser($userID);
			b::template("default", "user/userEdit", $result);
		}
		function update(){
			$userID = $_GET['user_id'];
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$model = new userModel();
			$result = $model->updateUser($name,$surname,$email,$pass,$userID);
			b::template("default", "user/userEdit", $result);
		}
		function delete(){
			$userID = $_GET['user_id'];
			$model = new userModel();
			$result = $model->deleteUser($userID);
		}
		
		
		
	}