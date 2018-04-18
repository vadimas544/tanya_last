<?php 
	if($_GET['id'] == 'shop'){
		require_once("inc/shop.php");
	} elseif($_GET['id'] == 'book'){
		require_once("inc/book.php");
	} elseif ($_GET['id'] == 'blog') {
		require_once("inc/blog.php");
	}

	
?>