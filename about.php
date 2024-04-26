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

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>

    /* Global Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #fff; /* White background */
    color: #1f1f1f; /* Dark text color */
}

a {
    color: #00bbf0;
    text-decoration: none;
}

a:hover {
    color: #00204a;
}

/* Header Styles */
.header_section {
    background-color: #00204a;
}

.navbar-brand span {
    color: #fff;
}

.navbar-nav .nav-link {
    color: #fff;
}

.navbar-nav .nav-link:hover {
    color: #00bbf0;
}

.navbar-toggler span {
    background-color: #fff;
}

/* Announcement Section Styles */
.announcement_section {
    padding: 5px 0;
}
h2{
  font-size:50px;
  padding:20px;
}
.announcement_container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;

}

.announcement_item {
    background-color: #00204a;
    padding: 50px; /* Increase padding to increase height */
    margin-bottom: 10px; /* Increase margin to increase height */
    width: calc(50% - 05px); /* Adjusted width for 4 columns */
    box-sizing: border-box;
    border-radius:20px;
    height:300px;
}
.announcement_item h3 {
    color: #fff;
    font-size: 30px;
    margin-bottom: 10px;
}

.announcement_item p {
    color: #ccc;
    font-size: 16px;
    margin-bottom: 0;
    max-height: 100px; /* Adjust the maximum height as needed */
    overflow: hidden; /* Hide any overflow */
    text-overflow: ellipsis; /* Display ellipsis for overflowed text */
    white-space: nowrap; /* Prevent wrapping */
}

 /* Footer Section Styles */
 .footer_section {
      background-color: #00204a;
      color: #fff; /* White text color */
      padding: 20px 0;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
  }

  .footer_section p {
      margin: 0;
  }

  .footer_section span {
      color: white;
  }
/* Announcement item styles */
.announcement_item {
    cursor: pointer;
    position: relative;
}

/* "Read More" text styles */
.read_more {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
    color: #00204a; /* Dark text color */
    padding: 10px 20px;
    border-radius: 5px;
    opacity: 0; /* Initially hidden */
    transition: opacity 0.3s ease-in-out; /* Smooth transition */
}

.announcement_item:hover .read_more {
    opacity: 1; /* Show the "Read More" text on hover */
}

.announcement_item:hover {
    background-color: #000; /* Black background on hover */
    transition: background-color 0.5s ease-in-out; /* Slower transition */
}

.announcement_item:hover h3,
.announcement_item:hover p {
    color: #fff; /* White text color on hover */
}

/* Popup styles */
.announcement_popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
    color: #1f1f1f; /* Dark text color */
    padding: 20px;
    max-width: 80%;
    max-height: 80%;
    overflow-y: auto;
    z-index: 1000;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Box shadow */
    transition: max-height 0.3s ease-in-out; /* Smooth transition */
}

/* Close button styles */
#closePopup {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
    color: #1f1f1f; /* Dark text color */
}

#closePopup:hover {
    color: #00bbf0; /* Hover color */
}


  </style>
</head>
<script>
function showAnnouncement(title, description) {
    var popup = document.getElementById('announcementPopup');
    var popupContent = document.getElementById('popupContent');
    var closePopup = document.getElementById('closePopup');
    
    // Set content
    popupContent.innerHTML = '<h2>' + title + '</h2><p>' + description + '</p>';
    
    // Show popup
    popup.style.display = 'block';
    
    // Close popup when clicking outside or on X button
    closePopup.addEventListener('click', function() {
        popup.style.display = 'none';
    });
    
    window.addEventListener('click', function(event) {
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    });
    
    // Adjust popup height based on content
    setTimeout(function() {
        popup.style.maxHeight = (window.innerHeight - 100) + 'px';
    }, 100); // Delay to ensure the content is loaded
}

</script>
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
              <li class="nav-item active">
                <a class="nav-link" href="about.php">Announcements<span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.php">Team</a>
              </li>
              <li class="nav-item">
            <form id="logoutForm" method="post" action="login.php">
                <input type="hidden" name="logout" value="1">
                <button class="nav-link btn" type="submit"><i class="fa fa-user" aria-hidden="true"></i> Logout</button>
            </form>
        </li>
        
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>




  <!-- announcement section -->
  <section class="announcement_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Announcements
            </h2>
        </div>
        <div class="announcement_container" id="announcementContainer">
            <!-- Display announcements dynamically here -->
            <?php
            // Retrieve announcements from your database and display them here
            ?>
            <div class="announcement_item" onclick="showAnnouncement('Announcement Title 1', 'Announcement Description 1')">
                <h3>Announcement Title 1</h3>
                <p>Announcement Description 1</p>
                <div class="read_more">READ MORE</div>
            </div>
            <!-- Repeat for other announcements -->
        </div>
    </div>
</section>
<!-- Popup frame -->
<div id="announcementPopup" class="announcement_popup">
    <span id="closePopup">&times;</span>
    <div id="popupContent"></div>
</div>

  <!-- end announcement section -->













  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p style="color: white;">
        &copy; <span id="displayYear"></span> [CASH-A] ARELLANO UNIVERSITY S.Y 2023-2024
      </p>
    </div>
</section>

</body>

</html>