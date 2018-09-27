<?php
	if (!isset($_SESSION)){
		session_start();
	}
?>
<html lang="ru"> 
<head> 
<meta charset="utf-8"> 
<title>Auto</title> 
<link rel="stylesheet" href="css/style.css"> 
	<style>
	.page-header{
    min-height: 490px;
    padding-top: 35px;
    background-image: url("img/slide4.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
	}
	.page-footer{
    min-height: 490px;
    padding-top: 35px;
    background-image: url("img/footer.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
	}
	</style>
</head> 
<body background="img/po.jpg"> 
<div class="page-header"> 

<div class="header-top clearfix"> 
</div> 
</div> 
<div class="feedback"><br> 
<p class="feedback-tip">Вход на сайт</p> 
<form class="feedback-form" action="performenter.php" method="post"> 
<div class="feedback-form-group"> 
<label for="email">Электронная почта:</label> 
<input type="text" name="email" id="email"> 
</div> 
<div class="feedback-form-group"> 
<label for="password-field">Ваш пароль</label> 
<input type="password" name="password" id="password-field"> 
</div> 
<input type="submit" class="btn" value="Вход">
</form> 
</div> 


<div class="page-footer"> 
<div class="container"> 
<div class="footer-top clearfix"> 

</div> 

<div class="footer-middle clearfix"> 
<div class="footer-menu"> 
<h3>Важные адреса</h3> 
<ul> 
<li><a href="#">Мойка</a></li> 
</ul> 
</div> 

</div> 

<div class="footer-bottom clearfix"> 
<div class="footer-social"> 
<b>Давайте дружить!</b> 
<a class="social-btn" href="https://vk.com/htmlacademy">Вконтакте</a> 
</div> 

</div> 
</div> 
</div> 

</body> 
</html>