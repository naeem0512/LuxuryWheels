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

    <!-- Page Header -->
    <?php echo '<div class="about_info about_content"><h2>About us</h2></div>';


    // Define the page type
    $pageType = 'aboutus';

    // Fetch content from the pages table
    $sql = "SELECT detail FROM pages WHERE type = :pageType";
    $query = $dbh->prepare($sql);
    $query->bindParam(':pageType', $pageType, PDO::PARAM_STR);
    $query->execute();

    if ($query) {
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result) {
        
            $aboutUsText = nl2br($result['detail']);
            
            echo '<div class="a_info about_page container">' . $aboutUsText . '</div>';
            echo '<div class="about_info about_content"> Thank you for choosing us!!!</div>';

        } else {
            echo 'Content not found.';
        }
    } else {
        echo 'Database query error: ' . $dbh->errorInfo()[2];
    }
    ?>

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
