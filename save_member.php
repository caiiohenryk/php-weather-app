<?php
	// Startando a sessão
	session_start();
 
	// Puxando a conexão da DB
	require_once 'conn.php';
 
	if(ISSET($_POST['register'])){
// Setando as variáveis do registro
		$username = $_POST['username'];
		$senha = $_POST['senha'];
 
		// Salvando o objeto na DB
		$query = "INSERT INTO `usuario` (username, senha) VALUES(:username, :senha)";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':senha', $senha);
 
		// Checando a operação do DB
		if($stmt->execute()){
			// Mensagem de conta criada
			$_SESSION['success'] = "Successfully created an account";
 
			// Redirecionando 
			header('location: index.php');
		}
 
	}
?>