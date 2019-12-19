<?php 
	require 'conexao.php';
	$dados = mysqli_query($con, "SELECT * FROM mesa");
	$numMesa = mysqli_num_rows($dados);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
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
			Registro <!-- Reservas --><!-- Reservation -->
		</h2>
	</section>

	
	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Cadastrar Eventos <!-- Reservas --><!-- Reservation -->
						</span>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto" method="POST" action="insertEvento.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<!-- Name -->
								<span class="txt9">
									Nome do Evento <!-- Nome --><!-- Name -->
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nome" placeholder="Name" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<!-- Date -->
								<span class="txt9">
									Data <!-- Data --><!-- Date -->
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="data">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>
							</div>

							<div class="col-md-4">
								<!-- Time -->
								<span class="txt9">
									Hora <!-- Tempo --><!-- Time -->
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="hora" tabindex="-1" aria-hidden="true">
										<option value="9:00">9:00</option>
										<option value="9:30">9:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
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
								<textarea class="bo-rad-10 size29 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="descricao" placeholder="Escreva a descrição do evento" required></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2">
								<p class="txt9">Foto:</p>
								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="file" name="imagem" required>
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

	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Manipular mesas <!-- Reservas --><!-- Reservation -->
						</span>
					</div>
					<div class="t-center">
						<span class="txt9">
						<?php echo "(". $numMesa . " mesas cadastradas)" ; ?> <!-- Nome --><!-- Name -->
						</span>
					</div>
					<form class="wrap-form-reservation size22 m-l-r-auto" method="POST" action="mesaAdc.php">
						<div class="row">
							<div class="col-md-6">
								<!-- Name -->
								<span class="txt9">
									Mesas <!-- Nome --><!-- Name -->
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="num" placeholder="Insira o Nº de mesas" required>
								</div>
								<div class="wrap-btn-booking">
									<button type="submit" class="btn3 size13 txt11">
									Adicionar
									</button>
								</div>
							</form>
							</div>
							<div class="col-md-6">
								<!-- Name -->
								<form method="POST" action="mesaExc.php">
								<span class="txt9">
									Mesas <!-- Nome --><!-- Name -->
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="num" placeholder="Insira o Nº de mesas" required>
								</div>
								<div class="wrap-btn-booking">
									<button type="submit" class="btn3 size13 txt11">
									Excluir
									</button>
								</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Clientes
						</span>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto">
						<div class="row">
							<div class="col-md-4">
								<!-- Name -->
								<span class="txt12">
									Nome <!-- Nome --><!-- Name -->
								</span>

								<div class="size12 m-t-3 m-b-23">
									<?php
									$cliente = mysqli_query($con, "SELECT * FROM cliente");
									$linhaCliente = mysqli_fetch_assoc($cliente);
									$totalCliente = mysqli_num_rows($cliente);
									if ($totalCliente) do{
								    	echo $linhaCliente['nome']."<br>";
								    }while ($linhaCliente = mysqli_fetch_assoc($cliente));
									?>
								</div>
							</div>

							<div class="col-md-4">
								<!-- Email -->
								<span class="txt12">
									Email <!-- Email --><!-- Email -->
								</span>

								<div class="size12 m-t-3 m-b-23">
									<?php
									$cliente = mysqli_query($con, "SELECT * FROM cliente");
									$linhaCliente = mysqli_fetch_assoc($cliente);
									$totalCliente = mysqli_num_rows($cliente);
									if ($totalCliente) do{
										echo $linhaCliente['email']."<br>"; 
									}while ($linhaCliente = mysqli_fetch_assoc($cliente));
									?>
								</div>
							</div>

							<div class="col-md-4">
								<!-- Phone -->
								<span class="txt12">
									Senha <!-- Telefone --><!-- Phone -->
								</span>

								<div class="size12 m-t-3 m-b-23">
									<?php 
									$cliente = mysqli_query($con, "SELECT * FROM cliente");
									$linhaCliente = mysqli_fetch_assoc($cliente);
									$totalCliente = mysqli_num_rows($cliente);
									if ($totalCliente) do{
										echo $linhaCliente['senha']."<br>";
									}while ($linhaCliente = mysqli_fetch_assoc($cliente));
									?>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>

	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Reservas <!-- Reservas --><!-- Reservation -->
						</span>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto">
						<div class="row">
							<div class="col-md-3">
								<!-- Name -->
								<span class="txt12">
									Nome <!-- Nome --><!-- Name -->
								</span>

								<div class="size12 m-t-3 m-b-23">
									<?php
									$reserva = mysqli_query($con, "SELECT * FROM reserva");
									$linhaReserva = mysqli_fetch_assoc($reserva);
									$totalReserva = mysqli_num_rows($reserva);
									if ($totalReserva) do{
										$idCliente = $linhaReserva['Cliente_idCliente'];
										$cliente = mysqli_query($con, "SELECT nome FROM cliente WHERE idCliente = '$idCliente'");
										$linhaCliente = mysqli_fetch_assoc($cliente);
										echo $linhaCliente['nome']."<br>"; 
									}while ($linhaReserva = mysqli_fetch_assoc($reserva));
									?>
								</div>
							</div>

							<div class="col-md-2">
								<!-- Email -->
								<span class="txt12">
									Mesa <!-- Email --><!-- Email -->
								</span>

								<div class="size12 m-t-3 m-b-23">
									<?php
									$reserva = mysqli_query($con, "SELECT * FROM reserva");
									$linhaReserva = mysqli_fetch_assoc($reserva);
									$totalReserva = mysqli_num_rows($reserva);
									if ($totalReserva) do{
										echo $linhaReserva['Mesa_idMesa']."<br>"; 
									}while ($linhaReserva = mysqli_fetch_assoc($reserva));
									?>
								</div>
							</div>

							<div class="col-md-3">
								<!-- Phone -->
								<span class="txt12">
									Data <!-- Telefone --><!-- Phone -->
								</span>

								<div class="size12 m-t-3 m-b-23">
									<?php
									$reserva = mysqli_query($con, "SELECT * FROM reserva");
									$linhaReserva = mysqli_fetch_assoc($reserva);
									$totalReserva = mysqli_num_rows($reserva);
									if ($totalReserva) do{
										$data = explode("-", $linhaReserva['data']);
										echo $data[2]."/".$data[1]."/".$data[0]."<br>"; ; 
									}while ($linhaReserva = mysqli_fetch_assoc($reserva));
									?>
								</div>
							</div>

							<div class="col-md-2">
								<!-- Phone -->
								<span class="txt12">
									Hora <!-- Telefone --><!-- Phone -->
								</span>

								<div class="size12 m-t-3 m-b-23">
									<?php
									$reserva = mysqli_query($con, "SELECT * FROM reserva");
									$linhaReserva = mysqli_fetch_assoc($reserva);
									$totalReserva = mysqli_num_rows($reserva);
									if ($totalReserva) do{
										$hora = explode(":", $linhaReserva['hora']);
										echo $hora[0].":".$hora[1]."<br>"; 
									}while ($linhaReserva = mysqli_fetch_assoc($reserva));
									?>
								</div>
							</div>

							<div class="col-md-2">
								<!-- Phone -->
								<span class="txt12">
									Pessoas <!-- Telefone --><!-- Phone -->
								</span>

								<div class="size12 m-t-3 m-b-23">
									<?php
									$reserva = mysqli_query($con, "SELECT * FROM reserva");
									$linhaReserva = mysqli_fetch_assoc($reserva);
									$totalReserva = mysqli_num_rows($reserva);
									if ($totalReserva) do{
										echo $linhaReserva['numCadeira']."<br>"; 
									}while ($linhaReserva = mysqli_fetch_assoc($reserva));
									?>
								</div>
							</div>

						</div>
					</form>
				</div>
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
