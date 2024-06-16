@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>

    <div id="article-from" class="shade">

        <div class="widget-title">
            <h3>
                {{ $user->short(104) }}

            </h3>
            <div class="dot3">
                <a href="{{ route("panel.create.resume") }}" class="bt fln">    {{ $user->short(106) }}</a>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="resume-setting">
            @foreach($customer->resumes()->latest()->get() as $re)
            <div class="resume-section-edit">
                <div class="right">
                    <ul>
                        {{-- <li class="del-link" ><span>حذف<i class="icon-trash"></i></span></li>--}}
                        {{-- <li class="edit-link"><span>ویرایش<i class="icon-edit"></i></span></li>--}}


                        <li class="del-link">
                            <form id="ff_{{$re->id}}" action="{{route('panel.resume.destroy',$re->id)}}" class="delete_user_note" method="post">
                                @csrf
                                @method('DELETE')
                                <span onclick="document.getElementById('ff_{{$re->id}}').submit()">
                                    {{ $user->short(51) }}<i class="icon-trash"></i></span>
                                {{-- <span class="sane">ﺗﺎﯾﯿﺪ و ﺛﺒﺖ</span>--}}
                                {{-- <span class="cancel">لغو</span>--}}
                            </form>
                        </li>
                        <li class="edit-link">
                            <form id="dd_{{$re->id}}" action="{{route('panel.edit.resume',$re->id)}}" class="delete_user_note" method="get">
                                @csrf
                                @method('get')
                                <span onclick="document.getElementById('dd_{{$re->id}}').submit()">
{{ $user->short(52) }}

                                    <i class="icon-trash"></i></span>
                                {{-- <span class="sane">ﺗﺎﯾﯿﺪ و ﺛﺒﺖ</span>--}}
                                {{-- <span class="cancel">لغو</span>--}}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="left">
                    <h5>

                        {{__('arr.'.$re->type)}}:

                        {{$re->place}} </h5>
                    <p>{{$re->title}} : {{$re->info}} </p>
                    <span class="date">
                        <span>
                            {{$re->from}} - {{$re->till}}
                        </span>
                        <i class="icon-time-line"></i>
                    </span>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

</div>
@endsection
