<?php 
include 'config.php';
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BOOK</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
    < <header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Arcs of Books</span>
				</div>
			</div> 
			<!-- Main Navigation -->
			  <nav class="main_nav_container">
				 <div class="main_nav">
					<ul class="main_nav_list"> 				
					     <li class="main_nav_item"><a href="#">Home</a></li>  
						 <!-- <li class="main_nav_item"><a href="courses.php">Books</a></li> -->
						<li class="main_nav_item"><a href="courses.php"> Books</a></li>
						<li class="main_nav_item"><a href="addbooks.php"> Upload</a></li>
						 <!-- <li class="main_nav_item"><a href="viewbooks.php"> View Books</a></li> -->
						<li class="main_nav_item"><a href="../project/index.php">Logout</a></li> 
					</ul>
				</div>
			</nav>
		</div>
	</header> 
</div>
	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Read <span>Learn</span> Grow</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Books:<span>Timeless Treasue</span> </h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Books</span> today!</h1>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					 <div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Bibliography</h2>
								<a href="courses.php" class="hero_box_link">Click Here</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/books.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Novel Book</h2>
								 <a href="courses.php" class="hero_box_link">Click Here</a> 
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Story Book</h2>
								<a href="courses.php" class="hero_box_link">Click Here </a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
