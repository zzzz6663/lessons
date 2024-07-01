<div id="sidemenu">
    <div>

        <span class="close">
            <i class="icon-cancel"></i>
        </span>
        <div id="slogo">
            {{--  <a href="#">
                <i class="icon-logo"></i>
                <span>Teacherpro</span>
            </a>  --}}
            <a href="{{route("login")}}">
                <span class="greeen_l">Lessons</span>.<span>lives</span>
            </a>

        </div>

        <div id="ssearch">
            <form action="#">
                <input type="text" placeholder="جست و جو ">
                <button><i class="icon-search"></i></button>
            </form>
        </div>

        {{--  <div id="scat">
            <span>
                <i class="icon-cats"></i>
                <span>دسته بندی ها</span>
                <i class="icon-down"></i>
            </span>
            <ul>
                <li><a href="#">طراحی وب سایت</a></li>
                <li><a href="#">علوم کامپیوتر</a></li>
                <li><a href="#">علوم داده</a></li>
                <li><a href="#">مهندسی</a></li>
                <li><a href="#">ریاضیات</a></li>
                <li><a href="#">معماری</a></li>
                <li><a href="#">مطالعه تجارت</a></li>
                <li><a href="#">طراحی و هنر</a></li>
            </ul>
        </div>  --}}




        <div id="smenu">
            <ul>
                {{--  <li class="active"><a href="#">جست و جوی استاد</a></li>  --}}
                @auth
                <li class="{{ Request::url() == route('panel.dashboard') ? 'active' : '' }}">
                    <a href="{{ route("panel.dashboard") }}">
                        <span>
                            {{ $user->short(10) }}
                        </span>
                    </a>
                </li>
                <li class="{{ Request::url() == route('panel.profile') ? 'active' : '' }}">
                    <a href="{{ route("panel.profile") }}">

                        <span>
                            {{ $user->short(15) }}
                        </span>
                    </a>
                </li>

                <li class="{{ Request::url() == route('panel.financial') ? 'active' : '' }}">
                    <a href="{{ route("panel.financial") }}">

                        <span>
                            {{ $user->short(27) }}
                        </span>
                    </a>
                </li>


                <li class="{{ Request::url() == route('userticket.index') ? 'active' : '' }}">
                    <a href="{{ route("userticket.index") }}">

                        <span>
                            {{ $user->short(385) }}
                        </span>
                    </a>
                </li>



                @if(auth()->user()->role=="teacher")
                <li class="{{ Request::url() == route('panel.prices') ? 'active' : '' }}">
                    <a href="{{ route("panel.prices") }}">

                        <span>
                            {{ $user->short(107) }}
                        </span>
                    </a>
                </li>




                <li class="{{ Request::url() == route('panel.written') ? 'active' : '' }}">
                    <a href="{{ route("panel.written") }}">

                        <span>
                            {{ $user->short(46) }}
                        </span>
                    </a>
                </li>
                <li class="{{ Request::url() == route('panel.plan') ? 'active' : '' }}">
                    <a href="{{ route("panel.plan") }}">

                        <span>
                            {{ $user->short(67) }}
                        </span>
                    </a>
                </li>

                <li class="{{ Request::url() == route('panel.langs') ? 'active' : '' }}">
                    <a href="{{ route("panel.langs") }}">

                        <span>
                            {{ $user->short(83) }}
                        </span>
                    </a>
                </li>
                <li class="{{ Request::url() == route('panel.experts') ? 'active' : '' }}">
                    <a href="{{ route("panel.experts") }}">

                        <span>
                            {{ $user->short(118) }}
                        </span>
                    </a>
                </li>


                <li class="{{ Request::url() == route('panel.resume') ? 'active' : '' }}">
                    <a href="{{ route("panel.resume") }}">

                        <span>
                            {{ $user->short(93) }}
                        </span>
                    </a>
                </li>



                <li class="{{ Request::url() == route('panel.intro.video') ? 'active' : '' }}">
                    <a href="{{ route("panel.intro.video") }}">

                        <span>
                            {{ $user->short(315) }}
                        </span>
                    </a>
                </li>

                <li class="{{ Request::url() == route('panel.edited.class') ? 'active' : '' }}">
                    <a href="{{ route("panel.edited.class") }}">

                        <span>
                            {{ $user->short(357) }}
                        </span>
                    </a>
                </li>
                @endif


                @if(auth()->user()->role=="student")
                <li class="{{ Request::url() == route('panel.fave') ? 'active' : '' }}">
                    <a href="{{ route("panel.fave") }}">

                        <span>
                            {{ $user->short(330) }}
                        </span>
                    </a>
                </li>
                @endif

                <li class="exit"><a href="{{ route("logoute") }}"><span>

                    {{ $user->short(339) }}
                </span></a></li>
                @endauth

                {{--  <li class="parent"><a href="#">دوره آموزشی</a>

                    <ul>
                        <li><a href="#">زیر منو</a></li>
                        <li class="parent"><a href="#">زیر منو</a>

                            <ul>
                                <li><a href="#">زیر منو</a></li>
                                <li><a href="#">زیر منو</a></li>
                                <li><a href="#">زیر منو</a></li>
                                <li><a href="#">زیر منو</a></li>
                                <li><a href="#">زیر منو</a></li>
                            </ul>
                        </li>
                        <li><a href="#">زیر منو</a></li>
                        <li><a href="#">زیر منو</a></li>
                        <li><a href="#">زیر منو</a></li>
                    </ul>

                </li>  --}}

            </ul>
        </div>

    </div>

</div>
