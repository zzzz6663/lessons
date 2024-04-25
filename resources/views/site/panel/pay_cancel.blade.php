@extends('master.site')
@section('content')
<dvi id="teacherpish">
    <div class=" pay_s shade">
        <span class="close">
            <i class="icon-cancel"></i>
        </span>
        <div class="paypop red">
            <div class="icon">
                <img src="/site/images/unhapypay.svg" alt="" class="t">
                <img src="/site/images/unhapypaybg.svg" alt="" class="b">
            </div>
            <div class="title">
                <h3>
                    <img src="/site/images/card2.svg" alt="">
                    <span>
                        {{ $user->short(135) }}

                    </span>
                </h3>
            </div>
            <div class="text">
                <!-- <span> پرداخت شما ناموفق بوده است  !</span> -->
                <span>

                </span>
            </div>
            <div class="button-container reight">
                <a class="butt w-320" style="color:#fff"> {{ $user->short(132) }}

                    <i  style="color:#fff" class="icon-dashboard"></i>
                </a>
            </div>
            <div class="call">
                <a href="#"><i class="icon-support"></i><span>    {{ $user->short(136) }}</span></a>
            </div>
        </div>
    </div>

    <div class="popup- shade">

        <div class="paypop pay_s green">
            <div class="icon">
                <img src="/site/images/hapypay.svg" alt="" class="t">
                <img src="/site/images/hapypaybg.svg" alt="" class="b">
            </div>
            <div class="title">
                <h3>
                    <span>
                        {{ $user->short(134) }}
                    </span>
                    <img src="/site/images/card.svg" alt="">

                </h3>
            </div>
            <div class="text">
                <span>{{ $user->short(133) }} : </span>
                <span>544855542</span>
            </div>
            <div class="button-container reight">
                <a href="{{ route("panel.dashboard") }}" class="butt w-320"><i class="icon-dashboard"> {{ $user->short(132) }}</i>

                </a>
            </div>
        </div>


    </div>
</dvi>
@endsection
