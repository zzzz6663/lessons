<div id="sideteachernav">

    <div class="teacher-prfile">
        <div class="pic">
            <span class="percent"> ۷۰%</span>
            <img class="bg" src="/site/images/profile.svg" alt="">
            <img class="pro" src="/site/images/person4.jpg" alt="">
            <i class="icon-info"></i>
        </div>
        <div class="name">
        {{ $customer->name }}
        </div>
        <div class="email">
            {{ $customer->email }}
        </div>
    </div>

    <div class="pishkhan-nav">
        <ul>
            <li class="{{ Request::url() == route('panel.dashboard') ? 'active' : '' }}">
                <a href="{{ route("panel.dashboard") }}">
                    <i class="icon-dashboard"></i>
                    <span>
                        {{ $user->short(10) }}
                    </span>
                </a>
            </li>

            {{--  <li class="{{ Request::url() == route('panel.setting') ? 'active' : '' }}">
                <a href="{{ route("panel.setting") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(11) }}
                    </span>
                </a>
            </li>  --}}


            <li class="{{ Request::url() == route('panel.prices') ? 'active' : '' }}">
                <a href="{{ route("panel.prices") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(107) }}
                    </span>
                </a>
            </li>
            <li class="{{ Request::url() == route('panel.profile') ? 'active' : '' }}">
                <a href="{{ route("panel.profile") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(15) }}
                    </span>
                </a>
            </li>


            <li class="{{ Request::url() == route('panel.financial') ? 'active' : '' }}">
                <a href="{{ route("panel.financial") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(27) }}
                    </span>
                </a>
            </li>
            <li class="{{ Request::url() == route('panel.written') ? 'active' : '' }}">
                <a href="{{ route("panel.written") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(46) }}
                    </span>
                </a>
            </li>
            <li class="{{ Request::url() == route('panel.plan') ? 'active' : '' }}">
                <a href="{{ route("panel.plan") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(67) }}
                    </span>
                </a>
            </li>

            <li class="{{ Request::url() == route('panel.langs') ? 'active' : '' }}">
                <a href="{{ route("panel.langs") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(83) }}
                    </span>
                </a>
            </li>
            <li class="{{ Request::url() == route('panel.experts') ? 'active' : '' }}">
                <a href="{{ route("panel.experts") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(118) }}
                    </span>
                </a>
            </li>


            <li class="{{ Request::url() == route('panel.resume') ? 'active' : '' }}">
                <a href="{{ route("panel.resume") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(93) }}
                    </span>
                </a>
            </li>



            {{--  <li class="{{ Request::url() == route('panel.dashboard') ? 'active' : '' }}"><a href="{{ route("panel.dashboard") }}"><i class="icon-dsetting"></i><span>پیشخوان</span></a></li>  --}}
            {{-- <li><a href="#"><i class="icon-dsetting"></i><span>تنظیمات</span></a></li>
            <li><a href="#"><i class="icon-dcalass"></i><span>کلاس ها</span></a></li>
            <li><a href="#"><i class="icon-dwallet"></i><span>کیف پول</span></a></li>
            <li><a href="#"><i class="icon-ddownload"></i><span>دانلود ها</span></a></li>
            <li><a href="#"><i class="icon-dtest"></i><span>مقاله</span></a></li>
            <li><a href="#"><i class="icon-calender"></i><span>برنامه زمانی</span></a></li>
            <li><a href="#"><i class="icon-discount"></i><span>قیمت ها</span></a></li>
            <li><a href="#"><i class="icon-dcourse"></i><span>دوره ها</span></a></li>
            <li><a href="#"><i class="icon-dtest"></i><span>آزمون ها</span></a></li>  --}}
        </ul>
    </div>

</div>
