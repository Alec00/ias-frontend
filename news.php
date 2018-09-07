<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page_header">
					<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
					<h1 class="page_title">Новини IAC</h1>

					<div class="filter_box visible-xs">
						<a href="#" class="sort_link reverse">Сортувати <span class="icon-up-small"></span></a>

						<select class="selectpicker" style="width: 100%">
							<option>Назва</option>
							<option>Дата</option>
						</select>

						<button class="btn btn-primary filter_btn" data-toggle="modal" data-target="#news_filter_modal">Налаштувати фільтр запиту</button>
					</div>

					<p class="summary">Показані <b>1-8</b> із <b>8</b> записів</p>
				</div>
			</div>
			<div class="col-xs-12">
				<table class="news_table table table-bordered table-striped">
					<thead>
						<tr>
							<th>
								<a class="asc" href="#" data-sort="-title">Назва</a>
							</th>
							<th>
								<a href="#" data-sort="date">Дата створення</a>
							</th>
						</tr>
						<tr>
							<td>
								<input type="text" class="form-control" name="DocumentSearch[title]">
							</td>
							<td>
								<span class="daterange_wrap right_datepicker">
									<input type="text" class="form-control" name="daterange" value="" />
									<i class="icon-calendar date_icon"></i>
								</span>
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="#">Відкрито можливість пошуку заходів державного нагляду (контролю) у затверджених планах органів ДНК на 2018 рік</a></td>
							<td>09.12.2018</td>
						</tr>
						<tr>
							<td><a href="#">Внесено зміни до Плану здійснення комплексних заходів державного нагляду (контролю) на 2018 рік</a></td>
							<td>09.12.2018</td>
						</tr>
						<tr>
							<td><a href="#">Щодо внесення змін до Плану здійснення комплексних заходів державного нагляду (контролю) на 2018 рік</a></td>
							<td>09.12.2018</td>
						</tr>
						<tr>
							<td><a href="#">УВАГА! Затверджено План здійснення комплексних заходів державного нагляду (контролю) на 2018 рік</a></td>
							<td>09.12.2018</td>
						</tr>
						<tr>
							<td><a href="#">Щодо підтвердження нових користувачів</a></td>
							<td>09.12.2018</td>
						</tr>
						<tr>
							<td><a href="#">До відома контролюючих органів</a></td>
							<td>09.12.2018</td>
						</tr>
						<tr>
							<td><a href="#">Згенеровано проект Плану здійснення комплексних заходів державного нагляду (контролю) на 2018 рік</a></td>
							<td>09.12.2018</td>
						</tr>
						<tr>
							<td><a href="#">Щодо масового завантаження довідкової інформації</a></td>
							<td>09.12.2018</td>
						</tr>
					</tbody>
				</table>


				<table class="news_table_mobile table table-bordered">
					<tbody>
						<tr>
							<td>
								<p>09.12.2018</p>	<a href="#">Відкрито можливість пошуку заходів державного нагляду (контролю) у затверджених планах органів ДНК на 2018 рік</a>
							</td>
						</tr>
						<tr>
							<td>
								<p>09.12.2018</p><a href="#">Внесено зміни до Плану здійснення комплексних заходів державного нагляду (контролю) на 2018 рік</a>
							</td>
						</tr>
						<tr>
							<td>
								<p>09.12.2018</p><a href="#">Щодо внесення змін до Плану здійснення комплексних заходів державного нагляду (контролю) на 2018 рік</a>
							</td>
						</tr>
						<tr>
							<td>
								<p>09.12.2018</p><a href="#">УВАГА! Затверджено План здійснення комплексних заходів державного нагляду (контролю) на 2018 рік</a>
							</td>
						</tr>
						<tr>
							<td>
								<p>09.12.2018</p><a href="#">Щодо підтвердження нових користувачів</a>
							</td>
						</tr>
						<tr>
							<td>
								<p>09.12.2018</p><a href="#">До відома контролюючих органів</a>
							</td>
						</tr>
						<tr>
							<td>
								<p>09.12.2018</p><a href="#">Згенеровано проект Плану здійснення комплексних заходів державного нагляду (контролю) на 2018 рік</a>
							</td>
						</tr>
						<tr>
							<td>
								<p>09.12.2018</p><a href="#">Щодо масового завантаження довідкової інформації</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#" class="btn btn-primary center-block">Завантажити щє 10 компаній</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-12 hidden-xs">
				<div class="pagination_box">
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
	</div>
</section>


<!-- news_filter_modal -->
<div class="modal fade" id="news_filter_modal" tabindex="-1" role="dialog" aria-labelledby="faq_modal" aria-hidden="true">
	<div class="modal-dialog small_modal">
		<button class="close_modal icon-cancel" data-dismiss="modal" aria-label="Close"></button>

		<div class="modal_filter">
			<h2 class="modal_title">Фільтр запиту</h2>
			<form action="/">
				<div class="form-group required">
					<label class="control-label" for="doc_name">Назва<span>*</span></label>
					<input type="text" id="doc_name" class="form-control" name="">
					<p class="help-block help-block-error"></p>
				</div>
				<div class="form-group date_input">
					<label class="control-label" for="">Дата в ЄДРНПА</label>
					<span class="daterange_wrap">
						<input type="text" class="form-control" name="daterange" value="" />
						<i class="icon-calendar date_icon"></i>
					</span>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary modal_submit">Фільтрувати</button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>