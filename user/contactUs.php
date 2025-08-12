<?php 
	include'../functions.php';
  if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PawPatrol - Contact Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.ico" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PawPatrol - v3.1.0
  * Template URL: https://bootstrapmade.com/PawPatrol-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+9113090791</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 9AM - 4PM</span></i>
      </div>

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      
      <a href="main.php" class="logo me-auto me-lg-0"><img src="../assets/img/PawPatrol.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="main.php">Home</a></li>
          <li><a class="nav-link scrollto" href="aboutUs.php">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Adoption</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="adoptionProcess.php">Adoption Process</a></li>
              <li><a href="adoptionListing.php">Adoption Listing</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="donate.php">Donate</a></li>
          <li><a class="nav-link scrollto" href="contactUs.php">Contact Us</a></li>
              <li class='dropdown'><a href='#'><span><?php echo $_SESSION['user']['username']; ?></span><i class='bi bi-chevron-down'></i></a>
              <ul>
                <li><a href='profile.php'>Profile</a></li>
                <li><a href="userForm.php">My Adoption Forms</a></li>
                <li><a href="feedbackForm.php">Submit Feedback</a></li>
                <li><a href="animalStatus.php">Animal Status</a></li>
                <li><a href='../logout.php'>Log Out</a></li>
              </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="main.php">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </section>
  </main>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
    </div>

    <div data-aos="fade-up">
  <iframe
    style="border:0; width: 100%; height: 350px;"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15556.956369827765!2d74.83746774054184!3d12.892341715552663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a6b9e3a51f1%3A0xa806a28ba66f5251!2sBejai%2C%20Mangaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1735471190409!5m2!1sen!2sin"
    frameborder="0"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>


    <div class="container" data-aos="fade-up">

      <div class="row mt-5">
      <div class="col-md-6 my-3">
        <div class="col-lg-6">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>ABC Solutions Pvt. Ltd.<br>
              #15, Ocean View Tower,
              2nd Floor, Bejai - Kapikad Road,
              Bejai, Mangalore, Karnataka 575004</p>
            </div>

            <div class="open-hours">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>
                Monday-Saturday:<br>
                9:00 AM - 4:00 PM
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>pawpatrol@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+9113090791</p>
            </div>

          </div>

        </div>
        </div>
        <div class="col-md-6 my-3">
        <div class="container">
      <div class="d-flex justify-content-center align-items-center">
        
      
      <form action="contactUsQueries.php" method="POST">
        <div class="container">
          <div class="row mb-3">
            <h3>
          Any queries?
      </h3></div>
          <div class="row mb-3">
          <label class="form-label" for="username">Name:</label><br>
          <input class="form-control" type="text" id="username" name="username">

          </div>
          <div class="row mb-3">
          <label class="form-label" for="message">Message</label><br>
          <textarea class="form-control" type="text" id="message" name="message" rows="4"></textarea>

          </div>
          <div class="row mb-3">
          <label class="form-label" for="email">Email ID:</label><br>
          <input class="form-control" type="email" id="email" name="email" min="1" max="5" step="1">

          </div>

          <div class="row mb-3">
            <input class="btn btn-mb btn-primary" type="submit" value="Submit Query">
          </div>
        </div>
      </form>
      </div>
    </div>

          
        </div>
      </div>
      
    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>PawPatrol</h3>
              <p>
                ABC Solutions Pvt. Ltd.<br>
                #15, Ocean View Tower,
                2nd Floor, Bejai - Kapikad Road,
                Bejai, Mangalore, Karnataka 575004<br><br>
                <strong>Phone:</strong> +9113090791<br>
                <strong>Email:</strong> pawpatrol@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Website Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="main.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="adoptionProcess.php">Adoption Process</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="adoptionListing.php">Adoption Listing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="donate.php">Donate</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactUs.php">Contact Us</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
    
    <!-- dor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>