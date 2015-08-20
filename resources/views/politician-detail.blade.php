@extends('layouts.master')

@section('title')
    - {{ $politicianDetail->name }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">

        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection