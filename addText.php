<?php
include  ('class/header.class.php');
?>
<br />
<br />
<br />
<br />
<center>
Заголовок текста<br />
<form action="addText.php?mid=add" method="POST">
<input type="text"><br />
Краткое описание<br />
<textarea></textarea><br />
Текст<br />
<textarea></textarea><br />
Цена за статью<br />
<input type="text"><br /><br />
<input type="submit"><br />
</form>
</center>
<br />
<br />
<br />
<br />
<?php
include ('class/footer.class.php');
?>