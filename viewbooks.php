<?php
include 'config.php';
$admin = new Admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Book</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<link rel="stylesheet" href="css/custom-styles.css">
</head>
<body>

<div class="super_container">
	<!-- Header -->
	 <header class="header d-flex flex-row">
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
						<li class="main_nav_item"><a href="show.php">Home</a></li>
						<li class="main_nav_item"><a href="courses.php"> Books</a></li>
						<li class="main_nav_item"><a href="addbooks.php"> Upload</a></li>
						 <!-- <li class="main_nav_item"><a href="viewbooks.php"> View Books</a></li> -->
						<li class="main_nav_item"><a href="../project/index.php">Logout</a></li> 
					</ul>
				</div>
		</nav>
		</div>	
</div>

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
				<h1>View Your Books</h1>
				</div>
			</div>
			<div class="row course_boxes">
			            <?php
						$stmt1 = $admin->ret("SELECT * FROM `adbook`");
						while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) { ?>
			         	<div class="col-lg-4 course_box">
				
						<img src="controller/<?php echo $row1['img'] ?>" alt="" class="card-img-top">
						<div class="card-body text-center">
						<div class="card-title"><a href=""> 
						<button class="btn btn-default btn-block"> ₹<?php echo $row1['price'] ?></button></a> </div>
						</div>
						<?php } ?>
					</div>
				</div>
                 <!-- <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/b2.png" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="register.php"> 
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹350  </button></a> </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book8.png" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="register.php"> 
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹350  </button></a> </div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book1.png" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="register.php"> 
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹350  </button></a> </div>
						</div>
					</div>
				</div>

				
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book2.png" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="register.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹400  </button></a> </div>
						</div>
					</div>
				</div>

			
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book3.png" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="register.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
							<button class="btn btn-default btn-block"> ₹450  </button></a> </div> 
						</div>
					</div>
				</div>

				
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book4.png" alt="https://unsplash.com/@kellitungay">
						<div class="card-body text-center">
							<div class="card-title"><a href="register.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
							<button class="btn btn-default btn-block"> ₹350  </button></a> </div>
						</div>
					</div>
				</div>

				
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book5.png" alt="https://unsplash.com/@claybanks1989">
						<div class="card-body text-center">
							<div class="card-title"><a href="register.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
							<button class="btn btn-default btn-block"> ₹300  </button></a> </div>
						</div>
					</div>
				</div>

				
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book6.png" alt="https://unsplash.com/@element5digital">
						<div class="card-body text-center">
							<div class="card-title"><a href="register.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
							<button class="btn btn-default btn-block"> ₹375  </button></a> </div> 
						</div>
					</div>
				</div>

				 <div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book7.png" alt="https://unsplash.com/@gaellemm">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹400  </button></a> </div>
						</div>
					</div>
				</div> 

				
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book8.png" alt="https://unsplash.com/@gaellemm">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹500  </button></a> </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book9.png" alt="https://unsplash.com/@gaellemm">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹450  </button></a> </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book10.png" alt="https://unsplash.com/@gaellemm">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹500  </button></a> </div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book11.png" alt="https://unsplash.com/@gaellemm">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">
							<a href="buy.php"> <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹500  </button></a> </div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book12.png" alt="https://unsplash.com/@gaellemm">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹400  </button></a> </div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/book13.png" alt="https://unsplash.com/@gaellemm">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">
							<a href="buy.php" > <button class="btn btn-primary">Buy now</button> </a>
								<button class="btn btn-default btn-block"> ₹500  </button></a> </div>
						</div>
					</div>
					</div>  -->
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
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>