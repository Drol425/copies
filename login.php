<?php
include  ('class/aut.class.php');
switch ($_GET['mid']){

default:

include  ('class/header.class.php');
?>
<br />
<br />
<br />
<br />

<div style="text-align: center;">
	<form action="login.php?mid=aut" method="POST">
		Email:<br /> <input name="email" size="40" type="text"><br /><br />
		Пароль:<br /> <input name="password" size="40" type="password"><br /><br />
		<input name="subm" value="Войти" type="submit">
	</form>
</div>

<?php
break;

case 'aut':
	
	//$user and $password md5 с базы данных вывод по емаилу юзера
	$obj = new UserAut();
	$pass = $obj ->aut($_POST['email']);
	
	if($pass != md5($_POST['password'])){
		echo "Извините, но данный пользователь зарегестрирован!<br />";
		echo "<a href='reg.php'>назад</a><br />";
		break;
	}
	else{
		session_start();
		 $_SESSION['login']=$_POST['email'];
		 $_SESSION['password']=$_POST['password'];
		echo "Успешно авторизировались . <a href='enter.php'>Войти,</a><br />".$_SESSION['login'];
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