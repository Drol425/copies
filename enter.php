<?php
include ('class/header.class.php');
?>
<br />
<br />
<br />
<br />
<br />
<?php
echo $_SESSION['password'];
if($user){
	
	echo "Вы на сайте!";
	
	
	
	
}
else{
echo "Авторизируйтесь!";
}

?>