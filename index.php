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
</head>

<body>

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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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

    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Pay Smarter,<br>
                      Arellano Faster! 
                    </h1>
                    <p>
                      Cash-A is a centralized platform for managing student payments and balances in educational institutions. It tracks and processes payments for tuition fees, meal plans, and extracurricular activities, streamlining account management and enhancing financial transparency.
                    </p>
                    <div class="btn-box">
                      <a href="about.php " class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="casha.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Crypto <br>
                      Currency
                    </h1>
                    <p>
                      Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                    </p>
                    <div class="btn-box">
                      <a href="about.php" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Crypto <br>
                      Currency
                    </h1>
                    <p>
                      Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                    </p>
                    <div class="btn-box">
                      <a href="about.php" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>our team
              </div>
            </div>
          </div>
        </div>
        
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Our <span>Services</span>
          </h2>
          <p>
            Providing comprehensive solutions tailored to your needs, our services offer unmatched efficiency and reliability.
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Wallet Management
                </h5>
                <p>
                  Arellano students can easily handle their finances using our balance wallet feature, ensuring smooth transactions and financial stability                </p>
              
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Privacy Storage
                </h5>
                <p>
                  For Arellano students, our cutting-edge privacy storage feature ensures peace of mind by securely safeguarding your valuable belongings.          </p>     
                 
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Technical Support
                </h5>
                <p>
                  For Arellano students, access technical support tailored to your needs, guiding you through every step with precision and expertise                </p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            View All Services
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          About <span>Us</span>
        </h2>
        <p>
          Cash-A revolutionizes school financial management, offering a streamlined platform for tracking student payments and promoting transparency in academic institutions.





        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="casha.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              We Are Cash-A
            </h3>
            <p>
              At Cash-A, we're dedicated to revolutionizing the way educational institutions manage their finances. Our platform offers comprehensive solutions for tracking student payments, ensuring transparency, and streamlining administrative processes. With a focus on efficiency and reliability, we empower schools to optimize their financial management and provide better experiences for students and staff alike.            </p>
            <p>
              Cash-A is a pioneering solution tailored for educational institutions, aiming to modernize financial management within the academic realm. With a commitment to efficiency and transparency, our platform simplifies the tracking of student payments, ensuring accuracy and ease of use. By centralizing administrative processes and enhancing financial visibility, Cash-A empowers schools to optimize their operations and deliver exceptional services to students and staff.


            </p>
           
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  

  <!-- team section -->
  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Our <span> Team</span>
        </h2>
      </div>

      <div class="team_container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="hazel.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                Baltazar, Hazel G.
                </h5>
             
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="april.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Caguicla, April Mae R.
                </h5>
               
              </div>
             <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="cyrill.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                 Camacho, Cyrill kate
                </h5>
                
              </div>
             <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="ellysa.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                 Maglite,Ellysa S.
                </h5>
               
              </div>
             <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="lyra.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>Lyra althea Pascual </h5>
               
              </div>
             <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="orench.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                    Manicad, Orench Struezel            
                      </h5>
               
              </div>
             <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="ryza.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                 Topacio, Ryza Mhay
                </h5>
               
              </div>
             <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="black.jpeg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  null
                </h5>
               
              </div>
             <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end team section -->


  <!-- client section -->



  <!-- end client section -->


  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Gen. Luna St, Malabon, Metro Manila
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call (02) 8932 5209
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  hs.elisaesguerra@arellano.edu.ph
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
Cash-A is a centralized platform for managing student payments and balances in educational institutions. It tracks and processes payments for tuition fees, meal plans, and extracurricular activities, streamlining account management and enhancing financial transparency.            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.php">
                Home
              </a>
              <a class="" href="about.php">
                Announcements
              </a>
              <a class="" href="service.php">
                Services
              </a>
              <a class="" href="why.php">
                Profile
              </a>
              <a class="" href="team.php">
                Team
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Feedback
          </h4>
          <form action="#">
            <input type="text" placeholder="Write Feedback Here" />
            <button type="submit">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> [CASH-A] ARELLANO UNIVERSITY S.Y 2023-2024

      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>