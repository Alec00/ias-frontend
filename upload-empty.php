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
			<div class="col-xs-12 col-md-3 col-md-push-9 hidden-xs">
				<div class="panel panel-primary">
					<div class="panel-heading">Статус документу</div>
					<div class="panel-body">
						<div class="doc_status_empty">
							<img src="img/add_doc.svg" alt="">
							<p class="text-muted">Тут ви побачите статус документу, який ви завантажили</p>
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
						<div class="input_box_wrap">
							<span class="no_file">Файл не доданий</span>
							<label for="" class="form_label">Річний план.pdf<span>*</span></label>

							<label class="upload_file btn_link btn visible-xs"><input type="file"> завантажте ваш файл</label>

							<div class="input_box">
								<span class="icon-file_add"></span>
								<p>Перетягніть ваш файл або <label class="upload_file"><input type="file"> додайте</label> його</p>
							</div>
						</div>
						<div class="input_box_wrap">
							<span class="no_file">Файл не доданий</span>
							<label for="" class="form_label">Підписаний річний план.pdf<span>*</span></label>

							<label class="upload_file btn_link btn visible-xs"><input type="file"> завантажте ваш файл</label>

							<div class="input_box">
								<span class="icon-file_add"></span>
								<p>Перетягніть ваш файл або <label class="upload_file"><input type="file"> додайте</label> його</p>
							</div>
						</div>
						<a href="#" class="btn btn-primary btn_wide">Завантажити</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>