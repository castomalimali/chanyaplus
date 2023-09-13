@extends('layouts.app')
@section('title','Self-evaluation')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">
@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>Self Evaluation</h1>
        </div>
        </div>

    </section>
@endsection
@section('main')

<main>
    <div class="main">
    <div class="container-fluid">
        <div class="container p-4">
            <iframe  src="https://www.youtube.com/embed/s5kVO4ep8VQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <a href="{{ route('courses.selfevolution')}}"><button class="btn btn-rounded primary float-start  bg-primary">Prev</button></a>
           <button class="btn disabled bg-primary btn-rounded float-end">Next</button>
            <br>
        </div>

    </div>

    <div class="container description pt-9 mt-5">
        <h2>Self-evaluation</h2>
        <p>The Power of Self-Evaluation: Your Path to Growth and Achievement</p>
        <p>Unlock the key to personal growth and success through the practice of self-evaluation. In this illuminating video, we delve deep into the art of introspection and self-assessment, showing you how to harness these tools to become the best version of yourself.</p>

        <h3> 🔍 What You'll Discover</h3>
        <ul>
           <li>The significance of self-evaluation in personal and professional development.</li>
           <li>Techniques to reflect on your goals, accomplishments, and challenges</li>
           <li>Constructive ways to identify strengths and areas for improvement.</li>
           <li>Real-life stories of individuals who transformed their lives through self-evaluation.</li>
            </ul>

    </div>
@include('layouts.author')

</main>

@endsection
