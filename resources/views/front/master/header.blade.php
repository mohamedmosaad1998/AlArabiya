
<!-- MOBILE MENU -->
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" style="width:350px !important;height: 100px !important;" alt="" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        @if(auth()->check())
                            <h4>الاعدادات</h4>
                            <ul>
                                <li>
                                    <a href="#" class="text-danger" onclick="document.getElementById('logoutUser').submit();">{{trans('lang.logout')}}</a>
                                    <form action="{{route('logout')}}" method="POST" id="logoutUser">@csrf</form>
                                </li>
                            </ul>
                        @else()
                            <ul>
                                <li><a href="{{route('login')}}" >{{trans('lang.login')}}</a></li>
                                <li><a href="{{route('register')}}">{{trans('lang.auth_create')}}</a></li>
                            </ul>
                        @endif
                        <ul>
                            @include('front.master.links')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--HEADER SECTION-->
<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@afet.info</a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i>  : (201098989297+)</a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-right">
                        <ul>

                            @if (auth()->check())
                                <li><a  href="#"  onclick="document.getElementById('logoutUser').submit();">{{trans('lang.logout')}}</a></li>
                                <li><a  href="{{route('user.show',auth()->user())}}" >{{trans('lang.profile')}}</a></li>
                            @else
                                <li><a href="{{route('login')}}">{{trans('lang.login')}}</a>
                                </li>
                                <li><a href="{{route('register')}}">{{trans('lang.auth_create')}}</a></li>
                            @endif
                            @if (backpack_auth()->check())
                                <li style="background-color: #ff2222"><a  href="#"  onclick="document.getElementById('logoutAdmin').submit();">{{trans('lang.logout')}}</a></li>
                                <form action="{{route('backpack.auth.logout')}}" method="POST" id="logoutAdmin">@csrf</form>
                            @endif
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250" style="    background: url({{asset('images/map.png')}}) #fff ;background-size: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="" />
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            @include('front.master.links')
                        </ul>
                    </div>
                </div>
               </div>
        </div>
    </div>
    <div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-form">
                        <form method="GET" action="{{route('search')}}">
                            <div class="sf-type">
                                <div class="sf-input">
                                    <input style="padding-top: 1px;padding-bottom: 1px;" type="text" required name="search" id="sf-box" value="{{isset($_GET['search'])?$_GET['search']:''}}" placeholder="{{trans('lang.search-courses')}}">
                                </div>
                            </div>
                            <div class="sf-submit">
                                <input type="submit" value="{{trans('lang.search')}}" class="shadow" style="text-align: center">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HEADER SECTION-->
