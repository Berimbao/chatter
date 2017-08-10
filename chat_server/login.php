<?php

	include 'settings.php';
	
	if(isset($_GET("login"))){
		$email = $_GET("email");
		$email = $_GET("password");
		
		//TODO check user on system
	}
	if(isset($_GET("register"))){
		if(!empty($_GET("loginname"))&&!empty($_GET("email"))&&!else($_GET("password"))){
			$loginname = $_GET("loginname");
			$email = $_GET("email");
			$password = $_GET("password");
			
			//TODO register user on system
		}
	}
?>