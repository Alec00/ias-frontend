<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page_head">
					<h1 class="page_title">Імпортувати суб’єкти господарювання</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="create_doc_content">
					<div class="create_sub_body_wrap">
						<div class="create_sub_body">
							<form class="box" method="post" action="" enctype="multipart/form-data">
								<div class="bimg">
									<img src="img/add_icon.svg" alt="#">
								</div>
								<div class="btext">Перетягніть файл з суб’єктами господарювання у виділену область, або додайте файл <span>(xls, xlsx)</span></div>
								<div class="box__input">
									<input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
									<label for="file" class="btn btn-primary btn-sm">Додайте файл</label>
								</div>
								<div class="box__uploading">
									<div class="preloader">
										<div class="preloader_body">
											<div class="preloader_bar">
												<img src="img/load.svg" alt="#" class="animate-spin">
												<div class="my-progress-bar circular-progress-bar">
												</div>
											</div>
											<p class="preloader_text">Будь-ласка зачекайт декілька секунд. Ваш файл завантажується! </p>
										</div>
									</div>
								</div>
								<div class="box__success">Done!</div>
								<div class="box__error">Error! <span></span>.</div>
							</form>
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