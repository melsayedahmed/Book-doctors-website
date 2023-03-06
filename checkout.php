<?php
// error_reporting(0);
$conn = mysqli_connect('localhost','root','','www');
if (isset($_POST['FirstName'])) {
  $FirstName = $_POST ["FirstName"]; 
  $LastName = $_POST ["LastName"];
  $Email = $_POST['Email'];
  $Phone = $_POST['Phone'];
  $Sql = "INSERT INTO WWW (FirstName , LastName , Email , Phone) 
  VALUES('$FirstName','$LastName','$Email','$Phone')";    
    mysqli_query($conn, $Sql);
  
  
  };
if(!$conn){
  echo'error' . mysqli_connect_errno();
}
// $FirstName = $_POST['FirstName']; 
// $LastName = $_POST['LastName'];
// $Email = $_POST['Email'];
// $Phone = $_POST['Phone'];

// if (isset($_POST['submit'])) {

// $Sql = "INSERT INTO WWW(FirstName,LastName,Email,Phone) 
// VALUES('$FirstName','$LastName','$Email','$Phone')";    
//   mysqli_query($conn, $Sql);


// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Doccure</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <link href="assets/img/favicon.png" rel="icon">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


  <link rel="stylesheet" href="assets/css/feather.css">

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <div class="main-wrapper">

    <header class="header">
      <div class="container">
        <div class="nav-bg-fifteen">
          <nav class="navbar navbar-expand-lg header-nav nav-transparent">
            <div class="navbar-header">
              <a id="mobile_btn" href="javascript:void(0);"> <span class="bar-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </a>
              <a href="index.html" class="navbar-brand logo">
                <img src="assets/img/logo-2.png" class="img-fluid" alt="Logo">
              </a>
            </div>
            <div class="main-menu-wrapper">
              <div class="menu-header">
                <a href="index.html" class="menu-logo">
                  <img src="assets/img/logo-2.png" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i>
                </a>
              </div>
              <ul class="main-nav black-font">
                <li class="active"><a href="index.html">Home</a>
                </li>
                <li class="has-submenu menu-effect"><a href="">Patients <i class="fas fa-chevron-down"></i></a>
                  <ul class="submenu">
                    <li><a href="booking.html">Booking</a>
                    </li>
                    <li><a href="checkout.html">Checkout</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu menu-effect"><a href="">Pages <i class="fas fa-chevron-down"></i></a>
                  <ul class="submenu">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                  </ul>
                </li>

                <li class="login-link"> <a href="login.html">Login / Signup</a>
                </li>
              </ul>
            </div>
            <ul class="nav header-navbar-rht">
              <li class="nav-item">
                <a class="nav-link btn-five btn-fifteen" href="login.html">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-five-light btn-fifteen-light" href="register.html">Sign Up</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>


    <div class="breadcrumb-bar">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
              </ol>
            </nav>
            <h2 class="breadcrumb-title">Checkout</h2>
          </div>
        </div>
      </div>
    </div>


    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-lg-8">
            <div class="card">
              <div class="card-body">

                <form action="checkout.php" method="post">

                  <div class="info-widget">
                    <h4 class="card-title">Personal Information</h4>
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group card-label">
                          <label>First Name</label>
                          <input class="form-control" type="text" name="FirstName">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group card-label">
                          <label>Last Name</label>
                          <input class="form-control" type="text" name="LastName">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group card-label">
                          <label>Email</label>
                          <input class="form-control" type="email" name="Email">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="form-group card-label">
                          <label>Phone</label>
                          <input class="form-control" type="text" name="Phone">
                        </div>
                      </div>
                    </div>
                    <div class="exist-customer">Existing Customer? <a href="login.html">Click here to login</a></div>
                  </div>

                  <div class="payment-widget">
                    <h4 class="card-title">Payment Method</h4>

                    <div class="payment-list">
                      <label class="payment-radio credit-card-option">
                        <input type="radio" name="radio" checked>
                        <span class="checkmark"></span>
                        Credit card
                      </label>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group card-label">
                            <label for="card_name">Name on Card</label>
                            <input class="form-control" id="card_name" type="text">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group card-label">
                            <label for="card_number">Card Number</label>
                            <input class="form-control" id="card_number" placeholder="1234  5678  9876  5432"
                              type="text">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group card-label">
                            <label for="expiry_month">Expiry Month</label>
                            <input class="form-control" id="expiry_month" placeholder="MM" type="text">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group card-label">
                            <label for="expiry_year">Expiry Year</label>
                            <input class="form-control" id="expiry_year" placeholder="YY" type="text">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group card-label">
                            <label for="cvv">CVV</label>
                            <input class="form-control" id="cvv" type="text">
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="payment-list">
                      <label class="payment-radio paypal-option">
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                        Paypal
                      </label>
                    </div>


                    <div class="terms-accept">
                      <div class="custom-checkbox">
                        <input type="checkbox" id="terms_accept">
                        <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
                      </div>
                    </div>


                    <div class="submit-section mt-4">
                      <button type="submit" class="btn btn-primary submit-btn" name="submit">Confirm and Pay</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>
          <div class="col-md-5 col-lg-4 theiaStickySidebar">

            <div class="card booking-card">
              <div class="card-header">
                <h4 class="card-title">Booking Summary</h4>
              </div>
              <div class="card-body">

                <div class="booking-doc-info">
                  <a href="#
" class="booking-doc-img">
                    <img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                  </a>
                  <div class="booking-info">
                    <h4><a href="#
">Dr. Darren Elder</a></h4>
                    <div class="rating">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star"></i>
                      <span class="d-inline-block average-rating">35</span>
                    </div>
                    <div class="clinic-details">
                      <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
                    </div>
                  </div>
                </div>

                <div class="booking-summary">
                  <div class="booking-item-wrap">
                    <ul class="booking-date">
                      <li>Date <span>16 Nov 2019</span></li>
                      <li>Time <span>10:00 AM</span></li>
                    </ul>
                    <ul class="booking-fee">
                      <li>Consulting Fee <span>$100</span></li>
                      <li>Booking Fee <span>$10</span></li>
                      <li>Video Call <span>$50</span></li>
                    </ul>
                    <div class="booking-total">
                      <ul class="booking-total-list">
                        <li>
                          <span>Total</span>
                          <span class="total-cost">$160</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <footer class="footer">

      <div class="footer-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6">

              <div class="footer-widget footer-about">
                <div class="footer-logo">
                  <img src="assets/img/footer-logo.png" alt="logo">
                </div>
                <div class="footer-about-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. </p>
                  <div class="social-icon">
                    <ul>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">

              <div class="footer-widget footer-menu">
                <h2 class="footer-title">For Patients</h2>
                <ul>
                  <li><a href="#">Search for Doctors</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                  <li><a href="booking.html">Booking</a></li>
                </ul>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">

              <div class="footer-widget footer-menu">
                <h2 class="footer-title">For Doctors</h2>
                <ul>
                  <li><a href="#">Appointments</a></li>
                  <li><a href="#">Chat</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                </ul>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">

              <div class="footer-widget footer-contact">
                <h2 class="footer-title">Contact Us</h2>
                <div class="footer-contact-info">
                  <div class="footer-address">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <p> Cairo<br> Egypt</p>
                  </div>
                  <p>
                    <i class="fas fa-phone-alt"></i>
                    01146198234
                  </p>
                  <p class="mb-0">
                    <i class="fas fa-envelope"></i>
                    <a href="#">[email&#160;protected]</a>
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


      <div class="footer-bottom">
        <div class="container-fluid">

          <div class="copyright">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <div class="copyright-text">
                  <p class="mb-0">&copy; 2023 &copy; Mohab Mohammed. All rights reserved.</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">

                <div class="copyright-menu">
                  <ul class="policy-menu">
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Policy</a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>

    </footer>

  </div>


  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

  <script src="assets/js/feather.min.js"></script>

  <script src="assets/js/script.js"></script>
</body>

</html>