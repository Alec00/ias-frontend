<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page_header">
					<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
					<h1 class="page_title">Органи державного нагляду і контролю</h1>
					<p class="summary">Показані <b>1-20</b> із <b>8 295</b> записів</p>
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

				<table class="table table-striped table-bordered visible-lg wide_table">
					<thead>
					<tr>
						<th>
							<a href="/regulator/index?sort=name" data-sort="name">Назва органу</a>
						</th>
						<th>
							<a href="/regulator/index?sort=type" data-sort="type">Тип</a>
						</th>
						<th>
							<a href="/regulator/index?sort=site" data-sort="site">Сайт</a>
						</th>
						<th>
							<a href="/regulator/index?sort=address" data-sort="address">Адреса</a>
						</th>
						<th>
							<a href="/regulator/index?sort=phone" data-sort="phone">Телефон</a>
						</th>
						<th>
							<a href="/regulator/index?sort=email" data-sort="email">Емейл</a>
						</th>
						<th>
							<a href="/regulator/index?sort=parent_name" data-sort="parent_name">Центральний контролюючий орган</a>
						</th>
						<th>
							<a href="/regulator/index?sort=email" data-sort="email">ПІБ відповідальної	особи</a>
						</th>
						<th>
							<a href="/regulator/index?sort=email" data-sort="email">Емейл відповідальної особи</a>
						</th>
						<th>
							<a href="/regulator/index?sort=phone" data-sort="phone">Телефон</a>
						</th>
						<th class="result_table_action"></th>
					</tr>
					<tr id="w0-filters" class="filters">
						<td><input type="text" class="form-control" name="Regulator[name]"></td>
						<td>
							<select id="regulator-type" class="selectpicker" name="Regulator[type]" style="width:75px" title="Виберіть тип...">
								<option value="central">Центральний</option>
								<option value="local">Місцевий</option>
								<option value="territorial">Територіальний</option>
							</select>
						</td>
						<td><input type="text" class="form-control" name="Regulator[site]"></td>
						<td><input type="text" class="form-control" name="Regulator[address]"></td>
						<td><input type="text" class="form-control" name="Regulator[phone]"></td>
						<td><input type="text" class="form-control" name="Regulator[email]"></td>
						<td><input type="text" class="form-control" name="Regulator[parent_name]"></td>
						<td><input type="text" class="form-control" name="Regulator[parent_name]"></td>
						<td><input type="text" class="form-control" name="Regulator[parent_name]"></td>
						<td><input type="text" class="form-control" name="Regulator[parent_name]"></td>
						<td> </td>
					</tr>
				</thead>
					<tbody>
					<tr data-key="3">
						<td>
							<a href="/regulator/view?id=3">Міністерство аграрної політики та продовольства України</a>
						</td>
						<td>Центральний</td>
						<td></td>
						<td>01001, м.Київ, вул. Хрещатик, 24</td>
						<td>(044) 279-84-74, (044) 278-11-98</td>
						<td><a href="mailto:info@minagro.gov.ua">info@minagro.gov.ua</a></td>
						<td>Управління Державної служби України з питань праці</td>
						<td>Матвійчук Юрій Петрович</td>
						<td>license@mvs.gov.ua</td>
						<td>(044) 256-16-93</td>
						<td class="result_table_action">
							<a href="#" class="table_action_btn doc_btn icon-compl-check" data-toggle="tooltip" data-placement="top" title="Переглянути затверджений річний план"></a>
							<a href="#" class="table_action_btn doc_btn icon-download_file" data-toggle="tooltip" data-placement="top" title="Завантажити затверджений річний план"></a>
							<a href="#" class="table_action_btn doc_btn icon-notplaned-check" data-toggle="tooltip" data-placement="top" title="Завантажити затверджений річний план"></a>
						</td>
					</tr>
					<tr data-key="4">
						<td><a href="/regulator/view?id=4">Міністерство внутрішніх справ України</a></td>
						<td>Центральний</td>
						<td><a href="http://mvs.gov.ua" target="_blank" class="icon-globe"></a></td>
						<td>01601, м. Київ, вул. Академіка Богомольця, 10</td>
						<td>(044) 254-96-14</td>
						<td><a href="mailto:license@mvs.gov.ua">license@mvs.gov.ua</a></td>
						<td></td>
						<td>Худошина
							Ольга
							Валентинівна</td>
						<td></td>
						<td>(044) 256-16-93</td>
						<td class="result_table_action">
							<a href="#" class="table_action_btn doc_btn icon-compl-check" data-toggle="tooltip" data-placement="top" title="Переглянути затверджений річний план"></a>
							<a href="#" class="table_action_btn doc_btn icon-download_file" data-toggle="tooltip" data-placement="top" title="Завантажити затверджений річний план"></a>
						</td>
					</tr>
					<tr data-key="5">
						<td><a href="/regulator/view?id=5">Міністерство екології та природних ресурсів України</a></td>
						<td>Центральний</td>
						<td><a href="https://menr.gov.ua/" target="_blank" class="icon-globe"></a></td>
						<td>03035, м.Київ, вул. Митрополита Василя Липківського, 35</td>
						<td>(044) 206-31-64</td>
						<td><a href="mailto:Secretar@menr.gov.ua">Secretar@menr.gov.ua</a></td>
						<td>Управління Державної служби України з питань праці</td>
						<td></td>
						<td></td>
						<td></td>
						<td class="result_table_action">
							<a href="#" class="table_action_btn doc_btn icon-compl-check" data-toggle="tooltip" data-placement="top" title="Переглянути затверджений річний план"></a>
							<a href="#" class="table_action_btn doc_btn icon-download_file" data-toggle="tooltip" data-placement="top" title="Завантажити затверджений річний план"></a>
						</td>
					</tr>
					<tr data-key="6">
						<td><a href="/regulator/view?id=6">Міністерство економічного розвитку і торгівлі України</a>
						</td>
						<td>Центральний</td>
						<td><a href="www.me.gov.ua" target="_blank" class="icon-globe"></a></td>
						<td>01008, м. Київ, вул. М. Грушевського, 12/2</td>
						<td>(044) 253-93-94</td>
						<td><a href="mailto:meconome@me.gov.ua">meconome@me.gov.ua</a></td>
						<td></td>
						<td></td>
						<td>svizhevska@mon.gov.ua</td>
						<td></td>
						<td class="result_table_action">
							<a href="#" class="table_action_btn doc_btn icon-compl-check" data-toggle="tooltip" data-placement="top" title="Переглянути затверджений річний план"></a>
							<a href="#" class="table_action_btn doc_btn icon-download_file" data-toggle="tooltip" data-placement="top" title="Завантажити затверджений річний план"></a>
						</td>
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
								<div class="result_table_caption">Тип</div>
								Центральний
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Сайт</div>
								<a href="#">site.com</a>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Адреса</div>
								02100, м. Київ,
								бульвар Верховної
								Ради,3
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Телефон</div>
								(044) 279-84-74, (044) 278-11-98
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Емейл</div>
								<a href="mailto:info@minagro.gov.ua">info@minagro.gov.ua</a>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Центральний контролюючий орган</div>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">ПІБ відповідальної особи</div>
								Матвійчук Юрій Петрович
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Емейл відповідальної особи</div>
								license@mvs.gov.ua
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Телефон відповідальної особи</div>
								(044) 256-16-93
							</div>
							<div class="result_table_mobile_cell action_btns">
								<a href="#" class="btn btn_link icon_right">Завантажити річний план <span class="icon-download_file"></span></a> <br>
								<a href="#" class="btn btn-primary icon_right">Переглянути річний план <span class="icon-compl-check"></span></a>
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
								<div class="result_table_caption">Тип</div>
								Центральний
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Сайт</div>
								<a href="#">site.com</a>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Адреса</div>
								02100, м. Київ,
								бульвар Верховної
								Ради,3
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Телефон</div>
								(044) 279-84-74, (044) 278-11-98
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Емейл</div>
								<a href="mailto:info@minagro.gov.ua">info@minagro.gov.ua</a>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Центральний контролюючий орган</div>
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">ПІБ відповідальної особи</div>
								Матвійчук Юрій Петрович
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Емейл відповідальної особи</div>
								license@mvs.gov.ua
							</div>
							<div class="result_table_mobile_cell">
								<div class="result_table_caption">Телефон відповідальної особи</div>
								(044) 256-16-93
							</div>
							<div class="result_table_mobile_cell action_btns">
								<a href="#" class="btn btn_link icon_right">Завантажити річний план <span class="icon-download_file"></span></a> <br>
								<a href="#" class="btn btn-primary icon_right">Переглянути річний план <span class="icon-compl-check"></span></a>
							</div>
						</div>
					</div>
					<div class="result_table_mobile_more">
						<a href="#" class="btn btn-primary center-block">Завантажити щє 10 органів</a>
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