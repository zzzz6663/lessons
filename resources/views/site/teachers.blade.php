@extends('master.site')
@section('content')
<div id="filter_t">
    <div class="sm-title">
        <h3>
            <i class="icon-setting"></i>
            <span> {{ $user->short(121) }}
            </span>
        </h3>
    </div>
</div>
<div id="sidefilter">
    <form id="filter_fo" action="{{ route("teachers") }}" method="get">
        @csrf
        @method('get')

        <div class="sm-title">
            <span class="remove-filter">
                <i class="icon-close"></i>
                <span>
                    <a href="{{route("teachers")}}">
                    {{ $user->short(119) }}

                    </a>
                </span>
            </span>
            <h3 class="ssssd">
                <span id="mobile_filster">
                    <i class="icon-setting"></i>
                    {{ $user->short(121) }}
                </span>
            </h3>
        </div>


        <!-- Start Language -->

        <div class="filter-wdiget">
            <div class="choose-language">
                <div class="lang-search">
                    <i class="icon-search search_i"></i>
                    <input type="text" name="search" value="{{ request("search") }}" placeholder=" {{ $user->short(3) }} ...">
                </div>
            </div>
            <div class="ftitle">
                <i class="icon-up"></i>
                <span> {{ $user->short(122) }}</span>
            </div>
            <div class="f-content">

                <div class="choose-language">

                    <div class="lang-select">
                        <ul>
                            <div class="input-container fill">
                                {{-- <label for="">{{ $user->Short(20) }}</label> --}}
                                <select name="languages[]" id="" multiple class="select_img change_form">
                                    <option value="">{{ $user->Short(24) }}</option>
                                    @foreach ($languages as $language)
                                    <option {{ in_array( $language->id,request('languages',[]))?"selected":"" }} value="{{ $language->id }}" data-image="{{ $language->flag() }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- @foreach ($languages as $language )
                        <li>
                            <div class="lable-container">
                                <input type="checkbox" name="langueges[]" id="{{ $language->name }}" value="{{ $language->id }}">
                            <label for="{{ $language->name }}">
                                <div class="right">
                                    <img class="flag" src="{{ $language->flag() }}" alt="">
                                </div>
                                <div class="left">
                                    <span class="top">{{ $language->name }}</span>
                                </div>
                            </label>
                    </div>
                    </li>
                    @endforeach --}}


                    </ul>
                </div>
            </div>

        </div>
</div>

<!-- End Language -->


<!-- Start Price -->

<div class="filter-wdiget">
    <div class="ftitle">
        <i class="icon-up"></i>
        <span>{{ $user->short(123) }}</span>
    </div>
    <div class="f-content">

        <div class="price">
            <div id="slider-range"></div>
            <p>

                <span class="right">
                    {{ $user->short(124) }}
                    <input type="text" name="min_range" value="{{ request("min_range") }}" id="amount1" readonly>
                </span>
                <span class=" left">
                    {{ $user->short(125) }}
                    <input type="text" name="max_range" value="{{ request("max_range") }}" id="amount2" readonly>
                </span>



            </p>
            {{--  <div class="avr">
                <span>
                    {{ $user->short(413) }}
                    :</span>
                <span class="pr avr_pri">
                    {{request("max_range")?'':"10"}}
                    {{ (request("max_range") + request("min_range"))/2 }}
                </span>
            </div>  --}}
            {{-- <div class="send">
                    <span class="btn">اعمال</span>
                </div>  --}}
        </div>

    </div>
</div>

<!-- End Price -->


<!-- Start Show -->

<div class="filter-wdiget">
    <div class="ftitle">
        <i class="icon-up"></i>
        <span> {{ $user->short(126) }}</span>
    </div>
    <div class="f-content">
        <div class="show">
            <ul>
                <li>
                    <div class="lable-container">
                        <input {{ request("classes")=="more_class"?"checked":"" }} type="checkbox" name="classes" class="change_form" id="more_class" value="more_class">
                        <label for="more_class">
                            <div class="right">
                                <i class="icon-gift"></i>
                                <span>
                                    {{ $user->short(415) }}
                                </span>
                            </div>
                            <div class="left">
                                <div class="toggle">
                                    <span></span>
                                </div>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input {{ request("price")=="expensive"?"checked":"" }} type="radio" name="price" id="discount" class="change_form" value="expensive">
                        <label for="discount">
                            <div class="right">
                                <i class="icon-gift"></i>
                                <span>
                                    {{ $user->short(138) }}
                                </span>
                            </div>
                            <div class="left">
                                <div class="toggle">
                                    <span></span>
                                </div>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input {{ request("price")=="inexpensive"?"checked":"" }} type="radio" name="price" id="Inexpensive" class="change_form" value="inexpensive">
                        <label for="Inexpensive">
                            <div class="right">
                                <i class="icon-gift"></i>

                                <span>
                                    {{ $user->short(139) }}

                                </span>
                            </div>
                            <div class="left">
                                <div class="toggle">
                                    <span></span>
                                </div>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input type="checkbox" {{ request("motivated")?"checked":"" }} name="motivated" id="motivated" class="change_form" value="motivated">
                        <label for="motivated">
                            <div class="right">
                                <i class="icon-discount"></i>

                                <span>
                                    {{ $user->short(403) }}

                                </span>
                            </div>
                            <div class="left">
                                <div class="toggle">
                                    <span></span>
                                </div>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input type="checkbox" {{ request("video")?"checked":"" }} class="change_form" name="video" id="video" value="video">
                        <label for="video">
                            <div class="right">
                                <i class="icon-play"></i>
                                <span>
                                    {{ $user->short(129) }}
                                </span>
                            </div>
                            <div class="left">
                                <div class="toggle">
                                    <span></span>
                                </div>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input checked {{ request("gender")=="all"?"checked":"" }} type="radio" class="change_form" name="gender" id="all" value="all">
                        <label for="all">
                            <div class="right">
                                <i class="icon-female"></i>
                                <span> {{ $user->short(38) }}</span>
                            </div>
                            <div class="left">
                                <div class="toggle">
                                    <span></span>
                                </div>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input {{ request("gender")=="male"?"checked":"" }} type="radio" class="change_form" name="gender" id="male" value="male">
                        <label for="male">
                            <div class="right">
                                <i class="icon-male"></i>
                                <span>
                                    {{ $user->short(130) }}
                                </span>
                            </div>
                            <div class="left">
                                <div class="toggle">
                                    <span></span>
                                </div>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input {{ request("gender")=="female"?"checked":"" }} type="radio" class="change_form" name="gender" id="female" value="female">
                        <label for="female">
                            <div class="right">
                                <i class="icon-female"></i>
                                <span> {{ $user->short(131) }}</span>
                            </div>
                            <div class="left">
                                <div class="toggle">
                                    <span></span>
                                </div>
                            </div>
                        </label>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>

<!-- End Show -->


<!-- Start Timing -->

<div class="filter-wdiget">
    <div class="ftitle">
        <i class="icon-up"></i>
        <span>
            {{ $user->short(411) }}

        </span>
    </div>
    <div class="f-content">
        <div class="timing">
            {{-- <span class="title">بر اساس زمان روز </span>
                <ul>
                    <li>
                        <div class="lable-container">
                            <input type="checkbox" name="timing" id="morning" value="morning">
                            <label for="morning">
                                <span class="icon"><i class="icon-morning"></i></span>
                                <span>صبح </span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="lable-container">
                            <input type="checkbox" name="timing" id="noon" value="noon">
                            <label for="noon">
                                <span class="icon"><i class="icon-noon"></i></span>
                                <span>ظهر</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="lable-container">
                            <input type="checkbox" name="timing" id="evening" value="evening">
                            <label for="evening">
                                <span class="icon"><i class="icon-evening"></i></span>
                                <span>عصر</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="lable-container">
                            <input type="checkbox" name="timing" id="night" value="night">
                            <label for="night">
                                <span class="icon"><i class="icon-night"></i></span>
                                <span>شب</span>
                            </label>
                        </div>
                    </li>
                </ul>  --}}
            {{-- <span class="title">{{ $user->short(411) }}</span> --}}
            <select name="week" class="change_form" id="">
                <option value="">{{ $user->short(411) }}</option>
                <option {{ request("week")=="7"?"selected":"" }} value="7">{{ $user->short(404) }}</option>
                <option {{ request("week")=="1"?"selected":"" }} value="1">{{ $user->short(405) }}</option>
                <option {{ request("week")=="2"?"selected":"" }} value="2">{{ $user->short(406) }}</option>
                <option {{ request("week")=="3"?"selected":"" }} value="3"> {{ $user->short(407) }}</option>
                <option {{ request("week")=="4"?"selected":"" }} value="4"> {{ $user->short(408) }}</option>
                <option {{ request("week")=="5"?"selected":"" }} value="5"> {{ $user->short(409) }}</option>
                <option {{ request("week")=="6"?"selected":"" }} value="6">{{ $user->short(410) }}</option>
            </select>
        </div>
    </div>
</div>

<!-- End Timing -->


{{-- <!-- Start Country -->

    <div class="filter-wdiget">
        <div class="ftitle">
            <i class="icon-up"></i>
            <span>مشخصات استاد</span>
        </div>
        <div class="f-content">
            <div class="choose-country">
                <div class="country-search">
                    <i class="icon-search"></i>
                    <input type="text" placeholder="...جست و جو کشور">
                </div>
                <div class="country-select">
                    <ul>
                        <li>
                            <div class="lable-container">
                                <input type="checkbox" name="country" id="cenglish" value="cenglish">
                                <label for="cenglish">
                                    <div class="right">
                                        <img src="/site/images/english.png" alt="">
                                    </div>
                                    <div class="left">
                                        <span class="top">انگلیسی</span>
                                        <span class="bot">English</span>
                                    </div>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="lable-container">
                                <input type="checkbox" name="country" id="cfrench" value="cfrench">
                                <label for="cfrench">
                                    <div class="right">
                                        <img src="/site/images/french.png" alt="">
                                    </div>
                                    <div class="left">
                                        <span class="top">فرانسوی</span>
                                        <span class="bot">French</span>
                                    </div>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="lable-container">
                                <input type="checkbox" name="country" id="cgermany" value="cgermany">
                                <label for="cgermany">
                                    <div class="right">
                                        <img src="/site/images/germany.png" alt="">
                                    </div>
                                    <div class="left">
                                        <span class="top">آلمانی</span>
                                        <span class="bot">Germany</span>
                                    </div>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="lable-container">
                                <input type="checkbox" name="country" id="crussian" value="crussian">
                                <label for="crussian">
                                    <div class="right">
                                        <img src="/site/images/russian.png" alt="">
                                    </div>
                                    <div class="left">
                                        <span class="top">روسی</span>
                                        <span class="bot">Russian</span>
                                    </div>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- End Country -->  --}}


<!-- Start Madrak -->

<div class="filter-wdiget">
    <div class="ftitle">
        <i class="icon-up"></i>
        <span>براساس مدرک</span>
    </div>
    <div class="f-content">

        <div class="madrak">

            <div class="madrak-search">
                <i class="icon-search"></i>
                <input type="text" placeholder="جست و جو مدرک ...">
            </div>

            <ul>
                <li>
                    <div class="lable-container">
                        <input type="checkbox" name="madrak" id="act" value="act">
                        <label for="act">
                            <div class="right">
                                <span>
                                    <i class="icon-tick"></i>
                                </span>
                            </div>
                            <div class="left">
                                <span class="top">ACT</span>
                                <span class="bot">Admissions test</span>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input type="checkbox" name="madrak" id="iels" value="iels">
                        <label for="iels">
                            <div class="right">
                                <span>
                                    <i class="icon-tick"></i>
                                </span>
                            </div>
                            <div class="left">
                                <span class="top">IELS</span>
                                <span class="bot">International English Language Testing System</span>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input type="checkbox" name="madrak" id="pte" value="pte">
                        <label for="pte">
                            <div class="right">
                                <span>
                                    <i class="icon-tick"></i>
                                </span>
                            </div>
                            <div class="left">
                                <span class="top">PTE</span>
                                <span class="bot">Pearson Language Tests</span>
                            </div>
                        </label>
                    </div>
                </li>
                <li>
                    <div class="lable-container">
                        <input type="checkbox" name="madrak" id="toefl" value="toefl">
                        <label for="toefl">
                            <div class="right">
                                <span>
                                    <i class="icon-tick"></i>
                                </span>
                            </div>
                            <div class="left">
                                <span class="top">TOEFL</span>
                                <span class="bot">Test of English as a Foreign Language</span>
                            </div>
                        </label>
                    </div>
                </li>
            </ul>

        </div>

    </div>
</div>

<!-- End Madrak -->


<!-- Start Point -->

<div class="filter-wdiget">
    <div class="ftitle">
        <i class="icon-up"></i>
        <span>{{ $user->short(414) }}</span>
    </div>
    <div class="f-content">
        <div class="point">
            <ul>

                <li>
                    <div class="lable-container">
                        <input type="radio" {{ request("point")=="5"?"checked":""  }} class="change_form" name="point" id="5star" value="5">
                        <label for="5star">
                            <div class="right">
                                <span>
                                    <i class="icon-tick"></i>
                                </span>
                            </div>
                            <div class="left">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </label>
                    </div>
                </li>

                <li>
                    <div class="lable-container">
                        <input type="radio" {{ request("point")=="4"?"checked":""  }} class="change_form" name="point" id="4star" value="4">
                        <label for="4star">
                            <div class="right">
                                <span>
                                    <i class="icon-tick"></i>
                                </span>
                            </div>
                            <div class="left">
                                <i class="icon-star gray"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </label>
                    </div>
                </li>

                <li>
                    <div class="lable-container">
                        <input type="radio" {{ request("point")=="3"?"checked":""  }} class="change_form" name="point" id="3star" value="3">
                        <label for="3star">
                            <div class="right">
                                <span>
                                    <i class="icon-tick"></i>
                                </span>
                            </div>
                            <div class="left">
                                <i class="icon-star gray"></i>
                                <i class="icon-star gray"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </label>
                    </div>
                </li>

                <li>
                    <div class="lable-container">
                        <input type="radio" {{ request("point")=="2"?"checked":""  }} class="change_form" name="point" id="2star" value="2">
                        <label for="2star">
                            <div class="right">
                                <span>
                                    <i class="icon-tick"></i>
                                </span>
                            </div>
                            <div class="left">
                                <i class="icon-star gray"></i>
                                <i class="icon-star gray"></i>
                                <i class="icon-star gray"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div>
                        </label>
                    </div>
                </li>

                <li>
                    <div class="lable-container">
                        <input type="radio" {{ request("point")=="1"?"checked":""  }} class="change_form" name="point" id="1star" value="1">
                        <label for="1star">
                            <div class="right">
                                <span>
                                    <i class="icon-tick"></i>
                                </span>
                            </div>
                            <div class="left">
                                <i class="icon-star gray"></i>
                                <i class="icon-star gray"></i>
                                <i class="icon-star gray"></i>
                                <i class="icon-star gray"></i>
                                <i class="icon-star"></i>
                            </div>
                        </label>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>

<!-- End Point -->
</form>
</div>


<div id="teachercat">

    {{-- <div id="topfilter" class="shade">
        <div class="right">
            <form action="">
                <span class="butt"><i class="icon-search"></i></span>
                <span class="close"><i class="icon-close"></i></span>
                <input type="text" placeholder="        {{ $user->short(142) }} ">
    </form>
</div>
<div class="left">
    <span class="title">
        {{ $user->short(137) }}
        :</span>
    <ul class="oredering">
        <li><span> {{ $user->short(38) }}</span></li>
        <li><span>
                {{ $user->short(138) }}
            </span></li>
        <li><span> {{ $user->short(139) }}</span></li>
        <li class="active"><span>
                {{ $user->short(140) }}
            </span></li>
        <li><span>
                {{ $user->short(141) }}
            </span></li>
    </ul>
</div>
</div> --}}

{{--
    <div id="forsat" class="shade">
        <div class="right">
            <h4>این یک فرصت طلایی است</h4>
            <p>
                از ۱۲ اردیبهشت تا ۱۲ خرداد فرصت دارید  <br>
                تا با  <strong>20%  تخفیف کلاس زبان</strong> آنلاین<br>
                ثبت‌نام کنید

            </p>
            <a href="#">اطلاعات بیشتر</a>
        </div>
        <div class="left">
            <img src="/site/images/forsat.png" alt="">
        </div>
    </div>  --}}

<div class="teachers-list">
    @foreach ($teachers as $teacher )
    @include('site.single_teacher')


    @endforeach

</div>

{{-- <div class="more-teacher">
        <span>مشاهده بیشتر</span>
    </div>  --}}

</div>

{{--
<div class="popupc" id="pop_lang" style="display: block; " >
    <div>
        <div>
            <div>

                <div class="popup-container mini shade">
                    <span class="close">
                        <i class="icon-cancel"></i>
                    </span>

                    <div class="chclass-pop">
                        <div class="top">

                            <h3>
                                دلیل تغییر زمان را بنویسید
                            </h3>


                        </div>
                        <div class="form">
                            <div class="input-container fill">
                                <label for="">{{ $user->Short(20) }}</label>
<select name="country_id" id="" multiple class="select_img">
    <option value="">{{ $user->Short(24) }}</option>
    @foreach ($languages as $language)
    <option value="{{ $language->id }}" data-image="{{ $language->flag() }}">{{ $language->name }}</option>
    @endforeach
</select>
</div>
</div>

</div>


</div>

</div>
</div>
</div>
</div> --}}

@endsection
