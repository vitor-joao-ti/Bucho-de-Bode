<?php
require 'conexao.php';
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if ($con) {
		$sql = mysqli_query($con, "INSERT INTO cliente VALUES (0, '$nome', '$email', '$senha')");
		if ($sql){
			header("Location: reservation.php");
		}else{
			die("Erro: " . mysqli_error($con));
		}
	}

?>