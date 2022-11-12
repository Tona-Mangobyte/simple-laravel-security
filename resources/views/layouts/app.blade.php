<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com) & Updivision (https://www.updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim & Updivision

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ ('/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ ('/img/favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>ワークフローシステム {{ $title }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="{{ ('/css/lib/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ ('/css/lib/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ ('/css/demo.css') }}" rel="stylesheet" />
        <link href="{{ ('/css/overwrite.css') }}" rel="stylesheet" />
        <link href="{{ ('/css/lib/font-awesome.min.css') }}" rel="stylesheet" />
            <!--   Core JS Files   -->
        <script src="{{ ('/js/lib/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ ('/js/lib/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ ('/js/lib/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ ('/js/lib/jquery-ui.min.js') }}" type="text/javascript"></script>
    </head>

    <body>
        <div class="wrapper @if (!auth()->check() || request()->route()->getName() == "") wrapper-full-page @endif">
            @if (auth()->check() && request()->route()->getName() != "")
                @include('layouts.navbars.sidebar')
                <!--@include('pages/sidebarstyle')-->
            @endif

            <div class="@if (auth()->check() && request()->route()->getName() != "") main-panel @endif">
                @include('layouts.navbars.navbar')
                @yield('content')
            </div>

        </div>
       


    </body>

    <script src="{{ ('/js/plugins/jquery.sharrre.js') }}"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ ('/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="{{ ('/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ ('/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{ ('/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ ('/js/demo.js') }}"></script>
    <script src="{{ ('/js/common.js') }}"></script>
    <script src="{{ ('/js/tooltip/index.js') }}"></script>
    @stack('js')
</html>


<script type="text/javascript">
    $(document).ready(function() {
    
        @if(Session::has('success'))
      		common.showNotification(2, "{{ Session::get('success') }}");
      		@php
      		    Session::forget('success')
      		@endphp
        @elseif(Session::has('fail'))
      		common.showNotification(4, "{{ Session::get('fail') }}");
      		@php
      		    Session::forget('fail')
      		@endphp
        @endif
    });
</script>
    