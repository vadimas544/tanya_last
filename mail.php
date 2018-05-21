<?php
	error_reporting(0);
	$msg = '';
  	$msgClass = '';
	
	$recipient = "vadim123544@gmail.com";
	$sitename = "tanyasite.com";

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$subject = trim($_POST['subject']);
	$text = trim($_POST['text']);



	if(empty($name) || empty($email) || empty($subject)){

		/*echo "<span class='form-error'>Please fill all the fields</span>";*/
		echo "<script>alert('Пожалуйста заполните все поля!!!')</script>";
	}else{
		$toEmail = 'vadim123544@gmail.com';
        $subjec = 'Contact Request From '.$name;
        $body = '<h2>Contact Request</h2>
          <h4>Name</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Subject</h4><p>'.$subject.'</p>
          <h4>Text</h4><p>'.$text.'</p>
        ';

        // Email Headers
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional Headers
        $headers .= "From: " .$name. "<".$email.">". "\r\n";

        if(mail($toEmail, $subjec, $body, $headers)){
          // Email Sent
          echo "<script>alert('Your message sent!!!')</script>";
        } else {
          // Failed
          echo "<script>alert('Your message not sent!!!')</script>";
        }
      }
	
    // Get Form Data

    // Check Required Fields
    /*
	 		$name = htmlspecialchars($_POST['name']);
		    $email = htmlspecialchars($_POST['email']);
		    $subject = htmlspecialchars($_POST['subject']);
		    $text = htmlspecialchars($_POST['text']);



    if(!empty($email) && !empty($name) && !empty($subject)){
    	   
      // Passed
      // Check Email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // Failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        // Passed
        $toEmail = 'support@traversymedia.com';
        $subjec = 'Contact Request From '.$name;
        $body = '<h2>Contact Request</h2>
          <h4>Name</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Subject</h4><p>'.$subject.'</p>
          <h4>Text</h4><p>'.$text.'</p>
        ';

        // Email Headers
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional Headers
        $headers .= "From: " .$name. "<".$email.">". "\r\n";

        if(mail($toEmail, $subjec, $body, $headers)){
          // Email Sent
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        } else {
          // Failed
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
        }
      }
    } else {
      // Failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  


/*
	$message = "Имя: $name\nE-mail: $email\nSubject: $subject\nText: $text";

	$pagetitle = "Новая заявка с сайта \"$sitename\"";

	mail($recipient, $pagetitle, $message, "Content-Type: text/plain; charset:\"utf-8\"\n From: $recipient");
*/


/*
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST['subject']) && isset($_POST['text'])) { 

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$subject = trim($_POST['subject']);
	$text = trim($_POST['text']);

	echo $name . $email . $subject .$text;
}
*/
?>
