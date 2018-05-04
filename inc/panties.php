
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
			<div class="col-md-10 col-md-offset-1 text-center">
				
			<h3 text-center>Виды трусов</h1>
				<ul id="block-tovar-grid">
					<?php
						while($row = mysqli_fetch_assoc($result)) {
		        echo '
		        <li><a href="../route.php?id=item_1"><img src = ' . $row["image"] .' class="block-center" width=60% height=60%></a>'.'<p>'.$row["title"].'</p></li>';
		    	}
					?>
				</ul>
			</div>
		</div>
	</div>
	
<?php	
	require_once("footer.php");
?>