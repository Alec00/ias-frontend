<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9 pad_no_mob">
				<div class="create_doc_content">
					<div class="create_doc_body">
						<ul class="step_progress">
							<li class="active">Позапланова перевірка</li>
							<li>Заход державного нагляду</li>
							<li>Налаштування доступу до документу</li>
						</ul>
						<div class="page_header">
							<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
							<h1 class="page_title">Створити позапланову перевірку <span>№3561</span></h1>
						</div>
						<p class="sub_title">Тип суб'єкта</p>
						<ul class="nav nav-tabs employees_tabs">
							<li class="nav-item active">
								<a class="nav-link active" data-toggle="tab" href="#tab1" aria-expanded="true">Юридична особа</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab2" aria-expanded="false">Фізична особа підприємець</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tab1">
								<div class="form-group required">
									<label class="control-label" for="subject_edrpou">Код ЄДРПОУ</label>
									<input type="text" id="subject_edrpou" class="form-control" name="">
									<p class="help-block help-block-error"></p>
								</div>
								<div class="form-group required">
									<label class="control-label" for="subject_name">Найменування юридичної особи (відокремленого підрозділу) або прізвище, ім’я та по батькові фізичної особи – підприємця</label>
									<input type="text" id="subject_name" class="form-control" name="">
									<p class="help-block help-block-error"></p>
								</div>
								<div class="form-width-btn">
									<div class="form-group required">
										<label class="control-label" for="subject_sub_name">Найменування відокремленого підрозділу (підрозділів), що перевіряється</label>
										<input type="text" id="subject_sub_name" class="form-control" name="" >
										<p class="help-block help-block-error"></p>
									</div>
									<button class="add_block"></button>
								</div>
								<div class="form-width-btn">
									<div class="form-group required">
										<label class="control-label" for="subject_obj_name">Найменування об'єкту (об'єктів), що перевіряються*</label>
										<input type="text" id="subject_obj_name" class="form-control" name="" >
										<p class="help-block help-block-error"></p>
									</div>
									<button class="add_block"></button>
								</div>
								<div class="form-group required">
									<label class="control-label" for="subject_address">Місцезнаходження суб’єкта господарювання (згідно з ЄДРПОУ)</label>
									<input type="text" id="subject_address" class="form-control" name="">
									<p class="help-block help-block-error"></p>
								</div>
								<div class="form-group required">
									<label class="control-label" for="subject_address_per">Місцезнаходження суб’єкта господарювання (за яким здійснюватиметься перевірка)</label>
									<input type="text" id="subject_address_per" class="form-control" name="">
									<p class="help-block help-block-error"></p>
								</div>
								<div class="form-group width-40">
									<label class="control-label" for="subject_phone">Номер телефону суб’єкта господарювання</label>
									<input type="tel" id="subject_phone" class="form-control" name="">
								</div>
								<div class="form-group">
									<label class="control-label" for="subject_email">Адреса електронної пошти суб’єкта господарювання</label>
									<input type="email" id="subject_email" class="form-control" name="">
								</div>
								<div class="form-group required width-40">
									<label>Ступінь ризику</label>
									<select class="selectpicker" style="width:100%" title="Не вибрано">
										<option>Mustard Mustard MustardMustard</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
									<p class="help-block help-block-error"></p>
								</div>
							</div>
							<div class="tab-pane fade" id="tab2">
								<div class="form-group required">
									<label class="control-label" for="subject_fiz_edrpou">РНОКПП</label>
									<input type="text" id="subject_fiz_edrpou" class="form-control" name="">
									<p class="help-block help-block-error"></p>
								</div>
								<div class="form-group required">
									<label class="control-label" for="subject_fiz_name">Найменування фізичної особи</label>
									<input type="text" id="subject_fiz_name" class="form-control" name="">
									<p class="help-block help-block-error"></p>
								</div>
								<div class="form-group required">
									<label class="control-label" for="subject_fiz_address">Місцезнаходження суб’єкта господарювання</label>
									<input type="text" id="subject_fiz_address" class="form-control" name="">
									<p class="help-block help-block-error"></p>
								</div>
								<div class="form-group required">
									<label class="control-label" for="subject_fiz_address_per">Місцезнаходження суб’єкта господарювання (за яким здійснюватиметься перевірка)</label>
									<input type="text" id="subject_fiz_address_per" class="form-control" name="">
									<p class="help-block help-block-error"></p>
								</div>
								<div class="form-group width-40">
									<label class="control-label" for="subject_fiz_phone">Номер телефону суб’єкта господарювання</label>
									<input type="tel" id="subject_fiz_phone" class="form-control" name="">
								</div>
								<div class="form-group">
									<label class="control-label" for="subject_fiz_email">Адреса електронної пошти суб’єкта господарювання</label>
									<input type="email" id="subject_fiz_email" class="form-control" name="">
								</div>
								<div class="form-group required width-40">
									<label>Ступінь ризику</label>
									<select class="selectpicker" style="width:100%" title="Не вибрано">
										<option>Mustard Mustard MustardMustard</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
									<p class="help-block help-block-error"></p>
								</div>
							</div>
						</div>
					</div>
					<div class="create_doc_body">
						<div class="form-group required">
							<label>Підстава проведення позапланового заходу</label>
							<select class="selectpicker" style="width:100%" title="Не вибрано">
								<option>Підстава №4</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
							<p class="help-block help-block-error"></p>
						</div>
					</div>
					<div class="create_doc_body">
						<p class="sub_title">Підстава №4</p>
						<div class="form-group required">
							<label class="control-label" for="treatment">Опис суті звернення</label>
							<input type="text" id="treatment" class="form-control" name="">
							<p class="help-block help-block-error"></p>
						</div>
						<div class="form-inline width-53">
							<div class="form-group">
								<label class="control-label" for="">Вхідний номер звернення*</label>
								<input type="text" id="" class="form-control" name="">
							</div>
							<div class="form-group date_input">
								<label class="control-label" for="">Дата звернення*</label>
								<span class="daterange_wrap opensleft ">
									<input type="text" class="form-control" name="daterange" value="" />
									<i class="icon-calendar date_icon"></i>
								</span>
							</div>
						</div>
						<div class="form-group required">
							<label class="control-label" for="publisher">Видавник погодження</label>
							<input type="text" id="publisher" class="form-control" name="">
							<p class="help-block help-block-error"></p>
						</div>
						<div class="form-inline width-53">
							<div class="form-group">
								<label class="control-label" for="">Номер погодження*</label>
								<input type="text" id="" class="form-control" name="">
							</div>
							<div class="form-group date_input">
								<label class="control-label" for="">Дата погодження*</label>
								<span class="daterange_wrap opensleft ">
									<input type="text" class="form-control" name="daterange" value="" />
									<i class="icon-calendar date_icon"></i>
								</span>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary create_doc_btn">Створити перевірку</button>
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

<?php include('footer.php'); ?>