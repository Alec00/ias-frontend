<?php include('header-logged.php'); ?>

<section class="main_page_wrap logged_user">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-7">
				<div class="bbody">
					<h1 class="page_title">Особистий кабінет держслужбовця для планування перевірок</h1>
					<div class="icon_question"><a href="#" class="faq_link" data-toggle="modal" data-target="#faq_modal">Як користуватися?</a></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5">
				<div class="main_right_block">
					<article class="last_news">
						<h3 class="last_news_title">Останні новини</h3>
						<ul class="last_news_list">
							<li>
								<span class="news_date">29.12.2017</span>
								<p class="last_news_text"><a href="#">Щодо внесення змін до Плану здійснення комплексних заходів державного нагляду на 2018 рік</a></p>
							</li>
						</ul>
						<div class="bfoot">
							<a href="#" class="">Дивитися всі новини</a>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="user_info_box">
					<p class="user_name">Вітаємо, Олексій Вєсьолкін!</p>
					<p class="user_position">Міністерство екології</p>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="stat_list">
					<div class="stat_box">
						<span class="stat_num">29,850</span>
						<span class="stat_text">затверджених <br>перевірок<span class="hidden-xs"> за 2018 р.</span></span>
					</div>
					<div class="stat_box">
						<span class="stat_num">27,307</span>
						<span class="stat_text">комплексних <br>перевірок <span class="hidden-xs">за 2018 р.</span></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<ul class="user_nav">
					<li class="user_nav_box">
						<div class="user_nav_icon"><span class="icon-folders"></span></div>
						<div class="user_nav_content">
							<h3 class="user_nav_title">Планування</h3>
							<ul class="user_nav_links">
								<li><a href="#">Проекти планів</a></li>
								<li><a href="#">Затверджені</a></li>
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

<!--events-->
<section class="events">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="events_block one_field">
					<form action="#" class="form-inline">
						<div class="form-group">
							<label for="name_company">Назва компанії / ЄДРОПОУ / Ідентифікаційний код</label>
							<input id="name_company" type="text" class="form-control" placeholder="Приклад: ТОВ «Укрсплав»">
						</div>
						<div class="form-group">
							<button class="btn btn-primary">Знайти заходи</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>