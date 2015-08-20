@extends('layouts.master')

@section('title')
    - Contact
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            <h2>Contact</h2>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <form method="post" action="/contact/store" class="form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input id="name" type="text" class="form-control" placeholder="Your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your E-mail Address</label>
                    <input id="email" type="email" class="form-control" placeholder="Your e-mail address" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control" placeholder="Your message" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Contact Us!</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection