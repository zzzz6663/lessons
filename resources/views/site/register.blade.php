@extends('master.site')
@section('content')
<div id="mo">
    <div class="popup-container mini shade">
      <form action="{{ route("register") }}"  method="post">
        @method('post')
        @csrf
        <div class="register-form">
        @include('master.error')

            {{--  <ul class="nav center">
                <li><span>ورود</span></li>
                <li class="active"><span>ثبت نام</span></li>
            </ul>  --}}

            <div class="input-container fill">
                <label for="">
                    {{ $user->short(4) }}
                </label>
                <input type="text" name="name" value="{{ old("name") }}">
            </div>


            <div class="input-container fill">
                <label for="">
                    {{ $user->short(5) }}
                </label>
                <input type="text" name="email" value="{{ old("email") }}" >
            </div>


            <div class="input-container fill">
                <label for="">
                    {{ $user->short(6) }}
                </label>
                <i class="fas fa-eye show_p" style="right: 40px"></i>
               <i class="fas fa-question-circle tooltip" title="  {{ $user->short(402) }}"></i>
                <input type="password" name="password" value="{{ old("password") }}">
            </div>


            {{--  <div class="input-container fill">
                <label for="">
                    {{ $user->short(7) }}
                </label>
                <input type="text" name="password_confirmation" value="{{ old("password_confirmation") }}" >
            </div>  --}}

            <div class="profile-setting">

            <div class="sex">
                <div class="label">   {{ $user->short(338) }}</div>
                <ul>
                    <li>
                        <div class="lable-container">
                            <input type="radio" name="role" {{ old("role")=="student"?"checked":"" }} id="male" value="student">
                            <label for="male">
                                <div>
                                    <span>
                                        {{ $user->short(336) }}
                                    </span>
                                </div>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="lable-container">
                            <input type="radio" name="role" {{ old("role")=="teacher"?"checked":"" }} id="female" value="teacher">
                            <label for="female">
                                <div>
                                    <span>    {{ $user->short(337) }}</span>
                                </div>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

            {{--  <div class="input-container ok fill">
                <label for="">ایمیل</label>
                <i class="icon-mail"></i>
                <input type="text" placeholder="erfanamade@gmail.com">
            </div>  --}}

            {{--  <div class="input-container fill">
                <label for="">شماره همراه</label>
                <i class="icon-phone"></i>
                <input type="text" placeholder="کلمه عبور شما">
            </div>  --}}

            <div class="button-container reight">
                <button class="butt">
                    {{ $user->short(8) }}
                </button>
            </div>

        </div>
    </form>


    </div>
</div>

@endsection
