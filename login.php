<!DOCTYPE html>
<?php 
// Iniciando a sessao
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="static/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,700;1,500&display=swap" rel="stylesheet">
	</head>
<body>
	<div class="main">
		<div class="figura">
			<img src="static/svg_login.svg" class="svg_login">
		</div>
		
		<div class="login-box">
			<a href="index.php">Ainda não tem conta? Registre-se</a>
			<form method="POST" action="login_query.php">	
				<div class="login-caixa">
					<input type="text" name="username" placeholder="Usuario"> <br>
					<input type="password" name="senha" placeholder="Senha"> <br>
					
				</div>

				<?php
					// Verifica se o login retorna erro
					if(ISSET($_SESSION['error'])){
				?>
				<!-- Mensagem de erro -->
					<div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
				<?php
					// Tirando a mensagem de erro após o login 
					unset($_SESSION['error']);
					}
				?>
<button name="login">Login</button>
			</form>	
		</div>
	</div>
</body>
</html>