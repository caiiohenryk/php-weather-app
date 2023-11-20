<!DOCTYPE html>
<?php 
//starting the session
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Registre-se</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<a href="login.php">Já tem uma conta? Faça login aqui</a>
		<br style="clear:both;"/><br />
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="save_member.php">	
				<div class="alert alert-info">Registrar-se</div>
				<div class="form-group">
					<label>Usuário</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input type="password" name="senha" class="form-control" required="required"/>
				</div>
				<?php
					// Checando se a sessão retorna 'success'
					if(ISSET($_SESSION['success'])){
				?>
				<div class="alert alert-success"><?php echo $_SESSION['success']?></div>
				<?php 
					unset($_SESSION['success']);
					}
				?>
				<button class="btn btn-primary btn-block" name="register"><span class="glyphicon glyphicon-save"></span> Register</button>
			</form>	
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>