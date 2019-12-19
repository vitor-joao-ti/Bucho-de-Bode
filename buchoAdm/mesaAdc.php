<?php 
	require 'conexao.php';
	$num = $_POST['num'];
	
	while ($i < $num) {
		$sql = mysqli_query($con, "INSERT INTO mesa VALUES (0)");
		$i++;
	}
	if ($sql){
		header("Location: reservation.php");
	}else{
		die("Erro: " . mysqli_error($con));
	}
?>