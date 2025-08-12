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

  $animalID = intval($_GET['animalID']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PawPatrol - Adoption Form</title>
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
          <li><a class="nav-link scrollto" href="#">Donate</a></li>
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
            <li>Adoption Form</li>
          </ol>
        </div>

      </div>
    </section>
  </main>

  <div class="container" data-aos="fade-up">

  <?php 
            $conn = mysqli_connect("localhost", "root", "", "pet_adoption");
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql = ("SELECT * FROM animal WHERE animalID = $animalID"); 
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<a href='../assets/form/PawPatrol Adoption Form.docx' download><h1>Download Adoption Form Here</h1></a>";
              echo "<h2>Adoption Form for " . $row["animalName"] . "</h2>";
              echo "<img src='../assets/img/animals/" . $row["animalName"] . "." . $row["imgType"] . "' height = '250px' width = '250px' >";
              echo "<form action='../functions.php' method='post' enctype='multipart/form-data' data-aos='fade-up' data-aos-delay='100'>
              <div class='col-lg-4 col-md-6 form-group'>
              <input type='file' name='file' class='form-control'>
              </div>
              <br>
            <div class='col-lg-4 col-md-6 form-group mt-3 mt-md-0'>
              <select class='form-select' name='animalName'>
                <option selected value='" . $row["animalName"] . "'>" . $row["animalName"] . "</option>
              </select>
            </div>
            <br>
            <div class='col-lg-4 col-md-6 form-group mt-3 mt-md-0'>
              <select class='form-select' name='animalID'>
                <option selected value='" . $row["animalID"] . "'>" . $row["animalID"] . "</option>
              </select>
            </div>
            <br>
            <button type='submit' name='submitAdoptionForm'>Submit</button>
          </form> ";
            }
            } 
            else {
              echo "0 results"; 
            }
            $conn->close();
        ?>

  </div>

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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donate</a></li>
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