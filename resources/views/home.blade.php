@extends('layouts.master')

@section('main')
    <h2>Your Review Awaits</h2>
    <p>Here are some suggestions to get you started.</p>
    <ul class="ReviewList">
        @foreach($recentReviews as $review)
            <li>
                @include('components.reviewMain')
            </li>
        @endforeach
    </ul>
@endsection

@section('sidebar')
    <?php $review = $randomReview; ?>
    @include('components.reviewSidebar')
@endsection