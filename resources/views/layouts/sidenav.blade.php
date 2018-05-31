@extends('layouts.app')

@section('sidenav')
<style>
    .keybutton {
        border-top: rgba(0, 0, 0, 0.1) solid 1px;
    }

    .keybuttonlast {
        border-top: rgba(0, 0, 0, 0.1) solid 1px;
        border-bottom: rgba(0, 0, 0, 0.1) solid 1px;
    }
</style>
<body class="fixed-sn white-skin">
<header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav side-nav-light fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper">
                    <a href="#"><img src="{{asset('img/logo.png')}}" class="img-fluid flex-center"></a>
                </div>
            </li>

            <!--/. Logo -->
            <!--Social
            <li>
                <ul class="social">
                    <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                    <li><a href="#" class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                    <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                    <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                </ul>
            </li>
            /Social-->
            <!--Search Form-->
            <br><br><br>
            <hr>
            <li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect arrow-r" href="/announce">
                            Announcements
                        </a>
                    </li>
                    <li class="keybutton">
                            <a class="collapsible-header waves-effect arrow-r">
                                Register<i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                    <div class="collapsible-body"> <ul class="sub-menu">
                            <li><a class="waves-effect" href="/register/tenant">Register Tenant</a></li>
                            <li><a class="waves-effect" href="/register/employee">Register Employee</a></li>
                        </ul>
                    </div>
                    </li>
                    <li class="keybutton">
                        <a class="collapsible-header waves-effect arrow-r" href="/chat">
                            Chat Assistance
                        </a>
                    </li>
                    <li class="keybutton">
                        <a class="collapsible-header waves-effect arrow-r">
                            Tenant Profile
                        </a>
                    </li>
                    <li class="keybutton">
                        <a class="collapsible-header waves-effect arrow-r">
                            Bills
                        </a>
                    </li>
                    <li class="keybutton">
                        <a class="collapsible-header waves-effect arrow-r">
                            Service Request
                        </a>
                    </li>
                    <li class="keybutton"><a class="collapsible-header waves-effect arrow-r" href="/shuttle">
                            Shuttle Schedule
                        </a>
                    </li>
                    <li class="keybuttonlast">
                        <a class="collapsible-header waves-effect arrow-r">
                            Analytics
                        </a>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="container fixed-bottom">
            <p style="color: grey">Hi, {{ Auth::user()->UserAccount_Email }}</p>
            <div class="row">
                <div class="col-md-3">
                    <i class="fa fa-user-circle fa-3x"></i>
                </div>
                <div class="col-md-9 justify-content-center mt-1">
                    <div class="text-center mb-3">
                        <button type="button" class="btn btn-md btn-block btn-info z-depth-2">
                            Log Out
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars black-text"></i></a>
        </div>
        <!-- Breadcrumb-->
{{--        <div class="breadcrumb-dn mr-auto">
            <p style="font-size: 30px">{{$title}}</p>
        </div>--}}
    </nav>
    <!-- /.Navbar -->
</header>
@endsection