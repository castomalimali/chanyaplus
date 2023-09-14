@extends('layouts.app')
@section('title', 'Chanya Plus: eBooks and audio Books')
@section('css')
@endsection
@section('hero')
<section id="heros" class="d-flex align-items-center">

    <div class="container align-content-center">
      <h1 class="py-4 -bottom-3 ">e-Books</h1>
    </div>

  </section>
@endsection
@section('main')
<div class="container-fluid bg-danger-subtle pops align-content-centers">
    <div class="container">
      <h1 class="h1 p-2">Popular e-Book</h1>

    </div>
</div>
<div class="container">
<br>

<div class="row">


    <div class="col-md-4 animated fadeInUp">
      <a href="timizabook.html">
      <div class="card mb-4">
        <img src="assets/img/Timiza ndoto FULL COVER PAMELA.png" class="card-img-top" alt="Image 1">
        <div class="card-body">
          <h5 class="card-title">Timiza ndoto na Malengo Yako</h5>
          <p class="card-text">e-Book.</p>
          <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
        </div>
      </div>  </a>
    </div>
    <div class="col-md-4 animated fadeInUp">
        <div class="card mb-4">
          <img src="{{ asset('assets/img/safari.png') }}" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">Safari ya Malkia</h5>
            <p class="card-text">Book.</p>
            <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
          </div>
        </div>
      </div>





</div>
</div>

<div class="container-fluid bg-primary-subtle pops align-content-centers">
<br>


<div class="container">
  <h1 class=" p-3">Audio books and podcast</h1>
  <hr>
<div class="row">
    <div class="col-md-4 animated fadeInUp">
      <div class="card mb-4">
        <img src="{{ asset('assets/img/play.jpg') }}" class="card-img-top" alt="Image 1">
        <div class="card-body">
          <h5 class="card-title">Timiza ndoto na Malengo Yako</h5>
          <p class="card-text">audio book.</p>
          <cite class="float-right text-primary font-weight-bold">-By Pamela</cite>
        </div>
      </div>
    </div>

    <div class="col-md-4 animated fadeInUp">
      <div class="card mb-4">
        <img src="assets/img/comming soon.jpg" class="card-img-top" alt="Image 1">
        <div class="card-body">
          <h5 class="card-title">Coming Soon</h5>
          <p class="card-text">Be patient many collection will be coming.</p>
          <cite class="float-right text-primary font-weight-bold">-Patient is Best Practices</cite>
        </div>
      </div>
    </div>

</div>
</div>

@endsection
