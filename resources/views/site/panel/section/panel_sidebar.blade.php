<div id="sideteachernav">

    <div class="teacher-prfile">
        <div class="pic">
            {{--  <span class="percent">

                {{ $customer->percent() }}
                %</span>  --}}
            <img class="bg" src="/site/images/profile.svg" alt="">
            <a href="{{ route("panel.profile") }}">
                <img class="pro" src="{{ $customer->avatar()?$customer->avatar():"/site/images/person4.jpg" }}" alt="">
            </a>
            <i class="icon-info"></i>
        </div>
        <div class="name">
            {{ $customer->name }}
        </div>
        <div class="email">
            {{ $customer->email }}
            <br>
            {{ $customer->id }}
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

            {{-- <li class="{{ Request::url() == route('panel.setting') ? 'active' : '' }}">
            <a href="{{ route("panel.setting") }}">
                <i class="icon-dsetting"></i>
                <span>
                    {{ $user->short(11) }}
                </span>
            </a>
            </li> --}}
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


            <li class="{{ Request::url() == route('userticket.index') ? 'active' : '' }}">
                <a href="{{ route("userticket.index") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(385) }}
                    </span>
                </a>
            </li>



            @if(auth()->user()->role=="teacher")
            <li class="{{ Request::url() == route('panel.prices') ? 'active' : '' }}">
                <a href="{{ route("panel.prices") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(107) }}
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



            <li class="{{ Request::url() == route('panel.intro.video') ? 'active' : '' }}">
                <a href="{{ route("panel.intro.video") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(315) }}
                    </span>
                </a>
            </li>

            <li class="{{ Request::url() == route('panel.edited.class') ? 'active' : '' }}">
                <a href="{{ route("panel.edited.class") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(357) }}
                    </span>
                </a>
            </li>
            @endif


            @if(auth()->user()->role=="student")
            <li class="{{ Request::url() == route('panel.fave') ? 'active' : '' }}">
                <a href="{{ route("panel.fave") }}">
                    <i class="icon-dsetting"></i>
                    <span>
                        {{ $user->short(330) }}
                    </span>
                </a>
            </li>
            @endif



            <li class="exit"><a href="{{ route("logoute") }}"><i class="icon-exit"></i><span>

                {{ $user->short(339) }}
            </span></a></li>
        </ul>
    </div>

</div>
