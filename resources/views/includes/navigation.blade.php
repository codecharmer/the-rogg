<div class="Navigation">
    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <p class="Navigation--tagLine">The Rogg, your voice, your vote!</p>
            </div>
        </div>

        <div class="row Nav-row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-justified">
                    <li class="Nav-item {{ Request::path() == '/' ? 'active' : '' }}"><a href="/">Home</a></li>
                    <li class="Nav-item {{ Request::path() == 'politicians' ? 'active' : '' }}"><a href="/politicians">Politicians</a></li>
                    <li class="Nav-item {{ Request::path() == 'contact' ? 'active' : '' }}"><a href="/contact">Contact</a></li>
                    <li class="Nav-item {{ Request::path() == 'mission' ? 'active' : '' }}"><a href="/mission">Mission</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>