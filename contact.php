<?php
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['message']) && !empty($_POST['message']))){

	$to = "contact@tomitomazic.eu";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// $name = $_POST['name'];
	// $email = $_POST['email'];
	// $message = $_POST['message'];
	
	$headers = "From : " . $email;
	
	if( mail($to, $message, $headers)){
		echo "E-Mail Sent successfully, we will get back to you soon.";
		header("refresh:3;index.html");
	}
}
?>