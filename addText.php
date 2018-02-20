<?php
include  ('class/header.class.php');
include  ('class/addText.class.php');
?>
<?php

switch ($_GET['mid']){

default:
?>
<br />
<br />
<br />
<br />
<center>
Заголовок текста<br />
<form action="addText.php?mid=add" method="POST">
<input type="text" name ="title" size="65"><br />
Краткое описание<br />
<textarea name="exect" size="65"></textarea><br />
Текст<br />
<textarea name="text"></textarea><br />
Цена за статью<br />
<input type="text" name ="cena" size="65"><br /><br />
<input type="submit" size="65"><br />
</form>
</center>
<br />
<br />
<br />
<br />
<?php
break;

case 'add':
	
	//$user_copy  //проверяем на копию емаила
	echo"<br />
<br />
<br />
<br />";
	if($_POST['name']){
		$obj = new AddText();
	$obj -> addTextfun($_POST['title'], $_POST['exect'], $_POST['text'], $_POST['cena']);
	echo "Успешно добавлено!<a href='index.php'> перейти</a><br />";
	}
	else{
		echo "Ошибка!";
	}
	
break;
	
}


?>
<?php
include ('class/footer.class.php');
?>