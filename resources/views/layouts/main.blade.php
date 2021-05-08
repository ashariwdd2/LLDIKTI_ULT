<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <!-- Data Table -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
 
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v2.0.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @livewireStyles
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ route('home') }}"><img src="assets/img/kemendikbudlogo.png" alt="" class="img-fluid"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
                      @guest
                          @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Admin') }}</a>
                                </li>
                            @endif

                            

                            @if (Route::has('admin'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin') }}">{{ __('Admin') }}</a>
                                </li>
                            @endif
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                      @endguest
                      
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="https://www.youtube.com/channel/UCx9Y522fpjdZg2vATpgFDkw" class="youtube"><i class="icofont-youtube"></i></a>
        <a href="https://web.facebook.com/lldikti5" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/lldikti5/" class="instagram"><i class="icofont-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->


    @yield('content');


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-6">
            <div class="footer-info">
              <h3>LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH V YOGYAKARTA</h3>
              <p>
                <strong>Alamat    :</strong> Jl. Tentara Pelajar No.13, Bumijo, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55231 <br>
                <strong>Telepon   :</strong> (0274) 513538 <br>
                <strong>Email     :</strong> lldikti5@kemdikbud.go.id <br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.youtube.com/channel/UCx9Y522fpjdZg2vATpgFDkw" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="https://web.facebook.com/lldikti5" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/lldikti5/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://twitter.com/lldikti5" class="twitter"><i class="bx bxl-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2021</span></strong>. LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH V YOGYAKARTA
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
        Developed by M. Ibnu</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  @livewireScripts
</body>

</html>