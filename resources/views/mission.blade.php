@extends('layouts.master')

@section('title')
    - Our Mission
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            <h2>Our Mission</h2>
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection