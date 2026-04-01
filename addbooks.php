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
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <!-- <h3 class="page-title">Add product</h3> -->
          
            </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card"><!-- creates a card-style container with padding, border, and background,-->
                  <div class="card-body">
                    <h4 class="card-title">Add Your Books</h4>                
                    <form class="forms-sample" method="POST"enctype="multipart/form-data" action="controller/addbooks.php"><!--This attribute is necessary when the form includes file uploads. It allows the form to send files as part of the data.-->
                   <input type="hidden" name="pid" id="" value="">
                      <div class="form-group">
                        <label for="exampleInputName1">Book Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Book Name" value="" required/>
                      </div>                  
                      <div class="form-group">
                        <label>Book image</label>
                        <input type="file" name="img" class="file-upload-default" />
                      </div>

									<div class="form-group">
									<label>Category?</label><br>
									<input type="radio" id="opt1" name="type" value="History">
									<label for="opt1">Histoty</label><br><br>
									<input type="radio" id="opt2" name="type" value="Horroe">
									<label for="opt2">Horror</label><br><br>
									<input type="radio" id="opt3" name="type" value="Bibliography">
									<label for="opt3">Bibliography</label><br><br>
									<input type="radio" id="opt4" name="type" value="Science Fiction">
									<label for="opt4">Science Fiction</label><br><br>
									<input type="radio" id="opt5" name="type" value="Thriller">
									<label for="opt5">Thriller</label><br><br>
									</div>
								</div>
                      <div class="form-group">
                        <label for="exampleInputName1">Book Amount</label>
                        <input type="text" class="form-control" name="price" id="exampleInputName1" placeholder="Book Amount" value="" required/>
                      </div>
                    
                      <button type="submit" class="btn btn-primary mr-2"name="add">Upload Book</button>
                      <button class="btn btn-light" ><a href="courses.php" class="signup-image-link">Back</a></button>
                    </form>
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
