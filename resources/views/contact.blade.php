@extends('layouts.master')

@section('title')
    - Contact
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{Session::get('message')}}
                </div>
            @endif

            <form method="post" action="/contact" class="form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email Address</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Your email address" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Your message" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-red">Contact Us!</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 Sidebar">
            <h3>Advertise On The Rogg</h3>
            <p>Contact "The Rogg" for more information on ads.</p>
            <p>If you're pissed off about a comment, then don't contact us.</p>
        </div>
    </div>
@endsection