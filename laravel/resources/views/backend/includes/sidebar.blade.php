<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li {{Request::segment(2)=='dashboard'?'class=active':''}}><a href="{{url('admin/dashboard')}}"><i class="fa fa-home"></i> หน้าหลัก </a>
            </li>
            <li {{Request::segment(2)=='home'
                || Request::segment(2)=='aboutus'
                || Request::segment(2)=='ourservices'
                || Request::segment(2)=='contactus'
                || Request::segment(2)=='promotion'?'class=active':''}}>
                <a><i class="fa fa-edit"></i> เว็บเพจ <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/home')}}">Home</a></li>
                    <li><a href="{{url('admin/aboutus')}}">About Us</a></li>
                    <li><a href="{{url('admin/ourservices')}}">Our Services</a></li>
                    <li><a href="{{url('admin/promotion')}}">Promotion</a></li>
                    <li><a href="{{url('admin/contactus')}}">Contact Us</a></li>
                </ul>
            </li>
            <li {{Request::segment(2)=='slideshow'?'class=active':''}}><a><i class="fa fa-list-ul"></i> Features <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/slideshow')}}">สไลด์โชว์</a></li>
                </ul>
            </li>
            <li {{Request::segment(2)=='user'?'class=active':''}}><a href="{{url('admin/user')}}"><i class="fa fa-user"></i>ผู้ใช้งาน </a></li>
            <li {{Request::segment(2)=='setting'?'class=active':''}}><a><i class="fa fa-gears"></i> ตั้งค่า <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/setting')}}">ข้อมูลเว็บไซด์</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
