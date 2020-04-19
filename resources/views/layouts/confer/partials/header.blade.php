<div>

<header class="header-area">
    <div class="classy-nav-container breakpoint-off">

    <div class="container-fluid">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-around" id="conferNav">

            <!-- Logo -->
            <div>
                <a class="nav-brand" href="{{route('myhome')}}"><img src="{{asset('assets/img/core-img/logo.png')}}" alt="" style="width:150px;height:150px"></a>

            </div>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu " >
                <!-- Menu Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav ">
                    {{-- <div style="padding-left:5vw"> --}}
                         <ul id="nav">
                        <li class="active"><a href="{{route('myhome')}}">خانه</a></li>
                        <li><a href="{{route('single_event')}}">فیلم‌ها</a>
                            <ul  class="dropdown" style="width:100px">
                                @foreach($filmcat->genre as $f_genre)
                                <li><a href="{{route('m_events')}}">{{$f_genre->name}}</a></li>
                                @endforeach
                                    {{-- <li><a href="{{route('m_events')}}">درام</a></li>
                                    <li><a href="{{route('m_events')}}">کمدی</a></li> --}}

                                    {{-- <li><a href="about.html">- درباره ما</a></li>
                                    <li><a href="speakers.html">- فیلم‌ها</a></li>
                                    <li><a href="schedule.html">- تئاتر‌ها</a></li>
                                    <li><a href="tickets.html">- کنسرت‌ها</a></li>
                                    <li><a href="blog.html">- بلاگ</a></li>
                                    <li><a href="single-blog.html">- بلاگ تک صفحه‌ای</a></li>
                                    <li><a href="contact.html">- ارتباط با ما</a></li> --}}
                                    {{-- <li><a href="#">- Dropdown</a>
                                        <ul class="dropdown">
                                            <li><a href="#">- Dropdown Item</a></li>
                                            <li><a href="#">- Dropdown Item</a></li>
                                            <li><a href="#">- Dropdown Item</a></li>
                                            <li><a href="#">- Dropdown Item</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                        </li>
                        <li><a href="{{route('single_event')}}">تئاتر‌ها</a>
                            <ul  class="dropdown" style="width:100px">
                                @foreach($theatrecat->genre as $t_genre)
                                <li><a href="{{route('m_events')}}">{{$t_genre->name}}</a></li>
                                @endforeach
                                {{-- <li><a href="{{route('m_events')}}">اجتماعی</a></li>
                                <li><a href="{{route('m_events')}}">کمدی</a></li> --}}
                            </ul>
                        </li>
                        <li><a href="{{route('single_event')}}">کنسرت‌ها</a>
                            <ul  class="dropdown" style="width:100px">
                                @foreach($consertcat->genre as $c_genre)
                                <li><a href="{{route('m_events')}}">{{$c_genre->name}}</a></li>
                                @endforeach
                                {{-- <li><a href="{{route('m_events')}}">پاپ</a></li>
                                <li><a href="{{route('m_events')}}">سنتی</a></li> --}}
                            </ul>
                        </li>

                        {{-- <li><a href="#">صفحات</a>
                            <ul class="dropdown ">
                                <li><a href="index.html">- خانه</a></li>
                                <li><a href="about.html">- درباره ما</a></li>
                                <li><a href="speakers.html">- فیلم‌ها</a></li>
                                <li><a href="schedule.html">- تئاتر‌ها</a></li>
                                <li><a href="tickets.html">- کنسرت‌ها</a></li>
                                <li><a href="blog.html">- بلاگ</a></li>
                                <li><a href="single-blog.html">- بلاگ تک صفحه‌ای</a></li>
                                <li><a href="contact.html">- ارتباط با ما</a></li>
                                <li><a href="#">- Dropdown</a>
                                    <ul class="dropdown">
                                        <li><a href="#">- Dropdown Item</a></li>
                                        <li><a href="#">- Dropdown Item</a></li>
                                        <li><a href="#">- Dropdown Item</a></li>
                                        <li><a href="#">- Dropdown Item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}

                        <li><a href="{{route('blog')}}">بلاگ</a></li>

                        <li><a href="{{route('contactus')}}">تماس با ما</a></li>
                    </ul>
                    {{-- </div> --}}


                    <!-- Get Tickets Button -->
                    <div class="classynav ">
                        <a href="{{route('tracking')}}" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">پیگیری خرید<i class="zmdi zmdi-long-arrow-left mr-2 "></i></a>
                        @if(Auth::check())
                        <ul >
                            <li>
                                <a href="">
                                        <span style="color:white" class="  mt-3 mt-lg-0 ml-1">
                                                {{ Auth::user()->name }}
                                               </span>
                                               <img src="{{asset('assets/img/mimg/unknownuser2.png')}}" alt="" style="height:45px;width:45px;border-radius:50%" class="ml-2">
                                </a>
                                <ul class="dropdown" style="width:150px">
                                    <li class="text-center"><a href="{{route('profile')}}">پروفایل</a></li>
                                    <li class="text-center">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>


                            </li>
                        </ul>
                             @else
                        <a href="{{route('login')}}" class="btn  mt-3 mt-lg-0 ml-3 ml-lg-5" style="background-color:#151853;color:white">ورود/ثبت نام </a>
                        @endif
                        {{-- <div class="input-icons">
                            <i class="fa fa-search mainsearch" ></i>
                           <input type="text" placeholder="جستجو" class="pr-1">
                        </div> --}}
                        <div class="md-form active-purple active-purple-2 mb-2">
                            <form action="{{route('search_result')}}">
                                 <input class="form-control" name="keyword" type="text" placeholder="جستجو" aria-label="Search">
                            </form>

                          </div>
                    </div>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

    </div>
</div>

</header>
</div>
