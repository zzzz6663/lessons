@extends('master.site')
@section('content')
<dvi id="teacherpish">

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
                <span>
                    @if( $transaction)
                    {{ $transaction->transactionId }}
                    @endif
                </span>
            </div>
            <div class="button-container reight">
                <a href="{{ route("panel.dashboard") }}" class="butt w-320"><i class="icon-dashboard"> {{ $user->short(132) }}</i>

                </a>
            </div>
        </div>


    </div>
</dvi>
@endsection
