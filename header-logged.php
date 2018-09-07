<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>IAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-select.min.css" />
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
					<a href="#"><img src="img/logo.png" srcset="img/logo@2x.png 2x, img/logo@3x.png 3x" width="256" height="34"></a>
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
				<div class="user_box dropdown">
					<div class="user_box_btn" data-toggle="dropdown">
						<div class="user_box_name">Скаб Василь Мар’янович</div>
						<div class="user_box_pos">Адміністратор територіального органу</div>
						<div class="user_box_loc">ДЕРЖПРОДСПОЖИВСЛУЖБА У ВІННИЦЬКІЙ ОБЛАСТІ</div>
					</div>
					<ul class="dropdown-menu">
						<li><span>Користувач</span></li>
						<li><a href="#"><span>Оновити дані профілю</span></a></li>
						<li><span>Контролюючий орган</span></li>
						<li><a href="#"><span>Оновити дані про орган</span></a></li>
						<li><a href="#"><span>Співробітники органу</span></a></li>
						<li><a href="#"><span>Вихід</span></a></li>
					</ul>
				</div>

				<div class="note_box dropdown has_note"><!-- добавить класс  urgent_note для срочных сообщений,  класс has_note для отображения сообщений-->
					<button class="icon-ring note_btn" data-toggle="dropdown"><span class="note_count">26</span></button>

					<div class="has_note_box dropdown-menu">
						<div class="note_header">
							Повідомлення
						</div>
						<ul class="note_list">
							<li class="urgent not_readed"><!-- убрать класс not_readed для прочитаного сообщения-->
								<a href="#">
									<div class="note_date">22.07.2018</div>
									<div class="note_text">Увага! У вас є 24 годин для того щоб подати перевірку за номером 43184864. Крайній термін подачі звітності 23.07.2018</div>
								</a>
							</li>
							<li class="urgent">
								<a href="#">
									<div class="note_date">22.07.2018</div>
									<div class="note_text">Увага! У вас є 24 годин для того щоб подати перевірку за номером 43184864. Крайній термін подачі звітності 23.07.2018</div>
								</a>
							</li>
							<li class="not_readed">
								<a href="#">
									<div class="note_date">22.07.2018</div>
									<div class="note_text">У вас залишився тиждень, для того щоб завантажити перевірку за номером 43184864</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="note_date">22.07.2018</div>
									<div class="note_text">Увага! У вас є 24 годин для того щоб подати перевірку за номером 43184864. Крайній термін подачі звітності 23.07.2018</div>
								</a>
							</li>
						</ul>
						<div class="note_footer">
							<a href="#" class="btn-block btn btn-primary">Дивитись усі повідомлення</a>
						</div>
					</div>

					<div class="no_note_box dropdown-menu">
						<img src="img/no_note.png" alt="" width="112" height="125">
						<p class="no_note_title">Зараз у Вас немає жодного повідомлення!</p>
						<p class="no_note_text">Але в подальшій роботі тут буде выдображатись інформація стосовно термінів подачі звітності</p>
					</div>
				</div>

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
				</ul>

				<!--mobile menu-->
				<ul class="navbar-nav nav mobile_nav">
					<li class="profile_info">
						<p class="profile_info_title">Скаб Василь Мар’янович</p>
						<p class="profile_info_pos">Адміністратор територіального органу</p>
					</li>
					<li class="has_child">
						<a href="#">Держпродспоживслужба у Вінницькій Головній Державній Адміністрації</a>
						<ul class="mobile_submenu">
							<li><a href="#">повернутися до загального меню </a></li>
							<li><a href="#">Держпродспоживслужба у Вінницькій Головній Державній Адміністрації</a></li>
							<li><a href="#">Оновити дані про орган</a></li>
							<li><a href="#">Співробітники органу</a></li>
						</ul>
					</li>
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
					<li><a href="#">Важливі повідомлення</a></li>
					<li><a href="#">Оновити дані профілю</a></li>
					<li><a href="#">Вийти з аккаунту</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>