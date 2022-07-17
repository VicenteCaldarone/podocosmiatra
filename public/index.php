<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Podocosmiatra</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icons/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icons//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icons//favicon-16x16.png">
  <link rel="manifest" href="assets/img/icons//site.webmanifest">
  <!--
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Amoeba - v4.3.0
  * Template URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="/">Podocosmiatra</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#productos">Productos</a></li>
          <!--
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="turnos.php">Turnos</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Podocosmiatra</h1>
      <h2>Profesional que brinda una atención diferencial en el cuidado de pies.</h2>
      <a href="#about" class="btn-get-started scrollto">Iniciar</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <?php include 'sections/about.php'; ?>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <?php include 'sections/services.php'; ?>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <!--
    <section class="call-to-action">
      <?php /* include 'sections/callToAction.php'; */ ?>
    </section> -->
    <!-- End Call To Action Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <?php include 'sections/portfolio.php'; ?>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <?php include 'sections/faq.php'; ?>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Productos ======= -->
    <section id="productos" class="products">
      <?php include 'sections/productos.php'; ?>
    </section>
    <!-- End Our Team Section -->

    <!-- ======= Our Team Section ======= -->
    <!--
    <section id="team" class="team">
      <?php /* include 'sections/team.php'; */ ?>
    </section> -->
    <!-- End Our Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <?php include 'sections/contact.php'; ?>
    </section><!-- End Contact Us Section -->

    <!-- ======= Map Section ======= -->
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.5276319910363!2d-58.23055452705573!3d-34.76749020720618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32f2be3d9fe51%3A0x4853638b4e77f6ad!2sC.%20131%201024%2C%20B1884KGH%20Berazategui%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1632099581021!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!--
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright All Rights Reserved
      </div>
      <!--
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br>
        Adaptaciones <a href="#">KornerSoluciones</a>
      </div>
      -->
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/jquery/js/jquery-3.6.0.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <div id="dummy"></div>
  <script type="text/javascript">
    (function () {
        setTimeout(function(){ 
            document.getElementsByTagName('div')[document.getElementsByTagName('div').length-1].remove();
        }, 1000);
        
    })();
  </script>   
</body>

</html>