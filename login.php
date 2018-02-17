<?php
include  ('class/header.class.php');
?>
<br />
<br />
<br />
<br />
<?php

switch ($_GET['mid']){

default:
?>
<div style="text-align: center;">
	<form action="reg.php?mid=aut" method="POST">
		Email:<br /> <input name="email" size="40" type="text"><br /><br />
		Пароль:<br /> <input name="password" size="40" type="password"><br /><br />
		<input name="subm" value="Войти" type="submit">
	</form>
</div>

<?php
break;

case 'aut':
	
	//$user and $password md5 с базы данных вывод по емаилу юзера
	
	if($pass != md5($_POST['password'])){
		echo "Извините, но данный пользователь зарегестрирован!<br />";
		echo "<a href='reg.php'>назад</a><br />";
		break;
	}
	else{
		echo "Успешно авторизировались. <a href='enter.php'>Войти</a><br />";
	}
	
break;
	
}


?>
<br />
<br />
<br />
<br />
<?php
include ('class/footer.class.php');
?>