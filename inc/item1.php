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

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Panties</h1>
		</div>
	</div>
</div>
<?php	
	require_once("footer.php");
?>