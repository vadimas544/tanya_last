<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		require("db.php");

		$sql = "SELECT * FROM cart, products WHERE cart.cart_ip ='{$_SERVER['REMOTE_ADDR']}' AND products.id = cart.cart_id_product";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$row_cnt = mysqli_num_rows($result);
		$count = 0;
		$count = $count + $row['cart_count'];
		if($row_cnt > 0){
			echo '<span>'.' '.$row_cnt.'</span>'.'товара(-ов)';
		}else{
			echo '0';
		}
	}
?>