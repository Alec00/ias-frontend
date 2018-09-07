<?
/*
 * ЗАБРАЛ!!!! НЕ ИЗМЕНЯТЬ!!!
 */
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>IAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body class="has_message">

<!-- message box -->
<div class="message_box">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="message_content">
					<div class="message_text">Пілотний модуль планування заходів державного нагляду (контролю) для запуску ІАС </div>
					<button class="message_close icon-cancel"></button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- header -->
<nav class="navbar_box">
	<div class="container">
		<div class="row">
			<div class="col-xs-9 col-lg-3">
				<div class="logo_box">
					<a href="#"><img src="img/logo.png" srcset="img/logo@2x.png 2x" width="256" height="34"></a>
				</div>
			</div>
			<div class="col-xs-3 hidden-lg">
				<div class="navbar-header">
					<button type="button" class="open_main_menu" data-toggle="collapse" data-target="#w0-collapse">
						<span class="lines"></span>
					</button>
					
				</div>
			</div>
			<div class="col-lg-9 col-xs-12">

				<!--desktop menu-->
				<ul id="w2" class="navbar-nav nav desktop_nav desktop-menu">
					<li><a href="#"><span>Контролюючі органи</span></a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><span>Довідкова інформація</span></a>
						<ul id="w3" class="dropdown-menu">
							<li><a href="#"><span>Законодавство</span></a></li>
							<li><a href="#"><span>Форми актів перевірки</span></a></li>
							<li><a href="#"><span>Критерії ризику</span></a></li>
						</ul>
					</li>
					<li><a href="#"><span>Комплексний план</span></a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><span>Перевірки</span></a>
						<ul id="w4" class="dropdown-menu">
							<li><a href="#"><span>Результати планових перевірок</span></a></li>
							<li><a href="#"><span>Результати позапланових перевірок</span></a></li>
							<li><a href="#"><span>Загальні результати</span></a></li>
						</ul>
					</li>
					<li><a href="#"><span>Вхід для співробітників</span></a></li>
				</ul>

				<!--mobile menu-->
				<ul class="navbar-nav nav mobile_nav">
					<li><a href="#">Контролюючі органи</a></li>
					<li class="has_child">
						<a href="#">Довідкова інформація</a>
						<ul class="mobile_submenu">
							<li><a href="#">повернутися до загального меню </a></li>
							<li><a href="#">Довідкова інформація</a></li>
							<li><a href="#">Законодавство</a></li>
							<li><a href="#">Форми актів перевірки</a></li>
							<li><a href="#">Критерії ризику</a></li>
						</ul>
					</li>
					<li><a href="#">Комплексний план</a></li>
					<li class="has_child">
						<a href="#" >Перевірки</a>
						<ul class="mobile_submenu">
							<li><a href="#">повернутися до загального меню </a></li>
							<li><a href="#">Перевірки</a></li>
							<li><a href="#">Результати планових перевірок</a></li>
							<li><a href="#">Результати позапланових перевірок</a></li>
							<li><a href="#">Загальні результати</a></li>
						</ul>
					</li>
					<li><a href="#">Вхід для співробітників</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>