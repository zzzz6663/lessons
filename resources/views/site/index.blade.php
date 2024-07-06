@extends('master.site')
@section('content')
<div id="slide" class="rows" style="padding-top: 100px">
    <div class="container">
        <div class="ts-section-title title-center">
            <h2 class="section-title ">
                {{ $user->short(416) }}
            </h2>
        </div>
        <p>
            {{ $user->short(417) }}
        </p>
        <div class="turitor-course-search header-course-search">
            <form method="get" name="search-course " class="turitor-search-course-form" action="http://127.0.0.1:8000/teacher_list">
                <input type="hidden" name="_token" value="X4K6BTsqYnW5RDsDUH8ZUMuxugZfayTHkR6JYzli"> <input type="hidden" name="_method" value="get"> <input type="text" name="langsearch" class="search-course-input" placeholder="چه زبانی می‌خواهی یاد بگیری؟">

                <button class="lp-button button search-course-button">
                    <!-- <span class="icon2-search"></span> -->
                    <svg enable-background="new 0 0 50 50" height="20px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect fill="none" height="50" width="50"></rect>
                        <circle cx="21" cy="20" fill="none" r="16" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></circle>
                        <line fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" x1="32.229" x2="45.5" y1="32.229" y2="45.5"></line>
                    </svg>
                </button>
            </form>
        </div>

        <div class="links">
            <ul>
                <li>
                    <a href="http://127.0.0.1:8000/teacher_list" rel="nofollow" class="saerch"> <span class="icon-plus-circle"></span>
                        {{ $user->short(419) }}
                    </a>
                </li>
                <li>
                    <a id="show_login" rel="nofollow" class="bl pointer sign"> <span class="icon-user-add"></span>
                        {{ $user->short(418) }}
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="anime">

        <div class="ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-c99f2b9 ekit-section-parallax-type-animation">
            <img class="elementskit-parallax-graphic " src="/site/images/image13-min.png">
        </div>

        <div class="ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-cf77525 ekit-section-parallax-type-animation">
            <img class="elementskit-parallax-graphic " src="/site/images/image12-min.png">
        </div>

        <div class="ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-ebc11dc ekit-section-parallax-type-animation">
            <img class="elementskit-parallax-graphic " src="/site/images/image11-min.png">
        </div>

        <div class="ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-e4e51a2 ekit-section-parallax-type-animation">
            <img class="elementskit-parallax-graphic " src="/site/images/image10-min.png">
        </div>

        <div class="ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-1326015 ekit-section-parallax-type-animation">
            <img class="elementskit-parallax-graphic " src="/site/images/image9-min.png">
        </div>

        <div class="ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-9b2f5cf ekit-section-parallax-type-animation">
            <img class="elementskit-parallax-graphic " src="/site/images/image8-min.png">
        </div>

    </div>
</div>

<div id="lang" class="rows pa1">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-12">
                <div>
                    <div class="row">

                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <div class="sectitle">
                                    <h2 class="section-title "> <span class="sub-title"></span>

                                        {{ $user->short(420) }}

                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <div class="sec-text">
                                    <p>
                                        {{ $user->short(421) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <div class="sec-link">
                                    <a href="http://127.0.0.1:8000/teacher_list" rel="nofollow" class="elementskit-btn "> <i aria-hidden="true" class="icon2-eye"></i>
                                        {{ $user->short(422) }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="lang">
                    <ul>
                        @foreach (App\Models\Language::where("active_lang",1)->get() as $langu )

                        <li>
                            <div class="single-lng">
                                <figure>
                                    <a href="{{ route("teachers",['languages'=>[ $langu->id]]) }}">
                                        <img class="flag" src="{{ $langu->flag()  }}">
                                    </a>
                                </figure>
                                <h3>
                                    <a href="{{ route("teachers",['languages'=>[ $langu->id]]) }}">{{ $langu->name }}</a>
                                </h3>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="calto" class="rows">
    <div class="container">
        <h2>    {{ $user->short(423) }}</h2>
        <p>
            {{ $user->short(424) }}
        </p>
        <div class="link">

            <a href="#" class="bl show_login">
                {{ $user->short(425) }}
                <i aria-hidden="true" class="icon2-plus-circle"></i>
            </a>


        </div>
    </div>
</div>

<div id="home-button" class="rows">
    <div class="fullcontainer">

        <div class="row">

            <div class="col-lg-6 col-sm-12">
                <div class="sing-button">
                    <div class="img">
                        <img src="/site/images/instructor_image.png" alt="">
                    </div>
                    <div class="left">
                        <h2 class="section-title ">     {{ $user->short(426) }}!</h2>
                        <p>

                            {{ $user->short(427) }}
                            </p>
                        <div class="link">
                            <a class="bl" href="{{ route("teachers") }}" rel="nofollow"> <span class="icon2-plus-circle"></span>
                                {{ $user->short(428) }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="sing-button">
                    <div class="img">
                        <img src="/site/images/partner_image.png" alt="">
                    </div>
                    <div class="left">
                        <h2 class="section-title ">   {{ $user->short(429) }}</h2>
                        <p>
                            {{ $user->short(430) }}

                            </p>
                        <br>
                        <div class="link" style="margin-top: 10px">
                            <a href="{{ route("register") }}" id="show_login" rel="nofollow" class="bl pointer sign"> <span class="icon2-plus-circle"></span>

                                {{ $user->short(418) }}

                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
