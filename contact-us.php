<?php
session_start();
include('includes/config.php');

if(isset($_POST['send'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contactusquery(name, Email, ContactNumber, Message) VALUES(:name, :email, :contactno, :message)";
    $query = $dbh->prepare($sql);
    $query->execute([
        ':name' => $name,
        ':email' => $email,
        ':contactno' => $contactno,
        ':message' => $message,
    ]);

    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId) {
        $msg = "Query Sent. We will contact you shortly";
    } else {
        $error = "Something went wrong. Please try again";
    }
}
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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!-- Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>
    <!-- Header -->
    <?php include('includes/header.php');?>
    <!-- /Header --> 

    <!-- Page Header -->
    <?php echo '<div class="about_info about_content"><h2>Contact Us</h2></div>'; ?>
    <!-- /Page Header--> 

    <!-- Contact-us -->
    <div class="contactus_page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(isset($error)) { ?>
                        <div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div>
                    <?php } else if(isset($msg)) { ?>
                        <div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div>
                    <?php } ?>
                    <div class="contact_form gray-bg">
                        <form method="post">
                            <div class="form-group">
                                <label class="control-label">Full Name <span>*</span></label>
                                <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email Address <span>*</span></label>
                                <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Phone Number <span>*</span></label>
                                <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Message <span>*</span></label>
                                <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn" type="submit" name="send">Send Message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="contact_detail">
                        <?php 
                        $pagetype = $_GET['type'] ?? '';
                        $sql = "SELECT Address, Email, ContactNo FROM contactusinfo";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if($query->rowCount() > 0) {
                            foreach($results as $result) { ?>
                                <ul>
                                    <li>
                                        <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                        <div class="contact_info_m"><a href="mailto:<?php echo htmlentities($result->ContactNo); ?>"><?php echo htmlentities($result->ContactNo); ?></a></div>
                                    </li>
                                    <li>
                                        <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="contact_info_m"><a href="tel:<?php echo htmlentities($result->Email); ?>"><?php echo htmlentities($result->Email); ?></a></div>
                                    </li>
                                    <li>
                                        <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="contact_info_m"><?php echo htmlentities($result->Address); ?></div>
                                    </li>
                                </ul>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Contact-us --> 

    <!-- Footer -->
    <?php include('includes/footer.php');?>
    <!-- /Footer--> 

    <!-- Back to top -->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!-- /Back to top --> 

    <!-- Login-Form -->
    <?php include('includes/login.php');?>
    <!-- /Login-Form --> 

    <!-- Register-Form -->
    <?php include('includes/registration.php');?>
    <!-- /Register-Form --> 

    <!-- Forgot-password-Form -->
    <?php include('includes/forgotpassword.php');?>
    <!-- /Forgot-password-Form --> 

    <!-- Scripts --> 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>
