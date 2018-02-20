<?php

class regUser{
	
	
	public function RegUsers($user, $pass){
		
		$db = new PDO('mysql:host=localhost;dbname=1234', '1234', '1234');
		$users = $db->query("INSERT INTO users SET login ='$user',pass='$pass', money='0'");
		
		
	}
	
}