@extends('layouts.master')

@section('title')
    - Register
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            <h2>Register</h2>

            @if($errors)
                <div class="help-block">{{ $errors->first() }}</div>
            @endif

            @if(Session::get('message'))
                <div class="help-block">{{ Session::get('message') }}</div>
            @endif

            <form method="post" action="/register" class="form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" value="{{ Request::old('username') }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ Request::old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" value="{{ Request::old('password') }}" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" value="{{ Request::old('password_confirmation') }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection