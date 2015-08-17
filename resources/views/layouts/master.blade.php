<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>The Rogg @yield('title')</title>
    <link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}">
</head>
<body>

@include('includes.header')
@include('includes.navigation')

<div class="container Content-container">
    <div class="row">
        <div class="col-md-8 Main">
            @yield('main')
        </div>
        <div class="col-md-4 Sidebar">
            @include('components.sidebar')
        </div>
    </div>
</div>

@include('includes.footer')

</body>
</html>