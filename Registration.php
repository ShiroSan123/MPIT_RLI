<!DOCTYPE html>
<html lang=ru>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-3 mt-5 radius mx-auto text-center bg-white shadow pb-2 pt-2">
        <h3 class="pb-4">Зарегестрироваться</h3>
        <form action="RegUser.php" method="post">
            <input type="text" name="surname" class="form-control radius border-dark col-11 mx-auto" id="surname" placeholder="Фамилия" autocomplete="off">
            <input type="text" name="name" class="form-control radius border-dark mt-3 col-11 mx-auto" id="name" placeholder="Имя" autocomplete="off">
            <input type="text" name="email" class="form-control radius border-dark mt-3 col-11 mx-auto" id="email" placeholder="Почта" autocomplete="off">
            <input type="text" name="login" class="form-control radius border-dark mt-3 col-11 mx-auto" id="login" placeholder="Логин" autocomplete="off">
            <input type="password" name="pass" class="form-control radius border-dark mt-3 col-11 mx-auto" id="pass" placeholder="Пароль" autocomplete="off">
            <!-- <input type="password" name="repass" class="form-control radius border-dark mt-3 col-11 mx-auto" id="pass" placeholder="Повторите пароль"> -->
            <button class="btn btn-success radius" style="background: #0e0ee3">Зарегистрироваться</button><br>
        </form> 
        <h5 class="mt-5"><a href="SignIn.php" class="text-dark">Уже есть аккаунт?</a></h5>
        <h5>Политика конфиденциальности</h5>
        <h5 class=""><a href="index.php" class="text-dark">На главную</a></h5>
    </div>
</body>
</html>