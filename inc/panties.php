
<?php
	require_once("header.php");

	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn, $sql);
	    

	
?>
<!--
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">		
			<h3 class="text-center">Виды трусов</h1>
				<ul id="block-tovar-grid">
					<?php/*
						while($row = mysqli_fetch_assoc($result)) {
		        echo '
		        <li class="text-center"><a href="../route.php?id=item_1"><img src ='.$row["image"].' width=60% height=60%></a>'.'<p>'.$row["title"].'</p>
				<p>Цена</p>
				<a class="btn btn-success add-to-cart" tid="'.$row["id"].'">Купить</a>
		        </li>';
		    	}
					*/?>
				</ul>
			</div>
		</div>
	</div>
-->
		<div class="container">
		<div class="row">
            <div class="col-md-8 col-md-offset-2">  
                <h2 class="text-center">My goods</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table table-bordered">
                    <tbody>                                
                         <tr width="90%">
                         <?php
                            $count = 1;
                            while($row = mysqli_fetch_assoc($result)) { 
                                /*extract($row);
                                $data = $row['image'];*/
                                        echo '<td class="text-center">
                                                <img src="'. $row['image'].'" alt="" class="img-responsive text-center" />
                                                <p class="text-center">Цена</p>
                                                <a class="btn btn-success add-to-cart" tid="'.$row["id"].'">Купить</a>
                                              </td>';
                                if($count++ % 2 == 0){
                                    echo "</tr><tr>";
                                    }
                                }

                                    ?>
                                    </tr>
                                    
                                        
                                     

                                
                    </tbody>                
                  
                </table>
            </div>
        </div>
    </div>
<?php	
	require_once("footer.php");
?>