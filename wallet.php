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
        body {
            background-color: #28223F;
            font-family: Montserrat, sans-serif;

        }
        
        h3 {
            color:black;
            padding:10px;
        }
        
        h5 {
            margin: 10px 0;
            color:white;
            background-color:blue;
            padding:15px;
            font-family:times_new_roman;
       
        }
        h6 {
            text-transform: uppercase;
            color:black;
            font-weight:bold;
            margin-top:-10px;

        }
        
        p {
            font-size: 14px;
            line-height: 21px;
        }
        
        .card-container {
            background-color: #231E39;
            
            box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
            color: #B3B8CD;
            position: relative;
            height:650px;
            text-align: center;

        }
        
        .card-container .pro {
            color: #231E39;
            background-color: #FEBB0B;
            border-radius: 3px;
            font-size: 14px;
            font-weight: bold;
            padding: 3px 7px;
            position: absolute;
            top: 30px;
            left: 30px;

        }
        
        .card-container .round {
            border: 5px solid #03BFCB;
            border-radius: 50%;
            padding: 7px;
            margin-top: 50px;
        }
        
        button.primary {
            background-color: #03BFCB;
            border: 1px solid #03BFCB;
            border-radius: 3px;
            width: 150px;
            color: #231E39;
            font-family: Montserrat, sans-serif;
            font-weight: bold;
            padding: 10px 25px;
        }
        
        button.primary.ghost {
            background-color: transparent;
            color: #02899C;
            font-weight:bold;
        }
        
        .skills {
            background-color: #1F1A36;
            text-align: left;
            padding: 15px;
            margin-top: 30px;
        }
        
        .skills ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        .skills ul li {
            border: 1px solid #2D2747;
            border-radius: 2px;
            display: inline-block;
            font-size: 12px;
            margin: 0 7px 7px 0;
            padding: 7px;
        }
        
        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }
   


.container {
  display: flex;
  justify-content: center; /* Center items horizontally */
  align-items: stretch; /* Align items to stretch to equal height */
  margin: 20px auto;
  max-width: 1300px;
  height: 600px;

}

.profile-section,
.transaction-history-section {
  width: 50%;

  display: flex;
  flex-direction: column; /* Set flex direction to column */
  margin: 0 5px; /* Add margin for space between the two containers */

}

.profile-section .card-container,
.transaction-history-section .balance-section {
  border: radius 2px;0px;
  flex: 1; /* Distribute remaining space evenly */
}

/* Profile Section styling */
.profile-section {
  width: 50%;
  
}

.card-container {
  background-color: #f9f9f9;
  border: 1px solid #ddd;

  padding: 20px;
  text-align: center;
}

.round {
  border-radius: 50%;
}

.buttons {
  margin-top: 20px;
}

.primary {
  background-color: #007bff;
  color: black;
  border: none;

  cursor: pointer;
}

.primary.ghost {
  background-color: transparent;
  color:black;
  border: 1px solid #007bff;
  margin:30px;
}

/* Transaction History Section styling */
.transaction-history-section {
  width: 50%;
}

.balance-section {
  background-color: #f9f9f9;
  border: 1px solid #ddd;

  padding: 20px;
}

.heading-container {
  margin-bottom: 20px;
}

.heading-container h2 {
  color: black;
  text-align:center;
  font-weight:bold;
  padding:15px;

}

.receipt-items {
  max-height: 420px;
  overflow-y: auto;

  
}

.transaction-line {
  padding: 15px 0;
  border-bottom: 1px solid #ddd;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.transaction-details {
  display: flex;
  align-items: center;
}

.transaction-details > div {
  margin-right: 20px;
}

.date {
  font-size: small;
  color: #888;
}

.balance-value{
  font-size:35px;
  margin-left:5px;
}
.ammount{
  font-weight:bold;
  font-size:20px;
  margin-right:20px;
}




/* Your existing CSS styles */

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}
.close {
  font-size: 54px; /* Adjust the font size as needed */
  position: absolute;
  top: 10px; /* Adjust as needed */
  right: 10px; /* Adjust as needed */
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Your existing styles */

</style>


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
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="wallet.php">Wallet</a>
        </li>
        <li class="nav-item">
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
  </div>

  <div class="container">
  <!-- Profile Section -->
  <div class="profile-section">
    <div class="card-container">
      <img class="round" src="hazel.jpeg" alt="user" height="300px" />
      <h3>Hazel G. Baltazar</h3>
      <h6>Information and Communication Technology</h6>
      <div class="buttons">
        <button class="primary">Edit Profile</button>
        <button class="primary ghost">Logout</button>
      </div>
    </div>
  </div>

  <!-- Balance and Transaction History Section -->
  <div class="transaction-history-section">
    <div class="balance-section">
      <div class="available-balance">
        <h5>Available Balance <span class="balance-value">₱ 20000</span></2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo>
      </div>

      <div class="heading-container heading-center">
        <h2>Transaction History</h2>
        <hr>
      </div>

      <div class="receipt-items">
        <div class="transaction-line">
          <div class="transaction-details">
            <div>Transaction title</div>
            <div class="date">2024-04-16</div>
          </div>
          <div class="ammount">-100</div>
        </div>


        <div class="transaction-line">
          <div class="transaction-details">
            <div>Transacle</div>
            <div class="date">2024-04-16</div>
          </div>
          <div class="ammount">-100</div>
        </div>
        <div class="transaction-line">
          <div class="transaction-details">
            <div>Transaction title</div>
           
          </div>
          <div class="ammount">-100</div>
        </div>

        <div class="transaction-line">
          <div class="transaction-details">
            <div>Transaction title</div>
           
          </div>
          <div class="ammount">-100</div>
        </div>
        <div class="transaction-line">
          <div class="transaction-details">
            <div>Transaction title</div>
            <div class="date">2024-04-16</div>
          </div>
          <div class="ammount">-100</div>
        </div>

        <div class="transaction-line">
          <div class="transaction-details">
            <div>Transaction title</div>
            <div class="date">2024-04-16</div>
          </div>
          <div class="ammount">-100</div>
        </div>

        <div class="transaction-line">
          <div class="transaction-details">
            <div>Transaction title</div>
            <div class="date">2024-04-16</div>
          </div>
          <div class="ammount">-100</div>
        </div>

        <div class="transaction-line">
          <div class="transaction-details">
            <div>Transaction title</div>
            <div class="date">2024-04-16</div>
          </div>
          <div class="ammount">-100</div>
        </div>




        
        <!-- Repeat for other transactions -->
      </div>
    </div>
  </div>
</div>

<!-- Modal for displaying receipt details -->
<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="receipt-details"></div>
  </div>
</div>


<script>
// Get all transaction lines
var transactionLines = document.querySelectorAll('.transaction-line');

// Loop through each transaction line and add click event listener
transactionLines.forEach(function(line) {
  line.addEventListener('click', function() {
    // Get transaction details
    var title = this.querySelector('.transaction-details > div').textContent;
    var date = this.querySelector('.date').textContent;
    var amount = this.querySelector('.ammount').textContent;

    // Display receipt details in modal
    var modal = document.getElementById('modal');
    var receiptDetails = document.getElementById('receipt-details');
    receiptDetails.innerHTML = `
      <div class="receipt">
        <div class="receipt-header" style="text-align:center;">ARELLANO UNIVERSITY ECC</div>
        <div class="receipt-item">
          <div class="bold">RECIEPT OF PAYMENT</div>
        </div>
        <div class="receipt-item">
          <div class="bold">${title}</div>
          <div class="small">${date}</div>
        </div>
        <div class="receipt-separator"></div>
        <table class="line-items-container">
          <thead>
            <tr>
              <th class="heading-description">Description</th>
              <th class="heading-price">Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>product 1</td>
              <td class="right">${amount}</td>
            </tr>
            <tr>
              <td>product 2</td>
              <td class="right">${amount}</td>
            </tr>
            <tr>
              <td>product 3</td>
              <td class="right">${amount}</td>
            </tr>
          </tbody>
        </table>
        <div class="receipt-separator"></div>
        <div class="receipt-total">
          <div class="left-align">
            <div class="bold">Total:</div>
            <div>00000</div>
            <div class="bold">Receipt Number:</div>
            <div>XXXXXXXX</div>
            <div class="bold">Date and Time:</div>
            <div>Date and Time</div>
          </div>
        </div>
      </div>
    `;
    modal.style.display = 'block';
  });
});

// Close modal when close button or outside modal is clicked
var closeModal = document.querySelector('.close');
closeModal.addEventListener('click', function() {
  var modal = document.getElementById('modal');
  modal.style.display = 'none';
});

window.addEventListener('click', function(event) {
  var modal = document.getElementById('modal');
  if (event.target == modal) {
    modal.style.display = 'none';
  }
});
</script>


</div>



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
              Cash-A is a centralized platform for managing student payments and balances in educational institutions. It tracks and processes payments for tuition fees, meal plans, and extracurricular activities, streamlining account management and enhancing financial transparency.
            </p>
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

</body>

</html>