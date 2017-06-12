<?php $active_menu = Request::segment(1);?>

<div class="top_section3">
    <div class="container">
        <div class="left">
            <!-- Logo -->
            <div>
                <a href="index.html" id="logo_company">{{config('app.site_name')}}</a>
            </div>

        </div><!-- end left -->

        <div class="right">

            <ul class="tinfo last">
                <li><i class="fa fa-phone"></i></li>
                <li><em>Call Us</em>
                    <strong>{{$website_info->phone}}</strong></li>
            </ul>
        </div><!-- end right -->

    </div>
</div><!-- end top navigation links -->

<div class="clearfix"></div>

<header class="header">
    <div class="container">
        <!-- Navigation Menu -->
        <div class="menu_main_full2">
            <div class="navbar yamm navbar-default">
                <div class="navbar-header">
                    <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse"
                         data-target="#navbar-collapse-1"><span>Menu</span>
                        <button type="button"><i class="fa fa-bars"></i></button>
                    </div>
                </div>

                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li class="dropdown "><a href="{{url('home')}}" class="dropdown-toggle {{$active_menu=='home'||$active_menu==''?'active':''}}">Home</a></li>
                            <li class="dropdown"><a href="{{url('aboutus')}}" class="dropdown-toggle {{$active_menu=='aboutus'?'active':''}}" >About Us</a></li>
                            <li class="dropdown "><a href="{{url('ourservice')}}" class="dropdown-toggle {{$active_menu=='ourservice'?'active':''}}" >Our Services</a></li>
                            <li class="dropdown"><a href="{{url('promotion')}}" class="dropdown-toggle {{$active_menu=='promotion'?'active':''}}" >Promotion</a></li>
                            <li class="dropdown"><a href="{{url('contactus')}}" class="dropdown-toggle {{$active_menu=='contactus'?'active':''}}" >Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end Navigation Menu -->
    </div>

</header>



<div class="clearfix"></div>