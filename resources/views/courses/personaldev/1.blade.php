@extends('layouts.app')
@section('title','Personal Development')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">
@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>Personal Development
            </h1>
        </div>
        </div>

    </section>
@endsection
@section('main')

<main>
    <div class="main">
    <div class="container-fluid">
        <div class="container p-4">
            <iframe src="https://www.youtube.com/embed/RwCa3wh7Kwo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            {{-- <br>
            <button class="btn btn-rounded primary float-start disabled bg-primary px-2 text-color-light"> Prev  </button>
            <a href="{{ route('courses.learnfromher2')}}"><button class="btn bg-primary bg-primary px-2 text-color-light btn-rounded float-end"> Next </button></a>
            <br> --}}
        </div>

    </div>
    <br>
    <div class="container description pt-9 mt-5">
        <h2>Personal Development</h2>
        <p>Unleash Your Potential: The Ultimate Guide to Personal Development</p>
        <p>Welcome to a world of endless possibilities and self-discovery! In this captivating video, we're diving deep into the realm of personal development – a journey that empowers you to sculpt the life you've always envisioned. Whether you're just starting or well on your path, this video is your roadmap to growth, success, and fulfillment.</p>

        <h3> 🌟 What You'll Learn:</h3>
        <ul>
          <li>Why personal development is essential for a meaningful and fulfilling life.</li>
          <li>Strategies for setting and achieving goals that align with your aspirations.</li>
          <li>Real-life stories of individuals who've transformed their lives through personal development.</li>
          <li>Navigating challenges, setbacks, and building resilience along the way.</li>
          <li>The role of mindset and self-care in your personal growth journey.</li>
        </ul>

    </div>

@include('layouts.author')
</main>

@endsection

