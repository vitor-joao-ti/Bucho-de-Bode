<?php 
	if (isset($_GET['lang']) == 1) {
		$lang = $_GET['lang'];
	}else{
		$lang = false;
	}
?>

<!DOCTYPE html>
<html lang="br">
<head>
	<title>Inicio</title><!-- Home -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<body class="animsition" bgcolor="#FF9257">

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
						<a href=<?php echo "index.php?lang=" . !$lang;?>><i class="fa fa-gear m-l-21" aria-hidden="true"></i></a>
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

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/slide1-01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown" style="color: red">
							<?php echo $lang == true ? "Welcome to" : "Bem Vindo ao"; ?> <!----><!-- Welcome to -->
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Bucho de Bode <!-- Bucho de Bode --><!-- Bucho de Bode -->
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href=<?php echo "menu.php?lang=".$lang; ?> class="btn1 flex-c-m size1 txt3 trans-0-4">
								<?php echo $lang == true ? "Look Menu" : "Olhe o Cardápio"; ?>
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/master-slides-02.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn" style="color: red">
							<?php echo $lang == true ? "Welcome to" : "Bem Vindo ao"; ?> <!--Bem Vindo ao --><!-- Welcome to -->
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Bucho de Bode <!-- Bucho de Bode --><!-- Bucho de Bode -->
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
							<a href=<?php echo "contact.php?lang=".$lang; ?> class="btn1 flex-c-m size1 txt3 trans-0-4">
								<?php echo $lang == true ? "Contact Us" : "Contate-nos"; ?>
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/master-slides-01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft" style="color: red">
							<?php echo $lang == true ? "Welcome to" : "Bem Vindo ao"; ?> <!--Bem Vindo ao --><!-- Welcome to -->
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Bucho de Bode <!-- Bucho de Bode --><!-- Bucho de Bode -->
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<a href=<?php echo "reservation.php?lang=".$lang; ?> class='btn1 flex-c-m size1 txt3 trans-0-4">
								<?php echo $lang == true ? "Reservation" : "Reserve sua Mesa"; ?> 
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							<?php echo $lang == true ? "Northeastern Restaurant" : "Restaurante Nordestino"; ?> <!-- Restaurante Italiano --><!-- Italian Restaurant -->
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							<?php echo $lang == true ? "Welcome" : "Bem-Vindo"; ?>
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
						</p>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/our-story-01.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our menu -->
	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					<?php echo $lang == true ? "Discover" : "Descubra"; ?>
				</span>

				<h3 class="tit5 t-center m-t-2">
					<?php echo $lang == true ? "Our Menu" : "Nosso Cardápio"; ?>
				</h3>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-01.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size4">
									<?php echo $lang == true ? "Lunch" : "Principal" ?>
								</a>
							</div>
						</div>

						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-05.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size25" style="height: 60px">
									<?php echo $lang == true ? "Side Dish" : "Acompanhamento"; ?>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-08.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size7">
									<?php echo $lang == true ? "Drink's" : "Bebidas"; ?>
								</a>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-10.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="#" class="btn2 flex-c-m txt5 ab-c-m size8">
									<?php echo $lang == true ? "Dessert" : "Sobremesa"; ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- Booking -->
	<section class="section-booking bg1-pattern p-t-100 p-b-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							<?php echo $lang == true ? "Resevation" : "Reservas"; ?>
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							<?php echo $lang == true ? "Book table" : "Formulário"; ?>
						</h3>
					</div>

					<form class="wrap-form-booking" method="POST" action="insertCliente.php">
						<div class="row">
							<div class="col-md-6">
								<!-- Date -->
								<span class="txt9">
									<?php echo $lang == true ? "Date" : "Data"; ?>
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="data">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>

								<!-- Time -->
								<span class="txt9">
									<?php echo $lang == true ? "Time" : "Hora"; ?>  <!-- Tempo --><!-- Time -->
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="hora">
										<option>9:00</option>
										<option>9:30</option>
										<option>10:00</option>
										<option>10:30</option>
										<option>11:00</option>
										<option>11:30</option>
										<option>12:00</option>
										<option>12:30</option>
										<option>13:00</option>
										<option>13:30</option>
										<option>14:00</option>
										<option>14:30</option>
										<option>15:00</option>
										<option>15:30</option>
										<option>16:00</option>
										<option>16:30</option>
										<option>17:00</option>
										<option>17:30</option>
										<option>18:00</option>
									</select>
								</div>

								<!-- People -->
								<span class="txt9">
									<?php echo $lang == true ? "People" : "Pessoas"; ?>
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="pessoa">
										<option>1 <?php echo $lang == true ? "person" : "pessoa"; ?></option>
										<option>2 <?php echo $lang == true ? "people" : "pessoas"; ?></option> 
										<option>3 <?php echo $lang == true ? "people" : "pessoas"; ?></option>
										<option>4 <?php echo $lang == true ? "people" : "pessoas"; ?></option>
										<option>5 <?php echo $lang == true ? "people" : "pessoas"; ?></option>
										<option>6 <?php echo $lang == true ? "people" : "pessoas"; ?></option>
										<option>7 <?php echo $lang == true ? "people" : "pessoas"; ?></option>
										<option>8 <?php echo $lang == true ? "people" : "pessoas"; ?></option>
										<option>9 <?php echo $lang == true ? "people" : "pessoas"; ?></option>
										<option>10 <?php echo $lang == true ? "people" : "pessoas"; ?></option>
										<option>11 <?php echo $lang == true ? "people" : "pessoas"; ?></option>
										<option>12 <?php echo $lang == true ? "people" : "pessoas"; ?></option> 
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<!-- Name -->
								<span class="txt9">
									<?php echo $lang == true ? "Name" : "Nome"; ?>
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nome" placeholder="Nome">
								</div>

								<!-- Phone -->
								<span class="txt9">
									<?php echo $lang == true ? "Password" : "Senha"; ?>
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="senha" placeholder="Senha">
								</div>
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								<?php echo $lang == true ? "Book Table" : "Reservar"; ?>
							</button>
						</div>
					</form>
				</div>

				<div class="col-lg-6 p-b-30 p-t-18">
					<div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/booking-01.jpg" alt="IMG-OUR">
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
	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
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
	<script src="js/main.js"></script>

</body>
</html>
