<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT_RLI");
$login = '{$_POST["login"]}';
$pass = '{$_POST["pass]}';
$log = '1';
$bog = '1';
$ide = '1';

if ($login == null || $pass == null) {
	header("Location: RegAndSign.php? ide=".$ide."&log=".$log);
	die();
} else {
	$query1 = "SELECT * FROM User WHERE Login = '{$_POST["login"]}'";

	$result = mysqli_query($connect, $query1);

	$num = mysqli_num_rows($result);

	if($num == 0){
		$query2 = "INSERT INTO User (SurName,Name,Email,Login,PassWord) Values ('{$_POST['surname']}','{$_POST['name']}','{$_POST['email']}','{$_POST['login']}','{$_POST['pass']}')";
		$Reg_insert = mysqli_query($connect, $query2);
		header("Location: index.php");
	} else {
		header("Location: RegAndSign.php? ide=".$ide."&bog=".$bog);
	}
}
?>