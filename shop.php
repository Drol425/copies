<?php

include  ('class/header.class.php');
include  ('class/shop.class.php');

?>
<br />
<br />
<br />
<br />
<br />

<center><h1>Витрина текстов!</h1></center><br />

<?php

$obj = new shop();

echo $obj -> shopView();


?>

<br />
<br />
<br />
<br />
<br />
<?php
include ('class/footer.class.php');
?>