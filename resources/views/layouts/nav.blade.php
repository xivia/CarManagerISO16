<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            {{ config('app.name', 'CoolCars') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/create">Create a new Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/settings">Settings</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                <a class="nav-link" href="/admin">Permissions</a>
                <a class="nav-link" href="/showProfile">Profile</a>
                <a class="nav-link" href="/editProfile">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!--
start navigation
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">HOME</a></li>
                    <li><a href="#service" class="smoothScroll">SERVICE</a></li>
                    <li><a href="#about" class="smoothScroll">ABOUT</a></li>
                    <li><a href="#team" class="smoothScroll">TEAM</a></li>
                    <li><a href="#pricing" class="smoothScroll">PRICING</a></li>
                    <li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
                    <li><a href="/brands" class="">Brand Name</a></li>
                </ul>
            </div>
        </div>
    </div>
 end navigation
-->