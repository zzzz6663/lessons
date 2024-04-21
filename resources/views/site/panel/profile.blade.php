@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">

    {{-- <div id="toppish">
        <div class="right">

            <div class="bread">
                <ul>
                    <li><a href="#">تیچرپرو</a></li>
                    <li><span><i class="icon-left"></i></span></li>
                    <li><a href="#">پنل کاربر</a></li>
                    <li><span><i class="icon-left"></i></span></li>
                    <li><span>ویرایش پروفایل</span></li>
                </ul>
            </div>

        </div>
        <div class="left">

            <ul class="icon-menue">

                <li><a href="#"><i class="icon-plus"></i></a></li>
                <li><a href="#"><i class="icon-smile"></i></a></li>
                <li><a href="#"><i class="icon-bell"></i><span class="num">3</span></a></li>
                <li class="exit"><a href="#"><i class="icon-exit"></i><span>خروج</span></a></li>
            </ul>
        </div>
    </div>  --}}

    {{-- <div class="welcome">
        <span class="name">سلام صبا ،</span>
        <span>خوش آمدید؛ امروز جمعه - ۲۳ خرداد ۱۳۹۹ </span>
    </div>  --}}
    <br>
    <br>

    <div class="profile-settings shade">
        <div class="dot3">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="tab-nav">
            <li class="{{ old("pass")?"":"active" }} "><span>
                    {{ $user->short(15) }}

                </span></li>
            <li class="{{ old("pass")?"active":"" }}"><span>

                    {{ $user->short(6) }}
                </span></li>
        </ul>



        <ul class="tab-container">
            <li class="{{ old("pass")?"":"active" }}">

                <div class="profile-setting">
                    <div class="cover">
                        <img src="/site/images/cover.png" alt="">
                        <form action="">
                            <div class="lable-container">
                                <input id="cover-file" type="file">
                                <label for="cover-file">
                                    <i class="icon-info"></i>
                                    <span>

                                        {{ $user->Short(16) }}
                                    </span>
                                </label>
                            </div>
                        </form>

                    </div>

                    <div class="profile-pic">
                        <img src="/site/images/person4.jpg" alt="">

                        <form action="">
                            <div class="lable-container">
                                <input id="profile-file" type="file">
                                <label for="profile-file">
                                    <i class="icon-info"></i>
                                </label>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-10 col-sm-12 center-block">
                            <div>
                                <div class="profile-form">


                                    <form action="{{ route("panel.profile") }}"  method="post">
                                        @csrf
                                        @method('post')
                                        @include('master.error')

                                        <div class="input-container fill">
                                            <label for="">
                                                {{ $user->Short(4) }}
                                            </label>
                                            <i class="icon-user"></i>
                                            <input type="text" name="name" value="{{ old("name",$customer->name) }}" placeholder="Emilio C. Alvarez">
                                        </div>


                                        {{--  <div class="input-container fill">
                                            <label for="">
                                                {{ $user->Short(5) }}
                                            </label>
                                            <i class="icon-user"></i>
                                            <input type="text" name="name" value="{{ old("name") }}" placeholder="Emilio@info.com">
                                        </div>  --}}




                                        <div class="sex">
                                            <div class="label"> {{ $user->Short(17) }}</div>
                                            <ul>
                                                <li>
                                                    <div class="lable-container">
                                                        <input {{ old("gender",$customer->gender)=="male"?"checked":"" }} type="radio" name="gender" id="male" value="male">
                                                        <label for="male">
                                                            <div>
                                                                <span> {{ $user->Short(18) }}</span>
                                                                <i class="icon-male"></i>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lable-container">
                                                        <input {{ old("gender",$customer->gender)=="female"?"checked":"" }} type="radio" name="gender" id="female" value="female">
                                                        <label for="female">
                                                            <div>
                                                                <span> {{ $user->Short(19) }}</span>
                                                                <i class="icon-female"></i>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="input-container fill">
                                            <label for="">{{ $user->Short(20) }}</label>
                                            <select name="country_id"  id="" class="select_2">
                                                <option value="">{{ $user->Short(24) }}</option>
                                                @foreach (App\Models\Country::all() as $country)
                                                <option  {{ old("country_id",$customer->country_id)==$country->id?"selected":"" }}  value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="add-language">
                                            <div class="label">
                                                {{ $user->Short(21) }}

                                            </div>
                                            <select name="languages[]" multiple id="" class="select_2">
                                                @foreach (App\Models\Language::all() as $lang)
                                                <option {{in_array( $lang->id,$customer->languages->pluck("id")->toArray())? "selected":"" }} value="{{ $lang->id }}">{{ $lang->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <span class="add"><i class="icon-plus"></i>    {{ $user->Short(22) }}</span> --}}
                                        </div>

                                        <div class="button-container reight full">
                                            <button class="butt">

                                                {{ $user->Short(23) }}
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </li>
            <li class="{{ old("pass")?"active":"" }}">



                <div class="account-setting">




                    <div class="row">


                        <div class="col-lg-6 col-md-12">
                            <div>
                                <img src="/site/images/authentication.png" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div>

                                <form action="{{ route("panel.profile") }}" method="post">
                                    @csrf
                                    @method('post')
                                    @include('master.error')

                                    {{--  <div class="input-container fill">
                                        <label for="">کلمه عبور فعلی</label>
                                        <i class="icon-key"></i>
                                        <input type="text" placeholder="‏">
                                    </div>  --}}

                                    <div class="input-container fill">
                                        <label for="">
                                            {{ $user->short(26) }}
                                        </label>
                                        <i class="icon-lock"></i>
                                        <input type="text" name="password" placeholder="‏">
                                    </div>

                                    <div class="input-container fill">
                                        <label for="">
                                            {{ $user->short(7) }}
                                        </label>
                                        <i class="icon-lock"></i>
                                        <input type="text"  name="password_confirmation"  placeholder="‏">
                                    </div>

                                    <div class="button-container reight">
                                        <button name="pass" value="1" class="butt">{{ $user->Short(23) }}</button>
                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>

            </li>
        </ul>

    </div>

</div>
@endsection
