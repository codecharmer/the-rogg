@extends('layouts.master')

@section('title')
    - Our Purpose
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            <h2>Rogg is an acronym for Redress of Grievances.</h2>

            <p>We know many in Congress and the office of the Presidency have turned a deaf ear to the
                voice of the people. The intent of this site is to give you, the people, a stronger voice.
                One that will be heard with a greater magnitude.</p>

            <p>We will use The Bill of Rights as the benchmark for each listing.</p>

            <h3>Learn your rep, learn your rights & ROGG!</h3>
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection