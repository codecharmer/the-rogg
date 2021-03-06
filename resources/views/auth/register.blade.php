@extends('layouts.master')

@section('title')
    - Register
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 Main">
            @if($errors->count() > 0)
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="/auth/register" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="party">Choose your party affiliation:</label>
                    <select id="party" name="party" class="form-control">
                        @foreach($parties as $party)
                            <option value="{{ $party }}">{{ $party }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="photo">Upload your photo</label>
                    <input type="file" id="photo" name="photo" class="form-control">
                    <p>Photos must be a JPG, GIF, or PNG image. And under 100kb in size.</p>
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