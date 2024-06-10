<header>
<?php if (isset($_SESSION['login']) && strlen((string)$_SESSION['login']) != 0): ?>
<div class="default-header header-padding">
    <div class="">
        <div class="col-sm-9 col-md-10">
            <div class="header_info">
                <div class="header_widgets head-fonts">
                    <?php
                    echo '<i>Welcome To Luxury Wheels Cars.</i>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Navigation -->
<nav id="navigation_bar" class="navbar navbar-default navbar-expand-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-2">
                <div class="logo large"> <a href="index.php"><img src="assets/images/logo.png" alt="image"/></a> </div>
            </div>
            <div class="navbar-header">
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="header_wrap">
                <div class="user_login">
                    <ul>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle" aria-hidden="true"></i> User <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <?php
                                if (isset($_SESSION['login'])) { // Check if the 'login' session variable exists (user is logged in)
                                    $email = $_SESSION['login'];
                                    $sql = "SELECT FullName FROM users WHERE Email=:email";
                                    $query = $dbh->prepare($sql);
                                    $query->bindParam(':email', $email, PDO::PARAM_STR);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) {
                                            echo htmlentities($result->FullName);
                                        }
                                    }
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if (isset($_SESSION['login'])) { ?>
                                    <li><a href="profile.php">Profile Settings</a></li>
                                    <li><a href="update-password.php">Update Password</a></li>
                                    <li><a href="reservation.php">Reservation</a></li>
                                    <li><a href="logout.php">Sign Out</a></li>
                                <?php } else { ?>
                                    <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Login / Register</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header_wrap">
                    <div class="user_login">
                        <ul>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i> Admin <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                <?php if (isset($_SESSION['admin_login'])) { ?>
                                    <!-- If an admin is logged in, show the "Admin Login" link -->
                                    <li><a href="#adminloginform" data-toggle="modal" data-dismiss="modal">Admin</a></li>
                                <?php } else { ?>
                                    <!-- If no admin is logged in, show the "Admin Login" link that directs to the admin panel -->
                                    <li><a href="admin/index.php" data-toggle="modal" data-dismiss="modal">Admin Panel</a></li>
                                <?php } ?>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav ">
                    <li><a href="home.php ">Home</a></li>
                    <li><a href="page.php?type=aboutus">About Us</a></li>
                    <li><a href="car-listing.php">Wedding Cars</a></li>
                    <li><a href="page.php?type=faqs">FAQs</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->
</header>
