@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">

    <div class="welcome">
        <span class="name">سلام صبا ،</span>
        <span>خوش آمدید؛ امروز جمعه - ۲۳ خرداد ۱۳۹۹ </span>
    </div>

    <div id="nextclass" class="shade">
        <div class="widget-title">
            <h3>کلاس پیش رو</h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="widget-content">
            <div class="right">
                <div class="stuprofile">
                    <div class="pic">
                        <span class="num1"></span>
                        <span class="num2"></span>
                        <span class="num3"></span>
                        <img src="images/person2.jpg" alt="">
                    </div>
                    <div class="detail">
                        <span>دانشجو</span>
                        <h4>نسیم کد خدایان</h4>
                        <span class="date">چهار شنبه 07 خرداد 12:00:00</span>
                    </div>
                </div>
            </div>
            <div class="left">
                <span class="start">شروع کلاس</span>
                <div id="countdown" data-time="2020/09/01 00:00:00" class="style colorDefinition lang-rtl labelformat"><span class="timerDisplay label4"><span class="displaySection"><span class="numberDisplay">۰۰</span><span class="periodDisplay">روز</span></span><span class="displaySection"><span class="numberDisplay">۰۰</span><span class="periodDisplay">ساعت</span></span><span class="displaySection"><span class="numberDisplay">۰۰</span><span class="periodDisplay">دقیقه</span></span><span class="displaySection"><span class="numberDisplay">۰۰</span><span class="periodDisplay">ثانیه</span></span></span></div>

            </div>
        </div>
    </div>

    <div class="class-list shade">
        <div class="widget-title">
            <h3>کلاس ها</h3>
            <div class="time-filter">
                <span><i class="icon-time-line"></i>زمان </span>
                <select name="" id="">
                    <option value="">امروز</option>
                    <option value="">فردا</option>
                    <option value="">پس فردا</option>
                </select>
            </div>
            <div class="stat-filter">
                <span><i class="icon-stat"></i>وضعیت </span>
                <select name="" id="">
                    <option value="">پیش رو</option>
                    <option value="">انجام شده</option>
                    <option value="">کنسل شده</option>
                    <option value="">معلق شده</option>
                </select>
            </div>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="widget-content">
            <div class="class-list-title">
                <span>‏7 کلاس در برنامه دارید</span>
            </div>

            <div class="single-class">
                <div class="date">
                    <span class="month">خرداد</span>
                    <span class="day">07</span>
                    <span class="name">چهارشنبه</span>

                </div>
                <div class="mleft">

                    <div class="right">
                        <div class="pic">
                            <img src="images/person5.jpg" alt="">
                        </div>
                        <div class="det">
                            <div class="job"><span>استاد</span></div>
                            <h4>نسیم کد خدایان</h4>
                            <div class="date"><i class="icon-time-line"></i><span>زمان</span> <span>چهار شنبه 07 خرداد 12:00:00</span></div>
                        </div>
                    </div>
                    <div class="left">
                        <div class="enter-class">
                            <span>ورود به کلاس</span>
                        </div>
                        <div class="class-option">
                            <span class="title"><i class="icon-dots"></i>گزینه ها</span>
                            <ul>
                                <li><span><i class="icon-write"></i>ویرایش کلاس</span></li>
                                <li><span><i class="icon-trash"></i>لغو کلاس</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-class">
                <div class="date">
                    <span class="month">خرداد</span>
                    <span class="day">07</span>
                    <span class="name">چهارشنبه</span>

                </div>
                <div class="mleft">

                    <div class="right">
                        <div class="pic">
                            <img src="images/person5.jpg" alt="">
                        </div>
                        <div class="det">
                            <div class="job"><span>استاد</span></div>
                            <h4>نسیم کد خدایان</h4>
                            <div class="date"><i class="icon-time-line"></i><span>زمان</span> <span>چهار شنبه 07 خرداد 12:00:00</span></div>
                        </div>
                    </div>
                    <div class="left">
                        <div class="enter-class">
                            <span>ورود به کلاس</span>
                        </div>
                        <div class="class-option">
                            <span class="title"><i class="icon-dots"></i>گزینه ها</span>
                            <ul>
                                <li><span><i class="icon-write"></i>ویرایش کلاس</span></li>
                                <li><span><i class="icon-trash"></i>لغو کلاس</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-class">
                <div class="date">
                    <span class="month">خرداد</span>
                    <span class="day">07</span>
                    <span class="name">چهارشنبه</span>

                </div>
                <div class="mleft">

                    <div class="right">
                        <div class="pic">
                            <img src="images/person5.jpg" alt="">
                        </div>
                        <div class="det">
                            <div class="job"><span>استاد</span></div>
                            <h4>نسیم کد خدایان</h4>
                            <div class="date"><i class="icon-time-line"></i><span>زمان</span> <span>چهار شنبه 07 خرداد 12:00:00</span></div>
                        </div>
                    </div>
                    <div class="left">
                        <div class="enter-class">
                            <span>ورود به کلاس</span>
                        </div>
                        <div class="class-option">
                            <span class="title"><i class="icon-dots"></i>گزینه ها</span>
                            <ul>
                                <li><span><i class="icon-write"></i>ویرایش کلاس</span></li>
                                <li><span><i class="icon-trash"></i>لغو کلاس</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <div class="number">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">14</a></li>
                        <li><a href="#">15</a></li>
                        <li><a href="#">16</a></li>
                    </ul>
                </div>
                <div class="result">
                    <span>صفحه 2 از 16</span>
                </div>

                <div class="next-prev">
                    <span class="next-page"><i class="icon-arrow-right-line"></i></span>
                    <span class="prev-page"><i class="icon-arrow-right-line"></i></span>
                </div>
            </div>


        </div>
    </div>

    <div class="stat-list">
        <div class="row">

            <div class="col-lg-4 col-md-12">
                <div>
                    <div class="singl-statis shade">
                        <div class="top">
                            <div class="numner green">
                                <span>150</span>
                            </div>
                            <div class="det">
                                <span class="title">کلاس های برگزارشده</span>
                                <span class="titleen">Classes held</span>
                            </div>
                            <div class="dot3">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="bar">
                            <span style="width: 45%;"></span>
                        </div>

                        <div class="bot">
                            <span class="right">792 Points</span>
                            <span class="left">Professional</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div>
                    <div class="singl-statis shade">
                        <div class="top">
                            <div class="numner blue">
                                <span>45</span>
                            </div>
                            <div class="det">
                                <span class="title">کلاس پیش رو</span>
                                <span class="titleen">Classes ahead</span>
                            </div>
                            <div class="dot3">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="bar">
                            <span style="width: 57%"></span>
                        </div>

                        <div class="bot">
                            <span class="right">792 Points</span>
                            <span class="left">Professional</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div>
                    <div class="singl-statis shade">
                        <div class="top">
                            <div class="numner orange">
                                <span>5</span>
                            </div>
                            <div class="det">
                                <span class="title">کلاس رزرو نشده</span>
                                <span class="titleen">Unreserved classes</span>
                            </div>
                            <div class="dot3">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="bar">
                            <span style="width: 70%"></span>
                        </div>

                        <div class="bot">
                            <span class="right">792 Points</span>
                            <span class="left">Professional</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="teacher-bot">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div>
                    <div class="activate-profile shade">

                        <div class="pic">
                            <img src="images/profile.svg" alt="" class="bg">
                            <img src="images/person3.jpg" alt="" class="pro">
                        </div>

                        <div class="percent">
                            <spna class="num">70</spna>
                            <span> درصد تکمیل شده</span>
                        </div>

                        <div class="profilbut">
                            <div class="lable-container">
                                <input type="checkbox" name="activeprofile" id="activeprofile" value="activeprofile">
                                <label for="activeprofile">
                                    <div class="right">

                                        <span>فعال سازی پروفایل</span>
                                    </div>
                                    <div class="left">
                                        <div class="toggle">
                                            <span></span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="profile-link">
                            <a href="#">مشاهده پروفایل</a>
                        </div>

                        <div class="process">
                            <p>برای فعال سازی پروفایلتان در تیچر پرو این مراحل را انجام دهید :</p>
                            <ul>

                                <li>
                                    <div class="right">
                                        <span class="green">
                                            <i class="icon-discount"></i>
                                        </span>
                                    </div>
                                    <div class="left">
                                        <span class="title">تعیین قیمت جلسات</span>
                                        <span class="stat green">تکمیل شده<i class="icon-tick2"></i></span>
                                    </div>
                                </li>

                                <li>
                                    <div class="right">
                                        <span class="blue">
                                            <i class="icon-calender"></i>
                                        </span>
                                    </div>
                                    <div class="left">
                                        <span class="title">تعیین برنامه زمانی</span>
                                        <span class="stat green">تکمیل شده<i class="icon-tick2"></i></span>
                                    </div>
                                </li>

                                <li>
                                    <div class="right">
                                        <span class="orange">
                                            <i class="icon-pic"></i>
                                        </span>
                                    </div>
                                    <div class="left">
                                        <span class="title">آپلود تصویر پروفایل</span>
                                        <span class="stat orange">در انتظار انجام<i class=" icon-wait"></i></span>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div>

                    <div class="linkbox shade">
                        <div class="button">
                            <a href="#" class="green"><i class="icon-movie"></i><span>مشاهده آموزش</span></a>
                        </div>

                        <div class="right">
                            <div class="pic">
                                <img src="images/team_presentation_two_color.png" alt="">
                            </div>
                            <div class="left">
                                <h4>ویدئو آموزشی نحوه کار با محیط کلاس</h4>
                                <span>اخبار، اطلاع رسانی و آموزش های حرفه ای</span>
                            </div>
                        </div>
                    </div>

                    <div class="linkbox shade">
                        <div class="button">
                            <a href="#" class="blue"><i class="icon-telegram"></i><span>عضویت در کانال</span></a>
                        </div>

                        <div class="right">
                            <div class="pic">
                                <img src="images/new_message.png" alt="">
                            </div>
                            <div class="left">
                                <h4>کانال اطلاع رسانی اساتید</h4>
                                <span>اخبار، اطلاع رسانی و آموزش های حرفه ای</span>
                            </div>
                        </div>
                    </div>

                    <div class="make-class-banner shade">
                        <div class="right">
                            <h3>کلاس حضوریت رو آنلاین و <br>رایگان برگزار کن</h3>
                            <p>!حتی اگر پروفایل شما غیرفعال است</p>
                            <span class="hshtag"># همه_کنار_هم</span>
                            <a href="#">ایجاد کلاس</a>
                        </div>
                        <div class="left">
                            <img src="images/online_presentation_two_color.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="teacher-diagrams">
        <div class="row">

            <div class="col-lg-3 col-md-12">
                <div>

                    <div class="teacher-stat shade">

                        <div class="widget-title">
                            <h3>آمار</h3>

                            <div class="dot3">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="widget-content">

                            <div class="statbox">
                                <div class="icon">
                                    <span><i class="icon-eye"></i></span>
                                </div>
                                <div class="title">
                                    <span>تعداد بازدید از پروفایل</span>
                                </div>
                                <div class="stat">
                                    <span>54</span>
                                </div>
                            </div>

                            <div class="statbox">
                                <div class="icon">
                                    <span><i class="icon-hearto"></i></span>
                                </div>
                                <div class="title">
                                    <span>تعداد علاقه مندی</span>
                                </div>
                                <div class="stat">
                                    <span>55</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div>


                    <div class="teacher-stat shade">

                        <div class="widget-title">
                            <h3>نمودار درامد</h3>
                            <div class="diag-filter">
                                <select name="" id="">
                                    <option value="">سال جاری</option>
                                    <option value="">سال قبل</option>
                                </select>
                            </div>
                            <div class="dot3">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="widget-content" style="position: relative;">
                            <div class="exp">
                                <p><i class="icon-checkout"></i> <span>درامد این سال :</span><span>‏44,521,454</span> <span>تومان</span></p>
                            </div>
                            <script>
                                window.onload = function() {

                                    var options = {
                                        series: [{
                                            name: "درآمد"
                                            , data: [10, 41, 35, 71, 49, 62, 69, 91, 48]
                                        }]
                                        , chart: {
                                            height: 350
                                            , type: 'area'
                                            , zoom: {
                                                enabled: false
                                            }
                                        }
                                        , colors: ['#17b687', '#E91E63', '#9C27B0']
                                        , fill: {
                                            colors: ['#17b687', '#E91E63', '#9C27B0']
                                            , type: 'gradient'
                                            , gradient: {
                                                shadeIntensity: 1
                                                , inverseColors: false
                                                , opacityFrom: 0.5
                                                , opacityTo: 0
                                                , stops: [0, 90, 100]
                                            }
                                        , }
                                        , dataLabels: {
                                            enabled: false
                                        }
                                        , stroke: {
                                            curve: 'straight'
                                        }
                                        , markers: {
                                            size: 8
                                            , colors: ["#fff"]
                                            , strokeColors: "#0eb582"
                                            , strokeWidth: 4
                                            , hover: {
                                                size: 8
                                                , strokeWidth: 4
                                                , colors: ["#0eb582"]
                                                , strokeColors: "#fff"
                                            , }
                                        }
                                        , title: {
                                            align: 'left'
                                        }
                                        , grid: {
                                            row: {
                                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                                opacity: 0.5
                                            }
                                        , }
                                        , xaxis: {
                                            categories: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر']
                                        , }
                                    };

                                    var chart = new ApexCharts(document.querySelector("#chartContainer"), options);
                                    chart.render();

                                }

                            </script>
                            <div id="chartContainer" style="min-height: 365px;">
                                <div id="apexchartstw9dq478" class="apexcharts-canvas apexchartstw9dq478 apexcharts-theme-light" style="width: 816px; height: 350px;"><svg id="SvgjsSvg1342" width="816" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1344" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)">
                                            <defs id="SvgjsDefs1343">
                                                <clipPath id="gridRectMasktw9dq478">
                                                    <rect id="SvgjsRect1350" width="768.640625" height="286.348" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMasktw9dq478">
                                                    <rect id="SvgjsRect1351" width="796.640625" height="318.348" x="-18" y="-18" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1374" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1375" stop-opacity="0.5" stop-color="rgba(23,182,135,0.5)" offset="0"></stop>
                                                    <stop id="SvgjsStop1376" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="0.9"></stop>
                                                    <stop id="SvgjsStop1377" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1349" x1="0" y1="0" x2="0" y2="282.348" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="282.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG1380" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1381" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1383" font-family="Helvetica, Arial, sans-serif" x="0" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1384">فروردین</tspan>
                                                        <title>فروردین</title>
                                                    </text><text id="SvgjsText1386" font-family="Helvetica, Arial, sans-serif" x="95.080078125" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1387">اردیبهشت</tspan>
                                                        <title>اردیبهشت</title>
                                                    </text><text id="SvgjsText1389" font-family="Helvetica, Arial, sans-serif" x="190.16015625" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1390">خرداد</tspan>
                                                        <title>خرداد</title>
                                                    </text><text id="SvgjsText1392" font-family="Helvetica, Arial, sans-serif" x="285.240234375" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1393">تیر</tspan>
                                                        <title>تیر</title>
                                                    </text><text id="SvgjsText1395" font-family="Helvetica, Arial, sans-serif" x="380.3203125" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1396">مرداد</tspan>
                                                        <title>مرداد</title>
                                                    </text><text id="SvgjsText1398" font-family="Helvetica, Arial, sans-serif" x="475.400390625" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1399">شهریور</tspan>
                                                        <title>شهریور</title>
                                                    </text><text id="SvgjsText1401" font-family="Helvetica, Arial, sans-serif" x="570.48046875" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1402">مهر</tspan>
                                                        <title>مهر</title>
                                                    </text><text id="SvgjsText1404" font-family="Helvetica, Arial, sans-serif" x="665.560546875" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1405">آبان</tspan>
                                                        <title>آبان</title>
                                                    </text><text id="SvgjsText1407" font-family="Helvetica, Arial, sans-serif" x="760.640625" y="311.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1408">آذر</tspan>
                                                        <title>آذر</title>
                                                    </text></g>
                                                <line id="SvgjsLine1409" x1="0" y1="283.348" x2="760.640625" y2="283.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                            </g>
                                            <g id="SvgjsG1424" class="apexcharts-grid">
                                                <g id="SvgjsG1425" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1436" x1="0" y1="0" x2="760.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1437" x1="0" y1="56.4696" x2="760.640625" y2="56.4696" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1438" x1="0" y1="112.9392" x2="760.640625" y2="112.9392" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1439" x1="0" y1="169.40879999999999" x2="760.640625" y2="169.40879999999999" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1440" x1="0" y1="225.8784" x2="760.640625" y2="225.8784" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1441" x1="0" y1="282.348" x2="760.640625" y2="282.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1426" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1427" x1="0" y1="283.348" x2="0" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1428" x1="95.080078125" y1="283.348" x2="95.080078125" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1429" x1="190.16015625" y1="283.348" x2="190.16015625" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1430" x1="285.240234375" y1="283.348" x2="285.240234375" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1431" x1="380.3203125" y1="283.348" x2="380.3203125" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1432" x1="475.400390625" y1="283.348" x2="475.400390625" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1433" x1="570.48046875" y1="283.348" x2="570.48046875" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1434" x1="665.560546875" y1="283.348" x2="665.560546875" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1435" x1="760.640625" y1="283.348" x2="760.640625" y2="289.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <rect id="SvgjsRect1442" width="760.640625" height="56.4696" x="0" y="0" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMasktw9dq478)" class="apexcharts-grid-row"></rect>
                                                <rect id="SvgjsRect1443" width="760.640625" height="56.4696" x="0" y="56.4696" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMasktw9dq478)" class="apexcharts-grid-row"></rect>
                                                <rect id="SvgjsRect1444" width="760.640625" height="56.4696" x="0" y="112.9392" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMasktw9dq478)" class="apexcharts-grid-row"></rect>
                                                <rect id="SvgjsRect1445" width="760.640625" height="56.4696" x="0" y="169.40879999999999" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMasktw9dq478)" class="apexcharts-grid-row"></rect>
                                                <rect id="SvgjsRect1446" width="760.640625" height="56.4696" x="0" y="225.8784" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMasktw9dq478)" class="apexcharts-grid-row"></rect>
                                                <line id="SvgjsLine1448" x1="0" y1="282.348" x2="760.640625" y2="282.348" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1447" x1="0" y1="1" x2="0" y2="282.348" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1353" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1354" class="apexcharts-series" seriesName="درآمد" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1378" d="M 0 282.348L 0 254.1132L 95.080078125 166.58532000000002L 190.16015625 183.52620000000002L 285.240234375 81.88092L 380.3203125 143.99748L 475.400390625 107.29224000000002L 570.48046875 87.52788000000001L 665.560546875 25.41131999999999L 760.640625 146.82096L 760.640625 282.348M 760.640625 146.82096z" fill="url(#SvgjsLinearGradient1374)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktw9dq478)" pathTo="M 0 282.348L 0 254.1132L 95.080078125 166.58532000000002L 190.16015625 183.52620000000002L 285.240234375 81.88092L 380.3203125 143.99748L 475.400390625 107.29224000000002L 570.48046875 87.52788000000001L 665.560546875 25.41131999999999L 760.640625 146.82096L 760.640625 282.348M 760.640625 146.82096z" pathFrom="M -1 282.348L -1 282.348L 95.080078125 282.348L 190.16015625 282.348L 285.240234375 282.348L 380.3203125 282.348L 475.400390625 282.348L 570.48046875 282.348L 665.560546875 282.348L 760.640625 282.348"></path>
                                                    <path id="SvgjsPath1379" d="M 0 254.1132L 95.080078125 166.58532000000002L 190.16015625 183.52620000000002L 285.240234375 81.88092L 380.3203125 143.99748L 475.400390625 107.29224000000002L 570.48046875 87.52788000000001L 665.560546875 25.41131999999999L 760.640625 146.82096" fill="none" fill-opacity="1" stroke="#17b687" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktw9dq478)" pathTo="M 0 254.1132L 95.080078125 166.58532000000002L 190.16015625 183.52620000000002L 285.240234375 81.88092L 380.3203125 143.99748L 475.400390625 107.29224000000002L 570.48046875 87.52788000000001L 665.560546875 25.41131999999999L 760.640625 146.82096" pathFrom="M -1 282.348L -1 282.348L 95.080078125 282.348L 190.16015625 282.348L 285.240234375 282.348L 380.3203125 282.348L 475.400390625 282.348L 570.48046875 282.348L 665.560546875 282.348L 760.640625 282.348"></path>
                                                    <g id="SvgjsG1355" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                        <g id="SvgjsG1357" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasktw9dq478)">
                                                            <circle id="SvgjsCircle1358" r="8" cx="0" cy="254.1132" class="apexcharts-marker no-pointer-events wrqkr6rme" stroke="#0eb582" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="8"></circle>
                                                            <circle id="SvgjsCircle1359" r="8" cx="95.080078125" cy="166.58532000000002" class="apexcharts-marker no-pointer-events whrwtzdq8" stroke="#0eb582" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="8"></circle>
                                                        </g>
                                                        <g id="SvgjsG1360" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasktw9dq478)">
                                                            <circle id="SvgjsCircle1361" r="8" cx="190.16015625" cy="183.52620000000002" class="apexcharts-marker no-pointer-events wksqgou4j" stroke="#0eb582" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="8"></circle>
                                                        </g>
                                                        <g id="SvgjsG1362" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasktw9dq478)">
                                                            <circle id="SvgjsCircle1363" r="8" cx="285.240234375" cy="81.88092" class="apexcharts-marker no-pointer-events wba13xbwl" stroke="#0eb582" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="8"></circle>
                                                        </g>
                                                        <g id="SvgjsG1364" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasktw9dq478)">
                                                            <circle id="SvgjsCircle1365" r="8" cx="380.3203125" cy="143.99748" class="apexcharts-marker no-pointer-events w0ws5u2ag" stroke="#0eb582" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="8"></circle>
                                                        </g>
                                                        <g id="SvgjsG1366" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasktw9dq478)">
                                                            <circle id="SvgjsCircle1367" r="8" cx="475.400390625" cy="107.29224000000002" class="apexcharts-marker no-pointer-events wxpl0e5ts" stroke="#0eb582" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="8"></circle>
                                                        </g>
                                                        <g id="SvgjsG1368" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasktw9dq478)">
                                                            <circle id="SvgjsCircle1369" r="8" cx="570.48046875" cy="87.52788000000001" class="apexcharts-marker no-pointer-events wlmny3sqtg" stroke="#0eb582" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="8"></circle>
                                                        </g>
                                                        <g id="SvgjsG1370" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasktw9dq478)">
                                                            <circle id="SvgjsCircle1371" r="8" cx="665.560546875" cy="25.41131999999999" class="apexcharts-marker no-pointer-events wtxnmkucn" stroke="#0eb582" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="8"></circle>
                                                        </g>
                                                        <g id="SvgjsG1372" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasktw9dq478)">
                                                            <circle id="SvgjsCircle1373" r="8" cx="760.640625" cy="146.82096" class="apexcharts-marker no-pointer-events wtj3mhfcv" stroke="#0eb582" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="8" j="8" index="0" default-marker-size="8"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1356" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1449" x1="0" y1="0" x2="760.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1450" x1="0" y1="0" x2="760.640625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1451" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1452" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1453" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect1348" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1410" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)">
                                            <g id="SvgjsG1411" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1412" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1413">100</tspan>
                                                </text><text id="SvgjsText1414" font-family="Helvetica, Arial, sans-serif" x="20" y="87.9696" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1415">80</tspan>
                                                </text><text id="SvgjsText1416" font-family="Helvetica, Arial, sans-serif" x="20" y="144.4392" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1417">60</tspan>
                                                </text><text id="SvgjsText1418" font-family="Helvetica, Arial, sans-serif" x="20" y="200.90879999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1419">40</tspan>
                                                </text><text id="SvgjsText1420" font-family="Helvetica, Arial, sans-serif" x="20" y="257.3784" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1421">20</tspan>
                                                </text><text id="SvgjsText1422" font-family="Helvetica, Arial, sans-serif" x="20" y="313.848" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1423">0</tspan>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1345" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(23, 182, 135);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                    <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                        <div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                            </svg></div>
                                        <div class="apexcharts-menu">
                                            <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                            <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                            <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 877px; height: 444px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="teacher-diagrams">
        <div class="row">

            <div class="col-lg-7 col-md-12">
                <div>

                    <div class="teacher-comment shade">

                        <div class="widget-title">
                            <h3>آخرین دیدگاه ها</h3>

                            <div class="dot3">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div>

                                <div class="ho-comment">
                                    <div class="right">
                                        <img src="images/person5.jpg" alt="">
                                    </div>

                                    <div class="mtexct">
                                        <div class="right">
                                            <div class="name"><span>توسط : یلدا شیرازی</span></div>
                                            <div class="date"><span>3:10 PM جمعه - ۲۳ خرداد ۱۳۹۹</span></div>
                                            <div class="text">
                                                <p>سلام، این یک نوشته یک دیدگاه است. سلام، این یک نوشته یک دیدگاه است. سلام، این یک نوشته یک دیدگاه است. </p>
                                            </div>
                                        </div>
                                        <div class="buuton">
                                            <span class="remove">حذف<i class="icon-trash"></i></span>
                                            <span class="reply">پاسخ<i class="icon-reply"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="ho-comment">
                                    <div class="right">
                                        <img src="images/person5.jpg" alt="">
                                    </div>

                                    <div class="mtexct">
                                        <div class="right">
                                            <div class="name"><span>توسط : یلدا شیرازی</span></div>
                                            <div class="date"><span>3:10 PM جمعه - ۲۳ خرداد ۱۳۹۹</span></div>
                                            <div class="text">
                                                <p>سلام، این یک نوشته یک دیدگاه است. سلام، این یک نوشته یک دیدگاه است. سلام، این یک نوشته یک دیدگاه است. </p>
                                            </div>
                                        </div>
                                        <div class="buuton">
                                            <span class="remove">حذف<i class="icon-trash"></i></span>
                                            <span class="reply">پاسخ<i class="icon-reply"></i></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="more-comment">
                                <a href="#">مشاهده همه نظرات</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div>


                    <div class="teacher-cform shade">

                        <div class="widget-title">
                            <h3>پیشنویس سریع مقاله </h3>

                            <div class="dot3">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="widget-content">
                            <form action="">

                                <div class="input-container">
                                    <label for="">عنوان مقاله</label>
                                    <input type="text" placeholder="">
                                </div>

                                <div class="input-container">
                                    <label for="">چه چیزی در ذهن دارید</label>
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>

                                <div class="button-container">
                                    <a href="#">رفتن به بخش مقالات</a>
                                    <span class="butt">ذخیره پیشنویس</span>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>


</div>
@endsection
