@extends('layouts.app')
@section('title','Seven Levels of Growth')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">
@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>Seven Levels of Growth</h1>
        </div>
        </div>

    </section>
@endsection
@section('main')

<main>
    <div class="main">
    <div class="container-fluid">
        <div class="container p-4">
            <iframe  src="https://www.youtube.com/embed/rL8rNcHwoxA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<br>
            <a href="{{ route('courses.seven-levels') }}"><button class="btn btn-rounded primary float-start bg-primary">Prev</button></a>

            {{-- <a href="{{ route('courses.seven-levels2')}}"><button class="btn bg-primary btn-rounded float-end">Next</button></a> --}}
            <br>
        </div>

    </div>
    <div class="container description pt-9 mt-5">
        <h2>7 Levels of Growth</h2>
        <p>Unlocking Your Potential: Journey Through the 7 Levels of Growth</p>
        <p>AEmbark on a transformative voyage through the 7 Levels of Growth in this enlightening video. From self-awareness to self-transcendence, we explore each level's unique insights and challenges, providing you with a roadmap to unleash your fullest potential and achieve lasting personal development.</p>
        <h3>🌱 What You'll Uncover:</h3>
        <ul>
            <li>An overview of the 7 Levels of Growth model and its significance.</li>
            <li>Deep exploration of each level, including survival, relationships, achievement, purpose, and beyond.</li>
            <li>Practical tips to navigate challenges and leverage opportunities at each stage.</li>
            <li>How to identify your current level and progress towards higher states of consciousness.</li>
            </ul>

    </div>

@include('layouts.author')

</main>

@endsection
