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
            
            <li class="nav-item @if($activePage == 'applications') active @endif">
                <a class="nav-link" href="{{('/applications-list')}}">
                    <p>{{ __("申請一覧") }}</p>
                </a>
            </li>
            
            <li class="nav-item @if($activePage == 'applications-register') active @endif">
                <a class="nav-link" href="{{('/applications-register')}}">
                    <p>{{ __("申請登録") }}</p>
                </a>
            </li>
            
            @if(auth()->user()->master_usage_permission_flag == 1)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#masterMenu" @if($activeButton =='master') aria-expanded="true" @endif>
                    <p>
                        {{ __('マスタ管理') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton =='master') show @endif" id="masterMenu">
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'application-forms') active @endif">
                            <a class="nav-link" href="{{('/application-forms')}}">
                                <i class="fa fa-file-o"></i>
                                <p>{{ __("申請書式管理") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'approval-routes') active @endif">
                            <a class="nav-link" href="{{('/approval-routes')}}">
                                <i class="fa fa-check-square-o"></i>
                                <p>{{ __("承認経路管理") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'departments') active @endif">
                            <a class="nav-link" href="{{('/departments')}}">
                                <i class="fa fa-building-o"></i>
                                <p>{{ __("部課マスタ") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'job-titles') active @endif">
                            <a class="nav-link" href="{{('/job-titles')}}">
                                <i class="fa fa-credit-card"></i>
                                <p>{{ __("役職マスタ") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'users') active @endif">
                            <a class="nav-link" href="{{('/users')}}">
                                <i class="fa fa-user"></i>
                                <p>{{ __("担当者マスタ") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
        </ul>
    </div>
</div>
