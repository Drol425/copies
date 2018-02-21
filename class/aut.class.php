<?php

class UserAut{
	
	public $db = new PDO('mysql:host=localhost;dbname=1234', '1234', '1234');
	
	public function aut(){
		
		$view = $db->query("SELECT * FROM `users` WHERE `login` = '$name'");
		foreach($view as $row)
		{
			
		}
		
	}
	
	
}