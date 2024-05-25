@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>
    <div class="teacher-pricing shade" id="lang">
        <div class="widget-title">
            <h3 id="res_student">           {{ $user->short(330) }}</h3>

            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="widget-content">
            @if($teachers->count())
            @foreach ($teachers as $teacher )
            @php
            $teacher=App\Models\User::find($teacher->fave_id);
            @endphp
            @include('site.single_teacher')

            @endforeach
            @else
            <div style="text-align: center">
                <a href="{{ route("teachers") }}" class="bt">
                    {{ $user->short(331) }}
                </a>
            </div>


            @endif
        </div>
    </div>
</div>
@endsection
