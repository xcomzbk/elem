<?
 session_start();
 header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- SEO meta-tag -->
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="default-locale" content="ru">
	<meta http-equiv="content-language" content="ru">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Иван Чепурнов">
    <meta name="copyright" content="Все права принадлежат ООО Элемент">

	<title>Администрирование "Элемент"</title>
	<meta name="keywords" content="Администрирование &laquo;Элемент&raquo;">
	<meta name="description" content="Администрирование внутренних работ компании">
	<!-- END SEO meta tag-->

	<!-- CSS JS Icon -->
	<link rel="icon" href="../img/logo1.png" type="image/x-icon">
	<link rel="shortcut icon" href="../img/logo1.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="../js/admain.js"></script>
	<!-- END CSS JS Icon -->
</head>
<body>
<?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
?>
<div class="white_lock"><div class="alert">
	<form action="login.php" method="POST">
		<label for="login" class="f-left col20"><i class="fa fa-user fa-3x"></i></label>
		<input type="text" name="login" value placeholder="ЛОГИН" class="txt-cnt btn col75" required="" />
		<label for="password" class="f-left col20"><i class="fa fa-lock fa-3x"></i></label>
		<input type="password" name="password" value placeholder="ПАРОЛЬ" class="txt-cnt btn col75" required="" />
		<input type="submit" value="Войти" class="txt-cnt btn col100 mar-t100"/>
	</form>
</div></div>
<?php
    } else {header('Location: manager.php');}
?>
</body>
</html>