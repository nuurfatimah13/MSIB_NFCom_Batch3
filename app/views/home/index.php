<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= WEBSITE_TITLE; ?> | <?= $data['judul']; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= BASEURL; ?>/img/favicon.png" rel="icon">
  <link href="<?= BASEURL; ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= BASEURL; ?>/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        <a class="navbar-brand brand-logo" href="<?= BASEURL; ?>">
            <img src="<?= BASEURL; ?>/img/logo.svg" alt="logo" />
        </a>
      </h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= BASEURL; ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="getstarted scrollto" href="<?= BASEURL; ?>/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>InvenSystem</h1>
          <h2>Website untuk mengelola inventaris barang pada perusahaan.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="<?= BASEURL; ?>/login" class="btn-get-started scrollto">Login</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?= BASEURL; ?>/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h3>
                InvenSystem merupakan sebuah website yang dirancang untuk mempermudah perusahaan dalam mengelola administrasi dan inventaris barang perusahaan.
            </h3> <br>
            <h3>InvenSystem dibangun dengan PHP Native oleh 
                <a href="https://github.com/nuurfatimah13" target="_blank"><i>Imah</i></a>.
            </h3>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= BASEURL; ?>/vendor/aos/aos.js"></script>
  <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASEURL; ?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= BASEURL; ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= BASEURL; ?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= BASEURL; ?>/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= BASEURL; ?>/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= BASEURL; ?>/js/main.js"></script>

</body>

</html>