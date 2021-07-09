<?php
	session_start();
	require_once 'config.php';
	require_once 'functions.php';

	if ( isset($_GET['delete_id']) && isset($_SESSION['cart_list']) ) {
		foreach ($_SESSION['cart_list'] as $key => $value) {
			if ( $value['id'] == $_GET['delete_id'] ) {
				unset($_SESSION['cart_list'][$key]);
			}
		}
	}

	if ( isset($_GET['product_id']) && !empty($_GET['product_id']) ) {
		$current_added_product = get_product_by_id($_GET['product_id']);

		if ( !empty($current_added_product) ) {
			if ( !isset($_SESSION['cart_list'])) {
				$_SESSION['cart_list'][] = $current_added_product;
			}

			$product_check = false;
			if ( isset($_SESSION['cart_list']) ) {
				foreach ($_SESSION['cart_list'] as $value) {
					if ( $value['id'] == $current_added_product['id'] ) {
						$product_check = true;
					}
				}
			}

			if ( !$product_check ) {
				$_SESSION['cart_list'][] = $current_added_product;
			}

		} else {
			header("Location: 404.php");
		}
		
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/basket.css">
	<title>Mooody | Корзина</title>
</head>
<body>
	<header>
		<a href="/"><img width="90" height="90" src="img/logo.png" alt="logo: Mooody" class="logo-link"></a>
		<ul class="menu">
			<li class="menu-item"><a href="catalog.php" class="menu-item-link">Каталог</a></li>
			<li class="menu-item"><a href="#" class="menu-item-link">Корзина</a></li>
		</ul>
	</header>
	<h1>Корзина</h1>
	<div class="container">
		<div class="basket">
			
			<?php if ( isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) !=0 ) : ?>
				<?php foreach( $_SESSION['cart_list'] as $product_item ) : ?>

				<div class="basket-product">
					<img width="50" height="50" src="data: image/*;base64, <?php echo base64_encode($product_item['image'])?>" alt="photo: Product" class="basket-product-image">
					<spam class="basket-product-title"><?php echo $product_item['name']?></spam>
					<spam class="basket-product-price"><?php echo $product_item['price']; ?>&#8381;</spam>
					<a href="basket.php?delete_id=<?php echo $product_item['id'];?>" class="basket-product-remove">
						<img width="50" height="50" src="img/cross.png" alt="icon: Remove">
					</a>
				</div>

				<?php endforeach; ?>
			<?php else : ?>

				<h2>В вашей корзине нет товаров!</h2>

			<?php endif; ?>

			<!-- <hr>
			<div class="basket-total">
				<p class="basket-total-text">Итог</p>
				<p class="basket-total-price">&#8381;</p>
			</div> -->
		</div>
		<button class="button-order">Заказать</button>
	</div>
	<footer>
		<ul class="footer-menu">
			<li class="footer-menu-item"><a href="/" class="footer-menu-item-link">Главная</a></li>
			<li class="footer-menu-item"><a href="catalog.php" class="footer-menu-item-link">Каталог</a></li>
			<li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Корзина</a></li>
		</ul>
	</footer>
</body>
</html>