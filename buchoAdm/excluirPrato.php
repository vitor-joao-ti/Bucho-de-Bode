<?php 
	require 'conexao.php';
	$idPrato = $_GET['idPrato'];
	$idFoto = $_GET['idFoto'];
	
	if ($con) {
		$sql = mysqli_query($con, "DELETE FROM prato WHERE idPrato='$idPrato'");
		if ($sql){
			$sql = mysqli_query($con, "DELETE FROM fotocomida WHERE idFoto='$idFoto'");
			if ($sql) {
				header("Location: menu.php");
			}else{
				die("Erro: " . mysqli_error($con));
			}
		}else{
			die("Erro: " . mysqli_error($con));
		}
	}
	

 ?>