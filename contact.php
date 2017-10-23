<?php

// your email here
$to_email = 'truonglong205@gmail.com';

if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['message'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if(mail($to_email, 'Subject', $message, 'From: ' . $email)) {
		echo '<p>Your email was sent successfully. You can close this window now.</p>';
	} else {
		echo '<p>There was a problem sending your email.</p>';
	}
} else {
	echo 'All fields are required!';
}

?>