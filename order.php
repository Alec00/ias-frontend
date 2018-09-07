<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page_header">
					<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
					<h1 class="page_title">Накази про внесення змін</h1>
					<p class="summary">Показані <b>1-6</b> із <b>6</b> записів</p>
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
				</div>

				<table class="table table-striped table-bordered visible-lg wide_table">
					<thead>
					<tr>
						<th><a href="#">#</a></th>
						<th><a href="#">Дата</a></th>
						<th><a href="#">Номер</a>
						</th>
						<th><a href="#">Наказ (pdf, jpg)</a></th>
						<th><a href="#">Наказ (xls, xlsx)</a></th>
						<th><a href="#">Річний план зі змінами</a></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td>01.04.2018, 15:25</td>
						<td>33580257</td>
						<td></td>
						<td></td>
						<td><a href="#" class="btn btn_link">Скачати річний план зі змінами</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>01.04.2018, 15:25</td>
						<td>33580257</td>
						<td><a href="#" class="btn btn_link">Скачати наказ</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>3</td>
						<td>01.04.2018, 15:25</td>
						<td>33580257</td>
						<td></td>
						<td><a href="#" class="btn btn_link">Скачати наказ</a></td>
						<td></td>
					</tr>
					</tbody>
				</table>


				<div class="result_table_mobile hidden-lg">
					<div class="result_table_mobile_item">
						<div class="collapse_btn">
							<div><b>30177891</b></div>
							<div>01.04.2018, 15:25</div>
							<button class="open_result_table icon-angle-down"></button>
						</div>
						<div class="result_table_mobile_panel">
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Наказ (pdf, jpg)</div>
								<a href="#" class="btn btn_link">Скачати наказ</a>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Наказ (xls, xlsx)</div>
								<a href="#" class="btn btn_link">Скачати наказ</a>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Річний план зі змінами</div>
								<a href="#" class="btn btn_link">Скачати річний план зі змінами</a>
							</div>
						</div>
					</div>
					<div class="result_table_mobile_item">
						<div class="collapse_btn">
							<div><b>30177891</b></div>
							<div>01.04.2018, 15:25</div>
							<button class="open_result_table icon-angle-down"></button>
						</div>
						<div class="result_table_mobile_panel">
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Наказ (pdf, jpg)</div>
								<a href="#" class="btn btn_link">Скачати наказ</a>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Наказ (xls, xlsx)</div>
								<a href="#" class="btn btn_link">Скачати наказ</a>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Річний план зі змінами</div>
								<a href="#" class="btn btn_link">Скачати річний план зі змінами</a>
							</div>
						</div>
					</div>

					<div class="result_table_mobile_more">
						<a href="#" class="btn btn-primary center-block">Завантажити щє 10 компаній</a>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>