<?php include('header.php'); ?>

<section class="main_page_wrap">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-7">
				<div class="bbody">
					<h1 class="page_title">Пілотний модуль для планування заходів державного нагляду (контролю)</h1>
					<p class="page_subtitle hidden-xs">Державна регуляторна служба України спільно з Міністерством економічного розвитку і торгівлі України та за підтримки Офісу ефективного регулювання (BRDO) запустила пілотний модуль планування заходів державного нагляду (контролю) ІАС ДНК.</p>
					<div class="icon_question"><a href="#" class="faq_link" data-toggle="modal" data-target="#faq_modal">Як користуватися?</a></div>
				</div>
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
			<div class="col-xs-12 col-sm-5">
				<div class="main_right_block">
					<article class="last_news">
						<h3 class="last_news_title">Останні новини</h3>
						<ul class="last_news_list">
							<li>
								<span class="news_date">29.12.2017</span>
								<p class="last_news_text"><a href="#">Щодо внесення змін до Плану здійснення комплексних заходів державного нагляду на 2018 рік</a></p>
							</li>
							<li>
								<span class="news_date">29.12.2017</span>
								<p class="last_news_text"><a href="#">Щодо підтвердження нових користувачів</a></p>
							</li>
						</ul>
						<div class="bfoot">
							<a href="#" class="">Дивитися всі новини</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>

<!--events-->
<section class="events">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="events_block">
					<form action="#" class="form-inline">
						<div class="form-group">
							<label for="name_company">Назва компанії / ЄДРОПОУ / Ідентифікаційний код</label>
							<input id="name_company" type="text" class="form-control" placeholder="Приклад: ТОВ «Укрсплав»">
						</div>
						<div class="form-group">
							<label for="odn">Орган державного нагляду (контролю)</label>
							<input id="odn" type="text" class="form-control" placeholder="Приклад: Міністерство екології">
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