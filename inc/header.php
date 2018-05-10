<?php
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

    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> 
  </head>

  <body>
	<div class="container-fluid">
            <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <div class="logo text-center">
                <a href=""><img src="../img/1.png" alt="Photo" /></a> 
                </div> 
            </div>
        </div><!-- end logo-->
        <div class="menu">
        <div class="row">
        <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2 col-xs-10 col-xs-offset-1">
            <div class="mainmenu text-center">
                <nav>
                    <a href="#" class="menu-trigger">menu</a>
                    <ul>
                        <li class="active1"><a class="active1" href="/index.php"> Home </a></li>
                        <li><a href="/route.php?id=shop"> Shop </a></li>
                        <li><a href="/route.php?id=book"> Book online </a></li>
                        <li><a href="/route.php?id=blog"> Blog </a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-1">
            <div class="cart">
                <a href="../new_cart.php?action=oneclick"><i class="fas fa-cart-arrow-down"></i></a>
            </div>
        </div>
        </div>
        </div>