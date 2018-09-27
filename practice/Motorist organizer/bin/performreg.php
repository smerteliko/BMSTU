<?php
	$connectionResult = mysqli_connect("mysql.hostinger.ru", "u142805523_ahusr", "Ratoma80", "u142805523_ahelp");
	mysqli_set_charset($connectionResult, 'utf8');
	
	$name = $_POST['Name'];
	$surname = $_POST['Sermane'];
	$userpass = $_POST['password'];
	$phone = $_POST['phone'];
	$mail = $_POST['email'];
	$car = $_POST['topic'];
	
	$query = "INSERT INTO users (Name_user, Surname_user, Password_user, Phone_user, Mail_user) VALUES ('" . $name . "', '" . $surname . "', '" . $userpass. "', '" . $phone . "', '" . $mail . "')";

	$queryResult = mysqli_query($connectionResult, $query);
	
	header("Location: index.php");
?>