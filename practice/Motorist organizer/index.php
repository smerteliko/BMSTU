<?php
	if (!isset($_SESSION)){
		session_start();
	}
?>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Autohelp | Главная</title>
		<link rel="stylesheet" href="bin/css/style.css">
		<style>
			.page-header{
				min-height: 490px;
				padding-top: 35px;
				background-image: url("bin/img/slide4.png");
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;
			}
			.page-footer{
				min-height: 490px;
				padding-top: 35px;
				background-image: url("bin/img/footer.jpg");
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;
			}

			.map-container{
				padding-top: 0px;
				padding-bottom: 0px;
				padding-left: 25%;
				padding-right: 25%;
				margin-left: auto;
				margin-right: auto;
				height: 450px;
			}
			
			#map {
				margin-top: 45px;
				height: 100%;
				width: 100%;
			}
		</style>
	
		<script async defer src="lib/Geo.js"></script>
	
	</head>
	<body>
		<div class="page-header">
			<div class="container">
				<div class="header-top clearfix">
					<a class="btn btn-quick-order" href="bin/reg.php">Регистрация</a><br>
					  <?php
						if(isset($_SESSION['name']))
						{
							echo "<a class='btn btn-quick-order' href='performexit.php'>Выход(" . $_SESSION['name'] . ")</a>";
						}else{
							echo "<a class='btn btn-quick-order' href='input.php'>Вход</a>";
						}
					  ?>
				</div>
			</div>
		</div>
		
		<div class="map-container">
			<!--
			<iframe src="https://www.google.com/maps/embed" width="100%" height="100%" frameborder="0" style="border:0; margin-right: auto; margin-top: 45px"></iframe>
			-->
		
			<div id="map"></div>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqsxT7a6Xp-P9xy_FHtwuEoTM4ZyL8amc&callback=initMap"></script>
		</div>
		
		<div class="features">
			<div class="container">
				<ul class="clearfix">
					<li class="feature-item feature-choice">
						<h2 class="feature-title">Выбор</h2>
						<p>Уникальные возможности</p>
					</li>
					<li class="feature-item feature-quality">
						<h2 class="feature-title">Качество</h2>
						<p>Только хороший сервис</p>
					</li>
					<li class="feature-item feature-safety">
						<h2 class="feature-title">Безопасность</h2>
						<p>Контроль ккомпаний</p>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="popular-and-price">
			<div class="container">
				<div class="popular-items clearfix">
					<div class="catalog-item">
						<a  href="http://www.avtospa.ru/"><img src="bin/img/auto1.jpg"  alt="Автомойка «Авто-спа»" width="306" height="206"></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="page-footer">
			<div class="container">
				<div class="footer-top clearfix"></div>

				<div class="footer-middle clearfix">
					<div class="footer-menu">
						<h3>Важные адреса</h3>
						<ul>
							<li><a href="#">Мойка</a></li>
						</ul>
					</div>
				</div>

				<div class="footer-bottom clearfix">
					<div class="footer-social">
						<b>Давайте дружить!</b>
						<a class="social-btn" href="https://vk.com/htmlacademy">Вконтакте</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
