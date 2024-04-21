@extends('master.site')
@section('content')
<div id="mo">
    <div class="popup-container mini shade">
        <form action="{{ route("login.user") }}" method="post">
            @method('post')
            @csrf
            @include('master.error')
            {{--  <span class="close">
                <i class="icon-cancel"></i>
            </span>  --}}

            <div class="register-form">


                <div class="input-container fill">
                    <label for="">
                        {{ $user->short(5) }}
                    </label>
                    <i class="icon-user"></i>
                    <input type="text" name="email" value="{{ old("email") }}" placeholder="email@info.com">
                </div>


                <div class="input-container fill">
                    <label for="">
                        {{ $user->short(6) }}
                    </label>
                    <i class="icon-user"></i>
                    <input type="text" name="password" value="{{ old("password") }}" placeholder="12345">
                </div>

                <div class="button-container reight">
                    <button class="butt">
                        {{ $user->short(12) }}
                    </button>
                    {{--  <a href="#">رمز عبور خود را فراموش کرده‌اید؟</a>  --}}
                </div>

            </div>
        </form>


    </div>

</div>
</div>

@endsection
