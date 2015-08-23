<div class="Navigation">
    <div class="container">

        <div class="row">
            <div class="visible-xs col-xs-1">
                <a href="#" class="Navigation--menuIcon closed"><i class="fa fa-bars fa-2x"></i></a>
            </div>
            <div class="col-md-9 col-xs-10">
                <h1 class="Navigation--pageTitle">
                    @if(Request::path() == '/')
                        The Rogg, your voice, your vote!
                    @elseif(Request::path() == 'politicians')
                        Rate and Comment on any Politician
                    @elseif(Request::path() == 'contact')
                        Contact The Rogg
                    @elseif(Request::path() == 'mission')
                        The Rogg's Mission
                    @elseif(Request::path() == 'policies')
                        The Rogg's Policies and Terms
                    @endif
                </h1>
            </div>
        </div>

        <div class="Navigation--mobile">
            <a class="{{ Request::path() == '/' ? 'active' : '' }}" href="/">
                <div>Home</div>
            </a>
            <a class="{{ Request::path() == 'politicians' ? 'active' : '' }}" href="/politicians">
                <div>Politicians</div>
            </a>
            <a class="{{ Request::path() == 'contact' ? 'active' : '' }}" href="/contact">
                <div>Contact</div>
            </a>
            <a class="{{ Request::path() == 'mission' ? 'active' : '' }}" href="/mission">
                <div>Mission</div>
            </a>
        </div>

        <div class="row Nav-row hidden-xs">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-justified">
                    <li class="Nav-item {{ Request::path() == '/' ? 'active' : '' }}"><a href="/">Home</a></li>
                    <li class="Nav-item {{ Request::path() == 'politicians' ? 'active' : '' }}">
                        <a href="/politicians">Politicians</a></li>
                    <li class="Nav-item {{ Request::path() == 'contact' ? 'active' : '' }}">
                        <a href="/contact">Contact</a></li>
                    <li class="Nav-item {{ Request::path() == 'mission' ? 'active' : '' }}">
                        <a href="/mission">Mission</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>