<?php
include  ('class/header.class.php');
?>
<br />
<br />
<br />
<br />
<div style="text-align: right;">
	<form action="reg.php?mid=reg" method="POST">
		Email: <input name="email" type="text"><br /><br />
		Пароль: <input name="password" type="password"><br /><br />
		Повторите пароль: <input name="password1" type="password"><br />
		<input name="subm" value="Зарегестрироваться" type="submit">
	</form>
</div>
<br />
<br />
<br />
<br />

<?php
include ('class/footer.class.php');
?>