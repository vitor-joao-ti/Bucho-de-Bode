<?php 
	require 'conexao.php';
	$dadosPrato = mysqli_query($con, "SELECT * FROM prato WHERE categoria LIKE 'principal'");
	$linhaPrato = mysqli_fetch_assoc($dadosPrato);
	$totalPrato = mysqli_num_rows($dadosPrato);

	$dadosFoto = mysqli_query($con, "SELECT * FROM fotocomida");
	$linhaFoto = mysqli_fetch_assoc($dadosFoto);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cardápio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="home.php">
							<img src="images/icons/logo1.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="home.php">Inicio</a><!-- Inicio --><!-- Home -->
								</li>

								<li>
									<a href="menu.php">Cardápio</a><!-- Cardápio--><!-- Menu -->
								</li>

								<li>
									<a href="reservation.php">Registro</a><!-- Reservas --><!-- Reservation -->
								</li>

								<li>
									<a href="blog.php">Eventos</a><!-- Blog --><!-- Blog -->
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-facebook m-l-21" arai-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="home.php" class="txt19">Inicio</a><!-- Inicio --><!-- Home -->
			</li>

			<li class="t-center m-b-13">
				<a href="menu.php" class="txt19">Cardápio</a><!-- Cardápio--><!-- Menu -->
			</li>

			<li class="t-center m-b-13">
				<a href="blog.php" class="txt19">Eventos</a><!-- Blog --><!-- Blog -->
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="reservation.php" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Registro <!-- Reservas --><!-- Reservation -->
				</a>
			</li>
		</ul>
	</aside>

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Cardápio <!-- Reservas --><!-- Reservation -->
		</h2>
	</section>

	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Cadastro de Pratos<!-- Reservas --><!-- Reservation -->
						</span>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto" enctype="multipart/form-data" method="POST" action="insertPrato.php?idFuncionario=1">
						<div class="row">
							<div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
									Nome <!-- Data --><!-- Date -->
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nome" placeholder="Nome" required>
								</div>
							</div>

							<div class="col-md-4">
								<!-- Time -->
								<span class="txt9">
									Preço
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="preco" placeholder="Preço" required>
								</div>
							</div>

							<div class="col-md-4">
								<!-- People -->
								<span class="txt9">
									Categoria<!-- Pessoas --><!-- People -->
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="categoria" required>
										<option value="">Selecione</option> 
										<option value="principal">Principal</option>
										<option value="acompanhamento">Acompanhamento</option>
										<option value="sobremesa">Sobremesa</option>
										<option value="bebida">Bebida</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<!-- Name -->
								<span class="txt9">
									Descrição <!-- Nome --><!-- Name -->
								</span>
								<textarea class="bo-rad-10 size29 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-40" name="descricao" placeholder="Escreva a descrição do prato" required></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2">
								<p class="txt9">Foto:</p>
								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="file" name="foto" required>
								</div>
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Cadastrar <!-- Tabela de Eventos --><!-- Book table -->
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Lunch -->
	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Principal <!-- Almoço --><!-- Lunch -->
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<?php
				if ($totalPrato < 1) {
					echo "<h3>Nenhum prato dessa categoria foi  cadastrado!</h3>";
				}else{
				if ($totalPrato) do{
					$idFoto = $linhaPrato['Imagem_idFoto'];
					$dadosFoto = mysqli_query($con, "SELECT * FROM fotocomida WHERE idFoto LIKE '$idFoto'");
					$linhaFoto = mysqli_fetch_assoc($dadosFoto);
					$endereco = $linhaFoto['endereco'];
				?>
				<div class="col-md-8 col-lg-6 m-l-r-auto">	
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img alt="IMG-MENU" src=<?php echo "foto/" . $endereco; ?> ></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?php echo $linhaPrato['nome']; ?>
							</a>

							<span class="txt23">
								<?php echo $linhaPrato['descricao']; ?>
							</span>

							<span class="txt22 m-t-20">
								<?php echo '$'.$linhaPrato['preco']; ?>
							</span>
						</div>
						<div class="col-md-2">
							<a class="txt18 m-b-3" href=<?php echo "excluirPrato.php?idPrato=".$linhaPrato['idPrato']."&idFoto=".$idFoto ?>>
								Excluir
							</a>
						</div>
						<div class="col-md-2">
							<a class="txt18 m-b-3" href=<?php echo "alterarPrato.php?idPrato=".$linhaPrato['idPrato']."&idFoto=".$idFoto ?>>
								Alterar
							</a>
						</div>
					</div>
				</div>
			<?php }while ($linhaPrato = mysqli_fetch_assoc($dadosPrato)); } ?>
				<div class="col-md-8 col-lg-6 m-l-r-auto"></div>
			</div>
		</div>
	</section>

	<!-- Starter -->
	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/header-menu-02.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Acompanhamento <!-- Jantar --><!-- Dinner -->
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<?php
				$dadosPrato = mysqli_query($con, "SELECT * FROM prato WHERE categoria LIKE 'acompanhamento'");
				$linhaPrato = mysqli_fetch_assoc($dadosPrato);
				$totalPrato = mysqli_num_rows($dadosPrato);
				if ($totalPrato < 1) {
					echo "<h3>Nenhum prato dessa categoria foi  cadastrado!</h3>";
				}else{
				
				if ($totalPrato) do{
					$idFoto = $linhaPrato['Imagem_idFoto'];
					$dadosFoto = mysqli_query($con, "SELECT * FROM fotocomida WHERE idFoto LIKE '$idFoto'");
					$linhaFoto = mysqli_fetch_assoc($dadosFoto);
					$endereco = $linhaFoto['endereco'];
				?>
				<div class="col-md-8 col-lg-6 m-l-r-auto">	
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img alt="IMG-MENU" src=<?php echo "foto/" . $endereco; ?> ></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?php echo $linhaPrato['nome']; ?>
							</a>

							<span class="txt23">
								<?php echo $linhaPrato['descricao']; ?>
							</span>

							<span class="txt22 m-t-20">
								<?php echo '$'.$linhaPrato['preco']; ?>
							</span>
						</div>
						<div class="col-md-2">
							<a class="txt18 m-b-3" href=<?php echo "excluirPrato.php?idPrato=".$linhaPrato['idPrato']."&idFoto=".$idFoto ?>>
								Excluir
							</a>
						</div>
						<div class="col-md-2">
							<a class="txt18 m-b-3" href=<?php echo "alterarPrato.php?idPrato=".$linhaPrato['idPrato']."&idFoto=".$idFoto ?>>
								Alterar
							</a>
						</div>
					</div>
				</div>
			<?php }while ($linhaPrato = mysqli_fetch_assoc($dadosPrato)); } ?>
				<div class="col-md-8 col-lg-6 m-l-r-auto"></div>
			</div>
		</div>
	</section>

	<!-- Dessert -->
	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/header-menu-03.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Sobremesa <!-- Jantar --><!-- Dinner -->
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<?php
				$dadosPrato = mysqli_query($con, "SELECT * FROM prato WHERE categoria LIKE 'sobremesa'");
				$linhaPrato = mysqli_fetch_assoc($dadosPrato);
				$totalPrato = mysqli_num_rows($dadosPrato);
				if ($totalPrato < 1) {
					echo "<h3>Nenhum prato dessa categoria foi  cadastrado!</h3>";
				}else{
				if ($totalPrato) do{
					$dadosPrato = mysqli_query($con, "SELECT * FROM prato WHERE categoria LIKE 'sobremesa'");
					$linhaPrato = mysqli_fetch_assoc($dadosPrato);
					$totalPrato = mysqli_num_rows($dadosPrato);
					$idFoto = $linhaPrato['Imagem_idFoto'];
					$dadosFoto = mysqli_query($con, "SELECT * FROM fotocomida WHERE idFoto LIKE '$idFoto'");
					$linhaFoto = mysqli_fetch_assoc($dadosFoto);
					$endereco = $linhaFoto['endereco'];
				?>
				<div class="col-md-8 col-lg-6 m-l-r-auto">	
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img alt="IMG-MENU" src=<?php echo "foto/" . $endereco; ?> ></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?php echo $linhaPrato['nome']; ?>
							</a>

							<span class="txt23">
								<?php echo $linhaPrato['descricao']; ?>
							</span>

							<span class="txt22 m-t-20">
								<?php echo '$'.$linhaPrato['preco']; ?>
							</span>
						</div>
						<div class="col-md-2">
							<a class="txt18 m-b-3" href=<?php echo "excluirPrato.php?idPrato=".$linhaPrato['idPrato']."&idFoto=".$idFoto ?>>
								Excluir
							</a>
						</div>
						<div class="col-md-2">
							<a class="txt18 m-b-3" href=<?php echo "alterarPrato.php?idPrato=".$linhaPrato['idPrato']."&idFoto=".$idFoto ?>>
								Alterar
							</a>
						</div>
					</div>
				</div>
			<?php }while ($linhaPrato = mysqli_fetch_assoc($dadosPrato)); } ?>
				<div class="col-md-8 col-lg-6 m-l-r-auto"></div>
			</div>
		</div>
	</section>
	<!-- Drinks -->
	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/header-menu-04.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Bebidas <!-- Jantar --><!-- Dinner -->
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<?php
				$dadosPrato = mysqli_query($con, "SELECT * FROM prato WHERE categoria LIKE 'bebida'");
				$linhaPrato = mysqli_fetch_assoc($dadosPrato);
				$totalPrato = mysqli_num_rows($dadosPrato);
				if ($totalPrato < 1) {
					echo "<h3>Nenhum prato dessa categoria foi  cadastrado!</h3>";
				}else{
				if ($totalPrato) do{
					$idFoto = $linhaPrato['Imagem_idFoto'];
					$dadosFoto = mysqli_query($con, "SELECT * FROM fotocomida WHERE idFoto LIKE '$idFoto'");
					$linhaFoto = mysqli_fetch_assoc($dadosFoto);
					$endereco = $linhaFoto['endereco'];
				?>
				<div class="col-md-8 col-lg-6 m-l-r-auto">	
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img alt="IMG-MENU" src=<?php echo "foto/" . $endereco; ?> ></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?php echo $linhaPrato['nome']; ?>
							</a>

							<span class="txt23">
								<?php echo $linhaPrato['descricao']; ?>
							</span>

							<span class="txt22 m-t-20">
								<?php echo '$'.$linhaPrato['preco']; ?>
							</span>
						</div>
						<div class="col-md-2">
							<a class="txt18 m-b-3" href=<?php echo "excluirPrato.php?idPrato=".$linhaPrato['idPrato']."&idFoto=".$idFoto ?>>
								Excluir
							</a>
						</div>
						<div class="col-md-2">
							<a class="txt18 m-b-3" href=<?php echo "alterarPrato.php?idPrato=".$linhaPrato['idPrato']."&idFoto=".$idFoto ?>>
								Alterar
							</a>
						</div>
					</div>
				</div>
			<?php }while ($linhaPrato = mysqli_fetch_assoc($dadosPrato)); } ?>
				<div class="col-md-8 col-lg-6 m-l-r-auto"></div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg1">
		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-instagram m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
