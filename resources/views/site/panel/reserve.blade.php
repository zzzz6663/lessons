@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>
    <br>
    <div id="lang" class="teacher-pricing shade" style="padding:0">

        <div class="widget-title">
            <h3 id="res_student" data-user="1" data-count="11"> {{ $user->short(344) }} </h3>

            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="widget-content">
            @include('site.calander')
        </div>

        <div id="nextstep" class="nextstep" style="display: none">
            <div class="left" id="nextstep2">
                <img src="{{ $teacher->avatar() }}" alt="">
            </div>
            <div class="right">
                <div class="eteb">
                    <ul>
                        <li>{{ $user->short(323) }} :</li>
                        <li class="ico"><i class="icon-calender "></i><span id="ttime"> </span></li>
                        {{--  <li class="ico"><i class="icon-time-line"></i><span id="time_e"> </span></li>  --}}
                    </ul>
                </div>
                <ul class="etmen">
                    <li>
                        <div id="s_reserve" class="button-container reight">
                            <form action="{{ route("panel.reserve",$select->id) }}" method="post">
                                @csrf
                                @method('post')
                                <input type="text" name="meet_id" id="meet__id" hidden>
                                <span class="butt submit_f"> {{ $user->short(23) }} </span>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
