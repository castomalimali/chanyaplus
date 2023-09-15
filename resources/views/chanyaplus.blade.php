@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/home.css')}}">
@endsection

@section('hero')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Chanya Plus</h1>
          <h2> EdTech platform offering learning materials focusing on creating an employable and motivated community</h2>
          <p style="color: white; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 18px">The platform provides:</p>
            <ul style="list-style-type: disc;">
                <li>Short Courses</li>
                <li>E-books</li>
                <li>E-mentorship</li>
            </ul>
          <div class="d-flex justify-content-center justify-content-lg-center">
            <a href="#about" class="btn-get-started scrollto">Learn More</a>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
@endsection
@section('main')
<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Chanya online provide wide service to youth which categorized into the following .</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Career Development</a></h4>
              <p>For youth in unversity and secondary school leve understand how to find their path</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">e-books</a></h4>
              <p>We provide and sell books in term of e-books, audio books and softcopy books</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-bulb"></i></div>
              <h4><a href="">Entrepreneurship & Innovation</a></h4>
              <p>We provide courses for Entrepreneurs and Innovators on many areas on their development</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Inspiration</a></h4>
              <p>Get inspired from successors on ecosystem</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



  <!-- Popular Courses -->




<div class="container popular">
  <h1>Our Popular courses</h1>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <a href="time-management.html">
        <div class="card card-custom">
          <img src="{{asset('assets/img/dev.jpg')}}" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">Time Management</h5>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">By Pamela Chogo</small></p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-3">
      <a href="self-awareness.html">
        <div class="card card-custom">
          <img src="{{asset('assets/img/skills.png')}}" class="card-img-top" alt="Image 2">
          <div class="card-body">
            <h5 class="card-title">Personal Awareness</h5>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">By Pamela Chogo</small></p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-3">
      <a href="seven level of growth.html">
        <div class="card card-custom">
          <img src="{{asset('assets/img/illustration/lev.png')}}" class="card-img-top" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">7 Levels of Development</h5>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">By Pamela Chogo</small></p>
          </div>
      </a>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <a href="{{route('courses')}}">
        <div class="card card-custom">
          <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class=""><span style="font-size: 36px;">➜</span></div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="container popular">
  <h1>e-Books</h1>
  <div class="row">
    <div class="col-md-6 col-lg-3">

      <a href="{{route('ebook.timiza')}}">
        <div class="card card-custom">
          <img src="{{asset('assets/img/dev.jpg')}}" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">Timiza Ndoto na Malengo Yako.</h5>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">By Pamela Chogo</small></p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-3">
      <a href="{{route('ebooks')}}">
        <div class="card card-custom">
          <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class=""><span style="font-size: 36px;">➜</span></div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
  </main>
@endsection
