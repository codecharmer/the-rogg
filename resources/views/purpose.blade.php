@extends('layouts.master')

@section('title')
    - Our Purpose
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            <p>Rogg is an acronym for Redress of Grievances. We know many in Congress and the office of the Presidency have turned a deaf ear to the voice of the people. The intent of this site is to give you, the people, a stronger voice. One that will be heard with a greater magnitude. We will use The Bill of Rights as the benchmark for each listing. Learn your rep, learn your rights & ROGG!</p>
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection