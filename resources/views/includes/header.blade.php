<header class="Header">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <a title="Home" href="/"><img class="Header--logo" src="/assets/images/logo.png"></a>
            </div>
            <div class="col-md-2 Header--buttonContainer text-center">
                @if(Auth::guest())
                    <a title="Login" class="btn btn-default" href="/auth/login" role="button">Login</a>
                    <a title="Register" class="Header--link btn btn-link" href="/auth/register">Register</a>
                @endif

                @if(Auth::check() || Auth::viaRemember())
                    <a title="Logout" class="btn btn-default" href="/auth/logout" role="button">Logout</a>
                @endif
            </div>
        </div>
    </div>
</header>