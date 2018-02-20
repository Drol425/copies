<?php
class AddText{
	
	public function addTextfun($textTitle, $textEcex, $textText, $textSumma){
		
		
		//отправляем запрос в бд на добавление текста $textTitle, $textEcex, $textText, $textSumma
		$db = new PDO('mysql:host=localhost;dbname=1234', '1234', '1234');
		$users = $db->query("INSERT INTO Text SET title ='$textTitle',exect='$textEcex', text='$textText', autor='Автор'");
		
	}
	
}