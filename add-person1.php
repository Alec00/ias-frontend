<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9 pad_no_mob">
				<div class="create_doc_content">
					<div class="create_doc_body">
						<div class="page_header">
							<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
							<h1 class="page_title">Додати суб’єкт господарювання</h1>
						</div>
						<form action="/">
							<div class="form-group required">
								<label class="control-label" for="doc_name">Код суб’єкту господарювання*</label>
								<input type="text" id="doc_name" class="form-control" name="">
								<p class="help-block help-block-error"></p>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn_grey create_doc_btn">Шукати</button>
							</div>
						</form>
					</div>
					<div class="create_doc_body">
						<div class="form-group required">
							<label class="control-label" for="subject_name">Назва</label>
							<input type="text" id="subject_name" class="form-control" name="" disabled placeholder="Приватне Акціонерне Товариство «Київстар»">
							<p class="help-block help-block-error"></p>
						</div>
						<div class="form-group">
							<label class="control-label" for="small_subject_name">Скорочена назва</label>
							<input type="text" id="small_subject_name" class="form-control" name="" disabled placeholder="ПРАТ «Київстар»">
						</div>
						<div class="form-group required width-30">
							<label class="control-label" for="subject_edrpou">Код ЄДРПОУ</label>
							<input type="text" id="subject_edrpou" class="form-control" name="" disabled placeholder="21673832">
							<p class="help-block help-block-error"></p>
						</div>
						<div class="form-group required">
							<label class="control-label" for="subject_address">Адреса</label>
							<input type="text" id="subject_address" class="form-control" name="" disabled placeholder="03113, м.Київ, Шевченківський район, ВУЛИЦЯ ДЕГТЯРІВСЬКА, будинок 53">
							<p class="help-block help-block-error"></p>
						</div>
						<div class="form-group">
							<label class="control-label" for="small_subject_name">ПІБ директора</label>
							<input type="text" id="small_subject_name" class="form-control" name="" disabled placeholder="Чернишов Петро Анатолійович">
						</div>
						<div class="form-group required">
							<label class="control-label" for="subject_status">Статус</label>
							<input type="text" id="subject_status" class="form-control" name="" disabled placeholder="зареєстровано">
							<p class="help-block help-block-error"></p>
						</div>
						<div class="form-group required width-53">
							<label>Критерії ризику</label>
							<select class="selectpicker" style="width:100%" title="Не обрано …">
								<option>Mustard Mustard MustardMustard</option>
								<option>Ketchup</option>
								<option>Relish</option>
							</select>
							<p class="help-block help-block-error"></p>
						</div>
						<div class="form-group required">
							<label class="control-label" for="subject_kved">Види діяльності</label>
							<input type="text" id="subject_kved" class="form-control" name="">
							<p class="help-block help-block-error"></p>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary create_doc_btn">Додати</button>
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