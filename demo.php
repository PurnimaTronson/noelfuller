<?php

/*Variables*/



	$emailSubject = 'PHP Script';
	$webMaster = 'Jnglegym3@aol.com';
	
	/* Gathering Data Variables*/


$nameField = $_POST['name'];

$emailField = $_POST['email'];

$messageField = $_POST['message'];


$body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Message: $message <br>
EOD;



$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);


/* Results rendered as HTML*/



	$theResults = <<<EOD





?>