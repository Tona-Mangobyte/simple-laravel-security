<div class="sidebar" data-color="black" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                {{ __("FAST ワークフロー") }}
            </a>
        </div>
        <ul class="nav">

            <li class="nav-item @if($activePage == 'users') active @endif">
                <a class="nav-link" href="{{('/users-list')}}">
                    <p>users</p>
                </a>
            </li>

            <li class="nav-item @if($activePage == 'users-register') active @endif">
                <a class="nav-link" href="{{('/users-register')}}">
                    <p>users register</p>
                </a>
            </li>
        </ul>
    </div>
</div>
