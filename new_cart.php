<?php 
require_once('inc/header.php');
require_once('inc/db.php');
  
							$action = $_GET['action'];
							/*
							$id = $_GET['id'];
							switch ($action) {
									case 'clear':
										$sql = "DELETE FROM cart WHERE cart_ip='{$_SERVER['REMOTE_ADDR']}'";
										$clear = mysqli_query($conn, $sql);
										break;
									case 'delete':
										$sql = "DELETE FROM cart WHERE cart_id = '$id' AND cart_ip='{$_SERVER['REMOTE_ADDR']}'";
										$delete =mysqli_query($conn, $sql);
										break;
							}
							*/
							
							$sql = "SELECT * FROM cart, products WHERE cart.cart_ip ='{$_SERVER['REMOTE_ADDR']}' AND products.id = cart.cart_id_product";
							
							$result = mysqli_query($conn, $sql);

							
							
							$img_path = $row['image'];
							$max_width = 100;
							$max_height = 100;
							
							list($width, $height) = getimagesize($img_path);

							$ratioh = $max_height/$height;
							$ratiow = $max_width/$width;

							$ratio = min($ratioh, $ratiow);
							$width = intval($ratio*$width);
							$height = intval($ratio*$height);
							$row_cnt = mysqli_num_rows($result);
							
							
							
							if($row_cnt > 0){
								switch ($action) {
									
									case 'oneclick':
							echo '
							<div id="cart-content">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 cart-top">
											<ul>
												<li><a class="active_link">1.Корзина заказов&nbsp</a></li>
												<li> &rarr;</li>
												<li><a>&nbsp2.Контактная информация</a></li>
												<li> &rarr;</li>
												<li><a>&nbsp3.Завершение</a></li>
											</ul>
										</div>
									</div>
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 text-left step">
										<p>Шаг 1 из 3</p>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 text-center reset">
										<a href="cart.php?action=clear">Очистить</a>
									</div>
								</div>
								</div>
							</div>
							';
							

							
							
							
							echo '
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 text-center">
											<div id="head1">Изображение</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div id="head2">Наименование товара</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 text-center">
											<div id="head3">Кол-во</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div id="head4">Цена</div>
										</div>	
									</div>
							';

							

							while($row = mysqli_fetch_assoc($result)) {	
							$int = $row['cart_price'] * $row['cart_count'];
							$all_price = 0;	
							$all_price = $all_price + $int;
							echo '
								<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div class="img-cart">
												<p align="center"><img src="'.$row['image'].'" width="'.$width.'" height="'.$height.'" /></p>
											</div>
										</div>
			
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div class="title-cart">
												<p><a href="">'.$row['title'].'</a></p>
												<p class="mini-cart-features"></p>
											</div>
										</div>

										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div class="count-cart">
												<ul class="input-count-style">
													<li>
														<p align="center" class="count-minus">-</p>
													</li>
													<li>
														<p align="center"><input class="count-imput" maxlength="3" type="text" /></p>
													</li>
													<li>
														<p align="center" class="count-plus">+</p>
													</li>
											</div>
											</div>
												
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
													<div class="price-product"><h5><span class="span-count">1</span>x<span>15 000</span></h5><p>15 000</p></div>
												</div>
												<div class="col-lg-2">
													<div class="delete-cart"><a href="cart.php?id='.$row['cart_id'].'&action=delete"><img src="../img/del.png" /></a></div>
												</div>
										<div id="bottom-cart-line"></div>
								</div>
								';
						}	
							echo '
								<h2 class="itog-price" align="right">Итого: <strong>'.$int.'</strong> грн</h2>
								<p align="right" class="button-next"><a href="new_cart.php?action=confirm">Далее</a></p>
							';
								break;
					
						case 'confirm':
							echo '
								<div id="cart-content">
										<div class="container-fluid">
											<div class="row">
												<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 text-left">
													<ul>
														<li><a class="active_link">1. Корзина заказов&nbsp</a></li>
														<li> &rarr;</li>
														<li><a class="active_link">&nbsp2. Контактная информация</a></li>
														<li> &rarr;</li>
														<li><a>&nbsp3.Завершение</a></li>
													</ul>
												</div>
											</div>
										<div class="row">
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 text-left step">
												<p>Шаг 1 из 3</p>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 text-center reset">
												<a href="cart.php?action=clear">Очистить</a>
											</div>
										</div>
										</div>
									</div>
							';
							
							break;
						case 'completion':
							echo '
							<div id="cart-content">
										<div class="container-fluid">
											<div class="row">
												<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 text-left">
													<ul>
														<li><a class="active_link">1. Корзина заказов&nbsp</a></li>
														<li> &rarr;</li>
														<li><a>&nbsp2. Контактная информация</a></li>
														<li> &rarr;</li>
														<li><a class="active_link">&nbsp3.Завершение</a></li>
													</ul>
												</div>
											</div>
										<div class="row">
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 text-left step">
												<p>Шаг 1 из 3</p>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 text-center reset">
												<a href="cart.php?action=clear">Очистить</a>
											</div>
										</div>
										</div>
									</div>
							';
							
							break;
						}
					}else{
						echo '<h3 id="clear-cart" align="center">Корзина пуста</h3>';
					}
					
				?>
			</div>
		</div>
	</div>
</div>

<?php require_once('inc/footer.php'); ?>