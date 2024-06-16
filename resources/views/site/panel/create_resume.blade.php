@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>

    <div id="article-from" class="shade">

        <div class="widget-title">
            <h3>
                {{ $user->short(94) }}

            </h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="addresume">

            <div class="row">


                <div class="col-lg-6 col-md-12">
                    <div>
                        <img src="/site/images/mind_map_two_color.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div>
                        <form action="{{ route("panel.create.resume") }}" method="post">
                            @csrf
                            @method('post')
                            <div class="label">
                                <span> {{ $user->short(95) }}</span>
                            </div>

                            <div class="check-buttonlist">
                                <ul>
                                    <li>

                                        <div class="lable-container">
                                            <input type="radio" name="type" {{ old("type")=="education"?"checked":"" }} id="education" value="education">
                                            <label for="education">
                                                <div class="right">
                                                    <span> {{ $user->short(96) }}</span>
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
                                            <input type="radio" name="type" {{ old("type")=="sabeghe"?"checked":"" }} id="sabeghe" value="sabeghe">
                                            <label for="sabeghe">
                                                <div class="right">
                                                    <span>{{ $user->short(97) }}</span>
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
                                            <input type="radio" name="type" {{ old("type")=="licence"?"checked":"" }} id="licence" value="licence">
                                            <label for="licence">
                                                <div class="right">
                                                    <span>{{ $user->short(98) }}</span>
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

                            <div class="input-container fill">
                                <label for="">{{ $user->short(99) }}</label>
                                <input type="text" name="title" value="{{ old("title") }}" placeholder="‏">
                            </div>

                            <div class="input-container fill">
                                <label for="">

                                    {{ $user->short(100) }}
                                </label>
                                <input type="text" name="info" value="{{ old("info") }}" placeholder="‏">
                            </div>

                            <div class="input-container fill">
                                <label for="">

                                    {{ $user->short(101) }}
                                </label>
                                <input type="text" name="place" value="{{ old("place") }}" placeholder="‏">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="input-container fill">
                                            <label for="from">

                                                {{ $user->short(102) }}
                                                :</label>
                                            <select name="from" id="from">
                                                <option value="">
                                                    {{ $user->short(24) }}
                                                </option>
                                                @for($i=1950;$i<2024;$i++) <option {{(old('from')==$i)?'selected':''}} value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="input-container fill">
                                            <label for="till">
                                                {{ $user->short(103) }}
                                                :</label>
                                            <select name="till" id="till">
                                                <option value=""> {{ $user->short(24) }}</option>
                                                @for($b=1950;$b<2024;$b++) <option {{(old('till')==$b)?'selected':''}} value="{{$b}}">{{$b}}</option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="button-container reight">
                                <input type="submit" class="bt" value="        {{ $user->short(23) }}">
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>


    </div>
</div>

</div>
@endsection
