<?php
	 require_once("inc/db.php");
	 session_start();

	 if($_POST['submit']){

	 	$error = [];

	 	if(!$_POST['name']) $error[] = "Укажите имя";

		if(!preg_match("/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", $_POST['email'])) $error[] = "Укажите корректный E-mail";

		if(!$_POST['subject']) $error[] = "Укажите тему письма";

		if(count($error))
		{
			$_SESSION['message'] = "<p id='form-error'>" . implode('<br />', $error) . "</p>";
		}else
		{
			send_mail($_POST['email'], 'vadim123544@gmail.com',$_POST['subject'], $_POST['text']);

			$_SESSION['message'] = "<p id='form-success'>Ваше сообщение успешно отправлено</p>";

		}

	 }
?>