<?php include('header-inner.php'); ?>

<section class="page_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page_header">
					<a href="#" class="faq_button icon-help-circled" data-toggle="modal" data-target="#faq_modal"><span>Як користуватися?</span></a>
					<h1 class="page_title">Завантажити затверджений річний план перевірок</h1>
				</div>
			</div>
			<div class="col-xs-12 col-md-3 col-md-push-9">
				<div class="panel panel-primary">
					<div class="panel-heading">Статус документу</div>
					<div class="panel-body">
						<div class="doc_status">
							<span class="icon-check status_icon"></span>
							<div class="doc_status_content">
								<div class="status_date">17.12.2017, 16:42:54</div>
								<div class="status_text">Обробка завершена</div>
							</div>
						</div>
						<div class="doc_status">
							<span class="icon-spin3 status_icon"></span>
							<div class="doc_status_content">
								<div class="status_date">17.12.2017, 16:42:54</div>
								<div class="status_text">В процесі</div>
							</div>
						</div>
						<div class="doc_status">
							<span class="icon-close status_icon"></span>
							<div class="doc_status_content">
								<div class="status_date">17.12.2017, 16:42:54</div>
								<div class="status_text">Помилка</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-9 col-md-pull-3">
				<p class="note_block">Щоб завантажити проект річного плану, створіть файл у форматах xls (Microsoft Excel 2003), xlsx (Microsoft Excel 2007-2010) i ods (OpenDocument Speadsheet).</p>

				<div class="panel panel-primary upload_doc_panel">
					<div class="panel-body">
						<div class="form-inline">
							<div class="form-group required">
								<label for="">Дата документу</label>
								<span class="daterange_wrap">
									<input type="text" class="form-control" name="daterange" value="" />
									<i class="icon-calendar date_icon"></i>
								</span>
							</div>
							<div class="form-group required">
								<label for="">Номер документу</label>
								<input type="text" class="form-control" name="">
							</div>
						</div>
					</div>
					<ul class="list-group plan_list">
						<li class="list-group-item">
							<label for="" class="form_label">Річний план.pdf<span>*</span></label>
							<div><span class="icon-doc"></span><a href="#">Проект плану заходів державного нагляну (контролю) на 2018 рік.xls</a></div>
							<button type="button" class="close"><span class="icon-close"></span></button>
						</li>
						<li class="list-group-item">
							<label for="" class="form_label">Підписаний річний план.pdf<span>*</span></label>
							<div><span class="icon-doc"></span><a href="#">Проект плану заходів державного нагляну (контролю) на 2018 рік.xls</a></div>
							<button type="button" class="close"><span class="icon-close"></span></button>
						</li>
					</ul>
					<div class="panel-footer"><a href="#" class="btn btn_link btn_wide">Видалити перевірку</a></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>