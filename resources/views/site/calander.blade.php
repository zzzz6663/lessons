
    <div id="teacher-clander" data-name="{{ $teacher->name }}" data-job="استاد مجرب" data-pic="{{ $teacher->avatar() }}">
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
        <div class="con">

            <ul class="owl-carousel owl-theme">
                @for ($i=0;$i<14; $i++) @php $day=Carbon\Carbon::now()->addDays($i);
                    $can=Carbon\Carbon::parse(Carbon\Carbon::createFromTime(6,30,0))->addDays($i);
                    $res=Carbon\Carbon::parse(Carbon\Carbon::createFromTime(6,30,0))->addDays($i);
                    $now=Carbon\Carbon::now();
                    @endphp
                    <li data-date="{{ $day->format('Y-m-d') }}">

                        <div class="date">
                            <span class="top"> {{ $day->isoFormat('dd') }}</span>
                            <span class="bot">{{ $day->format('d') }}</span>
                        </div>
                        {{-- open  --}}
                        {{-- reserved  --}}
                        @for ($b =0 ; $b <34 ; $b++) <div class="hour
                     {{ in_array($tt=$can->addMinutes(30)->format("Y-m-d H:i").":00",$meets_free) && $tt> $now ?"open":""}}
                     {{ in_array($res->addMinutes(30)->format("Y-m-d H:i").":00",$meets_reserved) ?"reserved":""}}
                        " data-time="{{  $can->format(" H:i")}}" data-id="{{ array_search($tt, $meets_free)}}">
                            {{-- <input type="text" class="can" data-time="" name="can[]" id="" hidden>  --}}
                            {{-- <input type="text" class="reserve" data-time="" name="reserve[]" id="" value="{{ in_array($can->format("Y-m-d H:i").":00",$all_meets) ?$can->format("Y-m-d H:i").":00":""}}" hidden> --}}
        </div>
        @endfor


        </li>
        @endfor

        </ul>
    </div>
 