<?php
	// Startando a sessão
	session_start();
	require_once 'conn.php';
 
	if(ISSET($_POST['login'])){
		// Setando variáveis
		$username = $_POST['username'];
		$senha = $_POST['senha'];
 
		// Validando username e senha
		$query = "SELECT COUNT(*) as count FROM `usuario` WHERE `username` = :username AND `senha` = :senha";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':senha', $senha);
		$stmt->execute();
		$row = $stmt->fetch();
 
		$count = $row['count'];
		if($count > 0){
			header('location:home.php');
		}else{
			$_SESSION['error'] = "Usuario/senha incorreto(s)";
			header('location:login.php');
		}
	}
?>