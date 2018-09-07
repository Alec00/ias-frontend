<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>IAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style-lis.css" />
</head>
<body class="has_message inner_page">

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

<button href="#" class="faq_button_mobile visible-xs" data-toggle="modal" data-target="#faq_modal">?</button>


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

<section class="page_section lis_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 mob_pad_no">
				<div class="form-group lis_head">
					<p class="visible-xs"><a href="#"><img src="img/right_arr.png" alt="#">повернутися до контролюючих органів</a></p>
					<br>
					<h1 class="page_title">Державне агентство лісових ресурсів України</h1>
					<a href="#" class="hidden-xs"><img src="img/right_arr.png" alt="#">повернутися до списку контролюючих органів</a>
				</div>
				<div class="btn_group visible-xs">
					<p>
						<a href="#" class="btn btn_link btn_link_icon icon-compl-check">Переглянути планові перевірки</a>
					</p>
					<p>
						<a href="#" class="btn btn_link btn_link_icon icon-notplaned-check">Переглянути позапланові перевірки</a>
					</p>
					<p>
						<a href="#" class="btn btn_link btn_link_icon icon-archive">Переглянути звіт</a>
					</p>
					<p>
						<a href="#" class="btn btn_link btn_link_icon icon-download_file">Завантажити затверджений річний план</a>
					</p>
				</div>
				<div class="gov visible-xs">
					<div class="bhead">
						<img src="img/lis.jpg" alt="#">
					</div>
					<div class="collapse in" id="collapseGovHead">
						<div class="bbody">
							<div class="form-group">
								<div class="group_label">Назва</div>
								<div>Державне агентство лісових ресурсів України</div>
							</div>
							<div class="form-group">
								<div class="group_label">Коротка назва</div>
								<div>Держлісагентство</div>
							</div>
							<div class="form-group">
								<div class="group_label">Тип</div>
								<div>Центральний</div>
							</div>
							<div class="form-group">
								<div class="group_label">Адреса</div>
								<div>м. Київ, вул. Ш. Руставелі, 9</div>
							</div>
							<div class="form-group">
								<div class="group_label">Телефон</div>
								<div>235-56-20, 235-44-09</div>
							</div>
							<div class="form-group">
								<div class="group_label">Емейл</div>
								<div><a href="mailto:hunter@dklg.gov.ua">hunter@dklg.gov.ua</a></div>
							</div>
							<div class="form-group">
								<div class="group_label">Кількість інспекторів</div>
								<div>680</div>
							</div>
							<div class="form-group">
								<div class="group_label">Рейтинг</div>
								<div><div class="gov_rat">9</div></div>
							</div>
						</div>
					</div>
					<div class="bfoot">
						<a role="button" data-toggle="collapse" href="#collapseGovHead" aria-expanded="false" aria-controls="collapseGovHead" class="btn btn-primary btn-block"><span class="open">сгорнути загальні дані</span><span class="close_inf">розгорнути загальні дані</span></a>
					</div>
				</div>
				<div class="mobile_select">
					<ul class="nav nav-tabs hidden-xs">
						<li class="nav-item active">
							<a class="nav-link" data-toggle="tab" href="#lis1" aria-expanded="true">Досьє</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#lis2" aria-expanded="false">Критерії ризику</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#lis3" aria-expanded="false">Форми актів</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#lis4" aria-expanded="false">Законодавство</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#lis5" aria-expanded="false">Дочірні органи </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#lis6" aria-expanded="false">Сфери контролю</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#lis7" aria-expanded="false">Рейтинг</a>
						</li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane fade active in" id="lis1">
						<div class="row">
							<div class="col-xs-12">
								<h2 class="gov_title hidden-xs">Досьє</h2>
							</div>
							<div class="col-xs-12 col-sm-70">
								<div class="gov_block">
									<table class="table table-striped vertical_table">
										<tr>
											<td>Назва контролюючого органу</td>
											<td>Державне агентство лісових ресурсів України</td>
										</tr>
										<tr>
											<td>Коротка назва</td>
											<td>Держлісагентство</td>
										</tr>
										<tr>
											<td>Підключення до Пілотного модулю ІАС</td>
											<td>Так</td>
										</tr>
										<tr>
											<td>Наявність територіальних органів</td>
											<td>Так</td>
										</tr>
										<tr>
											<td>Підключення територіальних органів до Пілотного модулю ІАС</td>
											<td>Так</td>
										</tr>
										<tr>
											<td>Сфери державного нагляду (контролю)</td>
											<td>Державний нагляд (контроль) за провадженням господарської діяльності, пов’язаної з використанням, охороною і відтворенням державного мисливського фонду</td>
										</tr>
										<tr>
											<td>Перелік НПА завантажено у Пілотний модуль ІАС</td>
											<td>Держлісагентство</td>
										</tr>
										<tr>
											<td>Тип</td>
											<td>Центральний</td>
										</tr>
										<tr>
											<td>Адреса</td>
											<td>м. Київ, вул. Ш. Руставелі, 9</td>
										</tr>
										<tr>
											<td>Телефон</td>
											<td>235-56-20, 235-44-09</td>
										</tr>
										<tr>
											<td>Емейл</td>
											<td><a href="mailto:hunter@dklg.gov.ua">hunter@dklg.gov.ua</a></td>
										</tr>
										<tr>
											<td>Кількість інспекторів</td>
											<td>680</td>
										</tr>
										<tr>
											<td>Рейтинг</td>
											<td><div class="gov_rat">9</div></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="col-xs-12 col-sm-30 hidden-xs">
								<div class="btn_group">
									<p>
										<a href="" class="btn btn_link btn_link_icon icon-compl-check">Переглянути планові перевірки</a>
									</p>
									<p>
										<a href="" class="btn btn_link btn_link_icon icon-notplaned-check">Переглянути позапланові перевірки</a>
									</p>
									<p>
										<a href="" class="btn btn_link btn_link_icon icon-archive">Переглянути звіт</a>
									</p>
									<p>
										<a href="" class="btn btn_link btn_link_icon icon-download_file">Завантажити затверджений річний план</a>
									</p>
								</div>
								<div class="gov">
									<div class="bhead">
										<img src="img/lis.jpg" alt="#">
									</div>
									<div class="bbody">
										<div class="form-group">
											<div class="group_label">Назва</div>
											<div>Державне агентство лісових ресурсів України</div>
										</div>
										<div class="form-group">
											<div class="group_label">Коротка назва</div>
											<div>Держлісагентство</div>
										</div>
										<div class="form-group">
											<div class="group_label">Тип</div>
											<div>Центральний</div>
										</div>
										<div class="form-group">
											<div class="group_label">Адреса</div>
											<div>м. Київ, вул. Ш. Руставелі, 9</div>
										</div>
										<div class="form-group">
											<div class="group_label">Телефон</div>
											<div>235-56-20, 235-44-09</div>
										</div>
										<div class="form-group">
											<div class="group_label">Емейл</div>
											<div><a href="mailto:hunter@dklg.gov.ua">hunter@dklg.gov.ua</a></div>
										</div>
										<div class="form-group">
											<div class="group_label">Кількість інспекторів</div>
											<div>680</div>
										</div>
										<div class="form-group">
											<div class="group_label">Рейтинг</div>
											<div><div class="gov_rat">9</div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="lis2">
						<div class="col-xs-12 hidden-xs">
							<h2 class="gov_title">Критерії ризику</h2>
						</div>
					</div>
					<div class="tab-pane fade" id="lis3">
						<div class="col-xs-12 hidden-xs">
							<h2 class="gov_title">Форми актів</h2>
						</div>
					</div>
					<div class="tab-pane fade" id="lis4">
						<div class="col-xs-12 hidden-xs">
							<h2 class="gov_title">Законодавство</h2>
						</div>
					</div>
					<div class="tab-pane fade" id="lis5">
						<div class="col-xs-12 hidden-xs">
							<h2 class="gov_title">Дочірні органи </h2>
						</div>
					</div>
					<div class="tab-pane fade" id="lis6">
						<div class="row">
							<div class="col-xs-12 hidden-xs">
								<h2 class="gov_title">Сфери контролю</h2>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="lis7">
						<div class="row">
							<div class="col-xs-12 hidden-xs">
								<h2 class="gov_title">Рейтинг</h2>
							</div>
							<div class="col-xs-12 col-sm-70">
								<table class="table table-border double_table hidden-xs">
									<thead>
										<tr>
											<th>Критерій</th>
											<th>Складова</th>
											<th>Бал</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Загальні бали</td>
											<td colspan="2">
												<table class="table table-striped">
													<tr>
														<td>Місце в рейтингу</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за підключення</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за перелік НПА</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за критеріЇ</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за форми актів</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за план</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за звіт</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за аналітичну інфо</td>
														<td>1</td>
													</tr>
													<tr>
														<td><span class="total_point">Загальна кількість балів</span></td>
														<td><span class="total_point">8</span></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Загальна інформація</td>
											<td colspan="2">
												<table class="table table-striped">
													<tr>
														<td>Підключення до ПМІАС</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Підключення територіалів до ПМІАС</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Наявність територіалів</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за підключення</td>
														<td>1</td>
													</tr>
													<tr>
														<td><span class="total_point">Загальна кількість балів</span></td>
														<td><span class="total_point">4</span></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Сфери контролю</td>
											<td colspan="2">
												<table class="table table-striped">
													<tr>
														<td>Сфери контролю</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Кількість сфер контролю</td>
														<td>1</td>
													</tr>
													<tr>
														<td>НПА в ПМІАС</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за перелік НПА</td>
														<td>1</td>
													</tr>
													<tr>
														<td><span class="total_point">Загальна кількість балів</span></td>
														<td><span class="total_point">4</span></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Планування</td>
											<td colspan="2">
												<table class="table table-striped">
													<tr>
														<td>Чи затверджений план</td>
														<td>Затверджений</td>
													</tr>
													<tr>
														<td>План на сайті</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Проект плану в ПМІАС</td>
														<td>1</td>
													</tr>
													<tr>
														<td>План в ПМІАС</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за план на сайті</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за план</td>
														<td>1</td>
													</tr>
													<tr>
														<td><span class="total_point">Загальна кількість балів</span></td>
														<td><span class="total_point">5</span></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Звітування</td>
											<td colspan="2">
												<table class="table table-striped">
													<tr>
														<td>Звіт на сайті</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Звіт в ПМІАС</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Звіт за формою</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Мораторій 2017</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за звіт на сайті</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за звіт</td>
														<td>1</td>
													</tr>
													<tr>
														<td><span class="total_point">Загальна кількість балів</span></td>
														<td><span class="total_point">6</span></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Аналітична інформація</td>
											<td colspan="2">
												<table class="table table-striped">
													<tr>
														<td>Info In Pmias</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Info Plan Events</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Info Unplan Events</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Info About Negative Events	</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Info About Negative Ends</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за аналітичну інфо</td>
														<td>1</td>
													</tr>
													<tr>
														<td><span class="total_point">Загальна кількість балів</span></td>
														<td><span class="total_point">6</span></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Перевірки</td>
											<td colspan="2">
												<table class="table table-striped">
													<tr>
														<td>Планові перевірки в ПМІАС</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Позапланові перевірки в ПМІАС</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Чи проводяться позапланові перевірки?</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Мораторій 2018</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за позапланові перевірки</td>
														<td>1</td>
													</tr>
													<tr>
														<td>Бал за планові перевірки</td>
														<td>1</td>
													</tr>
													<tr>
														<td><span class="total_point">Загальна кількість балів</span></td>
														<td><span class="total_point">6</span></td>
													</tr>
												</table>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2">Загальний рейтинг</td>
											<td>180</td>
										</tr>
									</tfoot>
								</table>
								<div class="visible-xs">
									<div class="gov_block">
										<h2 class="table_caption">Загальні бали</h2>
										<table class="table table-striped table_point">
											<thead>
												<tr>
													<th>Складова</th>
													<th>Бал</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Місце в рейтингу</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за підключення</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за перелік НПА</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за критеріЇ</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за форми актів</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за план</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за звіт</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за аналітичну інфо</td>
													<td>1</td>
												</tr>
												<tr>
													<td><span class="total_point">Загальна кількість балів</span></td>
													<td><span class="total_point">8</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="gov_block">
										<h2 class="table_caption">Загальна інформація</h2>
										<table class="table table-striped table_point">
											<thead>
												<tr>
													<th>Складова</th>
													<th>Бал</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Підключення до ПМІАС</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Підключення територіалів до ПМІАС</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Наявність територіалів</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за підключення</td>
													<td>1</td>
												</tr>
												<tr>
													<td><span class="total_point">Загальна кількість балів</span></td>
													<td><span class="total_point">4</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="gov_block">
										<h2 class="table_caption">Сфери контролю</h2>
										<table class="table table-striped table_point">
											<thead>
												<tr>
													<th>Складова</th>
													<th>Бал</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Сфери контролю</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Кількість сфер контролю</td>
													<td>1</td>
												</tr>
												<tr>
													<td>НПА в ПМІАС</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за перелік НПА</td>
													<td>1</td>
												</tr>
												<tr>
													<td><span class="total_point">Загальна кількість балів</span></td>
													<td><span class="total_point">4</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="gov_block">
										<h2 class="table_caption">Планування</h2>
										<table class="table table-striped table_point">
											<thead>
												<tr>
													<th>Складова</th>
													<th>Бал</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Чи затверджений план</td>
													<td>Затверджений</td>
												</tr>
												<tr>
													<td>План на сайті</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Проект плану в ПМІАС</td>
													<td>1</td>
												</tr>
												<tr>
													<td>План в ПМІАС</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за план на сайті</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за план</td>
													<td>1</td>
												</tr>
												<tr>
													<td><span class="total_point">Загальна кількість балів</span></td>
													<td><span class="total_point">5</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="gov_block">
										<h2 class="table_caption">Звітування</h2>
										<table class="table table-striped table_point">
											<thead>
												<tr>
													<th>Складова</th>
													<th>Бал</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Звіт на сайті</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Звіт в ПМІАС</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Звіт за формою</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Мораторій 2017</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за звіт на сайті</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за звіт</td>
													<td>1</td>
												</tr>
												<tr>
													<td><span class="total_point">Загальна кількість балів</span></td>
													<td><span class="total_point">6</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="gov_block">
										<h2 class="table_caption">Аналітична інформація</h2>
										<table class="table table-striped table_point">
											<thead>
												<tr>
													<th>Складова</th>
													<th>Бал</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Info In Pmias</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Info Plan Events</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Info Unplan Events</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Info About Negative Events	</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Info About Negative Ends</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за аналітичну інфо</td>
													<td>1</td>
												</tr>
												<tr>
													<td><span class="total_point">Загальна кількість балів</span></td>
													<td><span class="total_point">6</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="gov_block">
										<h2 class="table_caption">Перевірки</h2>
										<table class="table table-striped table_point">
											<thead>
												<tr>
													<th>Складова</th>
													<th>Бал</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Планові перевірки в ПМІАС</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Позапланові перевірки в ПМІАС</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Чи проводяться позапланові перевірки?</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Мораторій 2018</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за позапланові перевірки</td>
													<td>1</td>
												</tr>
												<tr>
													<td>Бал за планові перевірки</td>
													<td>1</td>
												</tr>
												<tr>
													<td><span class="total_point">Загальна кількість балів</span></td>
													<td><span class="total_point">6</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="gov_foot_block">
										<div class="pull-left">Загальний рейтинг</div>
										<div class="pull-right">180</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-30 hidden-xs">
								<div class="btn_group">
									<p>
										<a href="" class="btn btn_link btn_link_icon icon-compl-check">Переглянути планові перевірки</a>
									</p>
									<p>
										<a href="" class="btn btn_link btn_link_icon icon-notplaned-check">Переглянути позапланові перевірки</a>
									</p>
									<p>
										<a href="" class="btn btn_link btn_link_icon icon-archive">Переглянути звіт</a>
									</p>
									<p>
										<a href="" class="btn btn_link btn_link_icon icon-download_file">Завантажити затверджений річний план</a>
									</p>
								</div>
								<div class="gov">
									<div class="bhead">
										<img src="img/lis.jpg" alt="#">
									</div>
									<div class="bbody">
										<div class="form-group">
											<div class="group_label">Назва</div>
											<div>Державне агентство лісових ресурсів України</div>
										</div>
										<div class="form-group">
											<div class="group_label">Коротка назва</div>
											<div>Держлісагентство</div>
										</div>
										<div class="form-group">
											<div class="group_label">Тип</div>
											<div>Центральний</div>
										</div>
										<div class="form-group">
											<div class="group_label">Адреса</div>
											<div>м. Київ, вул. Ш. Руставелі, 9</div>
										</div>
										<div class="form-group">
											<div class="group_label">Телефон</div>
											<div>235-56-20, 235-44-09</div>
										</div>
										<div class="form-group">
											<div class="group_label">Емейл</div>
											<div><a href="mailto:hunter@dklg.gov.ua">hunter@dklg.gov.ua</a></div>
										</div>
										<div class="form-group">
											<div class="group_label">Кількість інспекторів</div>
											<div>680</div>
										</div>
										<div class="form-group">
											<div class="group_label">Рейтинг</div>
											<div><div class="gov_rat">9</div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!--sponsors-->
<section class="sponsors">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-4">
				<a href="http://drs.gov.ua/" target="_blank">
					<img src="img/drs.png" srcset="img/drs@2x.png 2x,		 img/drs@3x.png 3x" alt="Державна регуляторна служба України" class="img-responsive">
				</a>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-4">
				<a href="http://me.gov.ua/" target="_blank">
					<img src="img/sponsor2.png" srcset="img/sponsor2@2x.png 2x, img/sponsor2@3x.png 3x" alt="Міністерство економічного розвитку і торгівлі України" class="img-responsive center-block">
				</a>
			</div>
			<div class="col-xs-12 col-sm-4">
				<a href="http://brdo.com.ua" target="_blank">
					<img src="img/sponsor3.png" srcset="img/sponsor3@2x.png 2x, img/sponsor3@3x.png 3x" alt="Офіс ефективного регулювання" class="img-responsive pull-right">
				</a>
			</div>
		</div>
	</div>
</section>

<!-- footer -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-push-6">
				<div class="footer_contacts">
					<span class="icon-mail-alt"><a href="mailto:ias@brdo.com.ua ">ias@brdo.com.ua </a></span>
					<span class="icon-phonebook"><a href="tel:+38 (093) 564 18 43 ">+38 (093) 564 18 43 </a></span>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-sm-pull-6">
				<p class="copyright">© Офіс ефективного регулювання (BRDO) 2017</p>
			</div>
		</div>
	</div>
</footer>


<!-- faq_modal -->
<div class="modal fade" id="faq_modal" tabindex="-1" role="dialog" aria-labelledby="faq_modal" aria-hidden="true">
	<div class="modal-dialog">
		<button class="close_modal icon-cancel" data-dismiss="modal" aria-label="Close"></button>
		<div class="faq_modal_content">
			<ul class="faq_nav">
				<li class="active"><a href="#tab1" data-toggle="tab" class="icon-home-1"></a></li>
				<li><a href="#tab2" data-toggle="tab" class="icon-chart"></a></li>
				<li><a href="#tab3" data-toggle="tab" class="icon-phonebook"></a></li>
				<li><a href="#tab4" data-toggle="tab" class="icon-profile"></a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active  in" id="tab1">
					<div class="faq_modal_image_wrap">
						<img src="img/faq_img.png" alt="">
					</div>
					<div class="faq_modal_text">
						<div class="faq_modal_text_inner">
							<h2 class="modal_title">Контролюючі органи</h2>
							<p>Дозволяє переглянути перелік органів, їх документи, затверджені річні плани, а також контактні дані посадових осіб, відповідальних за узгодження дат комплексних заходів державного нагляду (контролю).</p>

							<p>Після остаточного затвердження комплексного плану, Ви можете вносити зміни у свої проекти річних планів (поза системою), за виключенням дій, що можуть спричинити наявність розбіжностей з комплексним планом. Такими діями є: - додавання нових суб'єктів до переліку суб'єктів, що підлягають перевірці у наступному плановому періоді; - зміна будь-якої інформації стосовно заходів державного нагляду (контролю) щодо суб'єктів господарювання, які потрапили у план комплексних заходів.</p>
							<p>	Вам необхідно завантажити затверджений річний план Вашого органу ДО 1 грудня 2017 року.</p>
						</div>
					</div>
				</div>
				<div class="tab-pane " id="tab2">
					<div class="faq_modal_image_wrap">
						<img src="img/bg1.jpg" alt="">
					</div>
					<div class="faq_modal_text">
						<div class="faq_modal_text_inner">
							<h2 class="modal_title">Довідково</h2>
							<p>Дозволяє переглянути перелік органів, їх документи, затверджені річні плани, а також контактні дані посадових осіб, відповідальних за узгодження дат комплексних заходів державного нагляду (контролю).</p>
							<p>	Вам необхідно завантажити затверджений річний план Вашого органу ДО 1 грудня 2017 року.</p>
						</div>
					</div>
				</div>
				<div class="tab-pane " id="tab3">
					<div class="faq_modal_image_wrap">
						<img src="img/faq_img.png" alt="">
					</div>
					<div class="faq_modal_text">
						<div class="faq_modal_text_inner">
							<h2 class="modal_title">Законодавство</h2>
							<p>Дозволяє переглянути перелік органів, їх документи, затверджені річні плани, а також контактні дані посадових осіб, відповідальних за узгодження дат комплексних заходів державного нагляду (контролю).</p>
							<p>	Вам необхідно завантажити затверджений річний план Вашого органу ДО 1 грудня 2017 року.</p>
							<p>	Вам необхідно завантажити затверджений річний план Вашого органу ДО 1 грудня 2017 року.</p>
						</div>
					</div>

				</div>
				<div class="tab-pane " id="tab4">
					<div class="faq_modal_image_wrap">
						<img src="img/faq_img.png" alt="">
					</div>
					<div class="faq_modal_text">
						<div class="faq_modal_text_inner">
							<h2 class="modal_title">Контролюючі органи</h2>
							<p>Дозволяє переглянути перелік органів, їх документи, затверджені річні плани, а також контактні дані посадових осіб, відповідальних за узгодження дат комплексних заходів державного нагляду (контролю).</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script>
<script type='text/javascript' src="js/ion.rangeSlider.min.js"></script>
<script type='text/javascript' src="js/sticky-kit.min.js"></script>
<script type='text/javascript' src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script type="text/javascript" src="js/fixedColumns.bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugin.js"></script>
<script type="text/javascript" src="js/drag.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/script-lis.js"></script>
<script type='text/javascript' src="js/script.js"></script>
</body>
</html>