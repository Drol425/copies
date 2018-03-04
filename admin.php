<?php
include  ('class/header.class.php');
?>
    <br />
    <br />
    <br />
    <br />
<?php
/*if($user == "Drol"){
	
}
else{
	echo "Вы не админ!";
}*/

include ('class/admin.class.php');

$obj = new Admin();

echo $obj ->delUser('1234');
?>
    <br />
    <br />
    <br />
    <br />

<?php
include ('class/footer.class.php');
?>