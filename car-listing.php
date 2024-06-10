<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('includes/config.php');
// Avoid multiple error_reporting calls; you can set it once at the top

?>

<!DOCTYPE HTML>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
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
    <?php include('includes/header.php'); ?>
    <!-- /Header -->


    <?php

    echo '<div class="about_info about_content"><h2>Our Cars</h2></div>';
    ?>


    <!--Listing-->
    <section class="listing-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="result-sorting-wrapper">
                        <div class="sorting-count">
                            <?php

                            //Query for Listing count
                            $sql = "SELECT COUNT(id) AS count FROM vehicles";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $result = $query->fetch(PDO::FETCH_ASSOC);
                            $cnt = $result['count'] ?? 0;

                            ?>
                            <p><span><?php echo htmlentities($cnt); ?> Listings</span></p>
                        </div>
                    </div>

                    <?php
                    $sql = "SELECT vehicles.*, brands.BrandName, brands.id as bid FROM vehicles JOIN brands ON brands.id = vehicles.BrandName";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                    ?>
                            <div class="product-listing-m gray-bg">
                                <div class="product-listing-img"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive" alt="Image" /> </a>
                                </div>
                                <div class="product-listing-content">
                                    <h5><a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->BrandName); ?> <?php echo htmlentities($result->VehiclesTitle); ?></a></h5>
                                    <p class="list-price">&pound;<?php echo htmlentities($result->PricePerDay); ?> / Day</p>
                                    <ul>
                                        <li>Seat Capacity: <?php echo htmlentities($result->SeatingCapacity); ?> </li>
                                        <li>Model Year: <?php echo htmlentities($result->ModelYear); ?> </li>
                                        <li>Fluid: <?php echo htmlentities($result->FuelType); ?></li>
                                        <li>
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>Availability: Available
                                        </li>
                                    </ul>
                                </div>
                                <a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id); ?>" class="btn btn-color shadow-button">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>

                            </div>
                    <?php }
                    } ?>
                </div>

                <!--Side-Bar-->
                <aside class="col-md-3 col-md-pull-9">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-filter" aria-hidden="true"></i> Search Vehicles </h5>
                        </div>
                        <div class="sidebar_filter">
                            <form action="search-carresult.php" method="post">
                                <div class="form-group select">
                                    <select class="form-control" name="brand">
                                        <option>Select Brand</option>

                                        <?php
                                        $sql = "SELECT * FROM  brands ";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $result) { ?>
                                                <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->BrandName); ?></option>
                                        <?php }
                                        } ?>

                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control" name="fueltype">
                                        <option>Select Fuel Type</option>
                                        <option value="Gas">Gas</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Battery">Battery</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </aside>
            </div>
        </div>
    </section>
    <!-- /Listing-->

    <!--Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->

    <!--Login-Form -->
    <?php include('includes/login.php'); ?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php'); ?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php'); ?>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
