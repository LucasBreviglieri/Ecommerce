<?php
/* Smarty version 3.1.48, created on 2024-06-24 22:20:30
  from 'C:\wamp64\www\ecommerce\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6679f12e0d0d04_75119617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '567e0777418a8c53a666f17d2143e6080f597bf3' => 
    array (
      0 => 'C:\\wamp64\\www\\ecommerce\\view\\login.tpl',
      1 => 1716935717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6679f12e0d0d04_75119617 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt">
  <head>
  	<title>Login 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="temas/cssLogin/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Bem-vindo ao login</h2>
								<p>Não tem uma conta?</p>
								<a href="#" class="btn btn-white btn-outline-white">Cadastre-se</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Entrar</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Nome de usuário</label>
			      			<input type="text" class="form-control" placeholder="Nome de usuário" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Senha</label>
		              <input type="password" class="form-control" placeholder="Senha" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Entrar</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Lembrar de mim
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Esqueceu a senha</a>
									</div>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<?php echo '<script'; ?>
 src="temas/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="temas/js/popper.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="temas/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="temas/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
}
