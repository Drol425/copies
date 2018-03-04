<?php

class Admin{
	
	public $db;
	
	public function __construct(){
		
     $db = new PDO('mysql:host=localhost;dbname=1234', '1234', '1234');
	}
	
	public function delUser($userName){
	
	$view = $db->query("SELECT * FROM `users` WHERE `login` = '$userName'");
	
	$count = $view->rowCount();
	
	if($count){
		
		$db->query("DELETE FROM users WHERE name='$userName';");
		echo "успешно удалил!";
	}
	}
	public function addNews($title,$text){

        if($text AND $title){
            $view = $db->query("INSERT INTO `news` SET `title` = '$title' AND text = '$text'");
        }
        else{
            echo "Вы не ввели заголовок или текст";
        }
		
	}
	
	
	
	
}



?>