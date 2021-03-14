<div class="navbar-logo">
    <a class="mobile-menu" id="mobile-collapse" href="#!">
        <i class="ti-menu"></i>
    </a>
    <a class="mobile-search morphsearch-search" href="#">
        <i class="ti-search"></i>
    </a>
    <a href="{{route('home')}}">
        <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo"/>
    </a>
    <a class="mobile-options">
        <i class="ti-more"></i>
    </a>
</div>

<div class="navbar-container container-fluid">
    <ul class="nav-left">
        <li>
            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
        </li>

    </ul>
    <ul class="nav-right">

       @auth()
            <li class="user-profile header-notification">
                <a href="#!">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" class="img-radius" alt="User-Profile-Image">
                    <span>{{Auth::user()->name}}</span>
                    <i class="ti-angle-down"></i>
                </a>
                <ul class="show-notification profile-notification">
                    <li>
                        <a href="#!">
                            <i class="ti-settings"></i> Settings
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-user"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-email"></i> My Messages
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-lock"></i> Lock Screen
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">
                            <i class="ti-layout-sidebar-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </li>
        @endauth
        @guest()
               <li class="user-profile header-notification">
                   <a href="#!">
                       <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" class="img-radius" alt="User-Profile-Image">
                       <span>Sign In</span>
                       <i class="ti-angle-down"></i>
                   </a>
                   <ul class="show-notification profile-notification">

                       <li>
                           <a href="{{route('login')}}">
                               <i class="ti-user"></i> Log in
                           </a>
                       </li>
                       <li>
                           <a href="{{route('register')}}">
                               <i class="ti-plus"></i> Register
                           </a>
                       </li>

                   </ul>
               </li>
           @endguest
    </ul>

</div>
