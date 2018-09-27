<?php	
	if (!isset($_SESSION)){
		session_start();
	}
	
	$connectionResult = mysqli_connect("mysql.hostinger.ru", "u142805523_ahusr", "Ratoma80", "u142805523_ahelp");
	mysqli_set_charset($connectionResult, 'utf8');
	
	$mail = $_POST['email'];
	$pass = $_POST['password'];
	
	$query = "SELECT COUNT(*) FROM users WHERE Mail_user = '" . $mail . "' AND Password_user = '" . $pass . "'";	
	$queryResult = mysqli_query($connectionResult, $query);
	$queryRows = mysqli_fetch_assoc($queryResult);
	if ($queryRows['COUNT(*)'] > 0){
		$query = "SELECT * FROM users WHERE Mail_user = '" . $mail . "' AND Password_user = '" . $pass . "'";
		$queryResult = mysqli_query($connectionResult, $query);
		$queryRows = mysqli_fetch_assoc($queryResult);
		$_SESSION['name'] = $queryRows['Name_user'];
		$_SESSION['surname'] = $queryRows['Surname_user'];
		$_SESSION['phone'] = $queryRows['Phone_user'];
		$_SESSION['mail'] = $mail;
		
		header("Location: index.php");
	}else{
		header("Location: input.php");
	}	
?>