@extends('master.site')
@section('content')
<div id="slide" class="rows" style="padding-top: 100px">
    <div class="container">
        <div class="ts-section-title title-center">
            <h2 class="section-title "> برتریـن و بـزرگتـرین پایـگاه آموزشـی زبـان در کشـور!</h2>
        </div>
        <p>ما معتقدیم که همه ظرفیت خلاق بودن را دارند. اینجا مکانی است که در آن افراد پتانسیل های خود را توسعه می دهند</p>
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
                    <a href="http://127.0.0.1:8000/teacher_list" rel="nofollow" class="saerch"> <span class="icon-plus-circle"></span> جستجوی استاد </a>
                </li>
                <li>
                    <a id="show_login" rel="nofollow" class="bl pointer sign"> <span class="icon-user-add"></span> ثبت نام کاملا رایگان </a>
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

<div id="lang" class="rows">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-12">
                <div>
                    <div class="row">

                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <div class="sectitle">
                                    <h2 class="section-title "> <span class="sub-title">#دسته بندی های برتر</span> زبان  های محبوب</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <div class="sec-text">
                                    <p>در زیر لیستی از زبان های محبوب در تیچرپرو را مشاهده می کنید. تنها کافی است زبان مورد علاقه خود را انتخاب کرده و آن زبان را نزد بهترین اساتید فرا بگیرید.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <div class="sec-link">
                                    <a href="http://127.0.0.1:8000/teacher_list" rel="nofollow" class="elementskit-btn "> <i aria-hidden="true" class="icon2-eye"></i> مشاهده همه </a>
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
                                                              <li>
                           <div class="single-lng">
                               <figure>
                                   <a href="http://127.0.0.1:8000/teacher_list?lang=1">
                                       <img src="http://127.0.0.1:8000/src/img/lang/1_lan_1618903018.jpg">
                                   </a>
                               </figure>
                               <h3>
                                   <a href="http://127.0.0.1:8000/teacher_list?lang=1">روسی</a>
                               </h3>
                           </div>
                       </li>
                                                              <li>
                           <div class="single-lng">
                               <figure>
                                   <a href="http://127.0.0.1:8000/teacher_list?lang=2">
                                       <img src="http://127.0.0.1:8000/src/img/lang/2_lan_1619698963.png">
                                   </a>
                               </figure>
                               <h3>
                                   <a href="http://127.0.0.1:8000/teacher_list?lang=2">انگیسی</a>
                               </h3>
                           </div>
                       </li>
                                                              <li>
                           <div class="single-lng">
                               <figure>
                                   <a href="http://127.0.0.1:8000/teacher_list?lang=3">
                                       <img src="http://127.0.0.1:8000/src/img/lang/3_lan_1619963323.png">
                                   </a>
                               </figure>
                               <h3>
                                   <a href="http://127.0.0.1:8000/teacher_list?lang=3">آلمانی</a>
                               </h3>
                           </div>
                       </li>
                                                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="calto" class="rows">
    <div class="container">
        <h2> مسیر یادگیری مناسب را برای خود پیدا کنید</h2>
        <p>
            اهداف خود را با برنامه ریزی دقیق ما مطابقت دهید، گزینه  brهای خود را کاوش کنید و مسیر موفقیت خود را ترسیم کنید.</p>
        <div class="link">

                                                <a href="#" class="bl show_login">
                    به ما بپیوند
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
                        <h2 class="section-title "> همین امروز یادگیری را شروع کنید!</h2>
                        <p>به جمع هزاران دانشجوی ما بپیوندید و به آسانی زبان مورد نظر خود را فرا بگیرید!</p>
                        <div class="link">
                            <a class="bl" href="http://127.0.0.1:8000/teacher_list" rel="nofollow"> <span class="icon2-plus-circle"></span> جستجوی استاد </a>
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
                        <h2 class="section-title "> مدرس شوید!</h2>
                        <p>شما هم دانسته های خود را به دیگران یاد دهید!</p>
                        <br>
                        <div class="link" style="margin-top: 10px">
                                                                                <a id="show_login" rel="nofollow" class="bl pointer sign">  <span class="icon2-plus-circle"></span>  ثبت نام کاملا رایگان </a>
                                                                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
