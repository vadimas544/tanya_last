<?php require_once('inc/header.php'); ?>
				<?php
					$action = $_GET['action'];
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
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div id="head1">Изображение</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div id="head2">Наименование товара</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div id="head3">Кол-во</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div id="head4">Цена</div>
										</div>	
									</div>
							';	
							echo '
								<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div class="img-cart">
												<p align="center"><img src="" width="" height="" /></p>
											</div>
										</div>
			
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
											<div class="title-cart">
												<p><a href="">Трусы мужские</a></p>
												<p class="mini-cart-features">
													Мужские<br />
													Качественные<br />
													Натуральный хлопок<br />
												</p>
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
													<div class="delete-cart"><a href=""><img src="../img/del.png" /></a></div>
												</div>
										<div id="bottom-cart-line"></div>
								</div>
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
				?>
			</div>
		</div>
	</div>
</div>

<?php require_once('inc/footer.php'); ?>