<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	</body>
		<?php
			require 'conexao.php';
			$arquivo 	= $_FILES['imagem']['name'];
			$nome = $_POST['nome'];
			$data = explode("/", $_POST['data']);
			$hora = $_POST['hora'];
			$descricao = $_POST['descricao'];
			//$idFuncionario = $_GET['idFuncionario'];

			//Pasta onde o arquivo vai ser salvo
			$_UP['pasta'] = 'foto/';
			
			//Tamanho máximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb
			
			//Array com a extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
			
			//Renomeiar
			$_UP['renomeia'] = false;
			
			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['imagem']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['imagem']['error']]);
				exit; //Para a execução do script
			}
			$ponto = '.';
			//Faz a verificação da extensao do arquivo
			$extensao = strtolower(end(explode($ponto, $arquivo)));
			if(array_search($extensao, $_UP['extensoes'])=== false){		
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Diretorio/BuchoAdm/reservation.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extesão inválida.\");
					</script>
				";
			}
			
			//Faz a verificação do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['imagem']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Diretorio/BuchoAdm/reservation.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			
			//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
			else{
				//Primeiro verifica se deve trocar o nome do arquivo
				if($_UP['renomeia'] == true){
					//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
					$nome_final = time().'.jpg';
				}else{
					//mantem o nome original do arquivo
					$nome_final = $_FILES['imagem']['name'];
				}
				//Verificar se é possivel mover o arquivo para a pasta escolhida
				if(move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta']. $nome_final)){
					//Upload efetuado com sucesso, exibe a mensagem
					$query = mysqli_query($con, "INSERT INTO fotoevento VALUES (0,'$nome_final')");
					/*echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Diretorio/teste/reservation.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem cadastrada com Sucesso.\");
						</script>
					";*/	
				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Diretorio/BuchoAdm/reservation.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem não foi cadastrada com Sucesso.\");
						</script>
					";
				}
			}
			
			$dados = mysqli_query($con, "SELECT idFoto FROM fotoevento WHERE endereco LIKE '$nome_final'");
			$linhaFoto = mysqli_fetch_assoc($dados);
			$idFoto = $linhaFoto['idFoto'];
			$dia = $data[0];
			$mes = $data[1];
			$ano = $data[2];
			$sql = mysqli_query($con, "INSERT INTO evento VALUES (0, '$nome', '$ano-$mes-$dia', '$hora', '$descricao', '1', '$idFoto')");
			if ($sql){
				header("Location: reservation.php");
			}else{
				die("Erro: " . mysqli_error($con));
			}
		?>
		
	</body>
</html>