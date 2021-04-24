<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT_RLI");

$query = "INSERT INTO User (SurName,Name,Email,Login,PassWord) Values ('{$_POST['surname']}','{$_POST['name']}','{$_POST['email']}','{$_POST['login']}','{$_POST['pass']}')";

$Reg_insert = mysqli_query($connect, $query);

header('Location: index.php');
 ?>