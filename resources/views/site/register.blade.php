@extends('master.site')
@section('content')
<div class="popup-container mini shade">
    <span class="close">
        <i class="icon-cancel"></i>
    </span>

    <div class="register-form">
        <ul class="nav center">
            <li><span>ورود</span></li>
            <li class="active"><span>ثبت نام</span></li>
        </ul>

        <div class="input-container fill">
            <label for="">نام و نام خانوادگی</label>
            <i class="icon-user"></i>
            <input type="text" placeholder="Erfan Amade">
        </div>

        <div class="input-container ok fill">
            <label for="">ایمیل</label>
            <i class="icon-mail"></i>
            <input type="text" placeholder="erfanamade@gmail.com">
        </div>

        <div class="input-container fill">
            <label for="">شماره همراه</label>
            <i class="icon-phone"></i>
            <input type="text" placeholder="کلمه عبور شما">
        </div>

        <div class="input-container fill">
            <label for="">رمز عبور</label>
            <i class="icon-lock"></i>
            <input type="text" placeholder="کلمه عبور شما">
        </div>

        <div class="button-container reight">
            <span class="butt">ثبت نام</span>
        </div>

    </div>


</div>
@endsection
