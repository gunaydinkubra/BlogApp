<?php
	class b{
		static function request(){   //  request that send on the link
			$operation = @$_GET['op']; // variable that post from form
			if($operation == ""){ // if don't write anything 
				b::getModule("user"); // it'll call controller and module file that under user module
				$userControl = new userController(); // it's create new object from userController
				$userControl->login();// that is call login function that under userController
			}else{
				$link = explode("-", $operation);// The link that is called is divided by us
				$module = $link[0]; // the part of link that before from "-" sign 
				$controllerName = $module."Controller";
				$action = $link[1];
				b::getModule($module); 
				$controller = new $controllerName();
				if ( $action != 'logout' && $action != 'login' && $action != 'check' ){
					session::check();
				}
				$controller->$action();
			}
			
		}
		static function getModule($modulName){ //the function is called controler ande model classes
			include 'modules/'.$modulName.'/'.$modulName.'Controller.php';
			include 'modules/'.$modulName.'/'.$modulName.'Model.php';
		}
		static function template($themeName, $path ,$data = null){ //The function is called views and data that in database
			include ('template/'.$themeName.'/header.php');
			include ('modules/'.$path.'View.php');
			include ('template/'.$themeName.'/footer.php');
			
		}
	}
