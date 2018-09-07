<?
/*
 * ЗАБРАЛ!!!! НЕ ИЗМЕНЯТЬ!!!
 */
?>

<?php include('header-auth.php'); ?>

<!-- main_section -->
<section id="main_section" class="new_pass_success">
	<div class="auth_message">
		<span class="auth_message_text">Ви щє не зареєстровані?</span>
		<a href="registration.php" class="btn btn_link">Зареєструватись у системі</a>
	</div>
	<div class="main_section_inner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<article class="auth_box">
						<figure class="new_pass_success_img"><img src="img/new_pass.svg" alt=""></figure>
						<h1 class="page_title">Пароль відправлено!</h1>
						<p class="auth_form_text">На вашу електронну пошту ми відправили лист з новим паролем.  Далі вам необхідно перейти за посиланням з листа та створити новий пароль</p>
						<form action="/">
							<div class="form-group">
								<a href="#" class="btn btn-primary">Відправити пароль щє раз!</a>
							</div>
						</form>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer-auth.php'); ?>