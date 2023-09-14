@extends('layouts.app')
@section('title','Time Management')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">
@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>Time Management</h1>
        </div>
        </div>

    </section>
@endsection
@section('main')

<main>
    <div class="main">
    <div class="container-fluid">
        <div class="container p-4">
            <iframe  src="https://www.youtube.com/embed/-apAnACdTTE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            {{-- <button class="btn btn-rounded primary float-start disabled bg-primary">Prev</button>
            <a href="{{ route('courses.seven-levels2')}}"><button class="btn bg-primary btn-rounded float-end">Next</button></a> --}}
            <br>
        </div>

    </div>

    div class="container description">
    <h2>Time Management</h2>
    <p>Mastering Time Management: Boost Productivity and Achieve Your Goals</p>
    <p>Are you tired of constantly feeling overwhelmed by your busy schedule and never-ending to-do lists? Welcome to our course, where we're diving deep into the art of time management to help you regain control of your life and accomplish more than you ever thought possible.

    In this comprehensive video, we'll guide you through proven strategies, practical tips, and expert insights that will revolutionize the way you approach your daily tasks and long-term goals. Whether you're a student, a professional, an entrepreneur, or simply someone looking to make the most out of each day, this video is a must-watch.</p>
    <h3> Key Topics Covered:</h3>
    <ul>
        <li>The power of time management for personal and professional success.</li>
        <li> Prioritization strategies and the Time Management Matrix</li>
        <li>Balancing work, life, and self-care effectively</li>
        </ul>

</div>

@include('layouts.author')

</main>

@endsection
