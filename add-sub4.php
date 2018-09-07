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
	<link rel="stylesheet" href="css/style-sub.css" />
	<link rel="stylesheet" href="css/bootstrap-select.min.css" />
</head>
<body class="has_message inner_page subj_page">

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

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page_head">
					<h1 class="page_title">Додати суб’єкт господарювання</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="create_doc_content">
					<div class="add_sub_body opened">
						<h2 class="add_sub_title"><a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1" class="">1. Інформація про суб’єкт господарювання</a></h2>
						<button class="edit_btn"></button>
						<div class="collapse in" id="collapseExample1">
							<div class="hidden_edit">
								<div class="form-group">
									<div class="group_label">Тип</div>
									<div>Юридична особа</div>
								</div>
								<div class="form-group">
									<div class="group_label">Найменування суб’єкта господарювання</div>
									<div>Товариство з Обмеженою Відповідальністю «ІГОР БОРИСОВИЧ ГЕРМЕС» </div>
								</div>
								<div class="form-group">
									<div class="group_label">Скорочена назва</div>
									<div>ТОВ «ІГОР БОРИСОВИЧ ГЕРМЕС»</div>
								</div>
								<div class="form-group">
									<div class="group_label">Код ЄДРПОУ</div>
									<div>12345678</div>
								</div>
								<div class="form-group">
									<div class="group_label">Адреса</div>
									<div>65117, Одеська обл., місто Одеса, Суворовський район вулиця Затонського буд. 10 кв. 154</div>
								</div>
								<div class="form-group">
									<div class="group_label">Директор</div>
									<div>Хоменко Андрій Іванович</div>
								</div>
								<div class="form-group">
									<div class="group_label">Статус</div>
									<div>Припинено</div>
								</div>
							</div>
						
							<div class="visible_edit">
								<ul class="nav nav-tabs change_tabs three_tab">
									<li class="nav-item active">
										<a class="nav-link" data-toggle="tab" href="#ur" aria-expanded="true">Юридична особа</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#fiz" aria-expanded="false">Фізична особа</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#fiz_pasp" aria-expanded="false">Фіз. особа без ідентифікаційного коду</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade active in" id="ur">
										<form action="#">
											<div class="form-group required">
												<label class="control-label" for="tin">Код ЄДРПОУ суб’єкта господарювання</label>
												<div class="search_form">
													<input type="text" id="tin" class="form-control" name="">
													<button class="btn_search"></button>
													<p class="help-block help-block-error"></p>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane fade" id="fiz">
										<form action="#">
											<div class="form-group required">
												<label class="control-label" for="tin">РНОКПП фізичної особи</label>
												<div class="search_form">
													<input type="text" id="tin" class="form-control" name="">
													<button class="btn_search"></button>
													<p class="help-block help-block-error"></p>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane faden" id="fiz">
										<form action="#">
											<div class="form-group required">
												<label class="control-label" for="fiz_pasp">Серія та номер паспорта фізичної особи</label>
												<div class="search_form">
													<input type="text" id="tin" class="form-control" name="">
													<button class="btn_search"></button>
													<p class="help-block help-block-error"></p>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="line"></div>
								<div class="form-group-head">
									<div class="form-group required">
										<label class="control-label" for="subject_name">Найменування суб’єкта господарювання</label>
										<input type="text" id="subject_name" class="form-control" name=""  placeholder="ТОВ «ІГОР БОРИСОВИЧ ГЕРМЕС»">
										<p class="help-block help-block-error"></p>
									</div>
									<div class="form-group">
										<label class="control-label" for="small_subject_name">Скорочена назва</label>
										<input type="text" id="small_subject_name" class="form-control" name=""  placeholder="ТОВ «ІГОР БОРИСОВИЧ ГЕРМЕС»">
									</div>
									<div class="form-group required">
										<label class="control-label" for="subject_edrpou">Код ЄДРПОУ</label>
										<input type="text" id="subject_edrpou" class="form-control" name=""  placeholder="12345678">
										<p class="help-block help-block-error"></p>
									</div>
									<div class="form-group required">
										<label class="control-label" for="subject_address">Адреса</label>
										<input type="text" id="subject_address" class="form-control" name=""  placeholder="65117, Одеська обл., місто Одеса, Суворовський район вулиця Затонського буд. 10 кв. 154 ">
										<p class="help-block help-block-error"></p>
									</div>
									<div class="form-group">
										<label class="control-label" for="small_subject_name">ПІБ директора</label>
										<input type="text" id="small_subject_name" class="form-control" name=""  placeholder="Хоменко Андрій Іванович">
									</div>
									<div class="form-group required">
										<label class="control-label" for="subject_status">Статус</label>
										<input type="text" id="subject_status" class="form-control" name=""  placeholder="Припинено">
										<p class="help-block help-block-error"></p>
									</div>
									<div class="form-group">
										<div class="inform_block">Збережені дані зберігаються на сторінці «Чернетки» та не публікуються в загальному списку суб’єктів господарювання  доти, доки ви зе натисните на кнопку «Завантажити суб’єкт господарювання» </div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block close_edit" >Зберегти дані про суб’єкт господарювання</button>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="add_sub_body opened">
						<h2 class="add_sub_title"><a role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2" class="">2. Об’єкти суб’єкта господарювання</a></h2>
						<button class="edit_btn"></button>
						<div class="collapse in" id="collapseExample2">
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th><a href="#">#</a></th>
											<th><a href="#">Об’єкт</a></th>
											<th><a href="#">Підрозділ</a></th>
											<th><a href="#">Адреса</a></th>
											<th><a href="#">Дата останньої планової перевірки</a></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="#" target="_blank">Газо-розподільча станція</a></td>
											<td>
												<a href="#" class="hidden_edit">нежитлове приміщення № 41 ательє № 3, та нежитлового  …</a>
												<div class="visible_edit">
													<select class="selectpicker" style="width:250px" title="нежитлове приміщення № 41 ательє № 3, та нежитлового  …"  data-style="form-control" data-dropupAuto="false">
														<option>нежитлове приміщення № 41 ательє № 3, та нежитлового  …</option>
														<option>Mustard Mustard MustardMustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
											</td>
											<td>01021, м.Київ, Печерський район, Кловський узвіз, будинок 9/1</td>
											<td>09-05-2018</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="#" target="_blank">Київська діагностична дільниця</a></td>
											<td>
												<a href="#" class="hidden_edit">нежитлове приміщення № 41 ательє № 3, та нежитлового  …</a>
												<div class="visible_edit">
													<select class="selectpicker" style="width:250px" title="нежитлове приміщення № 41 ательє № 3, та нежитлового  …"  data-style="form-control" data-dropupAuto="false">
														<option>нежитлове приміщення № 41 ательє № 3, та нежитлового  …</option>
														<option>Mustard Mustard MustardMustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
											</td>
											<td>01021, м.Київ, Печерський район, Кловський узвіз, будинок 9/1</td>
											<td>09-05-2018</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="#" target="_blank">Водогрійні котли</a></td>
											<td>
												<div class="visible_edit">
													<select class="selectpicker" style="width:250px" title="Не обрано" data-style="form-control" data-dropupAuto="false">
														<option>Не обрано</option>
														<option>Mustard Mustard MustardMustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
											</td>
											<td>01021, м.Київ, Печерський район, Кловський узвіз, будинок 9/1</td>
											<td>09-05-2018</td>
										</tr>
										<tr class="visible_edit">
											<td></td>
											<td><a href="#" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#add_obj">Додайте об’єкт</a></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="form-group visible_edit">
								<button class="btn btn-primary btn-block close_edit">Зберегти об’єкти суб’єкта господарювання</button>
							</div>
						</div>
					</div>	
					<div class="add_sub_body opened">
						<h2 class="add_sub_title"><a role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3" class="">3. Відокремлені підрозділи суб’єкта господарювання</a></h2>
						<button class="edit_btn"></button>
						<div class="collapse in" id="collapseExample3">
							<div class="table-responsive">
								<table class="table table-bordered table_striped">
									<thead>
										<tr>
											<th><a href="#">#</a></th>
											<th><a href="#">Підрозділ</a></th>
											<th><a href="#">Об’єкт</a></th>
											<th><a href="#">Адреса</a></th>
											<th><a href="#">Дата останньої планової перевірки</a></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="3">1</td>
											<td rowspan="3"><a href="#" target="_blank">нежитлове приміщення № 41 ательє № 3, та нежитлового приміщення ательє № 3</a></td>
											<td></td>
											<td>01021, м.Київ, Печерський район, Кловський узвіз, будинок 9/1</td>
											<td>
												<div class="hidden_edit"></div>
												<div class="visible_edit">
													<span class="daterange_wrap">
														<input type="text" class="form-control" name="daterange" value="">
														<i class="icon-calendar date_icon"></i>
													</span>
												</div>
											</td>
										</tr>
										<tr>
											<td><a href="#">Газо-розподільча станція</a></td>
											<td>01021, м.Київ, Печерський район, Кловський узвіз, будинок 9/1</td>
											<td>09-05-2018</td>
										</tr>
										<tr>
											<td><a href="#">Київська діагностична дільниця</a></td>
											<td>01021, м.Київ, Печерський район, Кловський узвіз, будинок 9/1</td>
											<td>09-05-2018</td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td rowspan="3">2</td>
											<td rowspan="3"><a href="#" target="_blank">нежитлове приміщення № 41 ательє № 3, та нежитлового приміщення ательє № 3</a></td>
											<td></td>
											<td>01021, м.Київ, Печерський район, Кловський узвіз, будинок 9/1</td>
											<td>
												<div class="hidden_edit"></div>
												<div class="visible_edit">
													<span class="daterange_wrap">
														<input type="text" class="form-control" name="daterange" value="">
														<i class="icon-calendar date_icon"></i>
													</span>
												</div>
											</td>
										</tr>
										<tr>
											<td><a href="#">Водогрійні котли</a></td>
											<td>01021, м.Київ, Печерський район, Кловський узвіз, будинок 9/1</td>
											<td>09-05-2018</td>
										</tr>
										<tr>
											<td><a href="#">Газо-розподільча станція</a></td>
											<td>01021, м.Київ, Печерський район, Кловський узвіз, будинок 9/1</td>
											<td>09-05-2018</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="form-group visible_edit">
								<button class="btn btn-primary btn-block close_edit">Зберегти відокремлені підрозділи суб’єкта господарювання</button>
							</div>
						</div>
					</div>
					<div class="add_sub_body opened">
						<h2 class="add_sub_title"><a role="button" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4" class="">4. Дата проведення останньої планової перевірки</a></h2>
						<button class="edit_btn"></button>
						<div class="collapse in" id="collapseExample4">
							<div class="form-group hidden_edit">
								<div class="group_label">Дата проведення останньої планової перевірки</div>
								<div>29.08.2018</div>
							</div>
							<div class="visible_edit">
								<div class="radio">
									<div class="radio-section inline">
										<span class="checkbox-group">
											<input type="radio" id="radio1" class="radio_btn" name="optionsRadios" value="no_vef">
											<label for="radio1">не проведено</label>
										</span>
										<span class="checkbox-group">
											<input type="radio" id="radio2" class="radio_btn" name="optionsRadios" value="vef">
											<label for="radio2">проведено</label>
										</span>
									</div>
									<div class="form-group verif_close date_input">
										<span class="daterange_wrap">
											<input type="text" class="form-control" name="daterange" value="">
											<i class="icon-calendar date_icon"></i>
										</span>
									</div>
								</div>
								<div class="form-group foot_btn">
									<button class="btn btn-primary btn-block close_edit">Зберегти дати проведення останньої планової / позапланової перевірки суб’єкта господарювання</button>
								</div>
							</div>
						</div>
					</div>
					<div class="add_sub_body">
						<div class="form-group-head">
							<a href="#" class="btn btn_link btn-block">Завантажити суб’єкт господарювання</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3">
				<ul class="user_nav side_user_nav">
					<li class="user_nav_box">
						<div class="user_nav_icon"><span class="icon-folders"></span></div>
						<div class="user_nav_content">
							<h3 class="user_nav_title">Планування</h3>
							<ul class="user_nav_links">
								<li><a href="#" data-toggle="modal" data-target="#create_doc_error_modal">Проекти планів</a></li>
								<li><a href="#" data-toggle="modal" data-target="#create_doc_success_modal">Затверджені</a></li>
							</ul>
						</div>
					</li>
					<li class="user_nav_box">
						<div class="user_nav_icon"><span class="icon-folder_add"></span></div>
						<div class="user_nav_content">
							<h3 class="user_nav_title">Позапланові</h3>
							<ul class="user_nav_links">
								<li><a href="#">Внести інформацію про перевірки</a></li>
							</ul>
						</div>
					</li>
					<li class="user_nav_box">
						<div class="user_nav_icon"><span class="icon-group"></span></div>
						<div class="user_nav_content">
							<h3 class="user_nav_title">Адміністування</h3>
							<ul class="user_nav_links">
								<li><a href="#">Співробітники</a></li>
								<li><a href="#">Контролюючі органи</a></li>
							</ul>
						</div>
					</li>
					<li class="user_nav_box">
						<div class="user_nav_icon"><span class="icon-group"></span></div>
						<div class="user_nav_content">
							<h3 class="user_nav_title">Адміністування</h3>
							<ul class="user_nav_links">
								<li><a href="#">Співробітники</a></li>
								<li><a href="#">Контролюючі органи</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="add_obj">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn_close" data-dismiss="modal" aria-label="Close"></button>
							<h4 class="modal-title">Додати об’єкт</h4>
						</div>
						<div class="modal-body">
							<div class="">
								<label>Виберить об’єкт з наявних</label>
								<select class="selectp live_search" data-width="100%" title="Не обрано" data-live-search="true" data-style="form-control">
									<option data-tokens="ПРИВАТНЕ АКЦІОНЕРНЕ ТОВАРИСТВО КИЇВСТАР">ПРИВАТНЕ АКЦІОНЕРНЕ ТОВАРИСТВО "КИЇВСТАР"</option>
									<option data-tokens="КИЇВСЬКА ФІЛІЯ ПрАТ КИЇВСТАР">КИЇВСЬКА ФІЛІЯ ПрАТ «КИЇВСТАР»</option>
									<option data-tokens="ТОВ Київстар">ТОВ "Київстар"</option>
									<option data-tokens="ПРИВАТНЕ АКЦІОНЕРНЕ ТОВАРИСТВО КИЇВСТАР">ПРИВАТНЕ АКЦІОНЕРНЕ ТОВАРИСТВО "КИЇВСТАР"</option>
									<option data-tokens="КИЇВСЬКА ФІЛІЯ ПрАТ КИЇВСТАР">КИЇВСЬКА ФІЛІЯ ПрАТ «КИЇВСТАР»</option>
									<option data-tokens="ТОВ Київстар">ТОВ "Київстар"</option>
									<option data-tokens="ПРИВАТНЕ АКЦІОНЕРНЕ ТОВАРИСТВО КИЇВСТАР">ПРИВАТНЕ АКЦІОНЕРНЕ ТОВАРИСТВО "КИЇВСТАР"</option>
									<option data-tokens="КИЇВСЬКА ФІЛІЯ ПрАТ КИЇВСТАР">КИЇВСЬКА ФІЛІЯ ПрАТ «КИЇВСТАР»</option>
									<option data-tokens="ТОВ Київстар">ТОВ "Київстар"</option>
								</select>
								<div class="live_search_foot">
									<a href="" class="btn btn-primary btn-block">Додати об’єкт суб’єкта господарювання</a>
									<a href="" class="btn btn_link btn-block add_obj_new">Створити новий об’єкт суб’єкта господарювання</a>
								</div>
								<p class="help-block help-block-error"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="add_obj_new">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn_close" data-dismiss="modal" aria-label="Close"></button>
							<div class="form-group">
								<h4 class="modal-title">Додати об’єкт</h4>
							</div>
							<div class="">
								<label>Виберить об’єкт з наявних</label>
								<select class="selectpicker" style="width:100%" title="Не обрано">
									<option>Не обрано</option>
									<option>Mustard Mustard MustardMustard</option>
									<option>Ketchup</option>
									<option>Relish</option>
								</select>
								<p class="help-block help-block-error"></p>
							</div>
						</div>
						<div class="modal-body">
							<div class="form-group required">
								<label class="control-label" >Назва об’єкту</label>
								<input type="text" class="form-control" name="">
								<p class="help-block help-block-error"></p>
							</div>
							<div class="form-group required">
								<label>Тип об’єкту</label>
								<select class="selectpicker" style="width:100%" title="Не обрано">
									<option>Не обрано</option>
									<option>Mustard Mustard MustardMustard</option>
									<option>Ketchup</option>
									<option>Relish</option>
								</select>
								<p class="help-block help-block-error"></p>
							</div>
							<div class="form-group required">
								<label class="control-label">Адреса об’єкту</label>
								<input type="text" class="form-control" name="">
								<p class="help-block help-block-error"></p>
							</div>
							<div class="form-group required">
								<label class="control-label" for="">Дата проведення останньої планової перевірки</label>
								<span class="daterange_wrap date_input">
									<input type="text" class="form-control" name="daterange" value="" />
									<i class="icon-calendar date_icon"></i>
								</span>

								<p class="help-block help-block-error"></p>
							</div>
							<div class="foot_btn">
								<a href="" class="btn btn-primary btn-block">Додати новий об’єкт суб’єкта господарювання</a>
							</div>
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
<script type='text/javascript' src="js/bootstrap-select.min.js"></script>
<script type='text/javascript' src="js/ion.rangeSlider.min.js"></script>
<script type='text/javascript' src="js/sticky-kit.min.js"></script>
<script type='text/javascript' src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script type="text/javascript" src="js/fixedColumns.bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugin.js"></script>
<script type="text/javascript" src="js/drag.js"></script>
<script type="text/javascript" src="js/script_sub.js"></script>
<script type='text/javascript' src="js/script.js"></script>
</body>
</html>