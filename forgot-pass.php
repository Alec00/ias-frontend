<?php include('header-auth.php'); ?>

<!-- main_section -->
<section id="main_section">
	<div class="auth_message">
		<span class="auth_message_text">Ви щє не зареєстровані?</span>
		<a href="registration.php" class="btn btn_link">Зареєструватись у системі</a>
	</div>
	<div class="main_section_inner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="auth_box">
						<h1 class="page_title">Забули пароль</h1>
						<p class="auth_form_text">Будь ласка, введіть ваш емейл. Посилання на відновлення паролю буде відправлене туди</p>
						<form action="/">
							<div class="form-group">
								<label>Електронна пошта<span>*</span></label>
								<input type="email" class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Відправити</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer-auth.php'); ?>