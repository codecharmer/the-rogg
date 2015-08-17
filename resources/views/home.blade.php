@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            <h2>Your Review Awaits</h2>

            <p>Here are some recent reviews to get you started.</p>
            <ul class="ReviewList">
                @foreach($reviews as $review)
                    <li>
                        @include('components.reviewMain')
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection