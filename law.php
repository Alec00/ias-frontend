<?
/*
 * ЗАБРАЛ!!!! НЕ ИЗМЕНЯТЬ!!!
 */
?>

<?php include('header-inner.php'); ?>

<section class="law_header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<figure class="law_img"><img src="img/law_icon.svg" alt=""></figure>
				<div class="law_header_content">
					<h1 class="page_title">Законодавство</h1>
					<p class="text-muted">Перелік нормативно-правових актів, дотримання вимог яких перевіряється під час здійснення заходів державного нагляду (контролю), та інші нормативно-правові акти у сфері державного нагляду (контролю).</p>
					<div class="inline_btns">
						<a href="#" class="btn btn-primary">Створити документ</a>
						<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="content_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="filter_box hidden-lg">
					<a href="#" class="sort_link reverse">Сортувати <span class="icon-up-small"></span></a>

					<select class="selectpicker" style="width: 100%">
						<option>Назва</option>
						<option>Коротка назва</option>
						<option>Код</option>
						<option>Адреса</option>
						<option>Директор</option>
						<option>Статус</option>
					</select>

					<button class="btn btn-primary filter_btn" data-toggle="modal" data-target="#news_filter_modal">Налаштувати фільтр запиту</button>
				</div>
				<p class="summary">Показані <b>1-20</b> із <b>8 295</b> записів</p>

				<table class="table table-striped table-bordered visible-lg wide_table">
					<thead>
					<tr>
						<th><a href="#">Найменування суб’єкта господарювання</a></th>
						<th><a href="#">Місце провадження господарської діяльності суб'єкта господарювання або його відокремлених підрозділів</a>
						</th>
						<th><a href="#">Ідентифікаційний код юр. особи або реєстраційний номер облікової картки платника податків фізичної особи - підприємця</a></th>
						<th><a href="#">Предмет здійснення заходу державного нагляду </a></th>
						<th><a href="#">Ступінь ризику</a></th>
						<th><a href="#">Дата початку здійснення заходу</a></th>
						<th><a href="#">Строк здійснення заходу</a></th>
						<th><a href="#">Наявність у комплексному плані</a></th>
					</tr>
					<tr>
						<td><input type="text" class="form-control" name=""></td>
						<td><input type="text" class="form-control" name=""></td>
						<td><input type="text" class="form-control" name=""></td>
						<td><input type="text" class="form-control" name=""></td>
						<td><input type="text" class="form-control" name=""></td>
						<td>
							<span class="daterange_wrap right_datepicker">
								<input type="text" class="form-control" name="daterange" value="" />
								<i class="icon-calendar date_icon"></i>
							</span>
						</td>
						<td><input type="text" class="form-control" name=""></td>
						<td>
							<select class="selectpicker" style="width:75px">
								<option>є</option>
								<option>немає</option>
							</select>
						</td>
					</tr>
					</thead>
					<tbody>
					<tr data-key="0">
						<td><a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a></td>
						<td>на всій території України</td>
						<td>33580257</td>
						<td>Дотримання вимог Ліцензійнихумов провадження господарськоїдіяльності з поводження з
							небезпечними відходами
						</td>
						<td>незначний</td>
						<td>12-07-2018</td>
						<td>5</td>
						<td><span class="table_item_status icon-check"></span></td>
					</tr>
					<tr data-key="1">
						<td><a href="/inspection/view?id=22078">ТОВ «НОВОМОСКОВСЬКИЙ ЗАВОД МЕТАЛІВ ТА СПЛАВІВ»</a></td>
						<td>Дніпропетровська обл., Новомосков-ський р-н, смт. Меліоративне, вул. Заводська, 2А</td>
						<td>32062230</td>
						<td>Дотримання вимог Ліцензійнихумов провадження господарськоїдіяльності з поводження з
							небезпечними відходами
						</td>
						<td>незначний</td>
						<td>16-07-2018</td>
						<td>5</td>
						<td><span class="table_item_status icon-check"></span></td>
					</tr>
					<tr data-key="2">
						<td><a href="/inspection/view?id=22079">ТОВ«ЕКОЛОГІЯ УКРАЇНА»</a></td>
						<td>Дніпропетровська обл., с. Новоалек-сандрів-ка, вул. Криворізьке шосе, 32.</td>
						<td>32576064</td>
						<td>Дотримання вимог Ліцензійнихумов провадження господарськоїдіяльності з поводження з
							небезпечними відходами
						</td>
						<td>середній</td>
						<td>01-10-2018</td>
						<td>5</td>
						<td><span class="table_item_status icon-check"></span></td>
					</tr>
					<tr data-key="3">
						<td><a href="/inspection/view?id=22080">ТОВ«ІНКОД»</a></td>
						<td>м.Дніпропетровськ, вул. Будівельників, 34</td>
						<td>36441824</td>
						<td>Дотримання вимог Ліцензійнихумов провадження господарськоїдіяльності з поводження з
							небезпечними відходами
						</td>
						<td>незначний</td>
						<td>01-11-2018</td>
						<td>5</td>
						<td><span class="table_item_status icon-check"></span></td>
					</tr>
					</tbody>
				</table>


				<div class="result_table_mobile hidden-lg">
					<div class="result_table_mobile_item">
						<div class="collapse_btn">
							<a href="#" target="_blank">Приватне підприємство «УКРТЕХГРУП-2006»</a>
							<button class="open_result_table icon-angle-down"></button>
						</div>
						<div class="result_table_mobile_panel">
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Місце провадження господарської діяльності суб'єкта господарювання або його відокремлених підрозділів</div>
								на всій території України
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Ідентифікаційний код юр. особи або реєстраційний номер облікової картки платника податків фізичної особи - підприємця</div>
								32312546
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Предмет здійснення заходу державного нагляду</div>
								Дотримання вимог Ліцензійнихумов провадження господарськоїдіяльності з поводження з небезпечними відходами
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Ступінь ризику</div>
								незначний
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Дата початку здійснення заходу</div>
								незначний
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Строк здійснення заходу</div>
								незначний
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Наявність у комплексному плані</div>
								<span class="table_item_status icon-check"></span>
							</div>
						</div>
					</div>
					<div class="result_table_mobile_item">
						<div class="collapse_btn">
							<a href="#" target="_blank">Приватне підприємство «УКРТЕХГРУП-2006»</a>
							<button class="open_result_table icon-angle-down"></button>
						</div>
						<div class="result_table_mobile_panel">
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Місце провадження господарської діяльності суб'єкта господарювання або його відокремлених підрозділів</div>
								на всій території України
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Ідентифікаційний код юр. особи або реєстраційний номер облікової картки платника податків фізичної особи - підприємця</div>
								32312546
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Предмет здійснення заходу державного нагляду</div>
								Дотримання вимог Ліцензійнихумов провадження господарськоїдіяльності з поводження з небезпечними відходами
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Ступінь ризику</div>
								незначний
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Дата початку здійснення заходу</div>
								незначний
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Строк здійснення заходу</div>
								незначний
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Наявність у комплексному плані</div>
								<span class="table_item_status icon-check"></span>
							</div>
						</div>
					</div>

					<div class="result_table_mobile_more">
						<a href="#" class="btn btn-primary center-block">Завантажити щє 10 компаній</a>
					</div>

				</div>

			</div>
			<div class="col-xs-12 visible-lg">
				<ul class="pagination">
					<li class="prev disabled"><span><i class="icon-angle-left"></i></span></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><span>...</span></li>
					<li><a href="#">10</a></li>
					<li class="next"><a href="#" data-page="1"><i class="icon-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- news_filter_modal -->
<div class="modal fade" id="news_filter_modal" tabindex="-1" role="dialog" aria-labelledby="faq_modal" aria-hidden="true">
	<div class="modal-dialog small_modal">
		<button class="close_modal icon-cancel" data-dismiss="modal" aria-label="Close"></button>

		<div class="modal_filter">
			<h2 class="modal_title">Фільтр запиту</h2>
			<form action="/">
				<div class="form-group">
					<label class="control-label" for="doc_name">Назва</label>
					<input type="text" id="doc_name" class="form-control" name="">
				</div>
				<div class="form-group">
					<label class="control-label" for="doc_name">Коротка назва</label>
					<input type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<label class="control-label" for="doc_name">Код</label>
					<input type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<label class="control-label" for="doc_name">Адреса</label>
					<input type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<label class="control-label" for="doc_name">Директор</label>
					<input type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<label class="control-label" for="doc_name">Статус</label>
					<input type="text" class="form-control" name="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary modal_submit">Фільтрувати</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>