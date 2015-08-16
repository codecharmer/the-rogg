@extends('layouts.master')

@section('main')
    <h2>Your Review Awaits</h2>
    <p>Here the most recent reviews to get you started.</p>
    <ul class="ReviewList">
        @foreach($recentReviews as $review)
            <li>
                @include('components.reviewMain')
            </li>
        @endforeach
    </ul>
@endsection

@section('sidebar')
    <h4>Review of the Moment</h4>
    <?php $review = $randomReview; ?>
    @include('components.reviewSidebar')
@endsection