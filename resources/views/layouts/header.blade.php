<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img" >
                                <a href="{{route('home')}}">
                                    <img src="{{asset('img/logo.png')}}"  alt="logo" width="180px" height="100px">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">الرئيسية</a></li>
                                        <li><a class="{{ request()->routeIs('من نحن') ? 'active' : '' }}" href="{{route('من نحن')}}"> من نحن</a></li>
                                        <li><a class="{{ request()->routeIs('library') ? 'active' : '' }}" href="{{route('library')}}"> المكتبة القانونية</a></li>
                                        <li><a class="" href="{{route('home')}}">الخدمات القانونية <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{route('ادارة القضايا والمنازعات')}}">ادارة القضايا والمنازعات</a></li>
                                                <li><a href="{{route('محامي توثيق زواج الاجانب في مصر')}}">محامي توثيق زواج الاجانب في مصر</a></li>
                                                <li><a href="{{route('محامى تأسيس شركات فى مصر')}}"> محامي تأسيس شركات في مصر</a></li>
                                                <li><a href="{{route('محامي قضايا عمالية')}}">محامي قضايا عمالية</a></li>
                                                <li><a href="{{route('محامي تعويضات في مصر')}}">محامي تعويضات في مصر</a></li>
                                                <li><a href="{{route('محامي قضايا أحوال شخصية')}}">قضايا الاحوال الشخصية (قضايا الأسرة)</a></li>
                                                <li><a href="{{route('محامي كسب الجنسية المصرية')}}">محامي كسب الجنسية المصرية</a></li>
                                                <li><a href="{{route('محامي عقارات في مصر')}}">محامي عقارات في مصر</a></li>
                                                <li><a href="{{route('محامي تسجيل عقارات')}}">محامي تسجيل عقارات</a></li>
                                                <li><a href="{{route('التصديق علي الاوراق الرسمية')}}"> التصديق على الاوراق الرسمية</a></li>
                                                <li><a href="{{route('محامي عقود')}}">محامي عقود</a></li>
                                                <li><a href="{{route('محامي تحكيم دولى فى مصر')}}">محامي تحكيم دولي في مصر</a></li>
                                                <li><a href="{{route('محامي تأسيس شركات عقارية فى مصر')}}">محامي تأسيس شركات عقارية في مصر</a></li>
                                                <li><a href="{{route('ادارة الاملاك والاصول العقارية')}}">ادارة الاملاك والاصول العقارية في مصر</a></li>
                                                <li><a href="{{route('محامي استشارات قانونية اون لاين وحضوري في مصر')}}"> محامي استشارات قانونية اون لاين وحضوري في مصر</a></li>
                                                <li><a href="{{route('محامي قضايا الايجارات')}}">محامي قضايا ايجارات | خبير قانون الايجار القديم والجديد</a></li>
                                                <li><a href="{{route('محامي قضايا مدنية وتجارية')}}">محامي قضايا مدنية وتجارية في مصر | مكتب محاماة متخصص</a></li>
                                            </ul>
                                        </li>
                                        {{-- <li><a class="" href="#">اسئلة شائعة</a>
                                           
                                        </li> --}}
                                        <li><a class="{{ request()->routeIs('تواصل معنا') ? 'active' : '' }}" href="{{route('تواصل معنا')}}">اتصل بنا</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                            <div class="social_media_links">
                                <ul>
                                    <li><a href="https://www.facebook.com/share/17DQ4eSmR5/?mibextid=wwXIfr" target="_blank"> <i class="fab fa-facebook"></i> </a></li>
                                    <li><a href="https://wa.me/+201500000496" target="_blank"> <i class="fab fa-whatsapp"></i> </a></li>
                                    <li><a href="tel:+201500000496" target="_blank"> <i class="fas fa-phone"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->