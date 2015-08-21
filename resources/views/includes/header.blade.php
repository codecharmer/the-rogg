<header class="Header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="Header--logo" src="/assets/images/logo.png">
            </div>
            <div class="col-md-6">
                {{--<form class="form-horizontal">--}}
                {{--<input class="form-control" type="text" placeholder="Search">--}}
                {{--</form>--}}
            </div>
            <div class="col-md-2">
                @if(Auth::guest())
                    <a class="btn btn-default" href="/auth/login" role="button">Login</a>
                @endif

                @if(Auth::check() || Auth::viaRemember())
                    <a class="btn btn-default" href="/auth/logout" role="button">Logout</a>
                @endif
            </div>
        </div>
    </div>
</header>
