
<?php
	require_once("header.php");
	
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
	    

	
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
			<h3 class="text-center">Виды трусов</h1>
				<ul id="block-tovar-grid">
					<?php
						while($row = mysqli_fetch_assoc($result)) {
		        echo '
		        <li class="text-center"><a href="../route.php?id=item_1"><img src ='.$row["image"].' width=60% height=60%></a>'.'<p>'.$row["title"].'</p>
				<p>Цена</p>
				<button type="button" class="btn btn-success">Купить</button>
		        </li>';
		    	}
					?>
				</ul>
			</div>
		</div>
	</div>
	
<?php	
	require_once("footer.php");
?>