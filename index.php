<?php
session_start();

// Define your manual login details
$manualUsername = "admin";
$manualPassword = "admin"; // Replace with your desired secure password

if (isset($_POST['login'])) {
    $email = $_POST['username'];
    $password = md5($_POST['password']);

    // Check if the provided username and password match your manual login details
    if ($email === $manualUsername && $password === md5($manualPassword)) {
        $_SESSION['alogin'] = $_POST['username'];
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {
        echo "<script>alert('Invalid Details');</script>";
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
<!-- <title>Cover Template · Bootstrap v5.0</title> -->
<title>Luxury Wheels | Admin Login</title>
<!--Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!--Css -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<!--Fonts -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 


</head>

<body>
        <div class="login-page">
            <div class="login-form">
                <h1 class="text-center text-bold text-light mt-4x">Admin Login</h1>
                <form method="post" class="text-center">
                    <input type="text" placeholder="Username" name="username" class="form-control mb-3">
                    <input type="password" placeholder="Password" name="password" class="form-control mb-3">
                    <div style ="margin: 20px 10px 0px 30%;">
                    <button class="btn btn-primary "name="login" type="submit">LOGIN</button>
                    <button class="btn btn-primary"><a href="../index.php">BACK</a></button>
                    </div>
                </form>
            </div>
        </div>


    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
