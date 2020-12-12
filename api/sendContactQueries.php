<?php
	require_once("../app/ContactController.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(
			!empty($_POST['fullName']) && 
			!empty($_POST['email']) && 
			!empty($_POST['mobileNumbers']) 
			&& !empty($_POST['message'])
		){
			$contactController = new ContactController();
			$result = $contactController->store($_POST);
			
			if($result){
				$name = "success";
				$message = "Your message has been sent! We will be in touch soon.";
			}else{
				$name = "error";
				$message = "An error has occured! Please try again later.";
			}					
		}else{
			$name = "error";
			$message = "Please fill in all required fields!";
		}
		
		setcookie($name, $message, time() + 2, '/');
		header("Location: http://localhost/xcreatives/contact.php");
	}else{
		die("403 Forbidden!");
	}