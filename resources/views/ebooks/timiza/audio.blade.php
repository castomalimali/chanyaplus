@extends('layouts.app')
@section('title','UNI Students')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">
@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>Audiobook: Timiza Ndoto Yako</h1>
        </div>
        </div>

    </section>
@endsection
@section('main')
<div class="container-fluid bg-body-tertiary ">
    <div class="container mt-4 py-4">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <img src="{{ asset('assets/img/Timiza ndoto FULL COVER PAMELA.png') }}" alt="Book Cover" class="img-fluid">
            </div>
            <div class="col-md-8 col-lg-9">
                <h2 class="pt-3">Timiza Ndoto na Malengo Yako</h2> 
            </div>    

        </div>
    
    </div>
    
    </div>

    <div class="container">
        <a href="{{route('author.pam')}}"><h3 class="btn bg-danger">About Author</h3></a>
    </div>

</main>
<br>
<br>


@endsection
