<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <?php
    include("topBar.php");

  // <!-- ======= Header ======= -->
    include("header.php");
  // <!-- End Header -->

  // <!-- ======= Hero Courosel ======= -->
    include("slider.php");
  // <!-- End Courosel-->
  ?>
  <main id="main">

  <!-- ======= Featured Services Section ======= -->
  <?php
    include("featureService.php");
  // <!-- End Featured Services Section -->

  // <!-- ======= Cta Section ======= -->
    include("cta.php");
  ?>
  <!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <?php include("about.php"); ?>
    <!-- End About Us Section -->

    <!-- ======= Counts Section s======= -->
    <!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <?php include("features.php"); ?><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <?php include("services.php"); ?>
    <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <?php include("appoiment.php") ?>
    <!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <?php include("departments.php"); ?>
    <!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <?php include("testimoni.php"); ?>
    
    <!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <?php include("doctor.php"); ?>
    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <?php include("galery.php"); ?>
    <!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
    <?php include("pricing.php"); ?>
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <?php include("faq.php"); ?>
    <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <?php include("contact.php"); ?>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>