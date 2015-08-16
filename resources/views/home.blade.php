@extends('layouts.master')

@section('main')
    <h2>Your Review Awaits</h2>
    <p>Here are some suggestions to get you started.</p>
    <ul class="ReviewList">
        @foreach($reviews as $review)
            <li>
                @include('components.review')
            </li>
        @endforeach
    </ul>
@endsection

@section('sidebar')
    <p>Sidebar</p>
@endsection