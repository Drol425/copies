<?php

class shop{

	
	public function shopView(){
        $db = new PDO('mysql:host=localhost;dbname=1234', '1234', '1234');
		$view = $db->query("SELECT * FROM `Text`");
		echo "<center><table border='1'>";
		foreach($view as $row)
		{
			echo '<tr><td>'.$row['title'].'</td><td>'.$row['exect'].'</td><td>'.$row['exect'].'</td><td>'.$row['summa'].'</td><td>'.$row['autor'].'</td><td><a href="shop.php?mid=sale&id='.$row['id'].'"> купить </a></td></tr>';
		}
		echo "</table></center>";
 
	}
    public function shopSale($id, $user){
        $db = new PDO('mysql:host=localhost;dbname=1234', '1234', '1234');
        $saleView = $db->query("SELECT * FROM `Text` WHERE id = '$id'");
        foreach($saleView as $row)
        {
            $title = $row['title'];
            $cena = $row['summa'];
        }

			$db->query("SELECT * FROM `users` WHERE login = '$user'");
			foreach($saleView as $rows){
               $moneyUser = $rows['money'];
            }
        if($moneyUser >= $cena){
            echo "Успешно куплено!";
        }
        else{
            echo "Не хвататет Финансов!";
        }
    }
	
	
}