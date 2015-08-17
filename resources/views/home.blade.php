@extends('layouts.master')

@section('main')
    <h2>Your Review Awaits</h2>
    <p>Here are some recent reviews to get you started.</p>
    <ul class="ReviewList">
        @foreach($reviews as $review)
            <li>
                @include('components.reviewMain')
            </li>
        @endforeach
    </ul>
@endsection