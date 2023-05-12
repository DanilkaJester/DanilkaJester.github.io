<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>

	<script src="libs/gsap/gsap.min.js" defer></script>
	<script src="libs/gsap/ScrollTrigger.min.js" defer></script>
	<script src="libs/gsap/ScrollSmoother.min.js" defer></script>

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/footer.css">
	<script src="js/app.js" defer></script>

</head>
<body>

	<div class="wrapper">
		<div class="content">
			<!-- мой html -->
			<div class="menu">
				<div class="title"><h1>NAVIGATION</h1></div>
				<div class="list_menu">
					<ul>
						<li><a href="glavnia.html">Главная</a></li>
						<li><a href="tovar.php">Товар</a></li>
						<li><a href="register.php">Регистрация</a></li>
						<li><a href="avtorizac.php">Авторизация</a></li>
					</ul>
				</div>
				<div class="footern_menu">
				<p>Гафик работы:</p>
					<p>Понедльник:</p>
					<p>10:00-20:00</p>
					<p>Вторник:</p>
					<p>10:00-20:00</p>
					<p>Среда:</p>
					<p>10:00-20:00</p>
					<p>Четверг:</p>
					<p>10:00-20:00</p>
					<p>Пятница:</p>
					<p>10:00-20:00</p>
					<p>Выходные</p>
				</div>
			</div>
			<!-- мой html -->
			<header class="hero-section">
				<img data-speed=".6" class="hero" src="img/hero.png" alt="Alt" >
				<div class="container">
					<div data-speed=".75" class="main-header">
						<h1 class="main-title">creative kosmetik</h1>
					</div>
				</div>
			</header>
		
			<div class="portfolio">
				<div class="container">
					<main class="gallery">
	
						<div data-speed=".9" class="gallery__left">
		
							<img class="gallery__item" src="img/work/1.jpg" alt="Alt">
							<img class="gallery__item" src="img/work/2.jpg" alt="Alt">
		
							<div class="text-block gallery__item">
								<h2 class="text-block__h">Наша компания предостовляет дуступный товар для всех</h2>
								<p class="text-block__p">Возможность преобрести товары по скидки всегда в наличии.</p>
							</div>
		
							<img class="gallery__item" src="img/work/6.jpg" alt="Alt">
		
						</div>

						<div data-speed="1.1" class="gallery__right">
		
							<div class="text-block gallery__item">
								<h2 class="text-block__h">Товары не только для нее, но и для него </h2>
								<p class="text-block__p">Разные виды мужских ароматов, будь настояшим мужчиной.</p>
							</div>
		
							<img class="gallery__item" src="img/work/4.jpg" alt="Alt">
							<img class="gallery__item" src="img/work/5.jpg" alt="Alt">
							<img class="gallery__item" src="img/work/3.jpg" alt="Alt">
		
						</div>

					</main>
				</div>
			</div>

		</div>
	</div>
</div>
</body>
</html>