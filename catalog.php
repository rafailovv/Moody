<?php
	session_start();
	require_once 'config.php';

	$query = "SELECT * FROM `mooody`.`products`";
	$result = mysqli_query($db, $query);
	$data_from_db = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$data_from_db[] = $row;
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
	<link rel="stylesheet" href="css/catalog.css">
	<title>Mooody | Каталог</title>
</head>
<body>
	<header>
		<a href="/"><img width="90" height="90" src="img/logo.png" alt="logo: Mooody" class="logo-link"></a>
		<ul class="menu">
			<li class="menu-item"><a href="#" class="menu-item-link">Каталог</a></li>
			<li class="menu-item"><a href="basket.php" class="menu-item-link">Корзина</a></li>
		</ul>
	</header>
	<h1>Каталог</h1>
	<div class="container">
		
		<?php foreach($data_from_db as $product_item): ?>
			<div class="product">
				<img width="400" height="400" src="data: image/*;base64, <?php echo base64_encode($product_item['image'])?>" alt="photo: Product" class="product-image">
				<p class="product-title"><?php echo $product_item['name']?></p>
				<p class="product-price"><?php echo $product_item['price']?>&#8381;</p>
				<a href="basket.php?product_id=<?php echo $product_item['id']?>" class="product-button">В корзину</a>
			</div>
		<?php endforeach;?>

	</div>
	<footer>
		<ul class="footer-menu">
			<li class="footer-menu-item"><a href="/" class="footer-menu-item-link">Главная</a></li>
			<li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Каталог</a></li>
			<li class="footer-menu-item"><a href="basket.php" class="footer-menu-item-link">Корзина</a></li>
		</ul>
	</footer>
</body>
</html>