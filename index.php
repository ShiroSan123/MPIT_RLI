<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT_RLI");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300&family=Limelight&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  	<style>
      body {
        font-family: 'Averia Serif Libre', cursive;
        font-size: 48px;
      }
    </style>
</head>
<body>
	<!-- Header -->
	<div class="col-12" style="background: #C1C8E4">	
		<div class="row col-11 mx-auto pl-0 pr-0">
			<a href="index.php" class="col-1 rounded-pill" style="height: 2.9vw; margin-top: 0.2vw; margin-bottom: 0.3vw; background-image: url('assets/img/Group 2.svg'); background-size: 100% 100%"></a>
			<!-- Links -->
			<div class="col-6 mx-auto" style="margin-top: 0.4vw">
				<div class="row">
					<div class="rounded-pill mx-auto text-center" style="margin-top: 0.3vw; width: 9vw;">
						<h3><a href="index.php" style="font-size:1vw; color: white">Главная</a></h3>
					</div>
					<div class="rounded-pill mx-auto text-center" style="margin-top: 0.7vw; width: 9vw;">
						<h3 style="font-size:1vw; color: white">Скачать плагин</h3>
					</div>
					<div class="rounded-pill mx-auto text-center" style="margin-top: 0.7vw; width: 9vw;">
						<h3 style="font-size:1vw; color: white">О сервисе</h3>
					</div>
					<div class="rounded-pill mx-auto text-center" style="margin-top: 0.7vw; width: 9vw;">
						<h3 style="font-size:1vw; color: white">Контакты</h3>
					</div>		
				</div>
			</div>
			<div class="col-2">
				<div class="row">
				<?php if ($_SESSION['id'] == null) { ?>
				<h2 class="ml-4" style="margin-top: 0.4vw"><a href="RegAndSign.php? ide=2" class="text-light"  style="font-size:1vw;">Войти</a></h2>
				<h2 class="ml-3" style="margin-top: 0.4vw"><a href="RegAndSign.php? ide=1" class="text-light"  style="font-size:1vw;">Зарегестрироваться</a></h2>
				<?php } else {?>
				<h2 class="ml-4" style="margin-top: 0.4vw"><a href="SignIn.php" class="text-light"  style="font-size:1.35vw;">Профиль</a></h2>
				<h2 class="ml-3" style="margin-top: 0.4vw"><a href="LogOut.php" class="text-light"  style="font-size:1.35vw;">Выход</a></h2>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Carousel -->
	<div class="col-12" style="height: 28vw; background: #C1C8E4; border: 1px solid #C1C8E4">
		<div class="col-11 mx-auto" style="height: 20vw; margin-left: 5vw; margin-top: 6vw; padding-left: 2vw">
			<h1 class="text-light" style="font-size: 2vw;">Сервис для обнаружения вредоносных сайтов</h1>
			<h1 class="text-light" style="font-size: 6vw;">Нашли фишинг сайт?</h1>
			<!-- Input -->
			<div class="input-group col-9 pl-0 pr-0">
			  <form action="site.php" class="input-group col-9 pl-0 pr-0">
			  <input type="" name="" class="form-control rounded-pill" placeholder="Введите ссылку на фишинг сайт" style="height: 2.5vw; font-size: 1vw">
			  <button class="rounded-pill border border-secondary input-group-text">Найти</button>
			  </form>
			</div>
		</div>
	</div>
	<!-- Content -->
	<div class="col-12 pb-4">
		<div class="col-11 mx-auto rounded" style="margin-top: 1vw; padding-bottom: 1vw;">
			<div class="row">
				<div class="col-5 ml-4 mt-4">
					<h1 style="font-size: 2vw">Установите плагин StopVirus и будьте в безопасности</h1>
					<h2 style="font-size: 1.1vw">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</h2>
					<h3 style="font-size: 1.2vw; margin-top: 1vw">✓ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </h3>
					<h3 style="font-size: 1.2vw; margin-top: 1vw">✓ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </h3>
					<h3 style="font-size: 1.2vw; margin-top: 1vw">✓ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </h3>
					<button class="btn col-12 rounded-pill text-light" style="background: #1517C9">Установить бесплатно</button>
				</div>
				<div class="col-6 ml-auto mr-4 mt-4 text-center rounded" style="padding-top: 3vw">
					<img src="assets/img/Zamok.png">
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<div class="col-12" style="height: 20vw; background: #F9FAF9">
		<div class="row col-11 mx-auto pl-0 pr-0" style="padding-top: 2vw">
			<div class="col-3 mx-auto" style="height: 16vw">
				<h1 style="font-size: 2vw">Mentor</h1>
				<p style="font-size: 1vw">Yakutsk</p>
				<p style="font-size: 1vw">Russian Federation</p>
				<p style="font-size: 1.2vw">Phone: <span style="font-size: 1vw">+7 (914) 276-75-20</span></p>
				<p style="font-size: 1.2vw">Email: <span style="font-size: 1vw">minigames523@gmail.com</span></p>
			</div>
			<div class="col-2 mx-auto" style="height: 16vw">
				<h1 style="font-size: 2vw">Useful links</h1>
				<p style="font-size: 1vw">Home</p>
				<p style="font-size: 1vw">About us</p>
				<p style="font-size: 1vw">Services</p>
				<p style="font-size: 1vw">Therms of service</p>
				<p style="font-size: 1vw">Privacy policy</p>
			</div>
			<div class="col-2 mx-auto" style="height: 16vw">
				<h1 style="font-size: 2vw">Our services</h1>
				<p style="font-size: 1vw">Web design</p>
				<p style="font-size: 1vw">Web development</p>
				<p style="font-size: 1vw">Product Management</p>
				<p style="font-size: 1vw">Marketing</p>
				<p style="font-size: 1vw">Graphic design</p>
			</div>
			<div class="col-4 mx-auto" style="height: 16vw">
				<h1 style="font-size: 2vw">Join our Newsletter</h1>
				<p style="font-size: 1vw">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
				<div class="row">
					<input type="" name="" class="form-control rounded-pill col-10" placeholder="" style="height: 2.5vw; font-size: 1vw">
					<button class="btn bg-primary rounded-pill text-center" style="width: 4.9vw; font-size: 0.8vw; ">Subscribe</button>
				</div>	
			</div>
		</div>
	</div>

</body>
</html>