@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')



<div id="teacherpish">
    <br>
    <div id="" class="shade">
        <div class="">
            <div class="d justify-content-between justify-center">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="user-info">
                        <div class="lea1">
                            {{ $userticket->title }}
                        </div>
                        <div class="lea1">
                            {{ $userticket->customer->name }}
                        </div>
                    </div>
                    <div class="user-avatar bg-purple">
                        <img src="{{ $userticket->customer->avatar() }}" alt="">
                    </div>
                </div>
            </div>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="">
            <div class="simplebar-content-wrapper">
                <div class="simplebar-content">
                    @foreach ($answers as $answer)
                    @if($answer->customer_id)
                    <div class="chat d-flex is-you">
                        <div class="chat-avatar">
                            <div class="user-avatar bg-purple">
                                <img src="{{ $userticket->customer->avatar() }}" alt="">
                            </div>
                        </div>
                        <div class="chat-content">
                            <div class="chat-bubbles">
                                <div class="chat-bubble">
                                    <div class="chat-msg">
                                        {{ ($answer->answer) }}
                                    </div>
                                    @if($answer->attach())
                                    <a class="no_link" href="{{ route("download",['path'=>$answer->attach()]) }}">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    @endif
                                </div>

                            </div>
                            <ul class="chat-meta">
                                <li>
                                    {{ $userticket->customer->name }}
                                    {{ $userticket->customer->family }}
                                </li>
                                <li>
                                    {{ ($answer->created_at) }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .chat -->
                    @else
                    <div class="chat is-me">
                        <div class="chat-avatar">
                            <div class="user-avatar bg-purple">
                                admin
                                {{-- <img src="{{ $userticket->customer->avatar() }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="chat-content">
                            <div class="chat-bubbles">
                                <div class="chat-bubble">
                                    <div class="chat-msg">
                                        {{ ($answer->answer) }}
                                    </div>
                                    @if($answer->attach())
                                    <a class="no_link" href="{{ route("download",['path'=>$answer->attach()]) }}">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    @endif
                                </div>

                            </div>
                            <ul class="chat-meta">
                                <li>
                                    {{ $userticket->customer->name }}
                                    {{ $userticket->customer->family }}
                                </li>
                                <li>
                                    {{ ($answer->created_at) }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="" class="shade">
        <div class="widget-content">
            @if($userticket->status!="close")

            <div class="nk-chat-editor">

                <form class="nk-chat-editor" style="width: 100%" action="{{ route("advertiser.new.answer",$userticket->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="">
                        <div class="nk-chat-editor-form d-flex align-items-center" >
                            <div class="form-control-wrap w-90  pos_re">
                                <textarea class="form-control  lg50 form-control-simple no-resize" rows="1" id="default-textarea" placeholder="پیام خود را تایپ کنید..." name="answer">{{ old("answer") }}</textarea>
                                <div>
                                    <label class=" btn-sm btn-atta btn-icon btn-trigger text-primary" for="file_select"><i class="fas fa-paperclip"></i>
                                        <span class="file_name"></span>
                                    </label>
                                    <input type="file" id="file_select" name="attach" hidden>
                                </div>
                            </div>
                            <div>
                                <button class=" btn-round btn-primary sden_e">
                                    send
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            @else
            <p class="alert alert-warning">
                {{ $user->short(394) }}
                @role('customer')

                <div class="button-container reight full">
                <a href="{{ route("userticket.create") }}" class="butt">
                    {{ $user->short(386) }}
                </a>
            </div>

                @endrole
            </p>
            @endif
        </div>
    </div>
</div>








@endsection
