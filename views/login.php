<!DOCTYPE html>
<html>
<head>
	<title>Loggin - Ticket Taller Teste</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
	<meta charset="utf-8"/>

</head>
<body id="login">

	<hgroup>
		<h4>Sistema de tickets - para Taller </h4>
		<h6><i>por Vitor Gonçalves</i></h6>
	</hgroup>
	<form method="POST">
		<div class="group">
			<p>
				<?php
				if (!empty($aviso)){
					echo $aviso;
				}
				?>

			</p>
		</div>
		<div class="group">
			<input type="email" name="email"><span class="highlight"></span><span class="bar"></span>
			<label>Email</label>
		</div>
		<div class="group">
			<input type="password" name="senha"><span class="highlight"></span><span class="bar"></span>
			<label>Senha</label>
		</div>
		<button type="submit" class="button buttonBlue">Login
			<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
		</button>
		<h6 class="ou">ou</h6>
		<a type="button" class="button buttonRed"  href="<?php echo BASE_URL; ?>/login/cadastro">Cadastrar
			<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
		</a>
	</form>
	<script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>





