<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    @php
        $user = Auth::user();
    @endphp
    <div class="container-fluid">
        <a class="navbar-brand"> {{ $navName }} </a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav align-items-center-second">
                <!--<li class="nav-item dropdown">-->
                <!--    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--        <span class="no-icon">{{ __('Dropdown') }}</span>-->
                <!--    </a>-->
                <!--    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                <!--        <a class="dropdown-item" href="#">{{ __('Action') }}</a>-->
                <!--        <a class="dropdown-item" href="#">{{ __('Another action') }}</a>-->
                <!--        <a class="dropdown-item" href="#">{{ __('Something') }}</a>-->
                <!--        <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>-->
                <!--        <div class="divider"></div>-->
                <!--        <a class="dropdown-item" href="#">{{ __('Separated link') }}</a>-->
                <!--    </div>-->
                <!--</li>-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>{{ $user->email }}</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <form id="logout-form" action="{{ ('/logout') }}" method="POST">
                            @csrf
                            <a class="dropdown-item" href="{{ ('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> logout </a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
