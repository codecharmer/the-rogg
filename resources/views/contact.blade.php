@extends('layouts.master')

@section('title')
    - Contact
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            <h2>Contact</h2>
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection