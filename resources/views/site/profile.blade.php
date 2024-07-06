@extends('master.site')
@section('content')


<div id="teacher-page">
    <div id="teacher-top">

    </div>

    <div id="teacher-sidebar">
        <div class="teacher-inform">
            <div class=" shade">


                <div class="pic">
                    <img src="images/teacher.jpg" alt="">
                </div>

                <div class="name">
                    <h2>{{ $teacher->name }}</h2>
                    <span>
                        {{ Carbon\Carbon::parse( $teacher->created_at)->ago() }}
                    </span>
                </div>

                <div class="free">
                    <div class="right">
                        <i class="icon-question"></i>
                        <span> {{ $user->short(117) }}</span>
                    </div>
                    <div class="left">
                        <span>{{ __("arr.".$teacher->test_session_status) }}</span>
                    </div>
                </div>

                <div class="course-price">
                    <div class="right">
                        <i class="icon-question"></i>

                    </div>
                    <div class="left">
                        <span class="title">{{ $user->short(151) }}</span>
                        <span class="text">{{ $user->short(148) }}</span>
                        <div class="price">
                            <span class="num">
                                {{ $teacher->price_1_session }}
                            </span>
                            <span>$</span>
                        </div>

                    </div>
                </div>
                <div class="ovh">
                    <span class="reserv-button">
                        {{ $user->short(152) }}
                    </span>
                </div>
            </div>

        </div>


    </div>


    <div id="teacher-details">

        <div class="teacher-info">
            <ul>
                <li class="classes">
                    <span class="tex">
                        {{ $user->short(240) }}
                    </span>
                    <span class="number">{{ $teacher->class_count() }}</span>
                </li>

                <li class="students">
                    <span class="tex">
                        {{ $user->short(241) }}
                    </span>
                    <span class="number">{{ $teacher->student_count() }}</span>
                </li>
                <?php

                $comm=$teacher->comments()->where('active','1')->latest()->get();
                ?>
                <li class="points">
                    <span class="tex">{{ $teacher->short(242) }}</span>
                    <span class="rate">
                        <i class="icon-star {{$teacher->score()['av']>=1?'':'gray'}}  "></i>
                        <i class="icon-star {{$teacher->score()['av']>=2?'':'gray'}}  "></i>
                        <i class="icon-star {{$teacher->score()['av']>=3?'':'gray'}}"></i>
                        <i class="icon-star {{$teacher->score()['av']>=4?'':'gray'}}"></i>
                        <i class="icon-star {{$teacher->score()['av']>=5?'':'gray'}}"></i>
                        {{-- <span>{{$teacher->score()['av']}}</span> --}}
                    <span>

                        {{$comm->count()}}

                        {{ $user->short(249) }}

                    </span>

                    </span>
                </li>



                <li class="lang">
                    <span class="text">
                        {{ $user->short(90) }}


                    </span>
                    <ul>
                        @foreach ($teacher->languages as $lan)
                        <li><img class="fla" src="{{ $lan->flag() }}" alt=""><span>{{ $lan->name }}</span></li>
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div>
        <div class="teacher-info teacher-summerise">
            <div class="title">
                <h3> {{ $user->short(153) }} :</h3>
            </div>
            <ul>

                <li>
                    <div>
                        <span class="img">
                            <img class="ma" src="/site/images/star.svg" alt="">
                        </span>
                        <span class="name"> {{ $user->short(154) }}</span>
                        <span class="percent">0%</span>
                    </div>
                </li>
                <li>
                    <div>
                        <span class="img">
                            <img class="ma" src="/site/images/calendar.svg" alt="">
                        </span>
                        <span class="name"> {{ $user->short(155) }}</span>
                        <span class="percent">
                            {{ $teacher->created_at }}

                        </span>
                    </div>
                </li>
                <li>
                    <div>
                        <span class="img">
                            <img class="ma" src="/site/images/surface2.svg" alt="">
                        </span>
                        <span class="name"> {{ $user->short(157) }}</span>
                        <span class="percent"> 1</span>
                    </div>
                </li>
                <li>
                    <div>
                        <span class="img">
                            <img class="ma" src="/site/images/surface1.svg" alt="">
                        </span>
                        <span class="name">

                            {{ $user->short(157) }}
                        </span>
                        <span class="percent"> 0</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="teacher-about">
            <div class="t-icon-title">
                <span class="icon"><i class="icon-write"></i></span>
                <h3>

                    {{ $user->short(158) }}
                </h3>
            </div>
            <div class="about-text">
                <div>
                    {{ $teacher->bio }}
                </div>
            </div>
            <div class="about-more">
                <div>

                    <span> {{ $user->short(159) }}</span>
                    <span class="down">
                        <i class="icon-down"></i>
                        <i class="icon-down"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="teacher-video">
            <div class="t-icon-title">
                <span class="icon"><i class="icon-play"></i></span>
                <h3> {{ $user->short(160) }}</h3>
            </div>
            <video id="player" class="js-player" playsinline controls data-poster="images/cover.png">
                <source src="images/video.mp4" type="video/mp4" />

            </video>

        </div>

        <div class="teacher-nav">
            <div>
                <div>

                    <ul>
                        <li><a href="#teacher-scadule">
                                {{ $user->short(161) }}
                            </a></li>
                        <li><a href="#teacher-expert">
                                {{ $user->short(162) }}
                            </a></li>
                        <li><a href="#teacher-resume"> {{ $user->short(93) }}</a></li>
                        <li><a href="#teacher-course">{{ $user->short(163) }}</a></li>
                        <li><a href="#teacher-blog">
                                {{ $user->short(164) }}
                            </a></li>
                        <li><a href="#teacher-comments"> {{ $user->short(50) }}</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="tnav" id="teacher-scadule">
            <div class="t-icon-title">
                <span class="icon"><i class="icon-resume"></i></span>
                <h3> {{ $user->short(161) }}</h3>
            </div>
            <div class="teacher-guide">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div>
                            <div class="title">
                                <span>
                                    {{ $user->short(77) }} :
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div>
                            <ul>
                                <li>
                                    <span class="titl"> {{ $user->short(76) }}</span>
                                    <span class="color green"></span>
                                </li>
                                <li>
                                    <span class="titl"> {{ $user->short(78) }}</span>
                                    <span class="color gray"></span>
                                </li>
                                <li>
                                    <span class="titl"> {{ $user->short(79) }}</span>
                                    <span class="color wgray"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div>
                            <div class="time-zone">
                                <i class="icon-timezone"></i>
                                <span>{{ $user->short(80) }} :</span>
                                <span>Asia/Tehran</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @include('site.calander')
        </div>
    </div>

    <div class="tnav" id="teacher-expert">
        <div class="t-icon-title">
            <span class="icon"><i class="icon-expertis"></i></span>
            <h3>{{ $user->short(118) }}</h3>
        </div>

        <div class="expertis">
            <ul>
                <li class="title">
                    <span>
                        {{ $user->short(165) }}
                    </span>
                </li>
                <li class="contn">
                    <div class="row">
                        <?php
                            $expert=array('Starter','Elementary','Intermediate','Upper_intermediate','Advanced','Mastery' );
                            ?>
                        @foreach ($attrs->whereIn("name", $expert)->where("value","on") as $at)
                        <div class="col-lg-6 col-md-12">
                            <div>
                                <span>
                                    {{ $user->short($at->name ) }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>

                <li class="title">
                    <span> {{ $user->short(239) }}</span>
                </li>
                <li class="contn">
                    <div class="row">
                        <?php
                            $expert=array('American_Accent','British_Accent','Australian_Accent','Indian_Accent','Irish_Accent','Scottish_Accent','South_African_Accent' );
                            ?>
                        @foreach ($attrs->whereIn("name", $expert)->where("value","on") as $at)
                        <div class="col-lg-6 col-md-12">
                            <div>
                                <span>
                                    {{ $user->short($at->name ) }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>
                <li class="title">
                    <span> {{ $user->short(238) }}</span>
                </li>
                <li class="contn">
                    <div class="row">

                        <?php
                            $expert=array('Children','Teenagers','Adults'  );
                            ?>
                        @foreach ($attrs->whereIn("name", $expert)->where("value","on") as $at)
                        <div class="col-lg-6 col-md-12">
                            <div>
                                <span>
                                    {{ $user->short($at->name ) }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>
                <li class="title">
                    <span> {{ $user->short(237) }}</span>
                </li>
                <li class="contn">
                    <div class="row">

                        <?php
                            $expert=array('Curriculum','Homework','Learning_Materials','Writing_Exercises','Lesson_Plans','Proficiency_Assessment','Quizzes','Tests','Reading_Exercises' );
                            ?>
                        @foreach ($attrs->whereIn("name", $expert)->where("value","on") as $at)
                        <div class="col-lg-6 col-md-12">
                            <div>
                                <span>
                                    {{ $user->short($at->name ) }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>
                <li class="title">
                    <span>{{ $user->short(236) }}</span>
                </li>
                <li class="contn">
                    <div class="row">

                        <?php
                            $expert=array('Business_English','Interview_Preparation','Reading_Comprehension'
                            ,'Listening_Comprehension','Speaking_Practice','Writing_Correction','Vocabulary_Development'
                            ,'Grammar_Development','Academic_English','Accent_Reduction','Phonetics',"Colloquial_English" );                            ?>
                        @foreach ($attrs->whereIn("name", $expert)->where("value","on") as $at)
                        <div class="col-lg-6 col-md-12">
                            <div>
                                <span>
                                    {{ $user->short($at->name ) }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>
                <li class="title">
                    <span>{{ $user->short(234) }}</span>
                </li>
                <li class="contn">
                    <div class="row">

                        <?php
                            $expert=array('TOEFL','IELTS','PTE'
                            ,'GRE','CELPIP','Duolingo','TOEIC'
                            ,'KET','PET','CAE','FCE' ,'CPE' ,'BEC','TOEFLPhD',
                            'TCF','TEF','DELF'
                            ,'DALF',
                                'Goethe','Telc','Test_Daf','OSD','TOMER','TYS','DELE','SIELE'

                            );
                ?>
                        @foreach ($attrs->whereIn("name", $expert)->where("value","on") as $at)
                        <div class="col-lg-6 col-md-12">
                            <div>
                                <span>
                                    {{ $user->short($at->name ) }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="tnav" id="teacher-resume">
        <div class="t-icon-title">
            <span class="icon"><i class="icon-resume"></i></span>
            <h3> {{ $user->short(93) }} </h3>
        </div>

        <div class="resume-section">
            <div class="title">
                <h4>
                    <i class="icon-tahsil"></i>
                    <span> {{ $user->short(243) }}</span>
                </h4>
            </div>
            <ul>
                @foreach ($resumes->where("type","education") as $re)
                <li>
                    <div class="resume">
                        <div class="right">
                            <span>{{ $re->from }}</span>
                        </div>
                        <div class="left">
                            <h5>{{ $re->title }}</h5>
                            <p>
                                {{ $re->info }}
                            </p>
                            <span class="date">
                                <span>{{ $re->from }}-{{ $re->till }}</span>
                                <i class="icon-time-line"></i>
                            </span>
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>

        <div class="resume-section">
            <div class="title">
                <h4>
                    <i class="icon-sabegh"></i>
                    <span>
                        {{ $user->short(244) }}
                    </span>
                </h4>
            </div>
            <ul>
                @foreach ($resumes->where("type","sabeghe") as $re)
                <li>
                    <div class="resume">
                        <div class="right">
                            <span>{{ $re->from }}</span>
                        </div>
                        <div class="left">
                            <h5>{{ $re->title }}</h5>
                            <p>
                                {{ $re->info }}
                            </p>
                            <span class="date">
                                <span>{{ $re->from }}-{{ $re->till }}</span>
                                <i class="icon-time-line"></i>
                            </span>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="resume-section">
            <div class="title">
                <h4>
                    <i class="icon-licence"></i>
                    <span> {{ $user->short(98) }}</span>
                </h4>
            </div>
            <ul>
                @foreach ($resumes->where("type","licence") as $re)
                <li>
                    <div class="resume">
                        <div class="right">
                            <span>{{ $re->from }}</span>
                        </div>
                        <div class="left">
                            <h5>{{ $re->title }}</h5>
                            <p>
                                {{ $re->info }}
                            </p>
                            <span class="date">
                                <span>{{ $re->from }}-{{ $re->till }}</span>
                                <i class="icon-time-line"></i>
                            </span>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>


    </div>

    <div class="tnav" id="teacher-course">
        <div class="t-icon-title">
            <span class="icon"><i class="icon-folder"></i></span>
            <h3> {{ $user->short(245) }}</h3>
        </div>
        {{-- <div class="teacher-course-list">
            <ul class="owl-carousel owl-theme">

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>  --}}
    </div>

    <div class="tnav" id="teacher-course">
        <div class="t-icon-title">
            <span class="icon"><i class="icon-folder"></i></span>
            <h3>

                {{ $user->short(246) }}
            </h3>
        </div>
        <div class="teacher-course-list">
            <ul class="owl-carousel owl-theme">

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="scourse">
                        <div class="cats">
                            <a href="#">علوم کامپیوتر</a>
                        </div>
                        <div class="title">
                            <h3>اموزش طراحی قالب وردپرس</h3>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="images/course.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

    <div class="tnav" id="teacher-blog">
        <div class="t-icon-title">
            <span class="icon"><i class="icon-author"></i></span>
            <h3>
                {{ $user->short(247) }}
            </h3>
        </div>
        <div class="blog-list">
            <ul class="owl-carousel owl-theme">

                <li>
                    <div class="single-blog">
                        <div class="right">
                            <a href="#">
                                <img src="images/blog.png" alt="">
                            </a>
                        </div>
                        <div class="left">
                            <h3><a href="#">نقدی بر آموزش لغت به روش کد گذاری Coding یا همان </a></h3>
                            <div class="date">
                                <span>On</span>
                                <span> Mar 21, 2017 9:58 AM</span>
                            </div>
                            <div class="text">
                                <p>
                                    خیلی از زبان آموزان تصور میکنند که یادگیری لغت به روش کد گزاری کردن کاری بسیار مفید است در حالی که این روش در عین حال که در ابتدای کار بسیار جذاب و شیرین هست در ادامه ی روند آموزش لغت
                                </p>
                            </div>
                            <div class="more">
                                <a href="#"> خواندن ادامه <i class="icon-left"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="single-blog">
                        <div class="right">
                            <a href="#">
                                <img src="images/blog.png" alt="">
                            </a>
                        </div>
                        <div class="left">
                            <h3><a href="#">نقدی بر آموزش لغت به روش کد گذاری Coding یا همان </a></h3>
                            <div class="date">
                                <span>On</span>
                                <span> Mar 21, 2017 9:58 AM</span>
                            </div>
                            <div class="text">
                                <p>
                                    خیلی از زبان آموزان تصور میکنند که یادگیری لغت به روش کد گزاری کردن کاری بسیار مفید است در حالی که این روش در عین حال که در ابتدای کار بسیار جذاب و شیرین هست در ادامه ی روند آموزش لغت
                                </p>
                            </div>
                            <div class="more">
                                <a href="#"> خواندن ادامه <i class="icon-left"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="single-blog">
                        <div class="right">
                            <a href="#">
                                <img src="images/blog.png" alt="">
                            </a>
                        </div>
                        <div class="left">
                            <h3><a href="#">نقدی بر آموزش لغت به روش کد گذاری Coding یا همان </a></h3>
                            <div class="date">
                                <span>On</span>
                                <span> Mar 21, 2017 9:58 AM</span>
                            </div>
                            <div class="text">
                                <p>
                                    خیلی از زبان آموزان تصور میکنند که یادگیری لغت به روش کد گزاری کردن کاری بسیار مفید است در حالی که این روش در عین حال که در ابتدای کار بسیار جذاب و شیرین هست در ادامه ی روند آموزش لغت
                                </p>
                            </div>
                            <div class="more">
                                <a href="#"> خواندن ادامه <i class="icon-left"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="single-blog">
                        <div class="right">
                            <a href="#">
                                <img src="images/blog.png" alt="">
                            </a>
                        </div>
                        <div class="left">
                            <h3><a href="#">نقدی بر آموزش لغت به روش کد گذاری Coding یا همان </a></h3>
                            <div class="date">
                                <span>On</span>
                                <span> Mar 21, 2017 9:58 AM</span>
                            </div>
                            <div class="text">
                                <p>
                                    خیلی از زبان آموزان تصور میکنند که یادگیری لغت به روش کد گزاری کردن کاری بسیار مفید است در حالی که این روش در عین حال که در ابتدای کار بسیار جذاب و شیرین هست در ادامه ی روند آموزش لغت
                                </p>
                            </div>
                            <div class="more">
                                <a href="#"> خواندن ادامه <i class="icon-left"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    @php($comm=$teacher->comments()->where('active','1')->latest()->get())

    <div class="tnav" id="teacher-comments">
        <div class="t-icon-title">
            <span class="icon"><i class="icon-commento"></i></span>
            <h3>


                (۱
                {{ $user->short(249) }}
                )
                {{ $user->short(248) }}

            </h3>
        </div>

        <div class="right-avrage">
            <div class="title">
                <h3>
                    <span>%{{$teacher->score()['per']}}</span>
                    <span> {{ $user->short(398) }}</span>
                </h3>
            </div>
            <ul>
                <li>
                    <div class="left">
                        <i class="icon-sohappy"></i>
                    </div>
                    <div class="right">
                        <div class="bar"><span style="width: {{$teacher->score()['pr5']}}%"></span></div>
                    </div>
                </li>
                <li>
                    <div class="left">
                        <i class="icon-happy"></i>
                    </div>
                    <div class="right">
                        <div class="bar"><span style="width: {{$teacher->score()['pr4']}}%"></span></div>
                    </div>
                </li>
                <li>
                    <div class="left">
                        <i class="icon-mood"></i>
                    </div>
                    <div class="right">
                        <div class="bar"><span style="width: {{$teacher->score()['pr3']}}%"></span></div>
                    </div>
                </li>
                <li>
                    <div class="left">
                        <i class="icon-sad"></i>
                    </div>
                    <div class="right">
                        <div class="bar"><span style="width: {{$teacher->score()['pr2']}}%"></span></div>
                    </div>
                </li>
            </ul>
            <div class="avr" style="text-align: center">
                <span> {{ $user->short(399) }} :</span>
                <span>از {{$comm->count()}} {{ $user->short(249) }} </span>
            </div>
            <div class="points" style="text-align: center">
                <i class="icon-star {{$teacher->score()['av']>=1?'':'gray'}}  "></i>
                <i class="icon-star {{$teacher->score()['av']>=2?'':'gray'}}  "></i>
                <i class="icon-star {{$teacher->score()['av']>=3?'':'gray'}}"></i>
                <i class="icon-star {{$teacher->score()['av']>=4?'':'gray'}}"></i>
                <i class="icon-star {{$teacher->score()['av']>=5?'':'gray'}}"></i>
                <span>{{$teacher->score()['av']}}</span>
            </div>
        </div>

        <div class="comment-list">
            <ul class="owl-carousel owl-theme">
                @foreach($comm as $com)
                @php($student=\App\Models\User::find($com->user_id))
                <li>
                    <div class="single-comment">
                        <div class="pic">
                            <i class="icon-comment"></i>
                            <img src="{{asset('/src/avatar/'.$student->attr('avatar'))}}" alt="">
                        </div>
                        <div class="name">
                            <span>{{$student->name}} </span>
                        </div>

                        <div class="text">
                            {{$com->comment}}
                        </div>
                        <div class="date">
                            <span>
                                {{$com->creatde_at}}
                            </span>
                        </div>
                        <div class="point">
                            @for($i=1; $i<6 ; $i++) <i class="icon-star {{$com->rate >= $i?'':'gray'}}"></i>
                                @endfor
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>

    <div class="teacher-cform shade">

        <div class="widget-title">
            <h3>
                {{ $user->short(399) }}
            </h3>


        </div>

        <div class="widget-content">
            <?php if($errors->any()): ?>
            <div class="e_section" id="e_section">
                <?php echo implode('', $errors->all('<span class="text text-danger">:message</span><br>')); ?>
            </div>
            <?php endif; ?>
            <form action="{{{route('home.comment.teacher',$teacher->id)}}}" method="post">
                @csrf
                @method('post')

                <div class="input-container">
                    <label for=""> {{ $user->short(4) }}</label>
                    <input type="text" hidden name="parent_id" value="0" placeholder="">
                    <input type="text" name="name" value="{{old('name')}}" placeholder="">
                </div>

                <div class="input-container">
                    <label for=""> {{ $user->short(249) }}</label>
                    <textarea name="comment" id="" cols="30" rows="10">{{old('comment')}}</textarea>
                </div>

                <div class="button-container">
                    <div class="rate">
                        <input {{old('rate')=='5'?'checked':""}} type="radio" id="star5" name="rate" value="5">
                        <label for="star5" title="text">5 stars</label>
                        <input {{old('rate')=='4'?'checked':""}} type="radio" id="star4" name="rate" value="4">
                        <label for="star4" title="text">4 stars</label>
                        <input {{old('rate')=='3'?'checked':""}} type="radio" id="star3" name="rate" value="3">
                        <label for="star3" title="text">3 stars</label>
                        <input {{old('rate')=='2'?'checked':""}} type="radio" id="star2" name="rate" value="2">
                        <label for="star2" title="text">2 stars</label>
                        <input {{old('rate')=='1'?'checked':""}} type="radio" id="star1" name="rate" value="1">
                        <label for="star1" title="text">1 star</label>
                    </div>
                    <input type="submit" value="{{ $user->short(378) }} " class="bt" style="float: left">
                </div>
            </form>
        </div>

    </div>

</div>

</div>





<div class="popupc" id="level1">
    <div>
        <div>
            <div>

                <div class="popup-container shade">
                    <span class="close close_pop">
                        <i class="icon-cancel"></i>
                    </span>

                    <div class="procecss-steps level1">
                        <ul class="posre">
                            <li class="step1">
                                <span class="left"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>{{ $user->short(253) }}</h4>
                            </li>
                            <li class="step2">
                                <span class="left"></span>
                                <span class="right"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>
                                    {{ $user->short(254) }}
                                </h4>
                            </li>
                            <li class="step3">
                                <span class="left"></span>
                                <span class="right"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>
                                    {{ $user->short(255) }}

                                </h4>
                            </li>
                            <li class="step4">
                                <span class="right"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>
                                    {{ $user->short(256) }}

                                </h4>
                            </li>
                        </ul>
                    </div>
                    @if($teacher->test_session_status!="noclass")

                    <div class="class-price">

                        <div class="lable-container">
                            <input type="radio" data-price="{{ $teacher->test_session_status=="free"?0:$teacher->test_session_price }}" name="class_type" form="reserve_f" id="freeclass" value="test">
                            <label for="freeclass">
                                <div class="right">
                                    <h4>
                                        {{ $user->short(257) }}
                                    </h4>
                                    <span> </span>
                                </div>
                                <div class="left">
                                    <div class="button-container reight gray">
                                        <span class="butt">
                                            @if($teacher->test_session_status=="free")
                                            0
                                            @else
                                            {{ $teacher->test_session_price }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </label>
                        </div>

                    </div>
                    @endif

                    <div class="class-price">

                        <div class="lable-container">
                            <input type="radio" data-price="{{ $teacher->price_1_session }}" name="class_type" form="reserve_f" id="session1" value="1">
                            <label for="session1">
                                <div class="right">
                                    <h4>
                                        1
                                        {{ $user->short(259) }}

                                    </h4>
                                    <span>1
                                        {{ $user->short(260) }}
                                    </span>
                                </div>
                                <div class="left">
                                    <div class="button-container reight gray">
                                        <span class="butt">{{ $teacher->price_1_session }}</span>
                                    </div>
                                </div>
                            </label>
                        </div>

                    </div>

                    <div class="class-price">

                        <div class="lable-container">
                            <input type="radio" data-price="{{ $teacher->price_5_session*5 }}" name="class_type" form="reserve_f" id="session5" value="5">
                            <label for="session5">
                                <div class="right">
                                    <h4>
                                        5
                                        {{ $user->short(259) }}

                                    </h4>
                                    <span>5
                                        {{ $user->short(260) }}
                                    </span>
                                </div>
                                <div class="left">
                                    <div class="button-container reight gray">
                                        <span class="butt">{{ $teacher->price_5_session }}</span>
                                    </div>
                                </div>
                            </label>
                        </div>

                    </div>

                    <div class="class-price">

                        <div class="lable-container">
                            <input type="radio" data-price="{{ $teacher->price_10_session*10 }}" name="class_type" form="reserve_f" id="session10" value="10">
                            <label for="session10" class="eco">
                                <div class="right">
                                    <h4>
                                        10
                                        {{ $user->short(259) }}

                                    </h4>
                                    <span>10
                                        {{ $user->short(260) }}
                                    </span>
                                </div>
                                <div class="left">
                                    <div class="button-container reight gray">
                                        <span class="butt">{{ $teacher->price_10_session }}</span>
                                    </div>
                                </div>
                            </label>
                        </div>

                    </div>

                    <div class="nextstep">
                        <div class="left">
                            <img src="images/person1.jpg" alt="">
                        </div>
                        <div class="right">
                            <div class="eteb">
                                <ul>
                                    <li>
                                        {{ $user->short(261) }}

                                    </li>
                                    <li class="total_payment">

                                    </li>
                                </ul>
                            </div>
                            <ul class="etmen">
                                <li>
                                    <div class="button-container reight reserve_1">
                                        <span class="butt"> {{ $user->short(262) }}</span>
                                    </div>
                                </li>
                                {{-- <li>
                                    <div class="button-container reight gray">
                                        <span class="butt">بازگشت به عقب</span>
                                    </div>
                                </li>  --}}
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


<div class="popupc" id="level2">
    <div>
        <div>
            <div>

                <div class="popup-container shade">
                    <span class="close close_popup">
                        <i class="icon-cancel"></i>
                    </span>



                    <div class="nextstep" style="padding: 56px 30px !important">
                        <div class="left">
                            <img src="http://127.0.0.1:8001/src/avatar/12_avatar_.png" alt="">
                        </div>
                        <div class="right">
                            <div class="eteb">
                                <ul>

                                    <li> {{ $user->short(263) }}


                                        :</li>
                                    <li class="ico"><i class="icon-calender"></i><span class="s_time"></span></li>

                                </ul>
                                <p>
                                    {{ $user->short(264) }}
                                </p>
                            </div>
                            <ul class="etmen">

                                <li>
                                    <div class="button-container reight gray">
                                        <span data-id="" class="butt go_level_1"> {{ $user->short(265) }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="button-container reight">
                                        <span data-id="" class="butt go_level_3"> {{ $user->short(262) }}</span>
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



<div class="popupc" id="level3" style="display: ;">
    <div>
        <div>
            <div>

                <div class="popup-container shade">
                    <span class="close close_popup">
                        <i class="icon-cancel"></i>
                    </span>

                    <div class="procecss-steps level3">
                        <ul class="posre">
                            <li class="step1">
                                <span class="left"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>{{ $user->short(253) }}</h4>
                            </li>
                            <li class="step2">
                                <span class="left"></span>
                                <span class="right"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>
                                    {{ $user->short(254) }}
                                </h4>
                            </li>
                            <li class="step3">
                                <span class="left"></span>
                                <span class="right"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>
                                    {{ $user->short(255) }}

                                </h4>
                            </li>
                            <li class="step4">
                                <span class="right"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>
                                    {{ $user->short(256) }}

                                </h4>
                            </li>
                        </ul>
                    </div>


                    <div class="check-rules">
                        <div class="right">
                            <img src="/site/images/weather_two_color.png" alt="">
                        </div>
                        <div class="left">
                            <ul>

                                <li>
                                    <p>
                                        {{ $user->short(333) }}
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        {{ $user->short(334) }}
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>





                    <div class="nextstep">
                        <div class="left">
                            <img src="http://127.0.0.1:8001/src/avatar/12_avatar_.png" alt="">
                        </div>
                        <div class="right">
                            <div class="eteb">
                                <ul>
                                    <li>
                                        {{ $user->short(332) }}
                                        :</li>
                                    <li class="ico"><i class="icon-calender"></i><span class="s_time"></span></li>
                                </ul>
                            </div>
                            <ul class="etmen">

                                <li>
                                    <div class="button-container reight gray">
                                        <span data-id="" class="butt go_level_2"> {{ $user->short(265) }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="button-container reight">
                                        <span data-id="" class="butt go_level_4"> {{ $user->short(262) }}</span>
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


<div id="level4" class="popupc" style="display: ">
    <div>
        <div>
            <div>
                <div class="popup-container shade">
                    <span class="close close_popup">
                        <i class="icon-cancel"></i>
                    </span>

                    <div class="procecss-steps level4">
                        <ul class="posre">
                            <li class="step1">
                                <span class="left"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>{{ $user->short(253) }}</h4>
                            </li>
                            <li class="step2">
                                <span class="left"></span>
                                <span class="right"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>
                                    {{ $user->short(254) }}
                                </h4>
                            </li>
                            <li class="step3">
                                <span class="left"></span>
                                <span class="right"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>
                                    {{ $user->short(255) }}

                                </h4>
                            </li>
                            <li class="step4">
                                <span class="right"></span>
                                <span class="cir"><i class="icon-tick"></i></span>
                                <h4>
                                    {{ $user->short(256) }}

                                </h4>
                            </li>
                        </ul>
                    </div>
                    <div class="waypoint">

                        <div class="right forde" id="for2">
                            <div class="profile">
                                <div class="pic">
                                    <img src="{{ $teacher->avatar() }}" alt="">
                                </div>
                                <div class="det">
                                    <h4>{{ $teacher->name }}</h4>
                                    <span>60
                                        {{ $user->short(335) }}


                                    </span>
                                </div>
                            </div>
                            <div class="payable">
                                <ul>
                                    <li class="r"> {{ $user->short(272) }} :</li>
                                    <li class="l">
                                        <span class="sum green">0</span>
                                        <span></span></li>
                                </ul>
                            </div>
                        </div>
                        <form action="{{ route("send.pay") }}" method="post" id="reserve_f">
                            @csrf
                            @method('post')
                            <input type="text" name="meet_id" id="meet_id" hidden>
                            <input type="text" name="type" value="reserve" id="reserve" hidden>
                            <div class="left">
                                <h3>
                                    {{ $user->short(267) }}

                                </h3>
                                <div class="bank">
                                    <div class="lable-container">
                                        <input type="radio" name="pay" id="ses1" value="bank">
                                        <label for="ses1">
                                            <div class="right">
                                                <div class="pic"><img src="/site/images/saman.png" alt=""></div>
                                                <h4>
                                                    {{ $user->short(268) }}
                                                </h4>
                                            </div>
                                            <div class="left">
                                                <div class="button-container reight gray">
                                                    <span class="butt">
                                                        <span class="ho">0</span>
                                                        / {{ $user->short(274) }} </span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="bank">
                                    <div class="lable-container">
                                        <input type="radio" name="pay" id="ses2" value="wallet">
                                        <label for="ses2">
                                            <div class="right">
                                                <div class="pic"><img src="/site/images/wallet.png" alt=""></div>
                                                <h4>
                                                    {{ $user->short(269) }}
                                                </h4>
                                            </div>
                                            <div class="left">
                                                <div class="button-container reight gray">
                                                    <span class="butt">
                                                        <span class="ho">0</span>
                                                        / {{ $user->short(274) }}</span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="bank-text">
                                    <ul>
                                        <li>
                                            {{ $user->short(270) }}
                                        </li>
                                        <li>
                                            {{ $user->short(271) }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <div class="right formo">
                            <div class="profile">
                                <div class="pic">
                                    <img src="{{ $teacher->avatar() }}" alt="">
                                </div>
                                <div class="det">
                                    <h4> {{ $teacher->name }}</h4>
                                </div>
                            </div>

                            <div class="payable">
                                <ul>
                                    <li class="r">
                                        {{ $user->short(272) }}
                                        :</li>
                                    <li class="l">
                                        <span class="sum green">0</span>
                                        <span></span></li>
                                </ul>
                            </div>
                            <div class="button-container reight full">
                                <span class="butt" id="send_pay_for_meet"> {{ $user->short(273) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
