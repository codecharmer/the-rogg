@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 Main">

            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{Session::get('message')}}
                </div>
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-stacked col-md-3">
                            <li><a href="#first" data-toggle="tab">1st Amendment</a></li>
                            <li><a href="#second" data-toggle="tab">2nd Amendment</a></li>
                            <li><a href="#third" data-toggle="tab">3rd Amendment</a></li>
                            <li><a href="#fourth" data-toggle="tab">4th Amendment</a></li>
                            <li><a href="#fifth" data-toggle="tab">5th Amendment</a></li>
                            <li><a href="#sixth" data-toggle="tab">6th Amendment</a></li>
                            <li><a href="#seventh" data-toggle="tab">7th Amendment</a></li>
                            <li><a href="#eighth" data-toggle="tab">8th Amendment</a></li>
                            <li><a href="#ninth" data-toggle="tab">9th Amendment</a></li>
                            <li><a href="#tenth" data-toggle="tab">10th Amendment</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane active" id="first">
                            First
                        </div>
                        <div class="tab-pane" id="second">
                            Second
                        </div>
                        <div class="tab-pane" id="third">
                            Third
                        </div>
                        <div class="tab-pane" id="fourth">
                            Fourth
                        </div>
                        <div class="tab-pane" id="fifth">
                            Fifth
                        </div>
                        <div class="tab-pane" id="sixth">
                            Sixth
                        </div>
                        <div class="tab-pane" id="seventh">
                            Seventh
                        </div>
                        <div class="tab-pane" id="eighth">
                            Eighth
                        </div>
                        <div class="tab-pane" id="ninth">
                            Ninth
                        </div>
                        <div class="tab-pane" id="Tenth">
                            Tenth
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <h2>Recent Activity</h2>
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