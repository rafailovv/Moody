<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Mooody | Главная</title>
</head>
<body>
	<header>
		<a href="/"><img width="90" height="90" src="img/logo.png" alt="logo: Mooody" class="logo-link"></a>
		<ul class="menu">
			<li class="menu-item"><a href="catalog.php" class="menu-item-link">Каталог</a></li>
			<li class="menu-item"><a href="basket.php" class="menu-item-link">Корзина</a></li>
		</ul>
	</header>
	<div class="preview">
		<h1>Mooody</h1>
		<div class="swiper-button-prev"></div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="img/image1.png" alt="photo: preview"></div>
				<div class="swiper-slide"><img src="img/image2.jpg" alt="photo: preview"></div>
				<div class="swiper-slide"><img src="img/image3.jpg" alt="photo: preview"></div>
			</div>
		</div>
		<div class="swiper-button-next"></div>
	</div>
	<div class="look">
		<p class="look-header">Самый модный лук</p>
		<div class="look-images">
			<img width="300" height="300" src="img/look1.png" alt="photo: look" class="look-images-item">
			<img width="300" height="300" src="img/look1.png" alt="photo: look" class="look-images-item">
			<img width="300" height="300" src="img/look1.png" alt="photo: look" class="look-images-item">
			<img width="300" height="300" src="img/look1.png" alt="photo: look" class="look-images-item">
			<img width="300" height="300" src="img/look1.png" alt="photo: look" class="look-images-item">
			<img width="300" height="300" src="img/look1.png" alt="photo: look" class="look-images-item">
			<img width="300" height="300" src="img/look1.png" alt="photo: look" class="look-images-item">
			<img width="300" height="300" src="img/look1.png" alt="photo: look" class="look-images-item">
		</div>
		<button class="look-button">За покупками</button>
	</div>
	<footer>
		<ul class="footer-menu">
			<li class="footer-menu-item"><a href="/" class="footer-menu-item-link">Главная</a></li>
			<li class="footer-menu-item"><a href="catalog.php" class="footer-menu-item-link">Каталог</a></li>
			<li class="footer-menu-item"><a href="basket.php" class="footer-menu-item-link">Корзина</a></li>
		</ul>
	</footer>

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>