<?php
include  ('class/header.class.php');
include  ('class/reg.class.php');
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
	<form action="reg.php?mid=reg" method="POST">
		Email:<br /> <input name="email" size="40" type="text"><br /><br />
		Пароль:<br /> <input name="password" size="40" type="password"><br /><br />
		Повторите пароль:<br /> <input name="password1" size="40" type="password"><br /><br />
		<input name="subm" value="Зарегестрироваться" type="submit">
	</form>
</div>

<?php
break;

case 'reg':
	$obj = new regUser();
	
	echo $user_copy = $obj ->provUser($_POST['email']);
	
	if($user_copy){
		echo "Извините, но данный пользователь зарегестрирован!<br />";
		echo "<a href='reg.php'>назад</a><br />";
		break;
	}
	if($_POST['password'] != $_POST['password1']){
		echo "Пароли не совпадают! <br />";
		break;
	}
	echo $obj -> RegUsers($_POST['email'],$_POST['password']);
	echo "Успешно зарегестрировано!";
	//делаем запрос в базу данных для добавления нового юзера свойством объекта
	
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