<?
/*
 * ЗАБРАЛ!!!! НЕ ИЗМЕНЯТЬ!!!
 */
?>
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
						<h1 class="page_title">Вхід</h1>
						<form action="/">
							<div class="form-group field-loginform-username required has-error">
								<label class="control-label" for="loginform-username">Логін<span>*</span></label>
								<input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" autofocus="" aria-required="true" aria-invalid="true">

								<p class="help-block help-block-error">Необхідно заповнити "Логін".</p>
							</div>
							<div class="form-group field-loginform-username required has-success">
								<label class="control-label" for="loginform-username">Логін<span>*</span></label>
								<input type="text" id="loginform-username1" class="form-control" name="LoginForm[username]" autofocus="" aria-required="true" aria-invalid="false">

								<p class="help-block help-block-error"></p>
							</div>
							<div class="form-group field-loginform-password required">
								<label class="control-label" for="loginform-password">Пароль<span>*</span></label>
								<input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" aria-required="true">

								<p class="help-block help-block-error"></p>
							</div>
							<div class="form-group field-loginform-rememberme">
								<div class="checkbox checked">
									<label for="loginform-rememberme">
										<input type="hidden" name="LoginForm[rememberMe]" value="0">
										<input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked>
										Запам'ятати мене
									</label>
									<p class="help-block help-block-error"></p>

								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Увійти</button>
							</div>
							<a href="#" class="link">Забули пароль?</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer-auth.php'); ?>