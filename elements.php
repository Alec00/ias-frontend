<?php include('header-inner.php'); ?>

<link href="https://getbootstrap.com/docs/3.3/assets/css/docs.min.css" rel="stylesheet">

<style>
	.bs-glyphicons li {
		font-size: 18px;
	}
</style>

<div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<div class="form-group">
					<label for="">Назва <span>*</span></label>
					<input type="text" class="form-control">
				</div>

				<div class="form-inline">
					<div class="form-group date_input">
						<span class="daterange_wrap">
							<input type="text" class="form-control" name="daterange" value="" />
							<i class="icon-calendar date_icon"></i>
						</span>
					</div>

					<div class="form-group date_input">
						<span class="daterange_wrap right_datepicker">
							<input type="text" class="form-control" name="daterange" value="" />
							<i class="icon-calendar date_icon"></i>
						</span>
					</div>
				</div>

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
				<br>
				<br>
				<br>
				<div class="bs-glyphicons">
					<ul class="bs-glyphicons-list">
						<li><span class="icon-help-circled"></span><span class="glyphicon-class">icon-help-circled</span></li>
						<li><span class="icon-phonebook"><span class="glyphicon-class">icon-phonebook</span></span></li>
						<li><span class="icon-folders"><span class="glyphicon-class">icon-folders</span></span></li>
						<li><span class="icon-question"><span class="glyphicon-class">icon-question</span></span></li>
						<li><span class="icon-cancel"><span class="glyphicon-class">icon-cancel</span></span></li>
						<li><span class="icon-profile"><span class="glyphicon-class">icon-profile</span></span></li>
						<li><span class="icon-chart"></span><span class="glyphicon-class">icon-chart</span></li>
						<li><span class="icon-home"></span><span class="glyphicon-class">icon-home</span></li>
						<li><span class="icon-calendar"></span><span class="glyphicon-class">icon-calendar</span></li>
						<li><span class="icon-file_add"></span><span class="glyphicon-class">icon-file_add</span></li>
						<li><span class="icon-group"></span><span class="glyphicon-class">icon-group</span></li>
						<li><span class="icon-details"></span><span class="glyphicon-class">icon-details</span></li>
						<li><span class="icon-home-1"></span><span class="glyphicon-class">icon-home-1</span></li>
						<li><span class="icon-log_out"></span><span class="glyphicon-class">icon-log_out</span></li>
						<li><span class="icon-check"></span><span class="glyphicon-class">icon-check</span></li>
						<li><span class="icon-arrows_double"></span><span class="glyphicon-class">icon-arrows_double</span></li>
						<li><span class="icon-down-small"></span><span class="glyphicon-class">icon-down-small</span></li>
						<li><span class="icon-up-small"></span><span class="glyphicon-class">icon-up-small</span></li>
						<li><span class="icon-left-small"></span><span class="glyphicon-class">icon-left-small</span></li>
						<li><span class="icon-right-small"></span><span class="glyphicon-class">icon-right-small</span></li>
						<li><span class="icon-notplaned-check"></span><span class="glyphicon-class">icon-notplaned-check</span></li>
						<li><span class="icon-compl-check"></span><span class="glyphicon-class">icon-compl-check</span></li>
						<li><span class="icon-compl-plan"></span><span class="glyphicon-class">icon-compl-plan</span></li>
						<li><span class="icon-tree"></span><span class="glyphicon-class">icon-tree</span></li>
						<li><span class="icon-doc"></span><span class="glyphicon-class">icon-doc</span></li>
						<li><span class="icon-filter"></span><span class="glyphicon-class">icon</span></li>
						<li><span class="icon-globe"></span><span class="glyphicon-class">icon-globe</span></li>
						<li><span class="icon-download_file"></span><span class="glyphicon-class">icon-download_file</span></li>
						<li><span class="icon-pencil"></span><span class="glyphicon-class">icon-pencil</span></li>
						<li><span class="icon-exchange"></span><span class="glyphicon-class">icon-exchange</span></li>
						<li><span class="icon-close"></span><span class="glyphicon-class">icon-close</span></li>
						<li><span class="icon-alert"></span><span class="glyphicon-class">icon-alert</span></li>
						<li><span class="icon-info"></span><span class="glyphicon-class">icon-info</span></li>
						<li><span class="icon-trash"></span><span class="glyphicon-class">icon-trash</span></li>
						<li><span class="icon-spin3"></span><span class="glyphicon-class">icon-spin3</span></li>
						<li><span class="icon-mail-alt"></span><span class="glyphicon-class">icon-mail-alt</span></li>
						<li><span class="icon-angle-left"></span><span class="glyphicon-class">icon-angle-left</span></li>
						<li><span class="icon-angle-right"></span><span class="glyphicon-class">icon-angle-right</span></li>
						<li><span class="icon-angle-up"></span><span class="glyphicon-class">icon-angle-up</span></li>
						<li><span class="icon-angle-down"></span><span class="glyphicon-class">icon-angle-down</span></li>
						<li><span class="icon-dot-3"></span><span class="glyphicon-class">icon-dot-3</span></li>
						<li><span class="icon-star"></span><span class="glyphicon-class">icon-star</span></li>
						<li><span class="icon-edit2"></span><span class="glyphicon-class">icon-edit2</span></li>

						<li><span class="icon-icon-subjects"></span><span class="glyphicon-class">icon-icon-subjects</span></li>
						<li><span class="icon-search"></span><span class="glyphicon-class">icon-search</span></li>
						<li><span class="icon-icon-administration"></span><span class="glyphicon-class">icon-icon-administration</span></li>
						<li><span class="icon-download"></span><span class="glyphicon-class">icon-download</span></li>
						<li><span class="icon-garbage"></span><span class="glyphicon-class">icon-garbage</span></li>
						<li><span class="icon-archive"></span><span class="glyphicon-class">icon-archive</span></li>
					</ul>
				</div>

				<br>

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
				<br>
				<br>
				<br>
				<ul class="nav nav-tabs">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#npa" aria-expanded="true">Документи, вимоги яких перевіряються</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#act_inspection" aria-expanded="false">Форми актів перевірки</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#risk_criteria" aria-expanded="false">Критерії ризику</a>
					</li>
				</ul>

			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>