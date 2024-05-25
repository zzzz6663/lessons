@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <div class="video-setting">

        <div class="upload-section">



            <form id="port_form" action="{{ route("panel.intro.video") }}" method="post" enctype="multipart/form-data">
         @csrf
         @method('post')
                <div class="row">
                    <div class="col-lg-7 col-md-10 col-sm-12 center-block">
                        <div>
                            <p style="color: red">
                                {{ $user->short(316) }}
                            </p>
                            <div class="featured-pic">
                                <h4> {{ $user->short(317) }}</h4>
                                <div id="fileuploader" class="fl">
                                    <label for="featured-pic">
                                        {{ $user->short(318) }}
                                        <span>
                                            {{ $user->short(319) }}
                                        </span>
                                    </label>
                                    <input type="file" id="featured-pic" accept="image/*" name="port_img">


                                </div>
                            </div>
                            <br>
                            <br>
                            <br>

                            <div class="featured-video">
                                <h4>

                                    {{ $user->short(321) }}
                                    <span>
                                        {{ $user->short(320) }}

                                    </span></h4>
                                <div id="fileuploader2" class="draggable fl">
                                    <div class="vup">




                                        <label for="featured-video">

                                            {{ $user->short(322) }}

                                            <span> {{ $user->short(319) }} </span>
                                        </label>
                                        <input type="file" accept="video/mp4" id="featured-video" name="port_vid">


                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="video-op">
                                <ul>
                                    <li>
                                        {{ $user->short(324) }}
                                    </li>
                                    <li>MP4
                                        {{ $user->short(323) }}
                                    </li>
                                </ul>
                            </div>
                            <div class="button-container reight full">
                                <span onclick="document.getElementById('port_form').submit()" class="butt fln"> {{ $user->short(23) }} </span>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div>

                        <div class="instruction">
                            <h3>
                                {{ $user->short(325) }}
                            </h3>

                            <div class="about-text">
                                <div>
                                    <p> {{ $user->short(326) }}

                                    </p>
                                    <p> {{ $user->short(327) }}

                                    </p>
                                </div>
                            </div>

                            <div class="about-more ">
                                <div>

                                    <span> {{ $user->short(159) }}</span>
                                    <span class="down">
                                        <i class="icon-down"></i>
                                        <i class="icon-down"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="more-video">
                            <h3>
                                {{ $user->short(328) }}
                            </h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <video controls>
                                            <source src="{{ asset("site/video/test.mp4") }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                                @if($customer->port_img())

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <h5>
                                            {{ $user->short(329) }}
                                        </h5>
                                        <video controls poster="{{ $customer->port_img() }}">
                                            <source src="{{ $customer->port_vid()  }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                                @endif

                                <div class="col-lg-4 col-md-12">
                                    <div>
                                        <video controls>
                                            <source src="{{ asset("site/video/test.mp4") }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="cover">


        </div>
    </div>
</div>

</div>
@endsection
