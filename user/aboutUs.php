<?php 
	include'../functions.php';
  if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }
  if (isAdmin()) {
    $_SESSION['msg'] = "Wrong page";
    header('location: ../admin/main.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PawPatrol - About Us</title>
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
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section>
  </main>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
        <p>History</p>
      </div>
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <!-- <div class="fortxt"> -->
            <p style="text-align: justify;">HP (PawPatrol) is a non-profit animal shelter dedicated to the well-being of abandoned and unwanted animals. Its mission is to facilitate the adoption of these animals into loving homes. However, the current web system has significant limitations: it does not display pictures or detailed information about the animals, making it difficult for potential adopters to connect with the animals.

The adoption process is carried out manually at the shelter, leading to inefficiencies, long processing times, and a frustrating experience for both the shelter staff and the prospective pet owners. These issues discourage many people from adopting, as the process is perceived as time-consuming and cumbersome.</p>
          <!-- </div> -->
        <!-- <div class="forimage">
          <p>
          <img src="../assets/img/staff/president.jpeg" class="img-fluid">
          <p>Founder : Mr.Steven </p>
        </p>

          </div> -->
        </div>

      </div>
    </section>

    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
        <p>Vision</p>
      </div>
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center ">
          <p style="text-align: justify;">Our vision is to create a world where every animal in need of a loving home finds a safe, caring family. By enhancing the adoption process through a user-friendly and efficient online platform, we aim to increase awareness, simplify the adoption journey, and empower individuals to make informed decisions about bringing a pet into their lives. We strive to eliminate the barriers that currently hinder adoption rates, ensuring that every animal has the opportunity to thrive in a nurturing environment. Through our commitment to technology, compassion, and community engagement, we envision a future where animal shelters are vibrant places of hope and new beginnings.

</p>
        </div>

      </div>
    </section>
    </div>

  </section>


    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
        <p>Mission</p>
      </div>
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <p style="text-align: justify;">Our mission is to provide a compassionate and supportive environment for abandoned and unwanted animals, helping them find loving homes through a streamlined adoption process. We aim to reduce the barriers to pet adoption by leveraging technology to create an accessible, informative, and efficient platform for potential adopters. By improving the visibility of animals in need and simplifying the adoption process, we are committed to increasing the number of successful adoptions, ensuring that each animal receives the care and attention they deserve while enriching the lives of families and communities.</p>
        
        </div>

      </div>
    </section>

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
        <p>Service</p>
      </div>
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center ">
          <p style="text-align: justify;">We offer a comprehensive range of services designed to support both animals in need and prospective adopters. Our platform provides detailed profiles for each animal, including images, health status, and adoption history, making it easier for users to find their perfect match. In addition, we facilitate the adoption process through an easy-to-use online submission form, streamlining the steps for potential adopters. Our shelter also provides ongoing support and guidance throughout the adoption journey, ensuring a smooth transition for both the pet and the new owner. Through these services, we aim to create a seamless, transparent, and compassionate adoption experience.</p>
        </div>
      </div>
    </section>
    </div>
    
  </section>

       
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