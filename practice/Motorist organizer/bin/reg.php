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
  <body>
   <div class="page-header">
      <div class="container">
        <div class="header-top clearfix">
			<a class="btn btn-quick-order" href="../index.php">На главную</a><br>
        </div>
      </div>
    </div>
	<div class="feedback"><br>
      <p class="feedback-tip">Регистрация на сайте</p>
      <form class="feedback-form" action="performreg.php" method="POST">
		  <div style="width: 650px; margin-left: auto; margin-right: auto">
			<div class="feedback-form-group">
			  <div class="feedback-form-group-label-div">
			    <label for="Name">Имя:</label>
		      </div>
			  <input type="text" name="Name" id="Name">
			</div>
			<div class="feedback-form-group">
			  <div class="feedback-form-group-label-div">
			    <label for="Sermane">Фамили:</label>
		      </div>
			  <input type="text" name="Sermane" id="Sermane">
			</div>
			<div class="feedback-form-group">
			  <div class="feedback-form-group-label-div">
			    <label for="password-field">Ваш пароль</label>
		      </div>
			  <input type="password" name="password" id="password-field">
			</div>
			<div class="feedback-form-group">
			  <div class="feedback-form-group-label-div">
			    <label for="phone">Контактный телефон:</label>
		      </div>
			  <input type="text" name="phone" id="phone">
			</div>
			<div class="feedback-form-group">
			  <div class="feedback-form-group-label-div">
			    <label for="email">Электронная почта:</label>
		      </div>
			  <input type="text" name="email" id="email">
			</div>
			<div class="checkbox-area">
			  <label>
				<input type="checkbox" name="subscription">
				Я согласен получать спам и смс на телефон
			  </label>
			</div>
			<div class="feedback-form-group">
			  <div class="feedback-form-group-label-div">
			    <label for="topic">Марка машины:</label>
			  </div>
			  <select name="topic" id="topic">
				<option value="1">BMW</option>
				<option value="2">Toyota</option>
				<option value="3">Lada</option>
			  </select>
			</div>
			<input type="submit" class="btn" value="Отправить">
		  </div>	
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
