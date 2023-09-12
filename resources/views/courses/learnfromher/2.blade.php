@extends('layouts.app')
@section('title','Learn from Her Story')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">
@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>Learn From Her Story</h1>
        </div>
        </div>

    </section>
@endsection
@section('main')

<main>
    <div class="main">
    <div class="container-fluid">
        <div class="container p-4">
            <iframe src="https://www.youtube.com/embed/bcot-IbycFc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <br>
            <button class="btn btn-rounded primary float-start disabled bg-primary px-2 text-color-light"> Prev  </button>
            <a href="{{ route('courses.learnfromher2')}}"><button class="btn bg-primary bg-primary px-2 text-color-light btn-rounded float-end"> Next </button></a>
            <br>
        </div>

    </div>

    <div class="container description pt-9 mt-5">
        <h2>Learn From Her Story</h2>
        <p>Empowering Lessons: Learn from Her Story</p>
        <p>Prepare to be inspired by the incredible stories of women who have shattered barriers, overcome adversity, and achieved greatness against all odds. In this captivating video, we celebrate the achievements of remarkable women from diverse fields and backgrounds, showcasing their resilience, wisdom, and contributions that have changed the world.</p>

        <h3>🌟 What You'll Discover:</h3>
        <ul>
            <li>Insights into the journeys of pioneering women who've made history</li>
            <li>Valuable life lessons derived from their triumphs and challenges.</li>
            <li>The importance of diversity, inclusivity, and gender equality.</li>
            </ul>

    </div>
@include('layouts.author')

</main>

@endsection

