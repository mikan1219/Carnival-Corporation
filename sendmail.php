<?php
	// VALUES FROM THE FORM
	$name		= $_POST['ctname'];
	$email		= $_POST['ctemail'];
	$subject		= $_POST['ctsubject'];
	$message	= $_POST['ctmsg'];

	// ERROR & SECURITY CHECKS
	if ( ( !$email ) ||
		 ( strlen($_POST['email']) > 200 ) ||
	     ( !preg_match("#^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$#", $email) )
       ) 
	{ 
		print "Error: Invalid E-Mail Address"; 
		exit; 
	} 
	if ( ( !$name ) ||
		 ( strlen($name) > 100 ) ||
		 ( preg_match("/[:=@\<\>]/", $name) ) 
	   )
	{ 
		print "Error: Invalid Name"; 
		exit; 
	} 
	if ( preg_match("#cc:#i", $message, $matches) )
	{ 
		print "Error: Found Invalid Header Field"; 
		exit; 
	} 
	if ( !$message )
	{
		print "Error: No Message"; 
		exit; 
	} 
	if (eregi("\r",$email) || eregi("\n",$email)){ 
		print "Error: Invalid E-Mail Address"; 
		exit; 
	} 
	if (FALSE) { 
		print "Error: You cannot send to an email address on the same domain."; 
		exit; 
	} 


	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=utf-8 \n";
	$headers	.= "From: $name <$email>";
	$recipient	= "mail@princesscruise.com";
	$subject	= "[Enquiry] $name From Princess Cruise";
	$message	= wordwrap($message, 1024);

	// SEND THE EMAIL TO YOU
	mail($recipient, $subject, $message, $headers, $phone);

	// REDIRECT TO THE THANKS PAGE
	header("location: mailthanks.php");
?>
