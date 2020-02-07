<?php

$chislo = $_POST['chislo'];
$chislo_1 = $_POST['chislo_1'];
$summa = $_POST['summa'];
$sum = $chislo + $chislo_1;
if($summa == $sum)
{
	//echo 'Все верно';

if(!empty($_POST['otpravit_1']))
{
	$email = $_POST['email'].'<br>';
	$name = $_POST['name'].'<br>';
	$password = $_POST['password'].'<br>';
	$hidden = $_POST['hidden'].'<br>';
	$date = date("Y - d - m h-i-s");
	$radio = $_POST['radio'].'<br>';
	$checkbox = $_POST['checkbox'].'<br>';
	$textarea = $_POST['textarea'].'<br>';
	$data = $email.'::'.$name.'::'.$password.'::'.$hidden.'::'.$email.'::'.$date.'::'.$radio.'::'.$checkbox.'::'.$textarea."\n";
	file_put_contents('1.txt', $data, FILE_APPEND | LOCK_EX);
}

}
else
{
	echo 'Сумма чисел слева от знака равенства не совпадает с введенным вами значением справа';
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Это тестовая страница метода POST</title>
	<style>
		.chislo
		{
			width: 45px;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
		<input type="email" name="email" placeholder="email" required=""><br>
		<input type="text" name="name" placeholder="Имя" required=""><br>
		<input type="password" name="password" placeholder="Пароль" required=""><br>
		<input type="radio" name="radio" value="Это строчка №1" required="">Это строчка №1<br>
		<input type="email" name="email" value="Это строчка №2" required="">Это строчка №2<br>
		<input type="checkbox" name="checkbox" value="Это строчка №3" required="">Это строчка №3<br>
		<input type="hidden" name="hidden" value="<? $email = $date; ?>">
		<textarea name="textarea" cols="30" rows="10" placeholder="Напиши что-то"></textarea><br>

<table><tr><td><input type="text" name="chislo" placeholder="Число" required class="chislo"> + </td>
<td><input type="text" name="chislo_1" placeholder="Число" required class="chislo"> = </td>
<td><input type="text" name="summa" placeholder="Сумма" required class="chislo"></td></tr></table>

		<button name="otpravit" value="Привет!">Отправить</button>
	</form>

</body>
</html>
