<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en" class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.84.0">
<!-- <title>Cover Template · Bootstrap v5.0</title> -->
<title>Luxury Wheels Rentals</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Css -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--Fonts -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 

</head>


<body>
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 


<?php
    $videoURL = 'assets/videos/car (4).mp4';
    ?>
    
    <div class="video-container">
        <video autoplay muted loop>
            <source src="<?php echo $videoURL; ?>" type="video/mp4">

        </video>
        <div class="dark-overlay-vid"></div>
        <div class="content-vid">
            <h1><u>Discover</u> Your Dream Wedding Car.</h1>
            <p>Your Perfect Ride for the Big Day.</p>
        </div>
    </div>


<!-- Hero Page-->
<section class="hero-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
       <u><h2>Explore </u><span> an Extensive Selection of Wedding Cars</span></h2>
      <p>"Experience the unparalleled allure of our performance-centered vehicles, designed to mirror the dreams of your perfect wedding day. 
          <br>
          We don't settle for the ordinary; instead, we embrace extravagance, crafting celebrations that are truly unique and far from conventional. 
          <br>
          Our relentless pursuit of perfection ensures an unforgettable testament to love and individuality. 
          <br>
          <em><strong><u>Rent</u> our cars to create an opulent tapestry of cherished moments and turn your dreams into reality."<strong></em>
      </p>
    </div>
    <div class="row"> 
       
      </div>
    </div>
  </div>
  
<div class="text-center">
    <a href="car-listing.php" class="btn"><i>We've got the best luxury Cars...</i></a>
</div>

</section>
<!-- /Hero Page --> 

<!--finalpage-->
<?php
    $videoURL = 'assets/videos/tyres.mp4'; 
    ?>
    
    <div class="video-container">
        <video autoplay muted loop>
            <source src="<?php echo $videoURL; ?>" type="video/mp4">
        </video>

        <div class="less-dark-overlay"></div>
        
        <div class="content-vid">
        <div class="text-center">
        <h3>Our Satisfied <u><span>Customers</u></span></h3>
        <br>
        </div>
           <div class="">
         <u><h4>Mike </u><span>Sunders-</span></h4>
          <p class="text-center font-none"><i>"Renting a car from Luxury Wheels Rental was a wonderful decision. The vehicle was elegant, and the entire process was smooth. It added a special touch to our event"."</i></p>

          <u><h4>Jennifer </u><span>Shed -</span></h4>
          <p class="text-center font-none"><i>"Luxury Wheels Rental provided us with a fantastic car and top-notch service. We were impressed with their attention to detail and would highly recommend them to anyone in need of a rental car for their special day."</i></p>
 
      </div>
        </div>
    </div>

    <section>
<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 
</section>

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>
<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>