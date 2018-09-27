<?
header('Content-Type: text/html; charset=utf-8');
$host = $_SERVER['HTTP_HOST'];
setlocale(LC_TIME, "ru_RU.utf8");
date_default_timezone_set('Europe/Moscow');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Добро пожаловать на <? print $host; ?>! Hostinger хостинг с PHP и MySQL.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="http://www.main-hosting.com/hostinger/welcome/css/site.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
    <div id="content">
        <div class="header">
            <a id="logo" href="http://www.hostinger.ru/"><img src="http://www.hostinger.ru/images/logo-ru.png" alt="Хостинг" /></a>
        </div>
        <div class="content">
            <h1>Ваш аккаунт создан!</h1>
            <p>Веб-сайт <b><? print $host; ?></b> успешно установлен на сервер! Пожалуйста удалите файл <b>default.php</b> из папки <b>public_html</b> и загрузите файлы Вашего сайта используя FTP клиент или Файловый Менеджер.</p>
            <div class="clear"></div>
        </div>
        <div class="footer"></div>
        <div class="clear"></div>
    </div>
    <div id="footer">
        <div class="links">
            <a href="http://www.hostinger.ru/hosting" target="_blank">Веб-Хостинг</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.ru/besplatnui-hosting" target="_blank">Бесплатный Хостинг</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.ru/forum" target="_blank">Форум Поддержки</a>
            <span class="pipe">|</span>
            <a href="http://cpanel.hostinger.ru/" target="_blank">Вход для клиентов</a>
        </div>
        <div class="copyright">Hostinger Россия &copy; <? print date('Y'); ?>. Все права защищены.</div>
        <div class="social-icons">
            <a href="http://www.facebook.com/Hostinger.ru"><img src="http://www.main-hosting.com/hostinger/welcome/images/fb.gif" /></a>
            <a href="http://twitter.com/HostingerRU"><img src="http://www.main-hosting.com/hostinger/welcome/images/twitter.gif" /></a>
        </div>
    </div>
</div>
</body>
</html>