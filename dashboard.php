<?php
// Start the session
session_start();

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    session_unset();

    session_destroy();

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin Page</title>
    <link rel="stylesheet" href="admin/css/style.css" type="text/css">

        
</head>
<body style="margin:20% 20% 20% 30%;">

    <div class="">
            <h1>Welcome to Admin Page</h1>
            <p>
                Hello Admin! You've successfully logged in to the admin panel.
            </p>
            <p>
                Here, you can manage various administrative tasks, settings, and more.
            </p>
            <p>
                Feel free to navigate through the admin functionalities available to you. <br> <br>
                Created by Students of Computer and Data Science department in Birmingham City University.
                <br><br>
                Dafe Magege
                <br>
                Mohammed Ahmed
                <br>
                Mohammed Khan 
            </p>
            <!-- Logout button and form -->
            <form method="post">
                <button type="submit" name="logout">Logout</button>
            </form>
    </div>
</body>
</html>
