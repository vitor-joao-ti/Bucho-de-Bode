<?php 
require 'conexao.php';

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	$cliente = mysqli_query($con, "SELECT * FROM cliente");
	$linhaCliente = mysqli_fetch_assoc($cliente);
	$totalCliente = mysqli_num_rows($cliente);
	$x = 0;
	if ($totalCliente) do{
		if ($nome == $linhaCliente['nome'] && $senha == $linhaCliente['senha']) {
			$x = 1;
			break;//conta existe
		}
	}while ($linhaCliente = mysqli_fetch_assoc($cliente));

	if ($x == 0) {
		echo "deu ruim";
		//header("Location: reservation.php");
	}
	$idCliente = $linhaCliente['idCliente'];
	$data = explode("/", $_POST['data']);
	$dia = $data[0];
	$mes = $data[1];
	$ano = $data[2];
	$hora = $_POST['hora'];
	$cadeira = $_POST['pessoa'];


	if ($con) {
		//é um equipamento
		$reserva = mysqli_query($con, "SELECT * FROM reserva WHERE data = '$ano-$mes-$dia'");
		$linhaReserva = mysqli_fetch_assoc($reserva);
		$totalReserva = mysqli_num_rows($reserva);
		$mesaLegal = 1;

		if ($totalReserva) do{
			$mesaLegal = $mesaLegal + 1;
		}while ($linhaReserva = mysqli_fetch_assoc($reserva));

		$mesa = mysqli_query($con, "SELECT idMesa FROM mesa WHERE idMesa LIKE '$mesaLegal'");
		$linhaMesa = mysqli_fetch_assoc($mesa);
		$idMesa = $linhaMesa['idMesa'];
		$sql = mysqli_query($con, "INSERT INTO reserva VALUES (0, '$ano-$mes-$dia', '$hora', '$cadeira', '$idCliente', '$idMesa')");
		if ($sql){
			header("Location: reservation.php");
		}else{
			die("Erro: " . mysqli_error($con));
		}
		
	}else{
		die("Erro: " . mysqli_error($con));
	}

	
?>