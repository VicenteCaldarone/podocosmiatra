<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Podocosmiatras</title>
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
  <style>
    .tabla-turnos{
      background-color: #c9daf8;
      text-align: center;
    }
    .hora-turno{
      width: 100px;
    }
  </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="/">Podocosmiatras</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
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
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Turnos</h2>
          <ol>
            <li><a href="./">Home</a></li>
            <li>Turnos</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <table class="table table-sm tabla-turnos">
              <tbody>
                <tr>
                  <td colspan="2" style="font-weight: bold;" class="dia" data-dia="1">Miercoles xx</td>
                </tr>
                <tr>
                  <td class="hora-turno">09:00</td><td class="table-success estado-turno" data-dia="1" data-index="0">Libre</td>
                </tr>
                <tr>
                  <td>10:00</td><td class="table-success estado-turno" data-dia="1" data-index="1">Libre</td>
                </tr>
                <tr>
                  <td>11:00</td><td class="table-success estado-turno" data-dia="1" data-index="2">Libre</td>
                </tr>
                <tr>
                  <td>12:00</td><td class="table-success estado-turno" data-dia="1" data-index="3">Libre</td>
                </tr>
                <tr>
                  <td>14:00</td><td class="table-success estado-turno" data-dia="1" data-index="4">Libre</td>
                </tr>
                <tr>
                  <td>15:00</td><td class="table-success estado-turno" data-dia="1" data-index="5">Libre</td>
                </tr>
                <tr>
                  <td>16:00</td><td class="table-success estado-turno" data-dia="1" data-index="6">Libre</td>
                </tr>

                <tr>
                  <td colspan="2" style="font-weight: bold;" class="dia" data-dia="2">Viernes xx</td>
                </tr>
                <tr>
                  <td>09:00</td><td class="table-success estado-turno" data-dia="2" data-index="0">Libre</td>
                </tr>
                <tr>
                  <td>10:00</td><td class="table-success estado-turno" data-dia="2" data-index="1">Libre</td>
                </tr>
                <tr>
                  <td>11:00</td><td class="table-success estado-turno" data-dia="2" data-index="2">Libre</td>
                </tr>
                <tr>
                  <td>12:00</td><td class="table-success estado-turno" data-dia="2" data-index="3">Libre</td>
                </tr>
                <tr>
                  <td>14:00</td><td class="table-success estado-turno" data-dia="2" data-index="4">Libre</td>
                </tr>
                <tr>
                  <td>15:00</td><td class="table-success estado-turno" data-dia="2" data-index="5">Libre</td>
                </tr>
                <tr>
                  <td>16:00</td><td class="table-success estado-turno" data-dia="2" data-index="6">Libre</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- segundo grupo-->
        <div class="row mt-4 pt-4">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <table class="table table-sm tabla-turnos">
              <tbody>
                <tr>
                  <td colspan="2" style="font-weight: bold;" class="dia" data-dia="3">Miercoles xx</td>
                </tr>
                <tr>
                  <td class="hora-turno">09:00</td><td class="table-success estado-turno" data-dia="3" data-index="0">Libre</td>
                </tr>
                <tr>
                  <td>10:00</td><td class="table-success estado-turno" data-dia="3" data-index="1">Libre</td>
                </tr>
                <tr>
                  <td>11:00</td><td class="table-success estado-turno" data-dia="3" data-index="2">Libre</td>
                </tr>
                <tr>
                  <td>12:00</td><td class="table-success estado-turno" data-dia="3" data-index="3">Libre</td>
                </tr>
                <tr>
                  <td>14:00</td><td class="table-success estado-turno" data-dia="3" data-index="4">Libre</td>
                </tr>
                <tr>
                  <td>15:00</td><td class="table-success estado-turno" data-dia="3" data-index="5">Libre</td>
                </tr>
                <tr>
                  <td>16:00</td><td class="table-success estado-turno" data-dia="3" data-index="6">Libre</td>
                </tr>

                <tr>
                  <td colspan="2" style="font-weight: bold;" class="dia" data-dia="4">Viernes xx</td>
                </tr>
                <tr>
                  <td>09:00</td><td class="table-success estado-turno" data-dia="4" data-index="0">Libre</td>
                </tr>
                <tr>
                  <td>10:00</td><td class="table-success estado-turno" data-dia="4" data-index="1">Libre</td>
                </tr>
                <tr>
                  <td>11:00</td><td class="table-success estado-turno" data-dia="4" data-index="2">Libre</td>
                </tr>
                <tr>
                  <td>12:00</td><td class="table-success estado-turno" data-dia="4" data-index="3">Libre</td>
                </tr>
                <tr>
                  <td>14:00</td><td class="table-success estado-turno" data-dia="4" data-index="4">Libre</td>
                </tr>
                <tr>
                  <td>15:00</td><td class="table-success estado-turno" data-dia="4" data-index="5">Libre</td>
                </tr>
                <tr>
                  <td>16:00</td><td class="table-success estado-turno" data-dia="4" data-index="6">Libre</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <a class="cta-btn" href="#"id="reset">Reset</a>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Amoeba</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br>
        Adaptaciones <a href="#">KornerSoluciones</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="assets/vendor/jquery/js/jquery-3.6.0.min.js"></script>

  <div id="dummy"></div>
  <script type="text/javascript">
    (function () {
        setTimeout(function(){ 
            document.getElementsByTagName('div')[document.getElementsByTagName('div').length-1].remove();
        }, 1000);

        var turnos;
        var turnosDefault = {
          dia1: {
            dia: 'Miercoles ??',
            turnos: [
              {hora:'09:00', estado: 'Libre'},
              {hora:'10:00', estado: 'Libre'},
              {hora:'11:00', estado: 'Libre'},
              {hora:'12:00', estado: 'Libre'},
              {hora:'14:00', estado: 'Libre'},
              {hora:'15:00', estado: 'Libre'},
              {hora:'16:00', estado: 'Libre'}
            ]
          },
          dia2: {
            dia: 'Viernes ??',
            turnos: [
              {hora:'09:00', estado: 'Libre'},
              {hora:'10:00', estado: 'Libre'},
              {hora:'11:00', estado: 'Libre'},
              {hora:'12:00', estado: 'Libre'},
              {hora:'14:00', estado: 'Libre'},
              {hora:'15:00', estado: 'Libre'},
              {hora:'16:00', estado: 'Libre'}
            ]
          },
          dia3: {
            dia: 'Miércoles ??',
            turnos: [
              {hora:'09:00', estado: 'Libre'},
              {hora:'10:00', estado: 'Libre'},
              {hora:'11:00', estado: 'Libre'},
              {hora:'12:00', estado: 'Libre'},
              {hora:'14:00', estado: 'Libre'},
              {hora:'15:00', estado: 'Libre'},
              {hora:'16:00', estado: 'Libre'}
            ]
          },
          dia4: {
            dia: 'Viernes ??',
            turnos: [
              {hora:'09:00', estado: 'Libre'},
              {hora:'10:00', estado: 'Libre'},
              {hora:'11:00', estado: 'Libre'},
              {hora:'12:00', estado: 'Libre'},
              {hora:'14:00', estado: 'Libre'},
              {hora:'15:00', estado: 'Libre'},
              {hora:'16:00', estado: 'Libre'}
            ]
          }
        };

        loadTurnos();

        $('#reset').on('click', function(e){
          try {
            localStorage.removeItem("turnosAlmacenados");
            loadTurnos();
            console.log('presiono reset!');
          }catch(err) {
            alert(err.message);
          }
        });

        $('.dia').on('click', function(e){
          try {
            var oldText = e.target.innerText;
            var dia = $(e.target).attr('data-dia');
            var newText = prompt('ingresa el día', oldText);

            if(newText != null && oldText != newText){
              e.target.innerText = newText;
              //
              turnos['dia'+dia].dia = newText;
              localStorage.setItem("turnosAlmacenados", JSON.stringify(turnos));
            }
          }catch(err) {
            alert(err.message);
          }
        });
        $('.estado-turno').on('click', function(e){
          try {
            var oldValue = e.target.innerText;

            var dia = $(e.target).attr('data-dia');
            var index = $(e.target).attr('data-index');

            if(oldValue == 'Libre'){
              $(e.target).removeClass('table-success');
              $(e.target).addClass('table-active');
              e.target.innerText = 'Ocupado';
              //
              turnos['dia'+dia].turnos[index].estado = 'Ocupado';
            }else{
              $(e.target).removeClass('table-active');
              $(e.target).addClass('table-success');
              e.target.innerText = 'Libre';
              // 
              turnos['dia'+dia].turnos[index].estado = 'Libre';
            }
            //
            localStorage.setItem("turnosAlmacenados", JSON.stringify(turnos));
          }catch(err) {
            alert(err.message);
          }
        });
        // alert(document.getElementsByClassName('dia')[0].innerHTML);

        function loadTurnos(){
          try{
            turnos = localStorage.getItem("turnosAlmacenados");
            if(turnos == null){
              turnos = turnosDefault;
              localStorage.setItem("turnosAlmacenados", JSON.stringify(turnos));
            }else{
              turnos = JSON.parse(turnos);
            }
            
            $('.dia')[0].innerText = turnos.dia1.dia;
            turnos.dia1.turnos.forEach(function(item, index){
              $('.estado-turno')[index].innerText = item.estado;
              if(item.estado == 'Libre'){
                $($('.estado-turno')[index]).removeClass('table-active');
                $($('.estado-turno')[index]).addClass('table-success');
              }else{
                $($('.estado-turno')[index]).removeClass('table-success');
                $($('.estado-turno')[index]).addClass('table-active');
              }
            });

            $('.dia')[1].innerText = turnos.dia2.dia;
            turnos.dia2.turnos.forEach(function(item, index){
              $('.estado-turno')[index + 7].innerText = item.estado;
              if(item.estado == 'Libre'){
                $($('.estado-turno')[index + 7]).removeClass('table-active');
                $($('.estado-turno')[index + 7]).addClass('table-success');
              }else{
                $($('.estado-turno')[index + 7]).removeClass('table-success');
                $($('.estado-turno')[index + 7]).addClass('table-active');
              }
            });

            $('.dia')[2].innerText = turnos.dia3.dia;
            turnos.dia3.turnos.forEach(function(item, index){
              $('.estado-turno')[index + 14].innerText = item.estado;
              if(item.estado == 'Libre'){
                $($('.estado-turno')[index + 14]).removeClass('table-active');
                $($('.estado-turno')[index + 14]).addClass('table-success');
              }else{
                $($('.estado-turno')[index + 14]).removeClass('table-success');
                $($('.estado-turno')[index + 14]).addClass('table-active');
              }
            });

            $('.dia')[3].innerText = turnos.dia4.dia;
            turnos.dia4.turnos.forEach(function(item, index){
              $('.estado-turno')[index + 21].innerText = item.estado;
              if(item.estado == 'Libre'){
                $($('.estado-turno')[index + 21]).removeClass('table-active');
                $($('.estado-turno')[index + 21]).addClass('table-success');
              }else{
                $($('.estado-turno')[index + 21]).removeClass('table-success');
                $($('.estado-turno')[index + 21]).addClass('table-active');
              }
            });
          }catch(err) {
            alert(err.message);
          }
        }

 
    })();

  </script>   
</body>

</html>