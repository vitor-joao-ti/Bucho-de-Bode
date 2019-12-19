<?php 
	require 'conexao.php';
	$num = $_POST['num'];
	$dados = mysqli_query($con, "SELECT * FROM mesa");
	$numMesa = mysqli_num_rows($dados);

	while ($numMesa > $num) {
		$sql = mysqli_query($con, "DELETE FROM mesa WHERE idMesa='$numMesa'");
		$numMesa--;
	}
	if ($sql){
		header("Location: reservation.php");
	}else{
		die("Erro: " . mysqli_error($con));
	}
?>