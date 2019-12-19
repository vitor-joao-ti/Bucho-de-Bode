<?php 
	require 'conexao.php';
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$dados = mysqli_query($con, "SELECT * FROM funcionario");
  	$linha = mysqli_fetch_assoc($dados);
  	$total = mysqli_num_rows($dados);

  	if ($total) do{
  		if ($login === $linha['login']) {
			break; //essa conta existe!!
		}
  	}while ($linha = mysqli_fetch_assoc($dados));

	if (($senha === $linha['senha'])&&($login === $linha['login'])) {
		header("Location: home.php");
	}else{
		header("Location: index.php");
	}

?>