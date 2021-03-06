@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 Main">

            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{Session::get('message')}}
                </div>
            @endif

            <h2>Top Ratings</h2>

            <div class="row TabbedReviews">
                <div class="col-md-12">
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-stacked col-md-3 col-xs-3">
                            <li class="TabbedReviews--linkContainer active">
                                <a href="#first" data-toggle="tab">1st <span class="hidden-xs">Amendment</span></a></li>
                            <li class="TabbedReviews--linkContainer">
                                <a href="#second" data-toggle="tab">2nd <span class="hidden-xs">Amendment</span></a></li>
                            <li class="TabbedReviews--linkContainer">
                                <a href="#third" data-toggle="tab">3rd <span class="hidden-xs">Amendment</span></a></li>
                            <li class="TabbedReviews--linkContainer">
                                <a href="#fourth" data-toggle="tab">4th <span class="hidden-xs">Amendment</span></a></li>
                            <li class="TabbedReviews--linkContainer">
                                <a href="#fifth" data-toggle="tab">5th <span class="hidden-xs">Amendment</span></a></li>
                            <li class="TabbedReviews--linkContainer">
                                <a href="#sixth" data-toggle="tab">6th <span class="hidden-xs">Amendment</span></a></li>
                            <li class="TabbedReviews--linkContainer">
                                <a href="#seventh" data-toggle="tab">7th <span class="hidden-xs">Amendment</span></a></li>
                            <li class="TabbedReviews--linkContainer">
                                <a href="#eighth" data-toggle="tab">8th <span class="hidden-xs">Amendment</span></a></li>
                            <li class="TabbedReviews--linkContainer">
                                <a href="#ninth" data-toggle="tab">9th <span class="hidden-xs">Amendment</span></a></li>
                            <li class="TabbedReviews--linkContainer">
                                <a href="#tenth" data-toggle="tab">10th <span class="hidden-xs">Amendment</span></a></li>
                        </ul>

                        <div class="tab-content col-md-9 col-xs-9">
                            <div class="tab-pane active" id="first">
                                <ul class="ReviewList">
                                    @foreach($topReviews[0] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="second">
                                <ul class="ReviewList">
                                    @foreach($topReviews[1] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="third">
                                <ul class="ReviewList">
                                    @foreach($topReviews[2] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="fourth">
                                <ul class="ReviewList">
                                    @foreach($topReviews[3] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="fifth">
                                <ul class="ReviewList">
                                    @foreach($topReviews[4] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="sixth">
                                <ul class="ReviewList">
                                    @foreach($topReviews[5] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="seventh">
                                <ul class="ReviewList">
                                    @foreach($topReviews[6] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="eighth">
                                <ul class="ReviewList">
                                    @foreach($topReviews[7] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="ninth">
                                <ul class="ReviewList">
                                    @foreach($topReviews[8] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="tenth">
                                <ul class="ReviewList">
                                    @foreach($topReviews[9] as $review)
                                        <li>
                                            @include('components.tabbedReview')
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2>Recent Ratings</h2>
                    <ul class="ReviewList">
                        @foreach($recentReviews as $review)
                            <li>
                                @include('components.reviewMain')
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>

        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>

    </div>
@endsection