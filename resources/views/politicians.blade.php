@extends('layouts.master')

@section('title')
    - Politicians
@endsection

@section('main')
    <h2>Politicians</h2>
    <div ng-app="PoliticianList">
        <politician-list></politician-list>
    </div>
@endsection