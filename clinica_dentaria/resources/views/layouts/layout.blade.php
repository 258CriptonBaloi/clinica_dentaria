<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dental Home - Mudando sorrisos, renovando vidas.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

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
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> Segunda - Sábado, 8AM to 5PM
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i>  Ligue para nós agora +258 872 997 777
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex ">
        <div class="container d-flex align-items-center">
            <a href="index.html" class="logo me-auto"><img src="assets/img/logo1.png" alt=""></a>
            <!--   
            <h1 class="logo me-auto"><a href="index.html">Clínica Dentária</a></h1> 
            -->
            <nav id="navbar " class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="{{('/')}}">Inicio</a></li>
                    <li class="dropdown"><a href="#"><span>A clínica</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{('/doutores')}}">Doctores</a></li>
                            <li><a href="{{('/galeria')}}">Galeria</a></li>
                            <li><a href="#">Nosso Equipamento</a></li>
                            <li><a href="{{('/sobre')}}">Sobre nós</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="nav-link scrollto" href="#about">Sobre nós</a></li> -->
                    <li><a class="nav-link scrollto" href="{{('/servico')}}">Serviços</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#doctors">Doctores</a></li> -->
                    
                    <li><a class="nav-link scrollto" href="{{url('/contacto')}}">Contacto</a></li>

                    <li class="dropdown"><a href="#"><span>Conta</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Entrar</a></li>
                            <li><a href="#">Registar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    
    <!--Content-->
    <div class="panel-body">
        @yield('content');
    </div>
        
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                        <h3>Dental Home</h3>
                        <p>
                            📍MAPUTO - Av. Olof Palme, <br>
                            nr. 941, 1andar<br><br>
                            <strong>Phone:</strong> 📞+258 872 997 777<br>
                            <strong>Email:</strong> dentalhome.mz@gmail.com<br>
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
                        <h4>Links Úteis</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{('/')}}">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{('/sobre')}}">Sobre nós</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{('/servico')}}">Serviços</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{('/contacto')}}">Contacto</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nossos serviços</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Implatologia Dentária</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Prótese Dentária</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Dentisteria</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Estética dental</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Periodontia</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Nosso boletim informativo</h4>
                        <p>Receba dicas de higiene dentantaria no teu email, subscreva já!</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Dental Home</span> 2023</strong>. All Rights Reserved
            </div>
        </div>
    </footer>
  <!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>