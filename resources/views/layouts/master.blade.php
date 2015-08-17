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
    @yield('content')
</div>

@include('includes.footer')

<script src="{{ elixir('assets/js/all.js') }}"></script>

</body>
</html>