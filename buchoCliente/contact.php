<?php 
	if (isset($_GET['lang']) == 1) {
		$lang = $_GET['lang'];
	}else{
		$lang = false;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
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
						<a href=<?php echo "contact.php?lang=" . !$lang;?>><i class="fa fa-gear m-l-21" aria-hidden="true"></i></a>
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
			<?php echo $lang == true ? "Contact" : "Contato"; ?> <!-- s --><!-- Contacts -->
		</h2>
	</section>



	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-90 p-b-113">
		<!-- Map -->
		<div class="container">
			<div class="map bo8 bo-rad-10 of-hidden">
				<div class="contact-map size37" id="google_map" data-map-x="-3.959596" data-map-y="-38.5289337" data-pin="images/icons/favicon.png" data-scrollwhell="0" data-draggable="1"></div>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-135">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/map-icon.png" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								<?php echo $lang == true ? "Location" : "Localização"; ?> <!--  --><!-- Location -->
							</span>

							<span class="txt23 size38">
								R. Boa Esperança - Ponta da Serra, Itaitinga - CE, 61880-000 <!-- 8º andar, 379 Hudson St, Nova York, NY 10018 --><!-- 8th floor, 379 Hudson St, New York, NY 10018 -->
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/phone-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								<?php echo $lang == true ? "Call Us" : "Contate-nos"; ?> <!--  --><!-- Contact-Us -->
							</span>

							<span class="txt23 size38">
								(85) 3377-1851
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/clock-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								<?php echo $lang == true ? "Opening Hours" : "Horário de Funcionamento"; ?> <!--  --><!-- Opening Times -->
							</span>

							<span class="txt23 size38">
								09:30 AM – 11:00 PM <br/><?php echo $lang == true ? "Every Day" : "Todo dia"; ?> <!-- 09:30 da Manhã – 11:00 da Noite --><!-- 09:30 AM – 11:00 PM -->
							</span>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
