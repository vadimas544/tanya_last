<?php 
	if($_GET['id'] == 'shop'){
		require_once("inc/shop.php");
	} elseif($_GET['id'] == 'book'){
		require_once("inc/book.php");
	} elseif ($_GET['id'] == 'blog') {
		require_once("inc/blog.php");
	} elseif ($_GET['id'] == 'panties'){
		require_once("inc/panties.php");
	} elseif ($_GET['id'] == 'item_1'){
		require_once("inc/item1.php");
	}

	
?>