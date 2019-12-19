<?php 
	require 'conexao.php';
	$login = $_POST['login'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$idFuncionario = $_GET['idFuncionario'];
	
	if ($con) {
		$sql = mysqli_query($con, "UPDATE funcionario SET  login='$login', senha='$senha', email='$email'where idFuncionario='$idFuncionario'");
		if ($sql){
			header("Location: home.php");
		}
	}else{
		die("Erro: " . mysqli_error($con));
	}
 ?>