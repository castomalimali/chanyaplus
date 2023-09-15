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
    <div class="container mt-4 py-4">
        <div class="row">
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
        </div>

    </div>

    </div>

    <div class="container p-7">
        <p>About Author</p></a>
    </div>

</main>
<br>
<br>


@endsection
