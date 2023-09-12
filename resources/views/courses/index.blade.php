@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/courses.css') }}">
@endsection
@section('title', 'Chanya Plus: Courses')

@section('hero')
<section id="heros" class="d-flex align-items-center">

    <div class="container align-content-center">
      <h1 class="py-4 -bottom-3 ">Our Courses</h1>
    </div>

  </section>
@endsection

@section('main')
<div class="container">
    <br>
    <div class="row">


        <div class="col-md-4 animated fadeInUp">

          <div class="card mb-4"><a href="{{route('courses.personaldev')}}">

              <img src="{{asset('assets/img/Timizadoto2.webp')}}" class="card-img-top" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Personal Development</h5>
                <p class="card-text">Personal Development</p>
                <cite class="float-right text-dark font-weight-bold">-By Pamela</cite>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <div class="card mb-4">
            <a href="self-awareness.html">
              <img src="asset('assets/img/Timizadoto2.webp')" class="card-img-top" alt="Personal Development">
              <div class="card-body">
                <h5 class="card-title">Self Awareness</h5>
                <p class="card-text">Personal Development</p>
                <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4">
            <a href="">
              <img src="{{asset('assets/img/Timizadoto2.webp')}}" class="card-img-top" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Self Evaluation</h5>
                <p class="card-text">Personal Development</p>
                <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4">
            <a href="time-management.html">
              <img src="assets/img/Timizadoto2.webp" class="card-img-top" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Time Management</h5>
                <p class="card-text">Innovation</p>
                <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4">
            <a href="seven level of growth.html">
              <img src="assets/img/Timizadoto2.webp" class="card-img-top" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">7 Level of Growth</h5>

                <p class="card-text">Innovation</p>
                <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4">
            <a href="UNI txt.html">
              <img src="assets/img/Timizadoto2.webp" class="card-img-top" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Message to UNI Students</h5>

                <p class="card-text">Career Guidance</p>
                <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4">
            <a href="UNI graduants.html">
              <img src="assets/img/Timizadoto2.webp" class="card-img-top" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Message to UNI Graduants</h5>

                <p class="card-text">Career Guidance</p>
                <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4">
            <a href="UNI graduants.html">
              <img src="assets/img/Timizadoto2.webp" class="card-img-top" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Message to UNI Graduants</h5>

                <p class="card-text">Career Guidance</p>
                <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4">
            <a href="UNI graduants.html">
              <img src="assets/img/Timizadoto2.webp" class="card-img-top" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Learn From Her Story</h5>

                <p class="card-text">Inspiration</p>
                <cite class="float-right text-primary font-weight-bold">-By Pamela & Sarah Edga</cite>
              </div>
            </a>
          </div>
        </div>


    </div>
  </div>

@endsection
