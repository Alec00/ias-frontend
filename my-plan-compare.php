<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page_header">
					<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
					<h1 class="page_title">Мій план перевірок</h1>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<h3 class="plan_title">План перевірок контролюючого органу</h3>
				<ul class="list-group plan_list">
					<li class="list-group-item"><span class="icon-doc"></span>План перевірок контролюючого органу ( <a	href="#">xls</a> / <a href="#">pdf</a> )</li>
					<li class="list-group-item"><span class="icon-doc"></span>Проект плану перевірок КО (згідно з комплексним). 2018 ( <a href="#">xls</a> / <a href="#">pdf</a> )</li>
					<li class="list-group-item"><span class="icon-doc"></span>Затверджений річний план перевірок. 2018 ( <a	href="#">xls</a> / <a href="#">pdf</a> )</li>
				</ul>
			</div>
			<div class="col-xs-12 col-md-6">
				<h3 class="plan_title">План комплексних перевірок</h3>
				<ul class="list-group plan_list">
					<li class="list-group-item"><span class="icon-doc"></span>План перевірок контролюючого органу ( <a	href="#">xls</a> / <a href="#">pdf</a> )</li>
					<li class="list-group-item"><span class="icon-doc"></span>Проект плану перевірок КО (згідно з комплексним). 2018 ( <a href="#">xls</a> / <a href="#">pdf</a> )</li>
					<li class="list-group-item"><span class="icon-doc"></span>Затверджений річний план перевірок. 2018 ( <a	href="#">xls</a> / <a href="#">pdf</a> )</li>
				</ul>
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

				<div class="table_block">
					<div class="visible-lg">
						<a href="#" class="custom_link">Помилки</a>
						<ul class="nav nav-tabs control_tabs">
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab1" aria-expanded="true">В стадії припинення</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab2" aria-expanded="false">Не вдалося знайти</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" data-toggle="tab" href="#tab3" aria-expanded="true">Не співпадає з КП</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="tab-content">
					<div class="tab-pane fade" id="tab1">
						<div class="summary">Показані <b>1-20</b> із <b>8 295</b> записів</div>

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
						<th><a href="#">Помилка</a></th>
						<th><a href="#">Примітка</a></th>
						<th class="result_table_action"><a href="#"></a></th>
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
						<td>
							<select class="selectpicker" style="width:75px">
								<option>є</option>
								<option>немає</option>
							</select>
						</td>
						<td><input type="text" class="form-control" name=""></td>
						<td class="result_table_action"></td>
					</tr>
					</thead>
					<tbody>
					<tr data-key="0">
						<td>
							<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
							<div><span class="icon-compl-plan plan_icon"></span></div>
						</td>
						<td>на всій території України</td>
						<td>33580257</td>
						<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
						<td>незначний</td>
						<td>12-07-2018</td>
						<td>5</td>
						<td><span class="table_item_status icon-check"></span></td>
						<td></td>
						<td></td>
						<td class="result_table_action">
							<a href="#" class="table_action_btn icon-details" data-toggle="tooltip" data-placement="top" title="Переглянути план"></a>
							<a href="#" class="table_action_btn icon-pencil" data-toggle="tooltip" data-placement="top" title="Редагувати план"></a>
							<a href="#" class="table_action_btn icon-exchange" data-toggle="tooltip" data-placement="top" title="Порівняти з комплексним планом"></a>
						</td>
					</tr>
					<tr data-key="1">
						<td>
							<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
							<div><span class="icon-notplaned-check plan_icon"></span></div>
						</td>
						<td>на всій території України</td>
						<td>33580257</td>
						<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
						<td>незначний</td>
						<td>12-07-2018</td>
						<td>5</td>
						<td><span class="table_item_status icon-check"></span></td>
						<td></td>
						<td></td>
						<td class="result_table_action">
							<a href="#" class="table_action_btn icon-details" data-toggle="tooltip" data-placement="top" title="Переглянути план"></a>
							<a href="#" class="table_action_btn icon-pencil" data-toggle="tooltip" data-placement="top" title="Редагувати план"></a>
						</td>
					</tr>
					<tr data-key="2">
						<td>
							<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
							<div><span class="icon-compl-check plan_icon"></span></div>
						</td>
						<td>на всій території України</td>
						<td>33580257</td>
						<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
						<td>незначний</td>
						<td style="background-color: rgba(255, 165, 0, 0.1); color: #cc8400;">12-07-2018</td>
						<td style="background-color: #de3f32; color: #fff;">5</td>
						<td><span class="table_item_status icon-check"></span></td>
						<td></td>
						<td></td>
						<td class="result_table_action">
							<a href="#" class="table_action_btn icon-details" data-toggle="tooltip" data-placement="top" title="Переглянути план"></a>
							<a href="#" class="table_action_btn icon-pencil" data-toggle="tooltip" data-placement="top" title="Редагувати план"></a>
							<a href="#" class="table_action_btn icon-exchange" data-toggle="tooltip" data-placement="top" title="Порівняти з комплексним планом"></a>
						</td>
					</tr>
					<tr data-key="3">
						<td>
							<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
							<div><span class="icon-compl-check plan_icon"></span></div>
						</td>
						<td>на всій території України</td>
						<td>33580257</td>
						<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
						<td>незначний</td>
						<td style="background-color: rgba(255, 165, 0, 0.1); color: #cc8400;">12-07-2018</td>
						<td style="background-color: #de3f32; color: #fff;">5</td>
						<td><span class="table_item_status icon-check"></span></td>
						<td></td>
						<td></td>
						<td class="result_table_action"></td>
					</tr>
					</tbody>
				</table>
						<ul class="pagination visible-lg">
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
					<div class="tab-pane fade" id="tab2">
						<div class="summary">Показані <b>1-20</b> із <b>8 295</b> записів</div>
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
								<th><a href="#">Помилка</a></th>
								<th><a href="#">Примітка</a></th>
								<th class="result_table_action"><a href="#"></a></th>
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
								<td>
									<select class="selectpicker" style="width:75px">
										<option>є</option>
										<option>немає</option>
									</select>
								</td>
								<td><input type="text" class="form-control" name=""></td>
								<td class="result_table_action"></td>
							</tr>
							</thead>
							<tbody>
							<tr data-key="0">
								<td>
									<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
									<div><span class="icon-compl-plan plan_icon"></span></div>
								</td>
								<td>на всій території України</td>
								<td>33580257</td>
								<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
								<td>незначний</td>
								<td>12-07-2018</td>
								<td>5</td>
								<td><span class="table_item_status icon-check"></span></td>
								<td></td>
								<td></td>
								<td class="result_table_action">
									<a href="#" class="table_action_btn icon-details" data-toggle="tooltip" data-placement="top" title="Переглянути план"></a>
									<a href="#" class="table_action_btn icon-pencil" data-toggle="tooltip" data-placement="top" title="Редагувати план"></a>
									<a href="#" class="table_action_btn icon-exchange" data-toggle="tooltip" data-placement="top" title="Порівняти з комплексним планом"></a>
								</td>
							</tr>
							<tr data-key="1">
								<td>
									<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
									<div><span class="icon-notplaned-check plan_icon"></span></div>
								</td>
								<td>на всій території України</td>
								<td>33580257</td>
								<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
								<td>незначний</td>
								<td>12-07-2018</td>
								<td>5</td>
								<td><span class="table_item_status icon-check"></span></td>
								<td></td>
								<td></td>
								<td class="result_table_action">
									<a href="#" class="table_action_btn icon-details" data-toggle="tooltip" data-placement="top" title="Переглянути план"></a>
									<a href="#" class="table_action_btn icon-pencil" data-toggle="tooltip" data-placement="top" title="Редагувати план"></a>
								</td>
							</tr>
							<tr data-key="2">
								<td>
									<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
									<div><span class="icon-compl-check plan_icon"></span></div>
								</td>
								<td>на всій території України</td>
								<td>33580257</td>
								<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
								<td>незначний</td>
								<td style="background-color: rgba(255, 165, 0, 0.1); color: #cc8400;">12-07-2018</td>
								<td style="background-color: #de3f32; color: #fff;">5</td>
								<td><span class="table_item_status icon-check"></span></td>
								<td></td>
								<td></td>
								<td class="result_table_action">
									<a href="#" class="table_action_btn icon-details" data-toggle="tooltip" data-placement="top" title="Переглянути план"></a>
									<a href="#" class="table_action_btn icon-pencil" data-toggle="tooltip" data-placement="top" title="Редагувати план"></a>
									<a href="#" class="table_action_btn icon-exchange" data-toggle="tooltip" data-placement="top" title="Порівняти з комплексним планом"></a>
								</td>
							</tr>
							<tr data-key="3">
								<td>
									<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
									<div><span class="icon-compl-check plan_icon"></span></div>
								</td>
								<td>на всій території України</td>
								<td>33580257</td>
								<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
								<td>незначний</td>
								<td style="background-color: rgba(255, 165, 0, 0.1); color: #cc8400;">12-07-2018</td>
								<td style="background-color: #de3f32; color: #fff;">5</td>
								<td><span class="table_item_status icon-check"></span></td>
								<td></td>
								<td></td>
								<td class="result_table_action"></td>
							</tr>
							</tbody>
						</table>
						<ul class="pagination visible-lg">
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
					<div class="tab-pane fade active in" id="tab3">
						<div class="summary">Показані <b>1-20</b> із <b>8 295</b> записів</div>
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
								<th><a href="#">Помилка</a></th>
								<th><a href="#">Примітка</a></th>
								<th class="result_table_action"><a href="#"></a></th>
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
								<td>
									<select class="selectpicker" style="width:75px">
										<option>є</option>
										<option>немає</option>
									</select>
								</td>
								<td><input type="text" class="form-control" name=""></td>
								<td class="result_table_action"></td>
							</tr>
							</thead>
							<tbody>
							<tr data-key="0">
								<td>
									<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
									<div><span class="icon-compl-plan plan_icon"></span></div>
								</td>
								<td>на всій території України</td>
								<td>33580257</td>
								<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
								<td>незначний</td>
								<td>12-07-2018</td>
								<td>5</td>
								<td><span class="table_item_status icon-check"></span></td>
								<td></td>
								<td></td>
								<td class="result_table_action">
									<a href="#" class="table_action_btn icon-details" data-toggle="tooltip" data-placement="top" title="Переглянути план"></a>
									<a href="#" class="table_action_btn icon-pencil" data-toggle="tooltip" data-placement="top" title="Редагувати план"></a>
									<a href="#" class="table_action_btn icon-exchange" data-toggle="tooltip" data-placement="top" title="Порівняти з комплексним планом"></a>
								</td>
							</tr>
							<tr data-key="1">
								<td>
									<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
									<div><span class="icon-notplaned-check plan_icon"></span></div>
								</td>
								<td>на всій території України</td>
								<td>33580257</td>
								<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
								<td>незначний</td>
								<td>12-07-2018</td>
								<td>5</td>
								<td><span class="table_item_status icon-check"></span></td>
								<td></td>
								<td></td>
								<td class="result_table_action">
									<a href="#" class="table_action_btn icon-details" data-toggle="tooltip" data-placement="top" title="Переглянути план"></a>
									<a href="#" class="table_action_btn icon-pencil" data-toggle="tooltip" data-placement="top" title="Редагувати план"></a>
								</td>
							</tr>
							<tr data-key="2">
								<td>
									<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
									<div><span class="icon-compl-check plan_icon"></span></div>
								</td>
								<td>на всій території України</td>
								<td>33580257</td>
								<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
								<td>незначний</td>
								<td style="background-color: rgba(255, 165, 0, 0.1); color: #cc8400;">12-07-2018</td>
								<td style="background-color: #de3f32; color: #fff;">5</td>
								<td><span class="table_item_status icon-check"></span></td>
								<td></td>
								<td></td>
								<td class="result_table_action">
									<a href="#" class="table_action_btn icon-details" data-toggle="tooltip" data-placement="top" title="Переглянути план"></a>
									<a href="#" class="table_action_btn icon-pencil" data-toggle="tooltip" data-placement="top" title="Редагувати план"></a>
									<a href="#" class="table_action_btn icon-exchange" data-toggle="tooltip" data-placement="top" title="Порівняти з комплексним планом"></a>
								</td>
							</tr>
							<tr data-key="3">
								<td>
									<a href="/inspection/view?id=22077">Приватне підприємство «УКРТЕХГРУП-2006»</a>
									<div><span class="icon-compl-check plan_icon"></span></div>
								</td>
								<td>на всій території України</td>
								<td>33580257</td>
								<td>додержання законодавства у сфері провадження туроператорської діяльності</td>
								<td>незначний</td>
								<td style="background-color: rgba(255, 165, 0, 0.1); color: #cc8400;">12-07-2018</td>
								<td style="background-color: #de3f32; color: #fff;">5</td>
								<td><span class="table_item_status icon-check"></span></td>
								<td></td>
								<td></td>
								<td class="result_table_action"></td>
							</tr>
							</tbody>
						</table>
						<ul class="pagination visible-lg">
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

			<div class="col-xs-12">

				<div class="result_table_mobile hidden-lg">
					<div class="result_table_mobile_item compare_items">
						<div class="collapse_btn">
							<a href="#" target="_blank">Приватне підприємство «УКРТЕХГРУП-2006»</a>
							<button class="open_result_table icon-angle-down"></button>
						</div>
						<div class="result_table_mobile_panel">
							<p class="mobile_title">Порівняння з комплексним планом</p>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Назва</div>
								<div class="compare_plan_row">
									<div class="compare_plan_cell"><a href="#">Товариство з обмеженою відповідальністю "ВМГ РАЙЗЕН"</a></div>
									<div class="compare_plan_cell">
										<a href="#">Товариство з обмеженою відповідальністю "ВМГ РАЙЗЕН"</a>
										<div><span class="icon-compl-check plan_icon"></span></div>
									</div>
								</div>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Місце провадження господарської діяльності суб'єкта господарювання або його відокремлених підрозділів</div>
								<div class="compare_plan_row">
									<div class="compare_plan_cell">просп. Визволителів, 3, приміщення 5, пов. 4,м. Київ, 02125</div>
									<div class="compare_plan_cell">просп. Визволителів, 3, приміщення 5, пов. 4,м. Київ, 02125</div>
								</div>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Ідентифікаційний код юр. особи або реєстраційний номер облікової картки платника податків фізичної особи - підприємця</div>
								<div class="compare_plan_row">
									<div class="compare_plan_cell">32312546</div>
									<div class="compare_plan_cell">32312546</div>
								</div>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Предмет здійснення заходу державного нагляду</div>
								<div class="compare_plan_row">
									<div class="compare_plan_cell">Дотримання вимог Ліцензійнихумов провадження господарськоїдіяльності з поводження з небезпечними відходами</div>
									<div class="compare_plan_cell">Дотримання вимог Ліцензійнихумов провадження господарськоїдіяльності з поводження з небезпечними відходами</div>
								</div>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Ступінь ризику</div>
								<div class="compare_plan_row">
									<div class="compare_plan_cell">незначний</div>
									<div class="compare_plan_cell">незначний</div>
								</div>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Дата початку здійснення заходу</div>
								<div class="compare_plan_row" style="background-color: rgba(255, 165, 0, 0.1); color: #cc8400;">
									<div class="compare_plan_cell">22-01-2018</div>
									<div class="compare_plan_cell">22-01-2018</div>
								</div>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Строк здійснення заходу</div>
								<div class="compare_plan_row" style="background-color: #de3f32; color: #fff;">
									<div class="compare_plan_cell">5</div>
									<div class="compare_plan_cell">5</div>
								</div>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Наявність у комплексному плані</div>
								<div class="compare_plan_row">
									<div class="compare_plan_cell"><span class="table_item_status icon-check"></span></div>
									<div class="compare_plan_cell"><span class="table_item_status icon-check"></span></div>
								</div>
							</div>
							<div class="result_table_mobile_cell action_btns">
								<a href="#" class="btn btn-primary">Вийти з порівняння</a>
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
							<div class="result_table_mobile_cell action_btns">
								<a href="#" class="btn btn_link">Редагувати перевірку</a>
								<a href="#" class="btn btn-primary">Переглянути детальніше</a>
							</div>
						</div>
					</div>
					<div class="result_table_mobile_more">
						<a href="#" class="btn btn-primary center-block">Завантажити щє 10 суб’єктів</a>
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