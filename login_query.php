<?php
	//starting the session
	session_start();
	//including the database connection
	require_once 'conn.php';
 
	if(ISSET($_POST['login'])){
		// Setting variables
		$username = $_POST['username'];
		$senha = $_POST['senha'];
 
		// Select Query for counting the row that has the same value of the given username and password. This query is for checking if the access is valid or not.
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