@extends('master.site')
@section('content')
<div id="sidefilter">

    <div class="sm-title">
        <span class="remove-filter">
            <i class="icon-close"></i>
            <span>

                {{ $user->short(119) }}
            </span>
        </span>
        <h3>
            <i class="icon-setting"></i>
            <span> {{ $user->short(121) }}

            </span>
        </h3>
    </div>


    <!-- Start Language -->

    <div class="filter-wdiget">
        <div class="ftitle">
            <i class="icon-up"></i>
            <span> {{ $user->short(122) }}</span>
        </div>
        <div class="f-content">

            <div class="choose-language">
                <div class="lang-search">
                    <i class="icon-search"></i>
                    <input type="text" placeholder=" {{ $user->short(3) }} ...">
                </div>
                <div class="lang-select">
                    <ul>
                        @foreach ($languages as $language )

                        <li>
                            <div class="lable-container">
                                <input type="checkbox" name="languege" id="{{ $language->name }}" value="{{ $language->id }}">
                                <label for="{{ $language->name }}">
                                    <div class="right">
                                        <img  class="flag" src="{{ $language->flag() }}" alt="">
                                    </div>
                                    <div class="left">
                                        <span class="top">{{ $language->name }}</span>
                                    </div>
                                </label>
                            </div>
                        </li>
                        @endforeach


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
                  <span class="left">
                    {{ $user->short(124) }}
                      <input type="text" id="amount1" readonly>
                  </span>
                  <span class="right">

                      {{ $user->short(125) }}
                  <input type="text" id="amount2" readonly>
                  </span>
                </p>
                <div class="avr">
                    <span> ميانگين قيمت :</span>
                    <span class="pr"> </span>
                </div>
                {{--  <div class="send">
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
            <span>      {{ $user->short(126) }}</span>
        </div>
        <div class="f-content">
            <div class="show">
                <ul>
                    <li>
                        <div class="lable-container">
                            <input type="checkbox" name="show" id="discount" value="discount">
                            <label for="discount">
                                <div class="right">
                                    <i class="icon-discount"></i>
                                    <span>
                                        {{ $user->short(127) }}

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
                            <input type="checkbox" name="show" id="level" value="level">
                            <label for="level">
                                <div class="right">
                                    <i class="icon-gift"></i>
                                    <span>
                                        {{ $user->short(128) }}

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
                            <input type="checkbox" name="show" id="video" value="video">
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
                            <input type="checkbox" name="show" id="male" value="male">
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
                            <input type="checkbox" name="show" id="female" value="female">
                            <label for="female">
                                <div class="right">
                                    <i class="icon-female"></i>
                                    <span>         {{ $user->short(131) }}</span>
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
            <span>زمانبندی ها</span>
        </div>
        <div class="f-content">
            <div class="timing">
                <span class="title">بر اساس زمان روز </span>
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
                </ul>
                <span class="title">انتخاب روز هفته</span>
                <select name="week" id="">
                    <option value="saturday">شنبه</option>
                    <option value="sunday">یکشنبه</option>
                    <option value="monday">دوشنبه</option>
                    <option value="tuesday">سه شنبه</option>
                    <option value="wednesday">چهار شنبه</option>
                    <option value="thursday">پنج شنبه</option>
                    <option value="friday">جمعه</option>
                </select>
            </div>
        </div>
    </div>

    <!-- End Timing -->


    <!-- Start Country -->

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

    <!-- End Country -->


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
            <span>براساس امتیاز</span>
        </div>
        <div class="f-content">
            <div class="point">
                <ul>

                    <li>
                        <div class="lable-container">
                            <input type="checkbox" name="point" id="5star" value="5star">
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
                            <input type="checkbox" name="point" id="4star" value="4star">
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
                            <input type="checkbox" name="point" id="3star" value="3star">
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
                            <input type="checkbox" name="point" id="2star" value="2star">
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
                            <input type="checkbox" name="point" id="1star" value="1star">
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

</div>


<div id="teachercat">

    <div id="topfilter" class="shade">
        <div class="right">

            <form action="">
                <span class="butt"><i class="icon-search"></i></span>
                <span class="close"><i class="icon-close"></i></span>
                <input type="text" placeholder="جست وجو براساس زبان، نام مدرس و ...">
            </form>

        </div>
        <div class="left">
            <span class="title">نمایش  :</span>
            <ul class="oredering">
                <li><span>همه</span></li>
                <li><span>ارزان ترین</span></li>
                <li><span>گران ترین</span></li>
                <li class="active"><span>پر سابقه</span></li>
                <li><span>محبوبیت</span></li>
            </ul>
        </div>
    </div>


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
    </div>

    <div class="teachers-list">

        <div class="single-teacher shade">
            <div class="rowd">
                <div class="teacher-right">
                    <div>

                        <div class="teacher-det">
                            <div class="det-r">

                                <div class="tlinks">
                                    <a href="#" class="reserv">رزرو جلسه رایگان</a>
                                </div>

                                <div class="img">
                                    <span class="like"><i class="icon-heart"></i></span>

                                    <img src="/site/images/teacher.jpg" alt="">
                                </div>

                                <ul>
                                    <li class="name">
                                        <span>امير شريفی</span>
                                    </li>
                                    <li class="ti">
                                        <span>استاد مجرب</span>
                                    </li>
                                    <li class="rate">
                                        <i class="icon-star gray"></i>
                                        <i class="icon-star gray"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <span>3/5</span>
                                    </li>
                                </ul>

                            </div>
                            <div class="det-l">

                                <div class="teaching-lng">
                                    <span class="title">
                                         زبان تدریس  :
                                    </span>
                                    <ul>
                                        <li><img src="/site/images/english.png" alt=""><span>انگلیسی</span></li>
                                        <li><img src="/site/images/french.png" alt=""><span>فرانسوی</span></li>
                                    </ul>
                                </div>
                                <ul>
                                    <li class="classes">
                                        <span class="num">46</span>
                                        <span class="nam">
                                            <i class="icon-training"></i>
                                            <span>کلاس ها</span>
                                        </span>
                                    </li>
                                    <li class="student">
                                        <span class="num">446</span>
                                        <span class="nam">
                                            <i class="icon-cap"></i>
                                            <span>زبان‌آموزان</span>
                                        </span>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="price">
                                        <span>قیمت هر جلسه (هر ساعت)</span>
                                    </li>
                                    <li class="mprice">
                                        <span class="num">46000</span>
                                        <span class="cur">تومان</span>
                                        <span class="lable">تخفیف</span>
                                    </li>
                                    <li class="disc">
                                        <span class="num">66000</span>
                                        <span class="cur">تومان</span>
                                    </li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="teacher-left">
                    <div>
                        <div class="tabs">
                            <ul class="tab-nav">
                                <li class="active"><span><span>ویدیو </span><i class="icon-video-on"></i></span></li>
                                <li><span><span>درباره </span><i class="icon-about"></i></span></li>
                            </ul>
                            <ul class="tab-container">
                                <li class="active">
                                    <div>

                                        <video id="player" class="js-player" playsinline controls data-poster="/path/to/poster.jpg">
                                          <source src="/site/images/video.mp4" type="video/mp4" />

                                        </video>

                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            سلام خدمت شما عزیزان، سینا هستم فوق لیسانس مهندسی صنایع و مدرس زبان انگلیسی. تحصیلات خودم رو در مالزی ادامه دادم و در شرکت های متعددی مشغول به کار شدم. چند سالیسیت که به صورت فریلنس و مشاوره ادامه فعالیت می کنم. زبان انگلیسی رو از سال های دور تدریس می کنم،
                                            <a href="#"> خواندن ادامه <i class="icon-left"></i><i class="icon-left"></i></a>

                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="more-teacher">
        <span>مشاهده بیشتر</span>
    </div>

</div>
@endsection
