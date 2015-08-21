@extends('layouts.master')

@section('title')
    - Request Password Reset
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">

            @if($errors->count() > 0)
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="/password/email">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>

                <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
            </form>

        </div>

        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
@endsection