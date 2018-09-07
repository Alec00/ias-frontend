<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="create_doc_content">
					<div class="create_doc_body">
						<div class="page_header">
							<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
							<h1 class="page_title">Створити документ</h1>
						</div>


						<form action="/">
							<div class="form-group required">
								<label class="control-label" for="doc_name">Назва</label>
								<input type="text" id="doc_name" class="form-control" name="">
								<p class="help-block help-block-error"></p>
							</div>

							<div class="form-group required width-53">
								<label>Тип</label>
								<select class="selectpicker" style="width:100%" title="Оберіть тип документу…">
									<option>Mustard Mustard MustardMustard</option>
									<option>Ketchup</option>
									<option>Relish</option>
								</select>
								<p class="help-block help-block-error"></p>
							</div>

							<div class="form-inline width-53">
								<div class="form-group required">
									<label class="control-label" for="">Номер</label>
									<input type="text" id="" class="form-control" name="">

									<p class="help-block help-block-error"></p>
								</div>
								<div class="form-group required date_input">
									<label class="control-label" for="">Дата</label>
									<span class="daterange_wrap">
										<input type="text" class="form-control" name="daterange" value="" />
										<i class="icon-calendar date_icon"></i>
									</span>

									<p class="help-block help-block-error"></p>
								</div>
							</div>

							<div class="form-inline width-53">
								<div class="form-group">
									<label class="control-label" for="">Номер в ЄДРНПА</label>
									<input type="text" id="" class="form-control" name="">
								</div>

								<div class="form-group date_input">
									<label class="control-label" for="">Дата в ЄДРНПА</label>
									<span class="daterange_wrap">
										<input type="text" class="form-control" name="daterange" value="" />
										<i class="icon-calendar date_icon"></i>
									</span>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label" for="">Видавник</label>
								<input type="text" id="" class="form-control" name="">
							</div>

							<div class="form-group ">
								<label class="control-label" for="">Посилання</label>
								<input type="text" id="" class="form-control" name="">
								<p class="help-block help-block-error"></p>
							</div>

							<div class="form-group">
								<label class="control-label" for="">Предмет / предмети перевірки, для яких застосовується</label>
								<input type="text" id="" class="form-control" name="">
							</div>

							<div class="form-group">
								<p class="form_note">Зірочки (*) біля назви поля означає, що дане поле необхідне заповнити.</p>
								<button type="submit" class="btn btn-primary create_doc_btn">Створити документ</button>
							</div>
						</form>

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


<!-- create_doc_error_modal -->
<div class="modal fade" id="create_doc_error_modal" tabindex="-1" role="dialog" aria-labelledby="faq_modal" aria-hidden="true">
	<div class="modal-dialog small_modal">
		<button class="close_modal icon-cancel" data-dismiss="modal" aria-label="Close"></button>

		<div class="modal_doc_content">
			<img src="img/doc_add_error.svg" alt="">
			<h2 class="modal_title">Контролюючі органи</h2>
			<p class="modal_note">При створенні вашого документа виникла непередбачена помилка, будь ласка повторіть операцію через 5 хвилин</p>
			<button class="btn btn-primary" data-dismiss="modal" aria-label="Close">Спробувати знову</button>
		</div>
	</div>
</div>

<!-- create_doc_success_modal -->
<div class="modal fade" id="create_doc_success_modal" tabindex="-1" role="dialog" aria-labelledby="faq_modal" aria-hidden="true">
	<div class="modal-dialog small_modal">
		<button class="close_modal icon-cancel" data-dismiss="modal" aria-label="Close"></button>

		<div class="modal_doc_content">
			<img src="img/doc_add_success.svg" alt="">
			<h2 class="modal_title">Документ створений!</h2>
			<p class="modal_note">Ваш документ успішно створений. У будь-який момент ви можете відкоригувати дані у вашому особистому кабінеті.</p>
			<button class="btn btn-primary" data-dismiss="modal" aria-label="Close">До особистого кабінету</button>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>