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
                        Rate and Comment on any Congressman, Senator, or Presidential Candidate
                    @elseif(Request::path() == 'contact')
                        Contact The Rogg
                    @elseif(Request::path() == 'purpose')
                        The Rogg's Purpose
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
            <a class="{{ Request::path() == 'purpose' ? 'active' : '' }}" href="/purpose">
                <div>Purpose</div>
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
                    <li class="Nav-item {{ Request::path() == 'purpose' ? 'active' : '' }}">
                        <a href="/purpose">Purpose</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>