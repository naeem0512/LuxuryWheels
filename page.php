<?php
session_start();
error_reporting(0);
include('includes/config.php');
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

<?php

// Define the $pageType based on the 'type' parameter in the URL
$pageType = isset($_GET['type']) ? $_GET['type'] : 'aboutus';

// Map the 'type' parameter to the corresponding page file
$pageFiles = [
    'aboutus' => 'aboutus.php',
    'faqs' => 'faqs.php',
    'privacy' => 'privacy.php',
    'terms' => 'terms.php',
];

// Check if the specified $pageType exists in the mapping
if (array_key_exists($pageType, $pageFiles)) {
    $pageFile = $pageFiles[$pageType];
} else {
    // Default to 'aboutus.php' if the 'type' parameter is not valid
    $pageType = 'aboutus';
    $pageFile = $pageFiles[$pageType];
}

// Include the appropriate page file
include($pageFile);
?>

<?php
$sql = "SELECT type, detail, PageName FROM pages WHERE type = :pageType";
$query = $dbh->prepare($sql);
$query->bindParam(':pageType', $pageType, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

if ($query->rowCount() > 0) {
    foreach ($results as $result) {
        // Display the content here as needed
        ?>
        <section class="page-header aboutus_page">
            <!-- ... (Your existing code to display page header) ... -->
        </section>
        <section class="about_us section-padding">
            <div class="container">
                <!-- ... (Your existing code to display page content) ... -->
            </div>
        </section>
        <?php
    }
}



// Include footer, back to top, and other sections
include('includes/footer.php');
include('includes/login.php');
include('includes/registration.php');
include('includes/forgotpassword.php');
?>


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>