<?php

class UserAut{
	
	
	public function aut($name){
		
		$db = new PDO('mysql:host=localhost;dbname=1234', '1234', '1234');
		
		$view = $db->query("SELECT * FROM `users` WHERE `name` = '$name'");
		foreach($view as $row)
		{
			$pass = $row['password'];
		}
		return $pass;

	}
	
	
}