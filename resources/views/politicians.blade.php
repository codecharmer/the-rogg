@extends('layouts.master')

@section('title')
    - Politicians
@endsection

@section('content')
    <div ng-app="PoliticianList">
        <div class="row">
            <div class="col-md-12">
                <politician-list></politician-list>
            </div>
        </div>
    </div>
@endsection