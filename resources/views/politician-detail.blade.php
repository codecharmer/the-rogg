@extends('layouts.master')

@section('title')
    - {{ $politicianDetail->politician->name }}, {{ substr($politicianDetail->politician->party, 0, 1) }} - {{ $politicianDetail->politician->state }} {{ $politicianDetail->politician->district }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            <div class="row PoliticianDetail--profile">
                <div class="col-md-3">
                    <img class="PoliticianDetail--photo" src="/assets/images/politician-photos/{{ $politicianDetail->politician->slug }}.jpg">
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

            @if(Auth::check() || Auth::viaRemember())
                <div class="PoliticianRating" ng-app="PoliticianRating">
                    <politician-rating-form user-id="'{{ Auth::user()->getId() }}'" politician-id="'{{ $politicianDetail->politician->id }}'"></politician-rating-form>
                </div>
            @else
                <div class="PoliticianRating" ng-app="PoliticianRating">
                    <politician-rating-form user-id="" politician-id=""></politician-rating-form>
                    <p>You must be logged in to submit a review.</p>
                </div>
            @endif

            <div class="PoliticianDetail--reviews">
                <h3>Latest Reviews</h3>
                <ul class="ReviewList">
                    @if (!empty($politicianDetail->recentReviews))
                        @foreach($politicianDetail->recentReviews as $review)
                            <li>
                                @include('components.reviewMain')
                            </li>
                        @endforeach
                    @else
                        <li>There are no ratings for {{ $politicianDetail->politician->name }}.</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection