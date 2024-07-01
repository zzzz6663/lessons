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
                <br>
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
