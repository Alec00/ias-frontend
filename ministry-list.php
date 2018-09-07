<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page_header">
					<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
					<h1 class="page_title">Перелік суб'єктів господарювання</h1>
					<a href="#" class="back_link"><span class="icon-left-small"></span>Державна інспекція ядерного регулювання України</a>
				</div>
			</div>
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
				<p class="summary">Показані <b>1-6</b> із <b>6</b> записів</p>
				<table class="table table-striped table-bordered visible-lg">
					<thead>
					<tr>
						<th>#</th>
						<th>
							<a href="#" data-sort="title">Назва</a>
						</th>
						<th>
							<a href="#" data-sort="title">Коротка назва</a>
						</th>
						<th>
							<a href="#" data-sort="title">Код</a>
						</th>
						<th>
							<a href="#" data-sort="number">Адреса</a>
						</th>
						<th>
							<a href="#" data-sort="director">Директор</a>
						</th>
						<th>
							<a href="#" data-sort="status">Статус</a>
						</th>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" class="form-control" name="">
						</td>
						<td>
							<input type="text" class="form-control" name="">
						</td>
						<td>
							<input type="text" class="form-control" name="">
						</td>
						<td>
							<input type="text" class="form-control" name="">
						</td>
						<td>
							<input type="text" class="form-control" name="">
						</td>
						<td>
							<input type="text" class="form-control" name="">
						</td>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td><a href="#">ТОВАРИСТВО З ОБМЕЖЕНОЮ ВІДПОВІДАЛЬНІСТЮ " ПОДОРОЖ БДЖОЛИ"</a></td>
						<td>ТОВ " ПОДОРОЖ БДЖОЛИ "</td>
						<td>30177891</td>
						<td>02100, м. Київ,
							бульвар Верховної
							Ради,3</td>
						<td>Гелевера Наталія
							Василівна</td>
						<td>зареєстровано</td>
					</tr>
					<tr>
						<td>2</td>
						<td><a href="#">ТОВАРИСТВО З ОБМЕЖЕНОЮ ВІДПОВІДАЛЬНІСТЮ " ПОДОРОЖ БДЖОЛИ"</a></td>
						<td>ТОВ " ПОДОРОЖ БДЖОЛИ "</td>
						<td>30177891</td>
						<td>02100, м. Київ,
							бульвар Верховної
							Ради,3</td>
						<td>Гелевера Наталія
							Василівна</td>
						<td>зареєстровано</td>
					</tr>
					</tbody>
				</table>
				<div class="result_table_mobile hidden-lg">
					<div class="result_table_mobile_item">
						<div class="collapse_btn">
							<a href="#" target="_blank">Про використання ядерної енергії та радіаційну безпеку</a>
							<button class="open_result_table icon-angle-down"></button>
						</div>
						<div class="result_table_mobile_panel">
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Коротка назва</div>
								ТОВ " ПОДОРОЖ БДЖОЛИ "
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Код</div>
								3356565
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Адреса</div>
								02100, м. Київ,
								бульвар Верховної
								Ради,3
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Директор</div>
								Гелевера Наталія
								Василівна
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Статус</div>
								зареєстровано
							</div>
						</div>
					</div>
					<div class="result_table_mobile_item">
						<div class="collapse_btn">
							<a href="#" target="_blank">Про використання ядерної енергії та радіаційну безпеку</a>
							<button class="open_result_table icon-angle-down"></button>
						</div>
						<div class="result_table_mobile_panel">
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Коротка назва</div>
								ТОВ " ПОДОРОЖ БДЖОЛИ "
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Код</div>
								3356565
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Адреса</div>
								02100, м. Київ,
								бульвар Верховної
								Ради,3
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Директор</div>
								Гелевера Наталія
								Василівна
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Статус</div>
								зареєстровано
							</div>
						</div>
					</div>
				</div>
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