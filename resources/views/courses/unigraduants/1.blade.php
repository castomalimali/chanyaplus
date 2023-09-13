@extends('layouts.app')
@section('title','UNI Graduants')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">
@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>Message To UNI Graduants</h1>
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
        <h2>Message to UNI graduants</h2>
        <p>Congratulations, Graduates! A Heartfelt Message to UNI Graduates</p>
        <p>To the incredible graduates of [University Name], this video is a tribute to your hard work, dedication, and remarkable achievements. As you step onto the threshold of a new chapter, we extend our warmest congratulations and a heartfelt message that resonates with the pride and excitement you deserve.</p>

        <h3> 🎓 What We Share:</h3>
        <ul>
           <li>Commemoration of your journey from freshman to graduate</li>
           <li>
            Strategies to balance academics, social life, and self-care.</li>
            <li>Encouragement to keep the spirit of learning alive beyond the classroom.</li>
            <li>Celebration of your accomplishments and a toast to your bright future.</li>
            <li>Reminders that you are part of a vibrant community of fellow alumni.</li>
            </ul>

    </div>

@include('layouts.author')

</main>

@endsection
