@php
use App\Models\User;
use App\Models\Language;
    $user =auth()->user();
    if(!$user){
        $user=New User();
    }
@endphp
<div id="header" class="rows">
    <div class="fullcontainer">
        <div id="logo">
            <a href="#">
                <i class="icon-logo"></i>
                <span>Teacherpro</span>
            </a>
        </div>

        {{--  <div id="top-cat">
            <span>
                <i class="icon-cats"></i>
                <span>{{ session()->get("locale") }}</span>
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
        <div id="topsearch">
            <form action="#">
                <input type="text" placeholder="  {{ $user->short(3) }} ">
                <button><i class="icon-search"></i></button>
            </form>
        </div>

        <div id="topmenu">
            <ul>
                {{--  <li class="active"><a href="#">جست و جوی استاد</a></li>
                <li class="parent"><a href="#">دوره آموزشی</a>

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

                </li>
                <li><a href="#">صفحات</a></li>  --}}
                <li><a href="#">

                    {{ $user->short(2) }}
                </a></li>
                <li><a href="#">
                    {{ $user->short(1) }}
                </a></li>
            </ul>
        </div>

        <div id="topleft">
            <div id="mabnav"><span><i class="icon-menu"></i></span></div>

            <div id="basket">
                <a href="#"><i class="icon-basket"></i><span class="num">0</span></a>
            </div>
            @guest
            <div id="usermenu">
                <a href="{{ route("register") }}"><i class="icon-user"></i></a>
            </div>
            @endguest
            @auth
            <div id="usermenu">
                <a href="#"><i class="icon-user"></i></a>
            </div>
            @endauth

            <div id="langs">
                <span>
                    LanGuages
                </span>
                <ul>
                    @foreach (Cache::get('active_langs', function() {
                        return Language::where('active_lang', '1')->get();
                    }) as $lang )
                    <li><a href="{{ route("locale",$lang->id) }}">
                    <img class="flag" src="{{ $lang->flag() }}" alt="">
                    <span>{{ $lang->name }}</span>
                    </a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>
