<?php
  require_once('inc/header.php');
?>


<div id="block-content">
<?php
	$action = $_GET['action'];
	switch ($action) {
		case 'oneclick':
		
			echo '
			<div id="block-step">
				<div id="name-step">
					<ul>
						<li><a class="active_link">1. Корзина заказов</a></li>
						<li>&rarr;</li>
						<li><a>2. Контактная информация</a></li>
						<li>&rarr;</li>
						<li><a>1. Завершение</a></li>

					</ul>
				</div>
				<p>Шаг 1 из 3</p>
				<a href="cart.php?action=clear">Очистить</a>
			</div>
			';
			echo '
				<div id="header-list-cart">
					<div id="head1">Изображение</div>
					<div id="head2">Наименование товара</div>
					<div id="head3">Кол-во</div>
					<div id="head4">Цена</div>
				</div>
			';	
			echo '
				<div class="block-list-cart">

				<div class="img-cart">
				<p align="center"><img src="" width="" height="" /></p>
				</div>

				<div class="title-cart">
				<p><a href="">Трусы мужские</a></p>
				<p class="mini-cart-features">
				Мужские<br />
				Качественные<br />
				Натуральный хлопок<br />
				</p>
				</div>

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

				<div class="price-product"><h5><span class="span-count">1</span>x<span>15 000</span></h5><p>15 000</p></div>
				<div class="delete-cart"><a href=""><img src="../img/delete.png" height="50%" width="50%"/></a></div>

				<div id="bottom-cart-line"></div>

				</div>  
			';

			break;
		
		case 'confirm':
			echo '
			<div id="block-step">
				<div id="name-step">
					<ul>
						<li><a>1. Корзина заказов</a></li>
						<li>&rarr;</li>
						<li><a class="active_link">2. Контактная информация</a></li>
						<li>&rarr;</li>
						<li><a>1. Завершение</a></li>

					</ul>
				</div>
				<p>Шаг 1 из 3</p>
				<a href="cart.php?action=clear">Очистить</a>
			</div>
			';
			
			break;

		case 'completion':
			echo '
			<div id="block-step">
				<div id="name-step">
					<ul>
						<li><a href="#">1. Корзина заказов</a></li>
						<li>&rarr;</li>
						<li><a href="#">2. Контактная информация</a></li>
						<li>&rarr;</li>
						<li><a href="#" class="active_link">3. Завершение</a></li>

					</ul>
				</div>
				<p>Шаг 1 из 3</p>
				<a href="cart.php?action=clear">Очистить</a>
			</div>
			';
			
			break;
	}
?>
</div>

<?php require_once('inc/footer.php'); ?>