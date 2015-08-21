@extends('layouts.master')

@section('title')
    - Reset Password
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">

            @if($errors->count() > 0)
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="/password/reset">
                {!! csrf_field() !!}
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>

        </div>

        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection