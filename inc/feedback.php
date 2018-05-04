<?php
	require_once("header.php");
	session_start();
	
	$servername = "localhost";
	$username = "shopuser";
	$password = "shopuser";
	$dbname = "shop";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	mysqli_set_charset($conn, "utf8");
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	if($_POST['submit'])
	{
		$error = [];

		if(!$_POST['name']) $error[] = "Укажите имя";

		if(!preg_match("/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", $_POST['email'])) $error[] = "Укажите корректный E-mail";

		if(!$_POST['subject']) $error[] = "Укажите тему письма";

		if(!$_POST['text']) $error[] = "Укажите текст!";

		if(count($error))
		{
			$_SESSION['message'] = "<p id='form-error'>" . implode('<br />', $error) . "</p>";
		}else
		{
			mail($_POST['email'], $_POST['subject'], $_POST['text']);

			$_SESSION['message'] = "<p id='form-success'>Ваше сообщение успешно отправлено</p>";

		}

	}

?>
