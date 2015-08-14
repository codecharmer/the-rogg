<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>The Rogg @yield('title')</title>
    <link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}">
</head>
<body>

<header class="Header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/images/logo.png">
            </div>
            <div class="col-md-6">
                <form class="form-horizontal">
                    <input class="form-control" type="text" placeholder="Search">
                </form>
            </div>
            <div class="col-md-2">
                <a class="btn btn-default" href="#" role="button">My Login</a>
            </div>
        </div>
    </div>
</header>

<div class="Navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a class="Navigation-registerButton" href="#" role="button">Create Your Free Account</a>
            </div>
            <div class="col-md-9">
                <p>A resource where your void can truly be heard. Rate, share, and comment on any government official.
                    Raw and unedited - That's the ROGG!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="#">Home</a>
            </div>
            <div class="col-md-3">
                <a href="#">Politicians</a>
            </div>
            <div class="col-md-3">
                <a href="#">Contact</a>
            </div>
            <div class="col-md-3">
                <a href="#">Our Mission</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>