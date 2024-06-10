<?php
session_start();
error_reporting(0);
include('includes/config.php');




// Display success message
if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
  echo '<div class="success-message">' . $_SESSION['success'] . '</div>';
  unset($_SESSION['success']);
}
// Display error message
if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
  echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
  unset($_SESSION['error']);
}

if(strlen($_SESSION['login'])==0)
  {
header('location:index.php');
}
else{
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


<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Reservation</h1>
      </div>
      <ul class="coustom-breadcrumb">
      </ul>
    </div>
  </div>
</section>
<!-- /Page Header-->

<section class="user_profile inner_pages">
    <div class="row">
      <div class="col-md-3 col-sm-3">
       <?php include('includes/sidebar2.php');?>

      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="sentence underline">Reserved Cars </h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">
<?php
$email=$_SESSION['login'];
  $sql = "SELECT vehicles.Vimage1 as Vimage1, vehicles.VehiclesTitle, vehicles.id as vid, brands.BrandName, vehicles.PricePerDay, reservation.FromDate, reservation.ToDate, reservation.message, reservation.Status  
          FROM reservation 
          JOIN vehicles ON reservation.VehicleId = vehicles.id 
          JOIN brands ON brands.id = vehicles.BrandName 
          WHERE reservation.Email = :email";
$query = $dbh->prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)

{  ?>

<li>
<div class="vehicle-info">
    <div class="vehicle-img">
        <a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid); ?>">
            <img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" alt="image">
        </a>
    </div>

    <div class="vehicle-details">
        <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid); ?>">
            <?php echo htmlentities($result->BrandName); ?> , <?php echo htmlentities($result->VehiclesTitle); ?>
        </a></h6>
        <p><b>From Date:</b> <?php echo htmlentities($result->FromDate); ?><br />
            <b>To Date:</b> <?php echo htmlentities($result->ToDate); ?></p>
        <p><b>Amount Per Day:</b> $<?php echo htmlentities($result->PricePerDay); ?></p>
    </div>

    <?php if ($result->Status != 1) { ?>
        <div class="vehicle-status">
            <a href="payment.php" class="btn outline btn-xs">Proceed to Payment</a>
            <div class="clearfix"></div>
        </div>
    <?php } ?>


    <?php if ($result->Status != 1) { ?>
                <div class="vehicle-status">
                    <!-- Existing buttons... -->
                    <a href="delete_reservation.php?vehicleId=<?php echo htmlentities($result->vid); ?>" class="btn outline btn-xs remove-button">Remove</a>
                    <div class="clearfix"></div>
                </div>
            <?php } ?>

    <div style="float: left">
        <p><b>Request:</b> <?php echo htmlentities($result->message); ?> </p>
    </div>
</div>

                </li>
                <?php }} ?>



            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles-->
<?php include('includes/footer.php');?>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/success.js"></script>

</body>
</html>
<?php } ?>
