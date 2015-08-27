@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 Main">

            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{Session::get('message')}}
                </div>
            @endif

            <h2>Recent Activity</h2>

            <ul class="ReviewList">
                @foreach($recentReviews as $review)
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