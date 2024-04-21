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
                <i class="icon-user"></i>
                <input type="text" name="name" value="{{ old("name") }}" placeholder="Emilio C. Alvarez">
            </div>


            <div class="input-container fill">
                <label for="">
                    {{ $user->short(5) }}
                </label>
                <i class="icon-user"></i>
                <input type="text" name="email" value="{{ old("email") }}" placeholder="Emilio@info.com">
            </div>


            <div class="input-container fill">
                <label for="">
                    {{ $user->short(6) }}
                </label>
                <i class="icon-user"></i>
                <input type="text" name="password" value="{{ old("password") }}" placeholder="Emilio@info.com">
            </div>


            <div class="input-container fill">
                <label for="">
                    {{ $user->short(7) }}
                </label>
                <i class="icon-user"></i>
                <input type="text" name="password_confirmation" value="{{ old("password_confirmation") }}" placeholder="Emilio@info.com">
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
