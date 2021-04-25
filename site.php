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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.bundle.min.js" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.bundle.js" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
  <div class="col-12 pl-0 pr-0">  
    <div class="row col-11 mx-auto pl-0 pr-0">
      <a href="index.php" class="rounded-pill" style="height: 2.9vw; margin-top: 0.2vw; margin-bottom: 0.3vw; background-image: url('assets/img/Group 2.svg'); background-size: 100% 100%; width: 5vw"></a>
      <div class="col-9" style="margin-top: 0.4vw; margin-left: 1.7vw">
        <div class="row">
          <!-- Links -->
          <div class="rounded-pill text-center" style="margin-top: 0.4vw; width: 7vw;">
            <h3 style="font-size:1.5vw; color: black">StopVirus</h3>
          </div>
          <div class="rounded-pill text-center" style="margin-top: 0.3vw; width: 7vw;">
            <h3><a href="index.php" style="font-size:1vw; color: black">Главная</a></h3>
          </div>  
          <!-- Input -->
          <div class="input-group col-9 pl-0 pr-0">
            <input type="" name="" class="form-control rounded-pill" placeholder="Ссылка на сайт: например, tutviruszaxodi.ru" style="height: 2.5vw; font-size: 1vw">
            <span class="input-group-text rounded-pill">Найти</span>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div class="row">
        <?php if ($_SESSION['id'] == null) { ?>
        <h2 class="" style="margin-top: 0.4vw; margin-left: 1.4vw"><a href="RegAndSign.php? ide=2" class="text-light"  style="font-size:1vw;">Войти</a></h2>
        <h2 class="" style="margin-top: 0.4vw; margin-left: 1.4vw"><a href="RegAndSign.php? ide=1" class="text-light"  style="font-size:1vw;">Зарегестрироваться</a></h2>
        <?php } else {?>
        <h2 class="ml-4" style="margin-top: 0.4vw"><a href="SignIn.php" class="text-light"  style="font-size:1.35vw;">Профиль</a></h2>
        <h2 class="ml-3" style="margin-top: 0.4vw"><a href="LogOut.php" class="text-light"  style="font-size:1.35vw;">Выход</a></h2>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Content -->
    <div class="col-12" style="margin-top: 1vw">  
      <div class="row col-11 mx-auto pl-0 pr-0">
        <div class="col-9">
          <h1 style="font-size: 2vw">rule45.ru - что за сайт?</h1>
          <p style="font-size: 1vw" class="fw-normal"><span style="font-weight: bold">Что за сайт rule45.ru?</span> Является ли сайт вредоносным? Узнайте информацию про сайт rule45.ru</p>
          <!-- Rating -->
          <p style="font-size: 1vw">Мы собрали полную информацию по сайту rule45.ru: отзывы, коментарии, информация, тип и т.д.</p>
          <div class="row pl-3 pr-3" style="margin-top: 0.2vw">
            <h5 style="font-size: 1.2vw; font-weight: bold">Рейтинг:</h5>
            <div class="rounded-pill text-light text-center" style="background: #1517C9; height: 1.6vw; font-size: 1.2vw; width: 8vw; margin-left: auto; margin-right: 46.5vw">2.3/5</div>
          </div>
          <!-- Views -->
          <div class="row pl-3 pr-3" style="margin-top: 0.2vw">
            <h5 style="font-size: 1.2vw; font-weight: bold">Просмотры:</h5>
            <div class="rounded-pill text-light text-center" style="background: #1517C9; height: 1.6vw; font-size: 1.2vw; width: 8vw; margin-left: auto; margin-right: 46.5vw">348932</div>
          </div>
          <!-- Reviews -->
          <div class="row pl-3 pr-3" style="margin-top: 0.2vw">
            <h5 style="font-size: 1.2vw; font-weight: bold">Отзывов:</h5>
            <div class="rounded-pill text-light text-center" style="background: #1517C9; height: 1.6vw; font-size: 1.2vw; width: 8vw; margin-left: auto; margin-right: 46.5vw">21</div>
          </div>
          <!-- comments -->
          <div class="row pl-3 pr-3" style="margin-top: 0.2vw">
            <h5 style="font-size: 1.2vw; font-weight: bold">Комментариев:</h5>
            <div class="rounded-pill text-light text-center" style="background: #1517C9; height: 1.6vw; font-size: 1.2vw; width: 8vw; margin-left: auto; margin-right: 46.5vw">69</div>
          </div>
          <!-- Site type -->
          <div class="row pl-3 pr-3" style="margin-top: 0.2vw">
            <h5 style="font-size: 1.2vw; font-weight: bold">Тип сайта:</h5>
            <div class="rounded-pill text-light text-center" style="background: #1517C9; height: 1.6vw; font-size: 1.2vw; width: 8vw; margin-left: 5vw">Комиксы</div>
            <div class="rounded-pill text-light text-center" style="background: #EC3223; height: 1.6vw; font-size: 1.2vw; width: 8vw; margin-left: 0.5vw">Фишинг</div>
            <div class="rounded-pill text-light text-center" style="background: #1517C9; height: 1.6vw; font-size: 1.2vw; width: 8vw; margin-left: 0.5vw">Реклама</div>
            <div class="rounded-pill text-light text-center" style="background: #EC3223; height: 1.6vw; font-size: 1.2vw; width: 8vw; margin-left: 0.5vw">18+</div>
          </div>

          <!-- Rewiews -->
          <div class="col-12 mx-auto pl-0 pr-0" style="margin-top: 0.8vw">
            <div style="font-size: 1vw; background: #1517C9; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 1vw 1vw 0 0" class="col-12 text-light shadow">Отзывы</div>
            <div style="font-size: 1vw; background: #FFFFFF; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 0 0 1vw 1vw" class="col-12 text-dark shadow">
              <div class="row col-12">
                <input type="" name="" class="form-control rounded-pill col-8" placeholder="Написать отзыв..." style="height: 2.5vw; font-size: 1vw">
                <!-- DropDown -->
                <div class="dropdown" style="margin-left: 4vw">
                  <button class="dropbtn border border-sercondary rounded-pill" style="height: 2.5vw">Dropdown</button>
                  <div class="dropdown-content">
                    <a href="#">Комиксы</a>
                    <a href="#">Фишинг</a>
                    <a href="#">Реклама</a>
                    <a href="#">18+</a>
                  </div>
                </div>

              </div>
              <!-- user review -->
              <div class="col-12 mx-auto pl-0 pr-0" style="margin-top: 0.8vw">
                <div class="row">
                  <div class="col-10">
                    <div>
                      <div class="row pl-0 pr-0 ml-1">
                        <h1 style="font-size: 1.4vw">Иванов Андрей</h1><h4 class="text-secondary" style="font-size: 1vw; margin-top: 0.4vw; margin-left: 0.4vw">16 часов назад</h4>
                      </div>
                      <div class="row pl-0 pr-0 ml-1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        <p style="font-size: 1vw; color: red; margin-left: 0.2vw">Фишинг</p>
                        <p style="font-size: 1vw; color: blue; margin-left: 0.2vw">Реклама</p>
                      </div>
                      <a href="" style="color: blue">Ответить</a>
                      <a href="" style="color: red">Пожаловаться</a>
                    </div>
                    <div class="mt-4">
                      <div class="row pl-0 pr-0 ml-1">
                        <h1 style="font-size: 1.4vw">Харлампьев Андрей</h1><h4 class="text-secondary" style="font-size: 1vw; margin-top: 0.4vw; margin-left: 0.4vw">16 часов назад</h4>
                      </div>
                      <div class="row pl-0 pr-0 ml-1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        <p style="font-size: 1vw; color: blue; margin-left: 0.2vw">Комиксы</p>
                        <p style="font-size: 1vw; color: red; margin-left: 0.2vw">Фишинг</p>
                        <p style="font-size: 1vw; color: blue; margin-left: 0.2vw">Реклама</p>
                        <p style="font-size: 1vw; color: red; margin-left: 0.2vw">18+</p>
                      </div>
                      <a href="" style="color: blue">Ответить</a>
                      <a href="" style="color: red">Пожаловаться</a>
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="row">
                      <div class="btn-group dropup">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                      </div>
                      <h2 style="font-size: 2vw; color: green; margin-left: 1vw">24</h2>
                      <div class="btn-group dropdown" style="margin-left: 1vw">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- new reviews -->
        <div class="col-3" style="padding-top: 1vw; padding-bottom: 1vw">
          <h1 style="font-size: 1.8vw">Новые отзывы</h1>
          <div class="col-12 mx-auto pl-0 pr-0">
            <div style="font-size: 1vw; background: #1517C9; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 1vw 1vw 0 0" class="col-12 text-light shadow">fishing228.com</div>
            <div style="font-size: 1vw; background: #FFFFFF; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 0 0 1vw 1vw" class="col-12 text-dark shadow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
          </div>
          <div class="col-12 mx-auto pl-0 pr-0" style="margin-top: 1vw">
            <div style="font-size: 1vw; background: #1517C9; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 1vw 1vw 0 0" class="col-12 text-light shadow">fishing228.com</div>
            <div style="font-size: 1vw; background: #FFFFFF; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 0 0 1vw 1vw" class="col-12 text-dark shadow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
          </div>
          <div class="col-12 mx-auto pl-0 pr-0" style="margin-top: 1vw">
            <div style="font-size: 1vw; background: #1517C9; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 1vw 1vw 0 0" class="col-12 text-light shadow">fishing228.com</div>
            <div style="font-size: 1vw; background: #FFFFFF; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 0 0 1vw 1vw" class="col-12 text-dark shadow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
          </div>
          <div class="col-12 mx-auto pl-0 pr-0" style="margin-top: 1vw">
            <div style="font-size: 1vw; background: #1517C9; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 1vw 1vw 0 0" class="col-12 text-light shadow">fishing228.com</div>
            <div style="font-size: 1vw; background: #FFFFFF; padding-top: 0.2vw; padding-bottom: 0.4vw; border-radius: 0 0 1vw 1vw" class="col-12 text-dark shadow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="col-12" style="height: 20vw; background: #F9FAF9; margin-top: 4vw">
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