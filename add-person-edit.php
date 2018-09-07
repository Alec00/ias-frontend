<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="create_doc_content">
					<div class="create_doc_body">
						<div class="page_header">
							<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
							<h1 class="page_title">Редагування	суб’єкта господарювання</h1>
						</div>
					</div>

					<div class="result_table_mobile edit_subject">
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								1. <u class="open_result_table">Загальна інформація про суб’єкта</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									<div class="form-group required">
										<label class="control-label" for="subject_status">Статус</label>
										<input type="text" id="subject_status" class="form-control" name="">
										<p class="help-block help-block-error"></p>
									</div>
									<div class="form-group required">
										<label class="control-label" for="subject_name">Назва</label>
										<input type="text" id="subject_name" class="form-control" name="">
										<p class="help-block help-block-error"></p>
									</div>
									<div class="form-group">
										<label class="control-label" for="small_subject_name">Скорочена назва</label>
										<input type="text" id="small_subject_name" class="form-control" name="">
									</div>
									<div class="form-group required width-30">
										<label class="control-label" for="subject_edrpou">Код ЄДРПОУ</label>
										<input type="text" id="subject_edrpou" class="form-control" name="">
										<p class="help-block help-block-error"></p>
									</div>
									<div class="form-group required">
										<label class="control-label" for="subject_address">Адреса суб’єкта господарювання (згідно з ЄДРПОУ)</label>
										<input type="text" id="subject_address" class="form-control" name="">
										<p class="help-block help-block-error"></p>
									</div>
									<div class="form-width-btn width-32">
										<div class="form-group">
											<label class="control-label" for="subject_phone">Телефон </label>
											<input type="tel" id="subject_phone" class="form-control" name="">
										</div>
										<button class="add_block"></button>
									</div>
									<div class="form-group">
										<label class="control-label" for="subject_email">Емейл суб’єкта господарювання назва</label>
										<input type="email" id="subject_email" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="subject_dir">ПІБ директора</label>
										<input type="text" id="subject_dir" class="form-control" name="">
									</div>
									<div class="form-group date_input width-20">
										<label class="control-label" for="">Дата</label>
										<span class="daterange_wrap left_datepicker">
											<input type="text" class="form-control" name="daterange" value="" />
											<i class="icon-calendar date_icon"></i>
										</span>
									</div>
									<div class="form-group">
										<label>Основний КВЕД</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Mustard Mustard MustardMustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
									<div class="form-width-btn">
										<div class="form-group">
											<label>КВЕДи</label>
											<select class="selectpicker" style="width:100%" title="Не обрано …">
												<option>Mustard Mustard MustardMustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</select>
										</div>
										<button class="add_block"></button>
									</div>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								2. <u class="open_result_table">Відокремлені підрозділи суб’єкта</u>
								<button class="add_block"></button>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									<div class="form-group">
										<label class="control-label" for="subject_pidr_name">Найменування відокремленого підрозділу №1</label>
										<input type="text" id="subject_pidr_name" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="subject_pidr_address">Адреса відокремленого підрозділу №1</label>
										<input type="text" id="subject_pidr_address" class="form-control" name="">
									</div>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								3. <u class="open_result_table">Ступінь ризику</u>
								<button class="add_block"></button>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									<div class="form-group width-30">
										<label>Ступінь ризику  №1</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Mustard Mustard MustardMustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="subject_criteria">Критерії</label>
										<input type="text" id="subject_criteria" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="subject_organ">Орган</label>
										<input type="text" id="subject_organ" class="form-control" name="">
									</div>
								</div>
							</div>
						</div>	
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								4. <u class="open_result_table">Спеціальні статуси</u>
								<button class="add_block"></button>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									<div class="form-group">
										<label class="control-label" for="subject_status_name">Назва</label>
										<input type="text" id="subject_status_name" class="form-control" name="">
									</div>
									<div class="form-inline">
										<div class="form-group required date_input width-20">
											<label class="control-label" for="">Дата надання</label>
											<span class="daterange_wrap left_datepicker">
												<input type="text" class="form-control" name="daterange" value="" />
												<i class="icon-calendar date_icon"></i>
											</span>

											<p class="help-block help-block-error"></p>
										</div>
										<div class="form-group required date_input width-20">
											<label class="control-label" for="">Дата припинення дії</label>
											<span class="daterange_wrap left_datepicker">
												<input type="text" class="form-control" name="daterange" value="" />
												<i class="icon-calendar date_icon"></i>
											</span>

											<p class="help-block help-block-error"></p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label" for="subject_status_organ">Орган</label>
										<input type="text" id="subject_status_organ" class="form-control" name="">
									</div>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								5. <u class="open_result_table">Дозвільні докумени</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								6. <u class="open_result_table">Спеціальне право</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								7. <u class="open_result_table">Джерело ризику</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<button type="submit" class="btn btn-primary create_doc_btn">Зберегти інформацю</button>
							</div>
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