@extends('layouts.master')

@section('title')
    - Login
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">

            @if($errors->count() > 0)
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="/auth/login">

                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>

        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection