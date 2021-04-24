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
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Header -->
	<div class="col-12 border border-dark" style="background: #CCCCCC">
		<div class="row">
			<div class="col-1 bg-light rounded-pill ml-1" style="height: 2.5vw; margin-top: 0.2vw; margin-bottom: 0.3vw"></div>
			<!-- Themes -->
			<div class="col-6 mx-auto" style="background: #CCCCCC; margin-top: 0.4vw">
				<div class="row">
					<div class="col-2 bg-light ml-2 rounded-pill mx-auto text-center" >
						<h3 style="font-size:1.5vw;">Themes 1</h3>
					</div>
					<div class="col-2 bg-light ml-2 rounded-pill mx-auto text-center" >
						<h3 style="font-size:1.5vw;">Themes 1</h3>
					</div>
					<div class="col-2 bg-light ml-2 rounded-pill mx-auto text-center" >
						<h3 style="font-size:1.5vw;">Themes 1</h3>
					</div>
					<div class="col-2 bg-light ml-2 rounded-pill mx-auto text-center" >
						<h3 style="font-size:1.5vw;">Themes 1</h3>
					</div>
					<div class="col-2 bg-light ml-2 rounded-pill mx-auto text-center" >
						<h3 style="font-size:1.5vw;">Themes 1</h3>
					</div>				
				</div>
			</div>
			<div class="col-2">
				<div class="row">
				<?php if ($_SESSION['id'] == null) { ?>
				<h2 class="ml-4" style="margin-top: 0.1vw"><a href="SignIn.php" class="text-dark"  style="font-size:1.7vw;">Войти</a></h2>
				<h2 class="ml-3" style="margin-top: 0.1vw"><a href="Registration.php" class="text-dark"  style="font-size:1.7vw;">Регистрация</a></h2>
				<?php } else {?>
				<h2 class="ml-4" style="margin-top: 0.1vw"><a href="SignIn.php" class="text-dark"  style="font-size:1.7vw;">Профиль</a></h2>
				<h2 class="ml-3" style="margin-top: 0.1vw"><a href="LogOut.php" class="text-dark"  style="font-size:1.7vw;">Выход</a></h2>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Carousel -->
	<div class="col-12 border border-dark" style="height: 28vw; background: #CCCCCC">
		<div class="col-4" style="height: 20vw; margin-left: 5vw; margin-top: 6vw;">
			<h1>Название</h1>
			<h1>Краткое описание</h1>
			<button class="btn btn-success rounded-pill mt-5 text-dark">Регистрация</button>
		</div>
	</div>
	<!-- Content -->
	<div class="col-12 border border-dark pb-2" style="background: #CCCCCC">
		<div class="col-11 mx-auto bg-light mt-3 rounded" style="height: 21vw;">
			<div class="row">
				<div class="col-4 ml-4 mt-4" style="height: 1vw;">
					<h1>Название</h1>
					<h2>Описание</h2>
				</div>
				<div class="col-7 bg-secondary ml-auto mr-4 mt-4 text-center" style="height: 18.5vw;">
					<h1 class="" style="margin-top: 8vw;">Photo</h1>
				</div>
			</div>
		</div>
		<div class="col-11 mx-auto bg-light mt-3 rounded" style="height: 21vw;">
			<div class="row">
				<div class="col-4 ml-4 mt-4" style="height: 1vw;">
					<h1>Название</h1>
					<h2>Описание</h2>
				</div>
				<div class="col-7 bg-secondary ml-auto mr-4 mt-4 text-center" style="height: 18.5vw;">
					<h1 class="" style="margin-top: 8vw;">Photo</h1>
				</div>
			</div>
		</div>
		<div class="col-11 mx-auto bg-light mt-3 rounded" style="height: 21vw;">
			<div class="row">
				<div class="col-4 ml-4 mt-4" style="height: 1vw;">
					<h1>Название</h1>
					<h2>Описание</h2>
				</div>
				<div class="col-7 bg-secondary ml-auto mr-4 mt-4 text-center" style="height: 18.5vw;">
					<h1 class="" style="margin-top: 8vw;">Photo</h1>
				</div>
			</div>
		</div>
	</div>

</body>
</html>