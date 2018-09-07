<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page_header">
					<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
					<h1 class="page_title">Співробітники контролюючого органу</h1>
				</div>
			</div>
			<div class="col-xs-12">

				<ul class="nav nav-tabs employees_tabs">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#tab1" aria-expanded="true">Актуальті співробітники</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tab2" aria-expanded="false">Відхилені співробітники</a>
					</li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane fade active in" id="tab1">

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
						<th><a href="#">Логін</a></th>
						<th><a href="#">Емейл</a></th>
						<th><a href="#">ПІБ</a></th>
						<th><a href="#">Створено </a></th>
						<th><a href="#">Контролюючий орган</a></th>
						<th></th>
					</tr>
					<tr>
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
						<td>	</td>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>netepchuk.dsp@ukr.net</td>
						<td><a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a></td>
						<td>Нетепчук Дмитро Олександрович</td>
						<td>06-11-2017, 13:36:06</td>
						<td>Міністерство економічного розвитку і торгівлі України</td>
						<td>
							<div class="inline_btns">
								<a href="#" class="btn btn-primary">Підтвердити</a>
								<a href="#" class="btn btn_link">Відхилити</a>
							</div>
						</td>
					</tr>
					<tr>
						<td>netepchuk.dsp@ukr.net</td>
						<td><a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a></td>
						<td>Нетепчук Дмитро Олександрович</td>
						<td>06-11-2017, 13:36:06</td>
						<td>Міністерство економічного розвитку і торгівлі України</td>
						<td>
							<div class="inline_btns">
								<a href="#" class="btn btn-danger">Анулювати</a>
								<a href="#" class="btn btn_link">Відхилити</a>
							</div>
						</td>
					</tr>
					<tr>
						<td>netepchuk.dsp@ukr.net</td>
						<td><a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a></td>
						<td>Нетепчук Дмитро Олександрович</td>
						<td>06-11-2017, 13:36:06</td>
						<td>Міністерство економічного розвитку і торгівлі України</td>
						<td>
							<div class="inline_btns">
								<a href="#" class="btn btn-primary">Підтвердити</a>
								<a href="#" class="btn btn_link">Відхилити</a>
							</div>
						</td>
					</tr>
					</tbody>
				</table>
						<div class="result_table_mobile hidden-lg">
							<div class="result_table_mobile_item">
								<div class="collapse_btn">
									Нетепчук Дмитро Олександрович
									<button class="open_result_table icon-angle-down"></button>
								</div>
								<div class="result_table_mobile_panel">
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Логін</div>
										netepchuk.dsp@ukr.net
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Емейл</div>
										<a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a>
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Створено</div>
										06-11-2017, 13:36:06
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Контролюючий орган</div>
										Міністерство економічного розвитку і торгівлі України
									</div>
									<div class="result_table_mobile_cell action_btns">
										<a href="#" class="btn btn-primary">Підтвердити</a>
										<a href="#" class="btn btn_link">Відхилити</a>
									</div>
								</div>
							</div>

							<div class="result_table_mobile_item">
								<div class="collapse_btn">
									Нетепчук Дмитро Олександрович
									<button class="open_result_table icon-angle-down"></button>
								</div>
								<div class="result_table_mobile_panel">
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Логін</div>
										netepchuk.dsp@ukr.net
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Емейл</div>
										<a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a>
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Створено</div>
										06-11-2017, 13:36:06
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Контролюючий орган</div>
										Міністерство економічного розвитку і торгівлі України
									</div>
									<div class="result_table_mobile_cell action_btns">
										<a href="#" class="btn btn-primary">Підтвердити</a>
										<a href="#" class="btn btn_link">Відхилити</a>
									</div>
								</div>
							</div>

							<div class="result_table_mobile_more">
								<a href="#" class="btn btn-primary center-block">Завантажити щє 10 компаній</a>
							</div>

						</div>

					</div>

					<div class="tab-pane fade" id="tab2">

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
								<th><a href="#">Логін</a></th>
								<th><a href="#">Емейл</a></th>
								<th><a href="#">ПІБ</a></th>
								<th><a href="#">Створено </a></th>
								<th><a href="#">Контролюючий орган</a></th>
								<th></th>
							</tr>
							<tr>
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
								<td>	</td>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>netepchuk.dsp@ukr.net</td>
								<td><a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a></td>
								<td>Нетепчук Дмитро Олександрович</td>
								<td>06-11-2017, 13:36:06</td>
								<td>Міністерство економічного розвитку і торгівлі України</td>
								<td>
									<a href="#" class="btn btn-primary">Повернути</a>
								</td>
							</tr>
							<tr>
								<td>netepchuk.dsp@ukr.net</td>
								<td><a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a></td>
								<td>Нетепчук Дмитро Олександрович</td>
								<td>06-11-2017, 13:36:06</td>
								<td>Міністерство економічного розвитку і торгівлі України</td>
								<td>
									<a href="#" class="btn btn-primary">Повернути</a>
								</td>
							</tr>
							<tr>
								<td>netepchuk.dsp@ukr.net</td>
								<td><a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a></td>
								<td>Нетепчук Дмитро Олександрович</td>
								<td>06-11-2017, 13:36:06</td>
								<td>Міністерство економічного розвитку і торгівлі України</td>
								<td>
									<a href="#" class="btn btn-primary">Повернути</a>
								</td>
							</tr>
							</tbody>
						</table>

						<div class="result_table_mobile hidden-lg">
							<div class="result_table_mobile_item">
								<div class="collapse_btn">
									Нетепчук Дмитро Олександрович
									<button class="open_result_table icon-angle-down"></button>
								</div>
								<div class="result_table_mobile_panel">
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Логін</div>
										netepchuk.dsp@ukr.net
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Емейл</div>
										<a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a>
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Створено</div>
										06-11-2017, 13:36:06
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Контролюючий орган</div>
										Міністерство економічного розвитку і торгівлі України
									</div>
									<div class="result_table_mobile_cell action_btns">
										<a href="#" class="btn btn-primary">Повернути</a>
									</div>
								</div>
							</div>

							<div class="result_table_mobile_item">
								<div class="collapse_btn">
									Нетепчук Дмитро Олександрович
									<button class="open_result_table icon-angle-down"></button>
								</div>
								<div class="result_table_mobile_panel">
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Логін</div>
										netepchuk.dsp@ukr.net
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Емейл</div>
										<a href="mailto:netepchuk.dsp@ukr.net">netepchuk.dsp@ukr.net</a>
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Створено</div>
										06-11-2017, 13:36:06
									</div>
									<div class="result_table_mobile_cell">
										<div class="result_table_caption">Контролюючий орган</div>
										Міністерство економічного розвитку і торгівлі України
									</div>
									<div class="result_table_mobile_cell action_btns">
										<a href="#" class="btn btn-primary">Повернути</a>
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