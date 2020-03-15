<!--navbar-->
<div class="navbar-fixed">
    <nav class="top-nav primary-color">
        <div class="nav-wrapper">
            <div class="row">
                <a href="#" data-target="mobile-sidenav" class="sidenav-trigger hide-on-large-only"><i class="material-icons">menu</i></a>
                <a class="brand-logo center hide-on-large-only" style="text-transform: uppercase;font-weight:300;letter-spacing:3px;" href="{{ url('/') }}"> {{ config('app.name', 'Urán') }} </a>
                <!-- Right Side Of Navbar -->
                <ul class="right hide-on-med-and-down">
                    @include('layouts.navigators.settings')
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--sidebar-->
<ul class="sidenav sidenav-fixed" id="mobile-sidenav">
    @include('layouts.logo')
    <li><a class="subheader">Urán</a></li>
    @include('layouts.navigators.main')
    <li><div class="divider"></div></li>
    <div class="hide-on-large-only">
        @include('layouts.navigators.settings')
    </div>
    <ul id="dropdownLang" class="dropdown-content">
        @foreach (config('app.locales') as $code => $name) 
            @if ($code != App::getLocale())
                <li><a href="{{ route('setlocale', $code) }}">{{ $name }}</a></li>
            @endif
        @endforeach
    </ul>
    <li><a class="dropdown-trigger" href="#!" data-target="dropdownLang"><i class="material-icons left">language</i>Language<i class="material-icons right">arrow_drop_down</i></a></li> 
    <li><a href="#">Report a bug</a></li>
</ul>

