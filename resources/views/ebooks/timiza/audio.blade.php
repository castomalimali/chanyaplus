@extends('layouts.app')
@section('title','Timiza Ndoto Yako')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/course-open.css')}}">


@endsection
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>E-Book: Timiza Ndoto Yako</h1>
        </div>
        </div>

    </section>
@endsection
@section('main')
<div class="container-fluid bg-body-tertiary ">
    <div class="container mt-4 py-4 audio-player">
        {{-- <div class="row">
            <div class="col-md-8  align-items-center">
                <h2 class="pt-3">Timiza Ndoto na Malengo Yako</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Author:</strong> <a href="{{route('author.pam')}}" style="color: black" >Pamela Chogo</a> </li>
                    <li class="list-group-item"><strong>Release Year:</strong> 2020</li>
                    <li class="list-group-item"><strong>Price:</strong> TZS 5,000</li>
                </ul>
                <br>
                <a href="{{ route('download', ['file' => 'timiza.pdf']) }}" class="btn btn-primary btn-rounded">Get Copy</a>
                </a>
                <input type="submit" value="Buy a Book" class="btn bg-body-secondary normal float-end">
            </div>
            <div class="col-md-4">
                <img src="{{  asset('assets/img/Timiza ndoto FULL COVER PAMELA.png')  }}" alt="Book Cover" class="img-fluid">
            </div>
        </div> --}}

        <div class="row">
            <div class="col-md-4">
              <img class="cover-image img-fluid" src="{{asset('assets/img/Timiza ndoto FULL COVER PAMELA.png')}}" alt="Album cover">
            </div>
            <div class="col-md-8">
              <h3 class="song-title">Timiza Ndoto na Malengo Yako</h3>
              <p class="song-artist">Pamela Chogo</p>
              <p class="song-description">Simulizi ya Kitabu cha timiza ndoto na malengo yako</p>
              <audio class="audio-element" src="{{asset('assets/audio/timiza.mp3')}}"></audio>
              <div class="controls">
                <button class="btn btn-primary play-button w-25">Play</button>
                <button class="btn btn-primary pause-button">Pause</button>
                <input type="range" class="progress-bar w-100 py-3">
              </div>
            </div>
          </div>

    </div>

    </div>



</main>
<br>
<br>

<script src="{{ asset('assets/js/play.js')}}"></script>
@endsection
