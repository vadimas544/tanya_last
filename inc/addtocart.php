<?php
require_once('db.php');

		$id = $_POST['id'];
		if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		

		$sql ="SELECT * FROM cart WHERE cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND cart_id_product = '$id'";

		$result = mysqli_query($conn, $sql);

		$row_cnt = mysqli_num_rows($result);
		if($row_cnt > 0){
			$row = mysqli_fetch_assoc($result);
			$new_count = $row['cart_count'] + 1;
			$sql = "UPDATE cart SET cart_count = '$new_count' WHERE cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND cart_id_product = '$id'";
		$result = mysqli_query($conn, $sql);	
		}else
		{
			$sql = "SELECT * FROM products WHERE id = '$id'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

			$sql = "INSERT INTO cart(cart_id_product, cart_price, cart_datetime, cart_ip) VALUES (
					'".$row['id']."',
					'".$row['price']."',
					NOW(),
					'".$_SERVER['REMOTE_ADDR']."'
		)";

			$result = mysqli_query($conn, $sql);
		} 

	}
?>