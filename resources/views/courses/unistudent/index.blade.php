@extends('layouts.app')
@section('title','UNI Students')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">
@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>Message To UNI Students</h1>
        </div>
        </div>

    </section>
@endsection
@section('main')

<main>
    <div class="main">
    <div class="container-fluid">
        <div class="container p-4">
            <iframe  src="https://www.youtube.com/embed/kymmWmyR0Z4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            {{-- <button class="btn btn-rounded primary float-start disabled bg-primary">Prev</button>
            <a href="{{ route('courses.seven-levels2')}}"><button class="btn bg-primary btn-rounded float-end">Next</button></a> --}}
            <br>
        </div>

    </div>

    <div class="container description">
        <h2>Message to Freshers and ongoing UNI students</h2>
        <p>A Message to Freshers and Ongoing Uni Students: Navigating Your University Journey</p>
        <p>To all the eager freshers stepping into a new chapter of life and the dedicated ongoing university students striving for excellence in their academic pursuits, this video is dedicated to you. Join us as we share invaluable advice, heartfelt encouragement, and practical tips to help you make the most of your university experience.</p>

        <h3> 🎓 What You'll Gain:</h3>
        <ul>
           <li>Insightful guidance for transitioning smoothly into university life.</li>
           <li>
            Strategies to balance academics, social life, and self-care.</li>
            <li>Building meaningful connections and friendships.</li>
            <li>Exploring opportunities beyond the classroom for holistic growth.</li>
            <li>Real stories from fellow students who've triumphed over university hurdles.</li>
            </ul>

    </div>

@include('layouts.author')

</main>

@endsection
