@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>
    <div class="teacher-pricing shade">

        <div class="widget-title">
            <h3>
                {{ $user->short(108) }}
            </h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="widget-content">

            <div class="row">

                <div class="col-lg-6 col-md-12">
                    <div>

                        @include('master.error')
                        <form action="{{ route("panel.prices") }}" method="post" >
                            @csrf
                            @method('post')
                            <div class="input-container fill">
                                <label for="">     {{ $user->short(109) }}</label>
                                <input type="number" name="price_1_session" value="{{ old("price_1_session",$customer->price_1_session) }}" placeholder="‏">
                            </div>
                            <div class="input-container fill">
                                <label for="">     {{ $user->short(110) }}</label>
                                <input type="number" name="price_5_session" value="{{ old("price_5_session",$customer->price_5_session) }}" placeholder="‏">
                            </div>

                            <div class="input-container fill">
                                <label for="">     {{ $user->short(111) }}</label>
                                <input type="number" name="price_10_session" value="{{ old("price_10_session",$customer->price_10_session) }}" placeholder="‏">
                            </div>
                            <div class="button-container reight">
                                <input type="submit" value="{{ $user->short(23) }}" class="bt">
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div>
                        <img src="/site/images/finance_analysis_.png" alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="teacher-pricing-free shade">

        <div class="widget-title">
            <h3>{{ $user->short(112) }}</h3>

            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="widget-content">

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <p class="light-text">

                            {{ $user->short(113) }}</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-12">
                    <div>
                        <img src="/site/images/maskroup.png" alt="">
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div>

@include('master.error')






                        <form action="{{route("panel.prices")}}" method="post">
                            @csrf
                            @method('post')

                            <div class="check-buttonlist">
                                <ul>
                                    <li>
                                        <div class="lable-container">
                                            <input type="radio" name="test_session_status" {{(old('test_session_status') == 'free'  || $customer->test_session_status=='free') ? 'checked' : ''}} id="free" value="free">
                                            <label for="free">
                                                <div class="right">
                                                    <span>{{ $user->short(116) }} <span class="l"></span></span>
                                                </div>
                                                <div class="left">
                                                    <div class="circle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lable-container">
                                            <input type="radio" name="test_session_status" {{(old('test_session_status') == 'nofree'  || $customer->test_session_status=='nofree') ? 'checked' : ''}} id="nofree" value="nofree">
                                            <label for="nofree">
                                                <div class="right">
                                                    <span>{{ $user->short(115) }}</span>
                                                </div>
                                                <div class="left">
                                                    <div class="circle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lable-container">
                                            <input type="radio" name="test_session_status" {{(old('test_session_status') == 'noclass'  || $customer->test_session_status=='noclass') ? 'checked' : ''}} id="noclass" value="noclass">
                                            <label for="noclass">
                                                <div class="right">
                                                    <span>{{ $user->short(114) }}</span>
                                                </div>
                                                <div class="left">
                                                    <div class="circle">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="input-container clas_sec fill" {{(old('test_session_status') == 'nofree' || $customer->test_session_status=='nofree') ? '' : 'hidden'}}>
                                <div class="input-container fill">
                                    <label for="">
                                        {{ $user->short(117) }}
                                        {{--  <span style="float: left; color: #00a65a" class="green tx"></span>  --}}
                                    </label>
                                    <input type="number" name="test_session_price" value="{{old('test_session_price',$customer->test_session_price)}}" placeholder="‏">
                                </div>
                            </div>
                            <div class="button-container reight">
                                <input type="submit" name="more" value="{{ $user->short(23) }}" class="bt">
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div id="faqs">
        <h2>چه قیمتی را برای کلاس هایم تعیین کنم؟</h2>

        <p class="subtitle">کلاسهای آنلاین ارزانتر از کلاس های حضوری :</p>

        <div class="fasqs" id="teacher-faq">

            <div class="faq active">
                <div class="question">
                    <a class="bl">
                        <span class="title"> کلاسهای آنلاین ارزانتر از کلاس های حضوری </span>
                        <div class="icon">
                            <div class="normal">
                                <i aria-hidden="true" class="icon2-open icon2-angle-down"></i>
                            </div>
                            <div class="active">
                                <i aria-hidden="true" class="icon2-closed icon2-angle-down"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="answer" style="display: block;">
                    <div class="">
                        <p>
                            باتوجه به تکنولوژی های پیشرفته تیچرپرو، هر کلاس یک ساعته که استاد و زبان آموز هر دو به صورت صوتی-تصویری کلاس خود را برگزار کنند، تنها حدودا 200 مگابایت دیتا مصرف خواهد شد( همچون یک تماس معمولی در واتساپ یا ایمو).
                        </p>
                    </div>
                </div>
            </div>


            <div class="faq  ">
                <div class="question">
                    <a class="bl">
                        <span class="title"> کلاسهای آنلاین ارزانتر از کلاس های حضوری </span>
                        <div class="icon">
                            <div class="normal">
                                <i aria-hidden="true" class="icon2-open icon2-angle-down"></i>
                            </div>
                            <div class="active">
                                <i aria-hidden="true" class="icon2-closed icon2-angle-down"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="answer">
                    <div class="">
                        <p>
                            باتوجه به تکنولوژی های پیشرفته تیچرپرو، هر کلاس یک ساعته که استاد و زبان آموز هر دو به صورت صوتی-تصویری کلاس خود را برگزار کنند، تنها حدودا 200 مگابایت دیتا مصرف خواهد شد( همچون یک تماس معمولی در واتساپ یا ایمو).
                        </p>
                    </div>
                </div>
            </div>


            <div class="faq  ">
                <div class="question">
                    <a class="bl">
                        <span class="title"> کلاسهای آنلاین ارزانتر از کلاس های حضوری </span>
                        <div class="icon">
                            <div class="normal">
                                <i aria-hidden="true" class="icon2-open icon2-angle-down"></i>
                            </div>
                            <div class="active">
                                <i aria-hidden="true" class="icon2-closed icon2-angle-down"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="answer">
                    <div class="">
                        <p>
                            باتوجه به تکنولوژی های پیشرفته تیچرپرو، هر کلاس یک ساعته که استاد و زبان آموز هر دو به صورت صوتی-تصویری کلاس خود را برگزار کنند، تنها حدودا 200 مگابایت دیتا مصرف خواهد شد( همچون یک تماس معمولی در واتساپ یا ایمو).
                        </p>
                    </div>
                </div>
            </div>
            <div class="faq c">
                <div class="question">
                    <a class="bl">
                        <span class="title"> کلاسهای آنلاین ارزانتر از کلاس های حضوری </span>
                        <div class="icon">
                            <div class="normal">
                                <i aria-hidden="true" class="icon2-open icon2-angle-down"></i>
                            </div>
                            <div class="active">
                                <i aria-hidden="true" class="icon2-closed icon2-angle-down"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="answer">
                    <div class="">
                        <p>
                            باتوجه به تکنولوژی های پیشرفته تیچرپرو، هر کلاس یک ساعته که استاد و زبان آموز هر دو به صورت صوتی-تصویری کلاس خود را برگزار کنند، تنها حدودا 200 مگابایت دیتا مصرف خواهد شد( همچون یک تماس معمولی در واتساپ یا ایمو).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>

</div>
@endsection
