@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>

    <div id="time-pannel" class="shade">

        <div class="widget-title">
            <h3> {{ $user->short(67) }}

            </h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="widget-content">

            <div class="calendar-guide">
                <h4>
                    {{ $user->short(69) }}
                </h4>
                <div class="gray-box">
                    <img src="/site/images/calendar_two_color.png" alt="">

                    <ul>
                        <li>{{ $user->short(69) }}</li>
                        <li>{{ $user->short(70) }}</li>
                        <li>{{ $user->short(71) }}</li>
                        <li>{{ $user->short(72) }}</li>
                        <li>{{ $user->short(73) }}</li>
                        <li>{{ $user->short(74) }}</li>
                        <li>{{ $user->short(75) }}</li>
                    </ul>

                </div>
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
                                    <span class="titl">
                                        {{ $user->short(78) }}
                                    </span>
                                    <span class="color gray"></span>
                                </li>
                                <li>
                                    <span class="titl">
                                        {{ $user->short(79) }}
                                    </span>
                                    <span class="color wgray"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div>
                            <div class="time-zone">
                                <i class="icon-timezone"></i>
                                <span>
                                    {{ $user->short(80) }}
                                    :</span>
                                <span>Asia/Tehran</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('master.error')
            <form id="plan" action="{{ route("panel.plan") }}" method="post">
                @csrf
                @method('post')

                <div id="teacher-clander" data-name="عرفان آماده" data-job="استاد مجرب" data-pic="/site/images/teacher.jpg">
                    <div class="right">
                        <div class="hours">
                            <ul>
                                <li>
                                    <span>AM</span>
                                    <span>07:00</span>
                                </li>
                                <li>
                                    <span>AM</span>
                                    <span>08:00</span>
                                </li>
                                <li>
                                    <span>AM</span>
                                    <span>09:00</span>
                                </li>
                                <li>
                                    <span>AM</span>
                                    <span>10:00</span>
                                </li>
                                <li>
                                    <span>AM</span>
                                    <span>11:00</span>
                                </li>
                                <li>
                                    <span>AM</span>
                                    <span>12:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>13:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>14:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>15:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>16:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>17:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>18:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>19:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>20:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>21:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>22:00</span>
                                </li>
                                <li>
                                    <span>PM</span>
                                    <span>23:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cond">

                        <ul class="">
                            @for ($i =0 ; $i <7 ; $i++) @php $day=Carbon\Carbon::now()->addDays($i);
                                $can=Carbon\Carbon::parse(Carbon\Carbon::createFromTime(6,30,0))->addDays($i);
                                $res=Carbon\Carbon::parse(Carbon\Carbon::createFromTime(6,30,0))->addDays($i);
                                @endphp
                                <li data-date="شنبه - 14 تیر">
                                    <div class="date">
                                        <span class="top"></span>
                                        <span class="bot">
                                            {{ $day->isoFormat('dd') }}
                                        </span>
                                    </div>
                                    {{--  @dump($all_meets)
                                    @dump($can->copy()->addMinutes(30)->format("Y-m-d H:i").":00")  --}}
                                    @for ($b =0 ; $b <34 ; $b++)
                                    <div class="hour {{ in_array($can->addMinutes(30)->format("Y-m-d H:i").":00",$all_meets) ?"open":""}}" data-time="{{  $can->format("Y-m-d H:i")}}:00">
                                        <input type="text" class="can" data-time="" name="can[]" id="" hidden>
                                        <input type="text" class="reserve" data-time="" name="reserve[]" id="" value="{{ in_array($can->format("Y-m-d H:i").":00",$all_meets) ?$can->format("Y-m-d H:i").":00":""}}" hidden>
                                    </div>
                                        @endfor
                                </li>
                                @endfor

                        </ul>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled">
                            {{ $user->short(82) }}

                            <i class="icon-rarrow"></i></button><button type="button" role="presentation" class="owl-next">
                                {{ $user->short(81) }}
                                <i class="icon-larrow"></i></button></div>
                    </div>

                </div>
            </form>

        </div>
        <div class="button-container reight ">
            <button class="butt w-320" form="plan">       {{ $user->short(23) }}</button>
        </div>

    </div>


</div>

</div>
@endsection
