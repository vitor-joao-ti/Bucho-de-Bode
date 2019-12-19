<?php 
	if (isset($_GET['lang']) == 1) {
		$lang = $_GET['lang'];
	}else{
		$lang = false;
	}
	require 'conexao.php';
	$dadosEvento = mysqli_query($con, "SELECT * FROM evento");
	$linhaEvento = mysqli_fetch_assoc($dadosEvento);
	$totalEvento = mysqli_num_rows($dadosEvento);

	$dadosFoto = mysqli_query($con, "SELECT * FROM fotoevento");
	$linhaFoto = mysqli_fetch_assoc($dadosFoto);

	function Nomear($value=''){
		switch ($value) {
			case 1:
				$mes = "Janeiro";
				break;
			case 2:
				$mes = "Fevereiro";
				break;
			case 3:
				$mes = "Março";
				break;
			case 4:
				$mes = "Abril";
				break;
			case 5:
				$mes = "Maio";
				break;
			case 6:
				$mes = "Junho";
				break;
			case 7:
				$mes = "Julho";
				break;
			case 8:
				$mes = "Agosto";
				break;
			case 9:
				$mes = "Setembro";
				break;
			case 10:
				$mes = "Outubro";
				break;
			case 11:
				$mes = "Novembro";
				break;
			case 12:
				$mes = "Dezembro";
				break;
			default:
				$mes = "Erro";
				break;
		}
		return $mes;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
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
						<a href=<?php echo "index.php?lang=$lang";?>>
							<img src="images/icons/logo1.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href=<?php echo "index.php?lang=$lang";?>><?php echo $lang == true ? "Home" : "Inicio"; ?></a><!--  --><!-- Home -->
								</li>

								<li>
									<a href=<?php echo "menu.php?lang=$lang";?>><?php echo $lang == true ? "Menu" : "Cardápio"; ?> </a><!-- --><!-- Menu -->
								</li>

								<li>
									<a href=<?php echo "reservation.php?lang=$lang";?>><?php echo $lang == true ? "Reservation" : "Reservas"; ?></a><!--  --><!-- Reservation -->
								</li>

								<li>
									<a href=<?php echo "blog.php?lang=$lang";?>><?php echo $lang == true ? "Events" : "Eventos"; ?></a><!-- Blog --><!-- Blog -->
								</li>

								<li>
									<a href=<?php echo "contact.php?lang=$lang";?>><?php echo $lang == true ? "Contact" : "Contato"; ?></a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href=<?php echo "blog.php?lang=" . !$lang;?>><i class="fa fa-gear m-l-21" aria-hidden="true"></i></a>
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
				<a href=<?php echo "index.php?lang=$lang";?> class="txt19"><?php echo $lang == true ? "Home" : "Inicio"; ?></a><!--  --><!-- Home -->
			</li>

			<li class="t-center m-b-13">
				<a href=<?php echo "menu.php?lang=$lang";?> class="txt19"><?php echo $lang == true ? "Menu" : "Cardápio"; ?></a><!-- --><!-- Menu -->
			</li>

			<li class="t-center m-b-13">
				<a href=<?php echo "blog.php?lang=$lang";?> class="txt19"><?php echo $lang == true ? "Events" : "Eventos"; ?></a><!-- Blog --><!-- Blog -->
			</li>

			<li class="t-center m-b-33">
				<a href=<?php echo "contact.php?lang=$lang";?> class="txt19"><?php echo $lang == true ? "Contact" : "Contatos"; ?></a><!--  --><!-- Contacts -->
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href=<?php echo "reservation.php?lang=$lang";?> class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					<?php echo $lang == true ? "Reservation" : "Reservas"; ?>  <!--  --><!-- Reservation -->
				</a>
			</li>
		</ul>
	</aside>

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			<?php echo $lang == true ? "Events" : "Eventos"; ?>
		</h2>
	</section>


	<!-- Content page -->
	<section>
		<div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href=<?php echo "index.php?lang=$lang";?> class="txt27">
					<?php echo $lang == true ? "Home" : "Inicio"; ?>
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					<?php echo $lang == true ? "Events" : "Eventos"; ?>
				</span>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
						<?php
						if ($totalEvento < 1) {
							echo "<h3>Nenhum evento foi cadastrado!</h3>";
						}else{
						if ($totalEvento) do{
							$idFoto = $linhaEvento['FotoEvento_idFoto'];
							$dadosFoto = mysqli_query($con, "SELECT * FROM fotoevento WHERE idFoto LIKE '$idFoto'");
							$linhaFoto = mysqli_fetch_assoc($dadosFoto);
							$endereco = $linhaFoto['endereco'];
							$data = explode("-", $linhaEvento['data']);
						?>
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="#">
									<img src=<?php echo "../BuchoAdm/foto/" . $endereco; ?> alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										<?php echo $data[2]; ?> <!-- 28 --><!-- 28 -->
									</span>

									<span class="txt31">
										<?php echo Nomear($data[1])[0].Nomear($data[1])[1].Nomear($data[1])[2]. ", ". $data[0]; ?> <!-- Dez, 2018 --><!-- Dec, 2018 -->
									</span>
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="#" class="tit9"><?php echo $linhaEvento['nome']; ?></a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin <!-- por Admin --><!-- by Admin -->
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										<?php echo $data[2]." ".Nomear($data[1]).", ".$data[0]; ?> <!-- 28 de Dezembro, 2018 --><!-- 28 December, 2018 -->
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Evento <!-- Cozinhando, Comida --><!-- Cooking, Food -->
									</span>
								</div>

								<p>
									<?php echo $linhaEvento['descricao']; ?>
								</p>

								<a href=<?php echo "blog-detail.php?lang=".$lang."&idEvento=".$linhaEvento['idEvento']; ?> class="dis-block txt4 m-t-30">
									Continue Lendo <!-- Continue Lendo --><!-- Continue Reading -->
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<?php }while ($linhaEvento = mysqli_fetch_assoc($dadosEvento)); } ?>

						<!-- Pagination -->
						<div class="pagination flex-l-m flex-w m-l--6 p-t-25">
							<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
							<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						<!-- Search -->
						<div class="search-sidebar2 size12 bo2 pos-relative">
							<input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search" placeholder=<?php echo $lang == true ? "Search" : "Pesquisar"; ?>>
							<button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
						</div>

						<!-- Categories -->
						<div class="categories">
							<h4 class="txt33 bo5-b p-b-35 p-t-58">
								<?php echo $lang == true ? "Categories" : "Categorias"; ?> <!--  --><!-- Categories -->
							</h4>

							<ul>
								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "Cooking recipe" : ""; ?> <!-- Receita culinária --><!-- Cooking recipe -->
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "Delicious foods" : "Comidas Deliciosas"; ?> <!--  --><!-- Delicious foods -->
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "Events Design" : "Design de Eventos"; ?> <!--  --><!-- Events Design -->
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "Restaurant Place" : "Interior do Restaurante"; ?> <!-- Restaurante Place --><!-- Restaurant Place -->
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										WordPress <!-- WordPress --><!-- WordPress -->
									</a>
								</li>
							</ul>
						</div>

						<!-- Most Popular -->
						<div class="popular">
							<h4 class="txt33 p-b-35 p-t-58">
								<?php echo $lang == true ? "Most popular" : "Mais popular"; ?> <!--  --><!-- Most popular -->
							</h4>

							<ul>
								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/blog-11.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											<?php echo $lang == true ? "Best Places for Wine" : "Melhores lugares para vinho"; ?> <!--  --><!-- Best Places for Wine -->
										</a>

										<span class="txt14">
											3 <?php echo $lang == true ? "days ago" : "dias atrás"; ?> <!-- 3  --><!-- 3 days ago -->
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/blog-12.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											<?php echo $lang == true ? "Eggs and Cheese" : "Ovos e Queijo "; ?> <!-- --><!-- Eggs and Cheese -->
										</a>

										<span class="txt14">
											<?php echo $lang == true ? "July" : "Julho"; ?> 2, 2017 <!-- 2 de Julho de 2017 --><!-- July 2, 2017 -->
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/blog-13.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											<?php echo $lang == true ? "Style the Wedding Party" : "Estilo a festa de casamento"; ?> <!-- E --><!-- Style the Wedding Party -->
										</a>

										<span class="txt14">
											<?php echo $lang == true ? "May" : "Maio"; ?> 28, 2017 <!-- 28 de  de 2017 --><!-- May 28, 2017 --> 
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/blog-14.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											<?php echo $lang == true ? "Cooking recipe Delicious" : "Receita culinária Deliciosa"; ?> <!--  --><!-- Cooking recipe Delicious --> 
										</a>

										<span class="txt14">
											<?php echo $lang == true ? "May" : "Maio"; ?> 25, 2017 <!-- 25 de Maio de 2017 --><!-- May 25, 2017 -->
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="images/blog-15.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											<?php echo $lang == true ? "Feijoada is prepared fresh" : "Feijoada é preparada fresca"; ?> <!-- Pizza  --><!-- Pizza is prepared fresh --> 
										</a>

										<span class="txt14">
											<?php echo $lang == true ? "May" : "Maio"; ?> 2, 2017 <!-- 2 de Maio de 2017 --><!-- May 2, 2017 -->
										</span>
									</div>
								</li>
							</ul>
						</div>


						<!-- Archive -->
						<div class="archive">
							<h4 class="txt33 p-b-20 p-t-43">
								<?php echo $lang == true ? "Archive" : "Arquivo"; ?> <!--  --><!-- Arquive --> 
							</h4>

							<ul>
								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "July" : "Julho"; ?> 2018 <!-- Julho de 2018 --><!-- July 2018 --> 
									</a>

									<span class="txt29">
										(9)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "June" : "Junho"; ?> 2018 <!-- Junho de 2018 --><!-- June 2018 -->
									</a>

									<span class="txt29">
										(39)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "May" : "Maio"; ?> 2018 <!-- Maio de 2018 --><!-- May 2018 -->
									</a>

									<span class="txt29">
										(29)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "April" : "Abril"; ?>  2018 <!-- Abril 2018 --><!-- April 2018 -->
									</a>

									<span class="txt29">
										(35)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "March" : "Março"; ?> 2018 <!-- Março de 2018 --><!-- March 2018 -->
									</a>

									<span class="txt29">
										(22)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "February" : "Fevereiro"; ?> 2018 <!-- Fevereiro de 2018 --><!-- February 2018 -->
									</a>

									<span class="txt29">
										(32)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "January" : "Janeiro"; ?> 2018 <!--  de 2018 --><!-- January 2018 -->
									</a>

									<span class="txt29">
										(21)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?php echo $lang == true ? "December" : "Dezembro"; ?> 2017 <!--  de 2017 --><!-- December 2017 -->
									</a>

									<span class="txt29">
										(26)
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						<?php echo $lang == true ? "Contact Us" : "Contate-nos"; ?> 
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							R. Boa Esperança - Ponta da Serra, Itaitinga - CE, 61880-000 <!-- 8º andar, 379 Hudson St, Nova York, NY 10018 --><!-- 8th floor, 379 Hudson St, New York, NY 10018 -->
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(85) 3377-1851
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							buchodebode@gmail.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						<?php echo $lang == true ? "Opening Times" : "Horário de Funcionamento"; ?> <!--  --><!--  -->
					</h4>

					<ul>
						<li class="txt14">
							09:30 AM – 11:00 PM <!-- 09:30 da Manhã – 11:00 da Noite --><!-- 09:30 AM – 11:00 PM -->
						</li>

						<li class="txt14">
							<?php echo $lang == true ? "Every Day" : "Todo dia"; ?>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						<?php echo $lang == true ? "Latest events" : "Últimos eventos"; ?>
					</h4>

					<div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-bell" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@buchodebode
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays the featured image in the slider.
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017 <!-- 21 Dez 2017 --><!-- 21 Dec 2017 -->
						</span>
					</div>

					<div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-bell" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@buchodebode
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays<!-- O Activello é uma boa opção. Ele tem um controle deslizante embutido que exibe --><!-- Activello is a good option. It has a slider built into that displays -->
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017 <!-- 21 Dez 2017 --><!-- 21 Dec 2017 -->
						</span>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						<?php echo $lang == true ? "Gallery" : "Galeria"; ?>
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-04.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-04.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-08.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-08.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-12.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-12.jpg" alt="GALLERY">
						</a>
					</div>

				</div>
			</div>
		</div>

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
	<script type="text/javascript" src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
