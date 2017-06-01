<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li {{Request::segment(2)=='home'?'class=active':''}}><a href="{{url('admin/home')}}"><i class="fa fa-home"></i> หน้าหลัก </a>
            </li>
            <li {{Request::segment(2)=='promotion'
                 || Request::segment(2)=='slideshow'?'class=active':''}}>
                <a><i class="fa fa-edit"></i> เนื้อหา <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/promotion')}}">โปรโมชั่น</a></li>
                </ul>
            </li>
            <li {{Request::segment(2)=='user'?'class=active':''}}><a href="{{url('admin/user')}}"><i class="fa fa-users"></i>ผู้ใช้งาน </a></li>
            <li {{Request::segment(2)=='setting'?'class=active':''}}><a><i class="fa fa-gears"></i> ตั้งค่า <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/setting/create')}}">ข้อมูลเว็บไซด์</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
