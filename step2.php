<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9 pad_no_mob">
				<div class="create_doc_content">
					<div class="create_doc_body">
						<div class="page_header">
							<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
							<h1 class="page_title">Створити позапланову перевірку <span>№3561</span></h1>
						</div>
					</div>
					<ul class="step_progress">
						<li class="prev_step">Загальні дані</li>
						<li class="active">Посвідчення</li>
						<li>Результати</li>
						<li>Санкції</li>
						<li>Оскарження</li>
					</ul>
					<div class="result_table_mobile edit_subject">
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<u class="open_result_table">Суб`єкт</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
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
											<div class="form-group required">
												<label>Підстава проведення позапланового заходу*</label>
												<select class="selectpicker" style="width:100%" title="Не вибрано">
													<option>Mustard Mustard MustardMustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</select>
												<p class="help-block help-block-error"></p>
											</div>
											<p class="result_table_title">Підстава №4</p>
											<div class="form-group required">
												<label class="control-label" for="">Опис суті звернення</label>
												<input type="text" id="" class="form-control" name="">
												<p class="help-block help-block-error"></p>
											</div>
											<div class="form-inline width-53">
												<div class="form-group required">
													<label class="control-label" for="">Вхідний номер звернення</label>
													<input type="text" id="" class="form-control" name="">
												</div>
												<div class="form-group date_input required">
													<label class="control-label" for="">Дата звернення</label>
													<span class="daterange_wrap opensleft ">
														<input type="text" class="form-control" name="daterange" value="" />
														<i class="icon-calendar date_icon"></i>
													</span>
												</div>
											</div>
											<div class="form-group required">
												<label class="control-label" for="subject_address">Видавник погодження</label>
												<input type="text" id="subject_address" class="form-control" name="">
												<p class="help-block help-block-error"></p>
											</div>
											<div class="form-inline width-53">
												<div class="form-group required">
													<label class="control-label" for="">Номер погодження</label>
													<input type="text" id="" class="form-control" name="">
												</div>
												<div class="form-group date_input required">
													<label class="control-label" for="">Дата погодження</label>
													<span class="daterange_wrap opensleft ">
														<input type="text" class="form-control" name="daterange" value="" />
														<i class="icon-calendar date_icon"></i>
													</span>
												</div>
											</div>
											<div class="form-group">
												<label for="">Файл акту .pdf</label>
												<label class="btn btn_input">додати файл
													<input type="file" style="display: none;">
												</label>
												<span class="">Файл не доданий</span>
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
											<div class="form-group required">
												<label>Підстава проведення позапланового заходу*</label>
												<select class="selectpicker" style="width:100%" title="Не вибрано">
													<option>Mustard Mustard MustardMustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</select>
												<p class="help-block help-block-error"></p>
											</div>
											<p class="result_table_title">Підстава №4</p>
											<div class="form-group required">
												<label class="control-label" for="">Опис суті звернення</label>
												<input type="text" id="" class="form-control" name="">
												<p class="help-block help-block-error"></p>
											</div>
											<div class="form-inline width-53">
												<div class="form-group required">
													<label class="control-label" for="">Вхідний номер звернення</label>
													<input type="text" id="" class="form-control" name="">
												</div>
												<div class="form-group date_input required">
													<label class="control-label" for="">Дата звернення</label>
													<span class="daterange_wrap opensleft ">
														<input type="text" class="form-control" name="daterange" value="" />
														<i class="icon-calendar date_icon"></i>
													</span>
												</div>
											</div>
											<div class="form-group required">
												<label class="control-label" for="subject_address">Видавник погодження</label>
												<input type="text" id="subject_address" class="form-control" name="">
												<p class="help-block help-block-error"></p>
											</div>
											<div class="form-inline width-53">
												<div class="form-group required">
													<label class="control-label" for="">Номер погодження</label>
													<input type="text" id="" class="form-control" name="">
												</div>
												<div class="form-group date_input required">
													<label class="control-label" for="">Дата погодження</label>
													<span class="daterange_wrap opensleft ">
														<input type="text" class="form-control" name="daterange" value="" />
														<i class="icon-calendar date_icon"></i>
													</span>
												</div>
											</div>
											<div class="form-group">
												<label for="">Файл акту .pdf</label>
												<label class="btn btn_input">додати файл
													<input type="file" style="display: none;">
												</label>
												<span class="">Файл не доданий</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<u class="open_result_table">Загальна інформація</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									<div class="form-group">
										<label>Стан перевірки</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Проведено</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="">Підстава недопущення</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="subject_name">Сфера державного нагляду (контролю)</label>
										<input type="text" id="subject_name" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Код заходу державного нагляду (контролю)</label>
										<input type="text" id="" class="form-control" name="">
									</div>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<u class="open_result_table">Інформація про суб’єкт господарювання</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="form-group">
									<label>Тип ідентифікації суб’єкта</label>
									<select class="selectpicker" style="width:100%" title="Не обрано …">
										<option>Проведено</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
								</div>
								<div class="form-group">
									<label>Код згідно з ЄДРПОУ або реєстраційний номер облікової картки платника податків</label>
									<select class="selectpicker" style="width:100%" title="Не обрано …">
										<option>ТОВАРИСТВО З ОБМЕЖЕНОЮ ВІДПОВІДАЛЬНІСТЮ «ПОДОРОЖ БДЖОЛИ»</option>
										<option>Ketchup</option>
										<option>Relish</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="">Серія та номер паспорта</label>
									<input type="text" id="" class="form-control" name="">
								</div>
								<div class="form-group">
									<label class="control-label" for="">Місцезнаходження суб’єкта господарювання</label>
									<input type="text" id="" class="form-control" name="">
								</div>
								<div class="form-group">
									<label class="control-label" for="">Номер телефону суб’єкта господарювання</label>
									<input type="tel" id="" class="form-control" name="">
								</div>
								<div class="form-group">
									<label class="control-label" for="">Адреса електронної пошту суб’єкта господарювання</label>
									<input type="email" id="" class="form-control" name="">
								</div>
								<div class="form-group width-53">
									<label>Ступіть ризику</label>
									<select class="selectpicker" style="width:100%" title="Не обрано …">
										<option>Високий</option>
										<option>Середній</option>
										<option>Низький</option>
									</select>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<u class="open_result_table">Розпорядчий документ, на виконання якого проводиться захід державного нагляду (контролю)</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="form-inline width-53">
									<div class="form-group">
										<label class="control-label" for="">Номер</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group date_input">
										<label class="control-label" for="">Дата</label>
										<span class="daterange_wrap opensleft ">
											<input type="text" class="form-control" name="daterange" value="" />
											<i class="icon-calendar date_icon"></i>
										</span>
									</div>
								</div>
								<div class="form-group">
									<label for="">Файл акту .pdf</label>
									<label class="btn btn_input">додати файл
										<input type="file" style="display: none;">
									</label>
									<span class="">Файл не доданий</span>
								</div>
							</div>
						</div>	
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<u class="open_result_table">Посвідчення (направлення)</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="form-inline width-53">
									<div class="form-group">
										<label class="control-label" for="">Номер</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group date_input">
										<label class="control-label" for="">Дата</label>
										<span class="daterange_wrap opensleft ">
											<input type="text" class="form-control" name="daterange" value="" />
											<i class="icon-calendar date_icon"></i>
										</span>
									</div>
								</div>
								<div class="form-group">
									<label for="">Файл акту .pdf</label>
									<label class="btn btn_input">додати файл
										<input type="file" style="display: none;">
									</label>
									<span class="">Файл не доданий</span>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<u class="open_result_table">Строк проведення заходу державного нагляду (контролю)</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									<div class="form-inline">
										<div class="form-group date_input width-20">
											<label class="control-label" for="">Дата початку</label>
											<span class="daterange_wrap opensleft ">
												<input type="text" class="form-control" name="daterange" value="" />
												<i class="icon-calendar date_icon"></i>
											</span>
										</div>
										<div class="form-group date_input width-20">
											<label class="control-label" for="">Дата завершення</label>
											<span class="daterange_wrap opensleft ">
												<input type="text" class="form-control" name="daterange" value="" />
												<i class="icon-calendar date_icon"></i>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label" for="">Час завершення</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Планова тривалість</label>
										<input type="text" id="" class="form-control" name="">
									</div>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<u class="open_result_table">Особи, що беруть участь у проведенні заходу державного нагляду (контролю)</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									<p class="result_table_title">Посадові особи органу державного нагляду (контролю)</p>
									<div class="form-group">
										<label class="control-label" for="">ПІБ</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Посада</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<p class="result_table_title">Керівник суб’єкта господарювання або уповноважена ним особа</p>
									<div class="form-group">
										<label class="control-label" for="">ПІБ</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Посада</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<p class="result_table_title">Інші особи</p>
									<div class="form-group">
										<label class="control-label" for="">ПІБ</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Посада</label>
										<input type="text" id="" class="form-control" name="">
									</div>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<u class="open_result_table">Дані про останній проведений захід державного нагляду (контролю)</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									<p class="result_table_title">Плановий захід</p>
									<div class="form-group width-53">
										<label>Захід</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Був</option>
											<option>Середній</option>
											<option>Низький</option>
										</select>
									</div>
									<div class="form-inline">
										<div class="form-group date_input width-20">
											<label class="control-label" for="">Дата початку</label>
											<span class="daterange_wrap opensleft ">
												<input type="text" class="form-control" name="daterange" value="" />
												<i class="icon-calendar date_icon"></i>
											</span>
										</div>
										<div class="form-group date_input width-20">
											<label class="control-label" for="">Дата завершення</label>
											<span class="daterange_wrap opensleft ">
												<input type="text" class="form-control" name="daterange" value="" />
												<i class="icon-calendar date_icon"></i>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label" for="">Акт перевірки</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group width-53">
										<label>Припис</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Видавався</option>
											<option>Середній</option>
											<option>Низький</option>
										</select>
									</div>
									<div class="form-group width-53">
										<label>Вимоги припису</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Виконано</option>
											<option>Середній</option>
											<option>Низький</option>
										</select>
									</div>
									<p class="result_table_title">Плановий захід</p>
									<div class="form-group width-53">
										<label>Захід</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Був</option>
											<option>Середній</option>
											<option>Низький</option>
										</select>
									</div>
									<div class="form-inline">
										<div class="form-group date_input width-20">
											<label class="control-label" for="">Дата початку</label>
											<span class="daterange_wrap opensleft ">
												<input type="text" class="form-control" name="daterange" value="" />
												<i class="icon-calendar date_icon"></i>
											</span>
										</div>
										<div class="form-group date_input width-20">
											<label class="control-label" for="">Дата завершення</label>
											<span class="daterange_wrap opensleft ">
												<input type="text" class="form-control" name="daterange" value="" />
												<i class="icon-calendar date_icon"></i>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label" for="">Акт перевірки</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group width-53">
										<label>Припис</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Видавався</option>
											<option>Середній</option>
											<option>Низький</option>
										</select>
									</div>
									<div class="form-group width-53">
										<label>Вимоги припису</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Виконано</option>
											<option>Середній</option>
											<option>Низький</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="result_table_mobile_item">
							<div class="collapse_btn">
								<u class="open_result_table">Інформація про результати заходу державного нагляду (контролю)</u>
								<button class="icon-angle-down open_result_table"></button>
							</div>
							<div class="result_table_mobile_panel">
								<div class="edit_subject_block">
									<p class="result_table_title">Інформація про порушення</p>
									<div class="form-group">
										<label>Вимоги припису</label>
										<select class="selectpicker" style="width:100%" title="Не обрано …">
											<option>Про затвердження уніфікованої форми акта</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="">Стаття (частина, пункт, абзац тощо)</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group">
										<label class="control-label" for="">Детальний опис виявленого порушення</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<p class="result_table_title">Акт, складений за результатами проведення планового (позапланового) заходу державного нагляду (контролю) щодо додержання суб’єктом господарювання вимог законодавства у сфері</p>
									<div class="form-group">
										<label class="control-label" for="">Номер акту</label>
										<input type="text" id="" class="form-control" name="">
									</div>
									<div class="form-group">
										<label for="">Файл акту .pdf</label>
										<label class="btn btn_input">додати файл
											<input type="file" style="display: none;">
										</label>
										<span class="">Файл не доданий</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="create_doc_body">
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block" disabled>Зберегти перевірку</button>
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

<!-- leave_modal -->
<div class="modal fade" id="leave_modal" tabindex="-1" role="dialog" aria-labelledby="leave_modal" aria-hidden="true">
	<div class="modal-dialog small_modal">
		<button class="close_modal icon-cancel" data-dismiss="modal" aria-label="Close"></button>
		<div>
			<h2 class="modal_title">Ви впевнені, що хочете піти?</h2>
			<p class="modal_note">На даний момент не заповнено <br>1 обов'язкове поле та не доданий 1 обов’язкий файл!</p>
			<div class="btn_inline">
				<button class="btn btn_link" data-dismiss="modal" aria-label="Close">Заповнити обов’язкові</button>
				<button class="btn btn-primary" data-dismiss="modal" aria-label="Close">Так, все одно перейти</button>
			</div>
		</div>
	</div>
</div>

<!-- next_step_modal -->
<div class="modal fade" id="next_step_modal" tabindex="-1" role="dialog" aria-labelledby="next_step_modal" aria-hidden="true">
	<div class="modal-dialog small_modal">
		<button class="close_modal icon-cancel" data-dismiss="modal" aria-label="Close"></button>
		<div class="text-center">
			<img src="images/next_step.png" alt="#">
			<ul class="modal_step_progress">
				<li class="complete"></li>
				<li class="half_complete"></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<h2 class="modal_title">Дані збережено!</h2>
			<p class="modal_note">Дані про перевірку збережено.<br>Ви можете перейти до наступного кроку, або <br>перейти до нього трохи пізніше.</p>
			<div class="btn_inline">
				<button class="btn btn_link" data-dismiss="modal" aria-label="Close">Перейти на головну</button>
				<button class="btn btn-primary" data-dismiss="modal" aria-label="Close">Наступний крок</button>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>