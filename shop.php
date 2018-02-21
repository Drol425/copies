<?php

include  ('class/header.class.php');
include  ('class/shop.class.php');

?>

<br />
<br />
<br />
<br />
<br />
<?php
$obj = new shop();
switch ($_GET['mid']){

    default:
        ?>
<center><h1>Витрина текстов!</h1></center><br />

<?php


echo $obj -> shopView();


?>
        <?php
        break;
    case 'sale':

        echo $obj->shopSale($_GET['id'],'Drol',0);
        echo "Успешно куплена статья!";


    break;
}
        ?>
<br />
<br />
<br />
<br />
<br />
<?php
include ('class/footer.class.php');
?>