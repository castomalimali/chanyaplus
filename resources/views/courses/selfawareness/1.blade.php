@extends('layouts.app')
@section('title','Self Awareness')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">
@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>Self Awareness</h1>
        </div>
        </div>

    </section>
@endsection
@section('main')

<main>
    <div class="main">
    <div class="container-fluid">
        <div class="container p-4">
            <iframe  src="https://www.youtube.com/embed/SXtEkeu2vxE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            {{-- <button class="btn btn-rounded primary float-start disabled bg-primary">Prev</button>
            <a href="{{ route('courses.learnfromher2')}}"><button class="btn bg-primary btn-rounded float-end">Next</button></a> --}}
            <br>
        </div>

    </div>

    <div class="container description">
        <h2>Self Awareness</h2>
        <p>Journey to Self-Awareness: Discovering Your True Self</p>
        <p>Embark on a transformative voyage of self-discovery with our enlightening video on self-awareness. Uncover the layers of your personality, emotions, and desires to gain a profound understanding of who you truly are. Whether you're seeking personal growth, better relationships, or a stronger sense of purpose, this video is your guide to unlocking the power of self-awareness.</p>
        <h3>🌟 Key Insights Explored:</h3>
        <ul>
            <li>What self-awareness truly means and why it's crucial for personal development.</li>
            <li>Embracing your strengths and addressing your areas for growth</li>
            <li>The link between self-awareness and improved emotional intelligence.</li>
            <li>Practical tips for incorporating self-awareness into your daily life.</li>
            </ul>

    </div>

@include('layouts.author')

</main>

@endsection
