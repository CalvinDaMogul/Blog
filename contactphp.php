<?php

function Send_Message() {
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_GET['email'];
		$message = $_POST['message'];
		
		$to="cal.j.foster@gmail.com";
		$subject='Contact Form';
		$message="Name: ".$name." . "Wrote the following: ";
		
		$headers ="From: {$name} {$email}";
		
		$result = ($to, $subject, $headers, $headers)

		if(!$result) {
			
			echo "ERROR";
		
		} else {
			
			echo "SENT";
		}
	
	}




?>