<?php

include 'settings.php';

if(isset$_GET("user_id") && !empty($_GET("user_id"))
	$user_id = $_GET("user_id");
	if(isset($_GET("contact_id"))){
		if(!empty($_GET("contact_id"))){
			$contact_id = $_GET("contact_id");
			//TODO sql querry to get info about contact id
		}else{
			//TODO send err to app "contact not found"
		}
	}else{
		//TODO get all contacts for user id
	}
}else{
	//TODO send err to app "you not login"
}

?>