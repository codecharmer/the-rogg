<footer class="Footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="Footer-sectionHeader">About The Rogg</h4>
                <a href="/mission" title="The Rogg's Mission">Mission</a>
            </div>
            <div class="col-md-3">
                <h4 class="Footer-sectionHeader">Resources</h4>
                <a href="/contact" title="Contact The Rogg">Contact</a>
            </div>
            <div class="col-md-3">
                <h4 class="Footer-sectionHeader">My Login</h4>
                @if(Auth::guest())
                    <form method="POST" action="/auth/login">

                        {!! csrf_field() !!}

                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="email" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" value="{{ old('email') }}" placeholder="password" required>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                @endif

                @if(Auth::check() || Auth::viaRemember())
                    <a href="/auth/logout" title="Logout" class="btn btn-primary btn-block">Logout</a>
                @endif
            </div>
            <div class="col-md-3">
                <h4 class="Footer-sectionHeader">Follow the Rogg</h4>
                <a href="https://www.facebook.com/pages/The-Rogg/959813384063382" title="Follow The Rogg on Facebook"><i class="fa fa-facebook-official fa-2x"></i></a>
                {{--<i class="fa fa-google-plus-square"></i>--}}
                <a href="https://twitter.com/therogg76" title="Follow The Rogg on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                {{--<i class="fa fa-linkedin-square"></i>--}}
            </div>
        </div>
    </div>
</footer>