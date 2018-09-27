<?php
	if (!isset($_SESSION)){
		session_start();
	}
	unset($_SESSION['name']);
	unset($_SESSION['surname']);
	unset($_SESSION['mail']);
	unset($_SESSION['phone']);
	header("Location: index.php");
?>