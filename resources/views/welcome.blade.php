<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
    $ifo = \App\Info_Web::find($id="1");
  ?>
  <title>{{ $ifo->nama_web}}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('ninestars/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('ninestars/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('ninestars/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('ninestars/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('ninestars/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('ninestars/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('ninestars/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v2.0.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('layouts/header')

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
 -->
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
            <h3>{{ $ifo->nama_web}}</h3>
            <p>
              {{ $ifo->alamat}}<br><br>
              <strong>Telepon:</strong> {{ $ifo->telepon}}<br>
              <strong>Email:</strong> {{ $ifo->email}}<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a onclick="index()">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a onclick="info()">Info Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a onclick="cart()">Cart</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">Login</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
            <h4>Sosial Media</h4>
            <p>Follow dan Ikuti kegiatan kami</p>
            <div class="social-links mt-3">
              <a href="{{ $ifo->twet}}" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{ $ifo->fb}}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ $ifo->ig}}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{ $ifo->utube}}" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ $ifo->nama_web}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        Designed by <a href="">Bootstrap</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('ninestars/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('ninestars/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('ninestars/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('ninestars/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('ninestars/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('ninestars/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('ninestars/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('ninestars/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('ninestars/assets/js/main.js')}}"></script>
  <script type="text/javascript">
    function index () {
      window.location="/";
    }
    function cart () {
      window.location="/cart";
    }
    function info () {
      window.location="/info";
    }
    function galeri () {
      window.location="/galeri";
    }
    function res () {
      window.location="/reservasi";
    }
  </script>
  @yield('js')
</body>

</html>
