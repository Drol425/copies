<?php

class shop{
	
	public function shopView(){
		
			$db = new PDO('mysql:host=localhost;dbname=1234', '1234', '1234');
			$view = $db->query("SELECT * FROM `Text`");
		echo "<center><table border='1'>";
		foreach($view as $row)
		{
			echo '<tr><td>'.$row['title'].'</td><td>'.$row['exect'].'</td><td>'.$row['exect'].'</td><td>'.$row['summa'].'</td><td>'.$row['autor'].'</td></tr>';
		}
		echo "</table></center>";
 
	}
	
	
}