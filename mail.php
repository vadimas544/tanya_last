<?php

	$recipient = "vadim123544@gmail.com";
	$sitename = "tanyasite.com";

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$subject = trim($_POST['subject']);
	$text = trim($_POST['text']);

	/*
	$errorEmpty = false;

	if(empty($name) || empty($email) || empty($subject)){
		echo "<span class='form-error'>Fill all fields</span>";
		$errorEmpty = true;
	} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "<span class='form-error'>Write a valid address!</span>";
		$errorEmpty = true; 
	}else{
		echo "<span class='form-success'>Write a valid address!</span>"
	}
}else{
	echo "There was an error";
}
*/
	$message = "Имя: $name\nE-mail: $email\nSubject: $subject\nText: $text";

	$pagetitle = "Новая заявка с сайта \"$sitename\"";

	mail($recipient, $pagetitle, $message, "Content-Type: text/plain; charset:\"utf-8\"\n From: $recipient");
?>
