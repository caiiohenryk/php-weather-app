<?php
	//starting the session
	session_start();
 
	//including the database connection
	require_once 'conn.php';
 
	if(ISSET($_POST['register'])){
		// Setting variables
		$username = $_POST['username'];
		$senha = $_POST['senha'];
 
		// Insertion Query
		$query = "INSERT INTO `usuario` (username, senha) VALUES(:username, :senha)";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':senha', $senha);
 
		// Check if the execution of query is success
		if($stmt->execute()){
			//setting a 'success' session to save our insertion success message.
			$_SESSION['success'] = "Successfully created an account";
 
			//redirecting to the index.php 
			header('location: index.php');
		}
 
	}
?>