@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>

    <div class="article-settings shade">
        <div class="widget-title">
            <h3>
                {{ $user->short(46) }}
            </h3>

            <div class="button-container ">
                <a href="{{ route("panel.create.write") }}" class="butt">
                    {{ $user->short(47) }}
                </a>
            </div>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="widget-content">


            <ul class="tab-nav">
                <li class="active"><span>
                        {{ $user->short(48) }}
                    </span></li>
                <li class=""><span>
                        {{ $user->short(49) }}
                    </span></li>
                <li class=""><span>
                        {{ $user->short(50) }}

                    </span></li>
            </ul>



            <ul class="tab-container">
                <li class="active">

                    <div class="article-lits">
                        @foreach ($customer->posts()->wherePublish(1)->latest()->get() as $post )
                        @include('site.panel.single_post_panel')
                        @endforeach
                    </div>


                </li>
                <li class="">

                    <div class="article-lits">

                        @foreach ($customer->posts()->wherePublish(null)->latest()->get() as $post )
                        @include('site.panel.single_post_panel')
                        @endforeach
                    </div>


                </li>
                <li class="">

                    <div class="com-lits">


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


                </li>

            </ul>

        </div>

    </div>
</div>
@endsection
