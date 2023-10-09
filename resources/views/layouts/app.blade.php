<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title', 'Chanya Plus: Creating empowerable and motivated community ')</title>
  <meta content="chanya plus is EdTech platform offering learning materials focusing on creating an employable and motivated community" name="description">
  <meta content="Chanyaplus, chanya plus, youth empowerment education, online learning, empowerment courses" name="keywords">
  <meta content="Casto E Malimali" name="author">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Chanya Plus: Empowering Youth Through Online Education">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Chanya Plus: Empowering Youth Through Online Education">
  <meta property="og:description" content="chanya plus is EdTech platform offering learning materials Focus on creating an employable and motivated community">
  <meta property="og:url" content="https://chanyaplus.com">
  <meta property="og:image" content="https://chanyaplus.com/assets/img/hero-img.png">
  <meta property="og:image:secure_url" content="https://chanyaplus.com/assets/img/chanyaplus.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Favicons -->
  {{-- <link href="{{ asset('/chanyaicon.png') }}" rel="icon"> --}}

  <link rel="apple-touch-icon" sizes="180x180" href="
/favicon/chanyaicon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  @yield('css')

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo me-auto"><a href="{{url('/')}}">Chanya Online</a></h1> --}}
      <a href="{{ url('/')}}" class="logo me-auto"><img src="{{ asset('assets/img/chanyapluswhite.png') }}" alt="Chanya Plus Logo" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('courses')}}">Courses</a></li>
          <li><a class="nav-link scrollto" href="#services">E-books</a></li>
          <li class="dropdown"><a><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('courses')}}">Personal Development</a></li>
              <li><a href="{{route('courses')}}">Career Development</a></li>
              <li><a href="{{route('courses')}}">Entrepreneurship & Innovation</a></li>
              <li><a href="{{route('courses')}}">Inspiration</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

@yield('hero')
<!-- Main Section -->
@yield('main')





  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Chanya change </h3>
            <p>
              Majengo Juu <br>
              Arusha<br>
              Tanzania <br><br>
              <!-- <strong>Phone:</strong> +1 5589 55488 55<br> -->
              <strong>Email:</strong> info@changechange.org<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('courses')}}">Career Guidance and development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('courses')}}">Personal Develoment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('courses')}}">Innovation and Entrepreneurship</a></li>
              <li><i class="bx bx-chevron-right" ></i> <a href="{{url('www.chanyachange.org')}}">Workshop and Seminars</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('ebooks')}}">e-Books and Audio Books</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Find us on these platforms</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="website"><i class="bx bx-world"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Chanya change</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->
@yield('preloader')
  {{-- <div id="preloader"></div> --}}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
