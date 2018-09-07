<?php include('header-auth.php'); ?>

<!-- main_section -->
<section id="main_section">
	<div class="auth_message">
		<span class="auth_message_text">Ви вже зареєстровані?</span>
		<a href="login.php" class="btn btn_link">Увійти до системи</a>
	</div>
	<div class="main_section_inner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="auth_box">
						<h1 class="page_title">Реєстрація</h1>
						<form action="/">
							<div class="form-group">
								<label>Логін<span>*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Електронна пошта<span>*</span></label>
								<input type="email" class="form-control">
							</div>
							<div class="form-group">
								<label>ПІБ (повністю)<span>*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Пароль<span>*</span></label>
								<input type="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Контролюючий орган<span>*</span></label>
								<select class="selectpicker" style="width:100%" data-placeholder="Оберіть регулятора…">
									<option>Mustard Mustard MustardMustard</option>
									<option>Ketchup</option>
									<option>Relish</option>
								</select>
							</div>
							<div class="form-group">
								<label>Контролюючий орган<span>*</span></label>
								<select class="selectpicker" style="width:100%"  title="Оберіть регулятора…" multiple="multiple">
									<option>Mustard Mustard MustardMustard</option>
									<option>Ketchup</option>
									<option>Relish</option>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Зареєструватися</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer-auth.php'); ?>