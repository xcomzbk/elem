<?php
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
	$dbcon = mysql_connect("localhost", "root", ""); 
    mysql_select_db("element", $dbcon);
    session_start();
    $login = $_SESSION['login'];
    $result = mysql_query("SELECT * FROM manager WHERE login='$login'", $dbcon);
    $myrow = mysql_fetch_array($result);

    $firstname = $myrow["firstname"]
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

	<title>Сервисный центр "Элемент"</title>
	<meta name="keywords" content="Менеджер &laquo;Элемент&raquo;">
	<meta name="description" content="Управление заказами">
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

<header class="top">
	<div class="logo col25">
		<a href="#element" id="home_link" class="scroll"><img src="../img/logname.png"></a>
	</div>
	<div class="navigation inline-flex col50">
		<ul class="inline-flex">
			<li><a href="#new" class="nav_link mar-rl20 scroll" id="service_link">Новый</a></li>
			<li><a href="#all" class="nav_link mar-rl20 scroll" id="contact_link">Все</a></li>
		</ul>
	</div>
	<div class="social col25">
		<?php
			echo "<p>Привет,&nbsp;".$firstname."</p>";
		?>
	</div>
</header>
<main>
	<div id="zakaz_frame" class="main_block">
	<!-- <div class="white_lock"><div class="alert">ДАННЫЙ РАЗДЕЛ ЗАРАБОТАЕТ В БЛИЖАЙШЕЕ ВРЕМЯ</div></div> -->
		<div class="head_block txt-cnt">
			<h1>Оформить заказ:</h1>
		</div>
		<div class="main_content txt-cnt">
			<form id="zakaz" method="POST" action="zakaz.php">
				<input type="text" name="name" value placeholder="Ваше Имя" class="txt-cnt btn"/>
				<select name="item">
					<option value="SM">Стиральная машинка</option>
					<option value="ref">Холодильник</option>
					<option value="tv">Телевизор</option>
					<option value="PC">Компьютер / Ноутбук</option>
					<option value="kitchen">Электрокастрюли (мультиварка и пр.)</option>
					<option value="phone">Телефон</option>
				</select>
				<input type="text" name="street" value placeholder="Улица" class="txt-cnt btn"/>
				<div class="col50">
					<input type="text" name="house" value placeholder="№дома" class="txt-cnt btn">
				</div>
				<div class="col50">
					<input type="number" name="num" value placeholder="№квартиры" class="txt-cnt btn"/>
				</div>
				<input type="text" name="phone" value placeholder="Номер телефона" class="txt-cnt btn" />
				<input type="submit" value="Заказать" class="txt-cnt btn"/>
			</form>
		</div>
	</div>
</main>
<footer>
	<p class="txt-cnt"><b><a href="http://элемент-чита.рф">элемент-чита.рф</a> &copy; 2016 || ИП Ахмадулин "Элемент"-сервисный центр || Разработка сайта: Иван Чепурнов</b><a href="manager.element/" class="soc_link"><i class="fa fa-lock"></i></a></p>
</footer>
</body>
</html>