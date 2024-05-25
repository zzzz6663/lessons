@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">

    <div class="welcome">
        <span class="name">
            {{ $user->short(302) }}

            {{ $customer->name }} ،</span>
        <span>
            {{ $user->short(301) }}

            -
            {{ Carbon\Carbon::now()->format("Y-m-d") }}
        </span>
    </div>
    @if(auth()->user()->role=="student")

    @if($unreserved=\App\Models\Select::where('user_id',$user->id)->where('Count','>','0')->get() )

    <div id="stulist" class="shade">
        <div class="widget-title">
            <h3>
                {{ $user->short(341) }}
            </h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="widget-content">
            <ul class="stulist owl-carousel owl-theme">
                @foreach($selects as $select)
                @php($te=\App\Models\User::find($select->user_id))
                <li>
                    <div class="single-st">
                        <div class="pic">
                            <img src="{{$te->avatar()}}" alt="">
                        </div>
                        <div class="name">
                            <h4>
                                {{$te->name}}
                            </h4>
                        </div>
                        <div class="time">
                            <span>
                                {{$select->count}}
                                {{ $user->short(343) }}
                            </span>
                        </div>
                        <div class="button">
                            <span class="chtime" onclick="window.location.href='{{route('panel.reserve',$select->id)}}'">
                                {{ $user->short(342) }}
                            </span>
                        </div>
                    </div>
                </li>

                @endforeach

            </ul>
        </div>
    </div>
    @endif
    @endif
    @if($first)

    <div id="nextclass" class="shade">
        <div class="widget-title">
            <h3>

                {{ $user->short(296) }}

            </h3>
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
                        <img src="{{ $first->avatar() }}" alt="">
                    </div>
                    <div class="detail">
                        {{-- <span>دانشجو</span>  --}}
                        <h4>{{ $first->name()}}</h4>
                        <span class="date">
                            {{ $first->start }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="left">
                <a class="start" href="{{ route("panel.start.meet",$first->id) }}">
                    {{ $user->short(303) }}
                </a>
                <div id="countdown" class="style colorDefinition lang-rtl labelformat">
                    <span class="timerDisplay label4" data-endtime="{{ $first->start }}">
                        <span class="displaySection">
                            <span class="numberDisplay">۰۰</span>
                            <span class="periodDisplay">روز</span>
                        </span>
                        <span class="displaySection">
                            <span class="numberDisplay">۰۰</span>
                            <span class="periodDisplay">ساعت</span>
                        </span>
                        <span class="displaySection">
                            <span class="numberDisplay">۰۰</span>
                            <span class="periodDisplay">دقیقه</span>
                        </span>
                        <span class="displaySection">
                            <span class="numberDisplay">۰۰</span>
                            <span class="periodDisplay">ثانیه</span>
                        </span>
                    </span>
                </div>

            </div>
        </div>
    </div>
    @endif

    <div class="class-list shade">
        <div class="widget-title">
            <h3>
                {{ $user->short(146) }}
            </h3>
            <form action="{{ route("panel.dashboard") }}" method="get">
                @csrf
                @method("get")
            <div class="time-filter">
                <span><i class="icon-time-line"></i> {{ $user->short(304) }} </span>
                <select name="day" class="submit_form" id="">
                    <option {{ request("day")=="0"?"selected":"" }}  value="0"> {{ $user->short(305) }} </option>
                    <option {{ request("day")=="1"?"selected":"" }}  value="1"> {{ $user->short(306) }} </option>
                    <option {{ request("day")=="2"?"selected":"" }}  value="2">
                        {{ $user->short(307) }}
                    </option>
                </select>
            </div>
            <div class="stat-filter">
                <span><i class="icon-stat"></i> {{ $user->short(92) }} </span>
                <select  id="">
                    <option value="0">{{ $user->short(308) }} </option>
                    <option value="1">{{ $user->short(309) }}</option>
                    <option value="2">
                        {{ $user->short(310) }}
                    </option>
                </select>
            </div>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </form>
        </div>

        <div class="widget-content">
            @if($meets->total())

            <div class="class-list-title">
                <span>
                    {{ $meets->total() }}
                    {{ $user->short(311) }}
                </span>
            </div>
            @foreach ($meets as $me)
            @php($ti=Carbon\Carbon::parse($me->start))
            <div class="single-class">
                <div class="date">
                    <span class="month">{{ $ti->format(' F ') }}</span>
                    <span class="day">{{ $ti->format('d ') }}</span>
                    <span class="name">{{ $ti->format('l ') }}</span>

                </div>
                <div class="mleft">

                    <div class="right">
                        <div class="pic">
                            <img src="{{ $me->avatar() }}" alt="">
                        </div>
                        <div class="det">
                            {{-- <div class="job"><span>استاد</span></div>  --}}
                            <h4>{{ $me->name() }}</h4>
                            <div class="date"><i class="icon-time-line"></i><span>
                                    {{ $user->short(304) }}
                                </span> <span>
                                    {{ $me->start }}

                                </span></div>
                        </div>
                    </div>
                    <div class="left">
                        <div class="enter-class">
                            <span>
                                <a class="white" href="{{ route("panel.start.meet",$me->id) }}">
                                    {{ $user->short(303) }}
                                </a>
                            </span>
                        </div>
                        <div class="class-option">
                            <span class="title"><i class="icon-dots"></i>
                                {{ $user->short(312) }}</span>
                            <ul>
                                <li>
                                    <span class="edit_meet" data-time="{{ $me->start}}" data-name="{{ $me->name()}}" data-url="{{ route("panel.edit.meet",$me->id) }}"><i class="icon-write"></i>
                                        {{ $user->short(313) }}
                                    </span></li>
                                <li><span class="cancel_meet" data-time="{{ $me->start}}" data-name="{{ $me->name()}}" data-url="{{ route("panel.cancel.meet",$me->id) }}"><i class="icon-trash"></i>
                                        {{ $user->short(314) }}
                                    </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{$meets->appends(request()->all())->links('site.panel.section.pagination')}}

            @else
            <div class="class-list-title">
                <span>‏<i class="icon-dcourse"></i>0

                    {{ $user->short(356) }}
                </span>
            </div>
            <div class="noclass">
                <img src="/site/images/world_connection__two_color.png" alt="">

                <h4> {{ $user->short(355) }}</h4>
            </div>
            @endif



        </div>
    </div>

    <div class="stat-list">
        <div class="row">

            <div class="col-lg-4 col-md-12">
                <div>
                    <div class="singl-statis shade">
                        <div class="top">
                            <div class="numner green">
                                <span>{{ $helds }}</span>
                            </div>
                            <div class="det">
                                <span class="title">{{ $user->short(295) }}</span>
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
                                <span>{{ $upcoming }}</span>
                            </div>
                            <div class="det">
                                <span class="title">{{ $user->short(296) }}</span>
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
                                <span>{{ $not_reserved }}</span>
                            </div>
                            <div class="det">
                                <span class="title">
                                    {{ $user->short(297) }}
                                </span>
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
            @if(auth()->user()->role=="teacher")

            <div class="col-lg-4 col-md-12">
                <div>
                    <div class="activate-profile shade">

                        <div class="pic">
                            <img src="images/profile.svg" alt="" class="bg">
                            <img src="images/person3.jpg" alt="" class="pro">
                        </div>

                        <div class="percent">
                            <spna class="num">
                                {{ $customer->percent() }}
                            </spna>
                            <span>
                                %
                                {{ $user->short(277) }}
                            </span>
                        </div>

                        <div class="profilbut">
                            <div class="lable-container">
                                {{-- <input type="checkbox" name="activeprofile" id="activeprofile" value="activeprofile">  --}}

                                <form id="activeprofile_form" action="{{route('panel.active.profile',$user->id)}}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="text" name="active_profile" hidden value="">
                                    <input type="checkbox" {{$customer->active_profile=='1'?'checked':''}} name="active_profile" class="submit_form" id="activeprofile" value="1">
                                    <label for="activeprofile">
                                        <div class="right">
                                            <span> {{ $user->short(278) }}</span>
                                        </div>
                                        <div class="left">
                                            <div class="toggle">
                                                <span></span>
                                            </div>
                                        </div>
                                    </label>
                                </form>
                            </div>
                        </div>

                        <div class="profile-link">
                            <a href="{{ route("profile",$customer->id) }}">
                                {{ $user->short(279) }}
                            </a>
                        </div>

                        <div class="process">
                            <p>
                                {{ $user->short(280) }}


                                :</p>
                            <ul>

                                <li class="pointer" onclick="window.location.href='{{route('panel.prices')}}'">
                                    <div class="right">
                                        <span class="green">
                                            <i class="icon-discount"></i>
                                        </span>
                                    </div>
                                    <div class="left">
                                        <span class="title">{{ $user->short(288) }}</span>
                                        <span class="stat {{$customer->price_1_session?'green':'orange'}}">
                                            {{$customer->price_1_session?$user->short(284):$user->short(285)}}
                                            <i class="icon-{{$customer->price_1_session?'tick2':'wait'}}"></i></span>

                                    </div>
                                </li>

                                <li class="pointer" onclick="window.location.href='{{route('panel.plan')}}'">
                                    <div class="right">
                                        <span class="blue">
                                            <i class="icon-calender"></i>
                                        </span>
                                    </div>
                                    <div class="left">
                                        <span class="title">{{ $user->short(286) }}</span>
                                        <span class="stat {{$customer->meets()->count()?'green':'orange'}}"> {{$customer->meets()->count()?$user->short(284):$user->short(285)}}<i class="icon-{{$customer->meets()->count()?'tick2':'wait'}}"></i></span>

                                    </div>
                                </li>

                                <li class="pointer" onclick="window.location.href='{{route('panel.langs')}}'">
                                    <div class="right">
                                        <span class="blue">
                                            <i class="icon-calender"></i>
                                        </span>
                                    </div>
                                    <div class="left">
                                        <span class="title"> {{ $user->short(122) }}</span>
                                        <span class="stat {{$customer->languages()->count() !=0?'green':'orange'}}">{{$customer->languages()->count() !=0?$user->short(284):$user->short(285)}} <i class="icon-{{$customer->languages()->count() !=0?'tick2':'wait'}}"></i></span>
                                    </div>
                                </li>

                                <li class="pointer" onclick="window.location.href='{{route('panel.profile')}}'">
                                    <div class="right">
                                        <span class="orange">
                                            <i class="icon-pic"></i>
                                        </span>
                                    </div>

                                    <div class="left">
                                        <span class="title">{{ $user->short(287) }}</span>
                                        <span class="stat {{$customer->avatar()?'green':'orange'}}"> {{$customer->avatar()?$user->short(284):$user->short(285)}}<i class=" icon-{{$customer->avatar()?'tick2':'wait'}}"></i></span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            @endif

            <div class="col-lg-8 col-md-12">
                <div>

                    <div class="linkbox shade">
                        <div class="button">
                            <span href="" style="color: #0eb582; font-size:15px;cursor: pointer" id="show_video" class="green ar">
                                <i class="icon-movie"></i>
                                <span>

                                    {{ $user->short(290) }}
                                </span>
                            </span>
                        </div>

                        <div class="right">
                            <div class="pic">
                                <img src="images/team_presentation_two_color.png" alt="">
                            </div>
                            <div class="left">
                                <h4>

                                    {{ $user->short(289) }}
                                </h4>
                                <span>
                                    {{ $user->short(293) }}
                                </span>
                                {{-- <span>اخبار، اطلاع رسانی و آموزش های حرفه ای</span>  --}}
                            </div>
                        </div>
                    </div>

                    <div class="linkbox shade">
                        <div class="button">
                            <a href="#" class="blue"><i class="icon-telegram"></i><span>

                                    {{ $user->short(294) }}</span></a>
                        </div>

                        <div class="right">
                            <div class="pic">
                                <img src="images/new_message.png" alt="">
                            </div>
                            <div class="left">
                                <h4> {{ $user->short(292) }}</h4>
                                <span>
                                    {{ $user->short(293) }}
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="make-class-banner shade">
                        <div class="right">
                            <h3>کلاس حضوریت رو آنلاین و <br>رایگان برگزار کن</h3>
                            <p>!حتی اگر پروفایل شما غیرفعال است</p>
                            <span class="hshtag"># همه_کنار_هم</span>
                            <a href="#">ایجاد کلاس</a>
                        </div>
                        <div class="left">
                            <img src="images/online_presentation_two_color.png" alt="">
                        </div>
                    </div>  --}}

                </div>
            </div>
        </div>
    </div>
    @if(auth()->user()->role=="teacher")
    <div class="teacher-diagrams">
        <div class="row">

            <div class="col-lg-3 col-md-12">
                <div>

                    <div class="teacher-stat shade">

                        <div class="widget-title">
                            <h3>

                                {{ $user->short(298) }}
                            </h3>

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
                                    <span>

                                        {{ $user->short(299) }}

                                    </span>
                                </div>
                                <div class="stat">
                                    <span>{{ number_format($customer->seen) }}</span>
                                </div>
                            </div>
                            <div class="statbox">
                                <div class="icon">
                                    <span><i class="icon-hearto"></i></span>
                                </div>
                                <div class="title">
                                    <span> {{ $user->short(300) }}</span>
                                </div>
                                <div class="stat">
                                    <span>{{$teacher_faves}}</span>
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
                            <form action="{{ route("panel.dashboard") }}" method="get">
@csrf
@method("get")
                            <h3>
                                {{ $user->short(361) }}
                            </h3>
                            <div class="diag-filter">
                                <select name="year" class="submit_form" id="">
                                    <option {{ request("year")==0?"selected":"" }} value="0"> {{ $user->short(363) }}</option>
                                    <option {{ request("year")==1?"selected":"" }} value="1">{{ $user->short(364) }}</option>
                                </select>
                            </div>
                            <div class="dot3">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </form>

                        </div>
                        <div class="widget-content">
                            <div class="exp">
                                <p><i class="icon-checkout"></i> <span>
                                    {{ $user->short(362) }}

                                    :</span><span>




                                    </span> <span>$</span></p>
                            </div>
                            <script>
                                window.onload = function() {

                                    var options = {
                                        series: [{
                                            name: "درآمد"
                                            , data: @json($income)
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
                                            categories: ['January', 'February', 'March', 'April', 'May', 'Juan', 'July', 'August', 'September','October','November','December']
                                        , }
                                    };

                                    var chart = new ApexCharts(document.querySelector("#chartContainer"), options);
                                    chart.render();

                                }

                            </script>
                            <div id="chartContainer" style=""></div>
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
    @endif

</div>











<div class="popupc" id="video_tut">
    <div>
        <div>
            <div>

                <div class="popup-container mini shade">
                    <span class="close" onclick="window.location.href='{{route('panel.dashboard')}}'">
                        <i class="icon-cancel"></i>
                    </span>

                    <div class="chclass-pop">
                        <div class="top">
                            {{--
                            <h3>
                                آموزش
                            </h3>  --}}


                        </div>
                        <div class="form">
                            <video id="player" class="js-player" playsinline controls data-poster="/src/videos/test.mp4">
                                <source src="/src/videos/test.mp4" type="video/mp4" />
                            </video>

                        </div>
                        <div class="foot">
                            <ul>
                                <li>
                                    <div class="button-container reight border">
                                        <span class="butt close_popup" onclick="window.location.href='{{route('panel.dashboard')}}'">

                                            {{ $user->short(291) }}
                                        </span>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>



<div class="popupc" id="edit_pop">
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
                                {{ $user->short(346) }}
                            </h3>
                            <p>
                                {{ $user->short(347) }}
                            </p>
                        </div>
                        <div class="bot">
                            <div class="right">
                                <img src="/site/images/trash.png" alt="">
                            </div>
                            <div class="left">
                                <span class="day e_name">

                                </span>
                                <span class="hour e_time">

                                </span>
                            </div>
                        </div>
                        <div class="foot">
                            <ul>
                                <li>
                                    <div class="button-container reight border">
                                        <span class="butt close_pop"> {{ $user->short(65) }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="button-container reight">
                                        <span class="butt edit_yes">
                                            {{ $user->short(348) }}
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


<div class="popupc" id="cancel_pop">
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
                                {{ $user->short(350) }}
                            </h3>
                            <p>
                                {{ $user->short(351) }}
                            </p>

                        </div>
                        <div class="bot">
                            <div class="right">
                                <img src="/site/images/trash.png" alt="">
                            </div>
                            <div class="left">
                                <span class="day e_name">

                                </span>
                                <span class="hour e_time">

                                </span>
                            </div>
                        </div>
                        <div class="foot">
                            <ul>
                                <li>
                                    <div class="button-container reight border">
                                        <span class="butt close_pop"> {{ $user->short(65) }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="button-container red reight resson_yes">
                                        <span class="butt"> {{ $user->short(314) }} </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="popupc" id="reason_pop">
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
                                {{ $user->short(353) }}
                            </h3>


                        </div>
                        <div class="form">
                            <div class="input-container fill">
                                <label for="">
                                    {{ $user->short(354) }}
                                </label>
                                <textarea name="reason" id="reason" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="foot">
                            <ul>
                                <li>
                                    <div class="button-container reight border">
                                        <span class="butt close_pop"> {{ $user->short(65) }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="button-container reight">
                                        <span data-ms="      {{ $user->short(353) }}" class="butt cancel_yes "> {{ $user->short(348) }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
