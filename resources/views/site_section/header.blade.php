<div id="header" class="rows">
    <div class="fullcontainer">
        <div id="logo">
            <a href="{{ route("login") }}">
                <i class="icon-logo"></i>
                <span>Teacherpro</span>
            </a>
        </div>

        {{-- <div id="top-cat">
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
    </div> --}}
    <div id="topsearch">
        <form action="#">
            <input type="text" placeholder="  {{ $user->short(3) }} ">
            <button><i class="icon-search"></i></button>
        </form>
    </div>

    <div id="topmenu">
        <ul>
            {{-- <li class="active"><a href="#">جست و جوی استاد</a></li>
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

        {{-- <div id="basket">
                <a href="#"><i class="icon-basket"></i><span class="num">0</span></a>
            </div>  --}}

        <div id="langs">
            <span>
                LanGuages
            </span>
            {{-- سسسس--}}
            <ul>
                @foreach (Cache::get('active_langs', function() {
                return App\Models\Language::where('active_lang', '1')->get();
                }) as $lang )
                <li><a href="{{ route("locale",$lang->id) }}">
                        <img class="flag" src="{{ $lang->flag() }}" alt="">
                        <span>{{ $lang->name }}</span>
                    </a></li>
                @endforeach

            </ul>
        </div>
        <div id="usermenu" class="login">
            <a href="{{ route("articles") }}"> {{ $user->short(365) }}</a>

            <a href="{{ route("teachers") }}"> {{ $user->short(120) }}</a>
            @guest
            <a href="{{ route("register") }}">{{ $user->short(9) }}</a>
            <a href="{{ route("login.user") }}">{{ $user->short(12) }}</a>
            @endguest
            @auth
            <a href="{{ route("panel.dashboard") }}"><i class="icon-user"></i></a>



            <div class="drop" style="z-index: 99999999999 ">
                <div class="drop-container">
                    <ul>

                        <li class="">
                            <a href="{{ route("panel.dashboard") }}">
                                <span class="icon">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.8654 10H19.8727C21.8799 10 22.8836 9 22.8836 7V5C22.8836 3 21.8799 2 19.8727 2H17.8654C15.8581 2 14.8545 3 14.8545 5V7C14.8545 9 15.8581 10 17.8654 10Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5.82145 22H7.82873C9.836 22 10.8396 21 10.8396 19V17C10.8396 15 9.836 14 7.82873 14H5.82145C3.81418 14 2.81055 15 2.81055 17V19C2.81055 21 3.81418 22 5.82145 22Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.34" d="M6.82509 10C9.04226 10 10.8396 8.20914 10.8396 6C10.8396 3.79086 9.04226 2 6.82509 2C4.60792 2 2.81055 3.79086 2.81055 6C2.81055 8.20914 4.60792 10 6.82509 10Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.34" d="M18.869 22C21.0862 22 22.8836 20.2091 22.8836 18C22.8836 15.7909 21.0862 14 18.869 14C16.6519 14 14.8545 15.7909 14.8545 18C14.8545 20.2091 16.6519 22 18.869 22Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="text"> {{ $user->short(10) }}</span>
                            </a>
                        </li>

                        @if(auth()->user()->role=="student")
                        <li class="">
                            <a href="{{ route("panel.profile") }}">
                                <span class="icon">
                                    <span class="icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM5 10H7C7 10.7956 7.31607 11.5587 7.87868 12.1213C8.44129 12.6839 9.20435 13 10 13C10.7956 13 11.5587 12.6839 12.1213 12.1213C12.6839 11.5587 13 10.7956 13 10H15C15 11.3261 14.4732 12.5979 13.5355 13.5355C12.5979 14.4732 11.3261 15 10 15C8.67392 15 7.40215 14.4732 6.46447 13.5355C5.52678 12.5979 5 11.3261 5 10Z" fill="currentColor"></path>
                                        </svg>
                                    </span>

                                </span>
                                <span class="text"> {{ $user->short(15) }}</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route("panel.financial") }}">
                                <span class="icon">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.83301 2V5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16.8623 2V5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M4.31641 9.09009H21.3782" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M22.8836 19C22.8836 19.75 22.6728 20.46 22.3015 21.06C21.609 22.22 20.3343 23 18.869 23C17.8554 23 16.932 22.63 16.2295 22C15.9183 21.74 15.6474 21.42 15.4366 21.06C15.0653 20.46 14.8545 19.75 14.8545 19C14.8545 16.79 16.651 15 18.869 15C20.0734 15 21.1473 15.53 21.8799 16.36C22.5022 17.07 22.8836 17.99 22.8836 19Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M17.3037 19L18.2973 19.99L20.4351 18.02" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M21.8799 8.5V16.36C21.1472 15.53 20.0734 15 18.869 15C16.651 15 14.8544 16.79 14.8544 19C14.8544 19.75 15.0652 20.46 15.4366 21.06C15.6473 21.42 15.9183 21.74 16.2294 22H8.83263C5.31991 22 3.81445 20 3.81445 17V8.5C3.81445 5.5 5.31991 3.5 8.83263 3.5H16.8617C20.3744 3.5 21.8799 5.5 21.8799 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M12.843 13.7H12.852" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M9.12814 13.7H9.13716" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M9.12793 16.7H9.13691" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="text"> {{ $user->short(27) }}</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route("panel.fave") }}">
                                <span class="icon">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.8833 10V13C22.8833 17 20.876 19 16.8615 19H16.3596C16.0485 19 15.7474 19.15 15.5567 19.4L14.0513 21.4C13.3889 22.28 12.3049 22.28 11.6425 21.4L10.1371 19.4C9.97651 19.18 9.60516 19 9.33418 19H8.83236C4.81782 19 2.81055 18 2.81055 13V8C2.81055 4 4.81782 2 8.83236 2H14.8542" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M20.3743 7C21.7601 7 22.8834 5.88071 22.8834 4.5C22.8834 3.11929 21.7601 2 20.3743 2C18.9886 2 17.8652 3.11929 17.8652 4.5C17.8652 5.88071 18.9886 7 20.3743 7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M16.8586 11H16.8676" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M12.843 11H12.852" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M8.82736 11H8.83637" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="text"> {{ $user->short(330) }}</span>

                            </a>
                        </li>
                        @endif

                        @if(auth()->user()->role=="teacher")

                            <li class="">
                                <a href="{{ route("panel.plan") }}">
                                    <span class="icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 2V5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M8 2V5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M20.5 9.09009H3.5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M3 8.5V17C3 20 4.5 22 8 22H16C19.5 22 21 20 21 17V8.5C21 5.5 19.5 3.5 16 3.5H8C4.5 3.5 3 5.5 3 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M12.0055 13.7H11.9965" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M15.7047 13.7H15.6957" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M15.7051 16.7H15.6961" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="text">        {{ $user->short(67) }}</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route("panel.prices") }}">
                                    <span class="icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.17038 15.3L8.70038 19.83C10.5604 21.69 13.5804 21.69 15.4504 19.83L19.8404 15.44C21.7004 13.58 21.7004 10.56 19.8404 8.69005L15.3004 4.17005C14.3504 3.22005 13.0404 2.71005 11.7004 2.78005L6.70038 3.02005C4.70038 3.11005 3.11038 4.70005 3.01038 6.69005L2.77038 11.69C2.71038 13.04 3.22038 14.35 4.17038 15.3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M9.5 12C10.8807 12 12 10.8807 12 9.5C12 8.11929 10.8807 7 9.5 7C8.11929 7 7 8.11929 7 9.5C7 10.8807 8.11929 12 9.5 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>

                                    </span>
                                    <span class="text">     {{ $user->short(107) }}</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route("panel.langs") }}">
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.8833 10V13C22.8833 17 20.876 19 16.8615 19H16.3596C16.0485 19 15.7474 19.15 15.5567 19.4L14.0513 21.4C13.3889 22.28 12.3049 22.28 11.6425 21.4L10.1371 19.4C9.97651 19.18 9.60516 19 9.33418 19H8.83236C4.81782 19 2.81055 18 2.81055 13V8C2.81055 4 4.81782 2 8.83236 2H14.8542" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M20.3743 7C21.7601 7 22.8834 5.88071 22.8834 4.5C22.8834 3.11929 21.7601 2 20.3743 2C18.9886 2 17.8652 3.11929 17.8652 4.5C17.8652 5.88071 18.9886 7 20.3743 7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M16.8586 11H16.8676" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M12.843 11H12.852" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M8.82736 11H8.83637" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="text">        {{ $user->short(83) }}</span>

                                </a>
                            </li>

                            <li class="">
                                <a href="{{ route("panel.written") }}">
                                    <span class="icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16 2V5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M7 13H15" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M7 17H12" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="text">         {{ $user->short(46) }}</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route("panel.profile") }}">
                                    <span class="icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM5 10H7C7 10.7956 7.31607 11.5587 7.87868 12.1213C8.44129 12.6839 9.20435 13 10 13C10.7956 13 11.5587 12.6839 12.1213 12.1213C12.6839 11.5587 13 10.7956 13 10H15C15 11.3261 14.4732 12.5979 13.5355 13.5355C12.5979 14.4732 11.3261 15 10 15C8.67392 15 7.40215 14.4732 6.46447 13.5355C5.52678 12.5979 5 11.3261 5 10Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <span class="text">         {{ $user->short(15) }} </span>
                                    <span class="num">
                                    </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route("panel.financial") }}">
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.81055 12.6101H19.8724" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M19.8724 10.28V17.43C19.8423 20.28 19.0594 21 16.0786 21H6.60432C3.57334 21 2.81055 20.2501 2.81055 17.2701V10.28C2.81055 7.58005 3.44284 6.71005 5.82146 6.57005C6.06233 6.56005 6.3233 6.55005 6.60432 6.55005H16.0786C19.1096 6.55005 19.8724 7.30005 19.8724 10.28Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M22.8841 6.73V13.72C22.8841 16.42 22.2518 17.29 19.8732 17.43V10.28C19.8732 7.3 19.1104 6.55 16.0794 6.55H6.60513C6.32411 6.55 6.06314 6.56 5.82227 6.57C5.85237 3.72 6.63524 3 9.61604 3H19.0903C22.1213 3 22.8841 3.75 22.8841 6.73Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M6.07324 17.8101H7.79947" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path opacity="0.4" d="M9.94727 17.8101H13.3998" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <span class="text">     {{ $user->short(27) }}</span>
                                </a>
                            </li>



                        @endif


                        <li>
                            <a class="logout" href="{{ route("logoute") }}">
                                <span class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.89844 7.55999C9.20844 3.95999 11.0584 2.48999 15.1084 2.48999H15.2384C19.7084 2.48999 21.4984 4.27999 21.4984 8.74999V15.27C21.4984 19.74 19.7084 21.53 15.2384 21.53H15.1084C11.0884 21.53 9.23844 20.08 8.90844 16.54" stroke="#5E57BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <g opacity="0.4">
                                            <path d="M14.9972 12H3.61719" stroke="#5E57BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.85 8.65039L2.5 12.0004L5.85 15.3504" stroke="#5E57BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="text">
                                    {{ $user->short(339) }}
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            @endauth
        </div>

    </div>
</div>
</div>
<div id="sens" hidden data-reserve="{{ $user->short(152) }}" data-time="{{ $user->short(252) }}" data-date="{{ $user->short(251) }}"
    data-mes1="{{ $user->short(266) }}" data-mes2="{{ $user->short(267) }}"
    data-mes3="{{ $user->short(345) }}"
    ></div>



