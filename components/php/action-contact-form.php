<?php

if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$from = 'Demo Contact Form';
	$to = $contactform_emailto;
	$subject = "Message from ".$page_title." Contact Form";

	// print "<pre>";
	// print "action-contact-form.php\n";
	// print "$name\n";
	// print "$email\n";
	// print "$phone\n";
	// print "$message\n";
	// print "$from\n";
	// print "$to\n";
	// print "$subject\n";
	// print "</pre>";
	// print "<pre>".print_r($_SERVER,1)."</pre>";

	$body ="From: $name\nE-Mail: $email\nPhone: $phone\nMessage:\n$message";
	// Check if name has been entered
	if (!$_POST['name']) {
		$errName = 'Please enter your name';
	}

	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
	}

	// Check if phone has been entered and is valid
	// if (!$_POST['phone'] || !validatePhone($_POST['phone'])) {
	// 	$errPhone = 'The phone number you entered was not valid';
	// }

	//Check if message has been entered
	if (!$_POST['message']) {
		$errMessage = 'Please enter your message';
	}

	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank You! We will be in touch</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
		}
	}
}

function validatePhone($string) {
    $numbersOnly = preg_replace("[^0-9]", "", $string);
    $numberOfDigits = strlen($numbersOnly);
    if ($numberOfDigits == 7 or $numberOfDigits == 10) {
        return TRUE;
    } else {
        return FALSE;
    }
}

?>
