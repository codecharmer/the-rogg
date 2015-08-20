@extends('layouts.master')

@section('title')
    - {{ $politicianDetail->politician->name }}, {{ substr($politicianDetail->politician->party, 0, 1) }} - {{ $politicianDetail->politician->state }} {{ $politicianDetail->politician->district }}
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