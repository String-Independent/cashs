<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['schoolid'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="casha.png" type="">

  <title> Cash-A </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />

<style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat');
</style>
</head>

<body class="sub_page">


    <div class="hero_area">

        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="images/hero-bg.png" alt="">
            </div>
        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php">
                        <span>
                            Cash-A
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="wallet.php"> Wallet</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> Announcements</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.php">Services</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="why.php">Profile<span class="sr-only">(current)</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team.php">Team </a>
                            </li>
                            <li class="nav-item">
                                <form id="logoutForm" method="post" action="login.php">
                                    <input type="hidden" name="logout" value="1">
                                    <button class="nav-link btn" type="submit"><i class="fa fa-user" aria-hidden="true"></i> Logout</button>
                                </form>
                            </li>
                            <li class="nav-item">
                                <form class="form-inline">
                                    <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- profile section -->
    <section class="profile_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    My Profile
                </h2>
            </div>
            <div class="profile_container">
                <form id="profileForm" method="post" action="update_profile.php">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="middlename">Middle Name</label>
                            <input type="text" class="form-control" id="middlename" name="middlename" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mobilenumber">Mobile Number</label>
                            <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="schoolid">School ID</label>
                            <input type="text" class="form-control" id="schoolid" name="schoolid" value="<?php echo $_SESSION['schoolid']; ?>" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="parentsguardian">Parents/Guardian</label>
                            <input type="text" class="form-control" id="parentsguardian" name="parentsguardian">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="currentschool">Current School & Grade</label>
                            <input type="text" class="form-control" id="currentschool" name="currentschool">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </section>
    <!-- end profile section -->

    <!-- footer section -->
    <section class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> [CASH-A] ARELLANO UNIVERSITY S.Y 2023-2024
            </p>
        </div>
    </section>

</body>

</html>