@extends('layouts.app')
@section('title', 'Order')
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
        <div class="container">
            <h1>
            </h1>
        </div>
        </div>

    </section>
@endsection

@section('main')

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header">Order Form</div>
                <div class="card-body">
                    <form method="POST" action="{{route('order.store')}}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Your Phone Number" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Place Address" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Enter a Description" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary my-2 ">order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
