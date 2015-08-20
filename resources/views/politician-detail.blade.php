@extends('layouts.master')

@section('title')
    - {{ $politicianDetail->politician->name }}, {{ substr($politicianDetail->politician->party, 0, 1) }} - {{ $politicianDetail->politician->state }} {{ $politicianDetail->politician->district }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            <div class="row PoliticianDetail">
                <div class="col-md-3">
                    <img src="/assets/images/politician-photos/{{ $politicianDetail->politician->photo }}">
                </div>
                <div class="col-md-9">
                    <div><h2 class="PoliticianDetail--name">{{ $politicianDetail->politician->name }}</h2></div>
                    <div class="PoliticianDetail--rating">
                        <span class="PoliticianDetail--bells" title="{{ $politicianDetail->rating }}">
                            @for($i = 0; $i < $politicianDetail->rating; $i++)
                                <img class="PoliticianDetail--bell" src="/assets/images/liberty-bell.png">
                            @endfor

                            @for($i = 0; $i < 5 - $politicianDetail->rating; $i++)
                                <img class="PoliticianDetail--bell" src="/assets/images/liberty-bell-dark.png">
                            @endfor
                        </span>
                    </div>
                    <div>{{ $politicianDetail->politician->bio }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection