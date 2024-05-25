<div class="single-teacher shade">
    <div class="rowd">
        <div class="teacher-right">
            <div>
                <div class="teacher-det">
                    <div class="det-r">
                        <div class="tlinks">
                            <a href="{{route("profile",$teacher->id)}}" class="reserv"> {{ $user->short(143) }}</a>
                        </div>
                        <div class="img fave_teacher" data-id="{{ $teacher->id }}">
                            <span class="like"><i class="icon-heart {{ in_array($teacher->id,$faves)?"red":"" }}"></i></span>
                            <img src="{{  $teacher->avatar() }}" alt="">
                        </div>
                        <ul>
                            <li class="name">
                                <span>
                                    {{ $teacher->name }}
                                </span>
                            </li>
                            <li class="ti">
                                <span>

                                    {{ $user->short(144) }}
                                </span>
                            </li>
                            <li class="rate">
                                <i class="icon-star gray"></i>
                                <i class="icon-star gray"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <span>3/5</span>
                            </li>
                        </ul>
                    </div>
                    <div class="det-l">
                        <div class="teaching-lng">
                            <span class="title">
                                {{ $user->short(145) }} :
                            </span>
                            <ul>
                                @foreach ($teacher->languages as $lan)
                                <li><img src="{{ $lan->flag() }}" alt=""><span>{{ $lan->name }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <ul>
                            <li class="classes">
                                <span class="num">46</span>
                                <span class="nam">
                                    <i class="icon-training"></i>
                                    <span>

                                        {{ $user->short(145) }}
                                    </span>
                                </span>
                            </li>
                            <li class="student">
                                <span class="num">446</span>
                                <span class="nam">
                                    <i class="icon-cap"></i>
                                    <span>
                                        {{ $user->short(146) }}
                                    </span>
                                </span>
                            </li>
                        </ul>
                        <ul>
                            <li class="price">
                                <span>
                                    {{ $user->short(147) }}
                                </span>
                            </li>
                            <li class="mprice">
                                <span class="num">{{ $teacher->price_1_session }}</span>
                                <span class="cur">$</span>
                            </li>
                            {{-- <li class="disc">
                                <span class="num">66000</span>
                                <span class="cur">تومان</span>
                            </li>  --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="teacher-left">
            <div>
                <div class="tabs">
                    <ul class="tab-nav">
                        <li class="active"><span><span> {{ $user->short(150) }} </span><i class="icon-video-on"></i></span></li>
                        <li><span><span> {{ $user->short(149) }} </span><i class="icon-about"></i></span></li>
                    </ul>
                    <ul class="tab-container">
                        <li class="active">
                            <div>

                                <video id="player" class="js-player" playsinline controls data-poster="/path/to/poster.jpg">
                                    <source src="/site/images/video.mp4" type="video/mp4" />

                                </video>

                            </div>
                        </li>
                        <li>
                            <div>
                                <p>
                                    سلام خدمت شما عزیزان، سینا هستم فوق لیسانس مهندسی صنایع و مدرس زبان انگلیسی. تحصیلات خودم رو در مالزی ادامه دادم و در شرکت های متعددی مشغول به کار شدم. چند سالیسیت که به صورت فریلنس و مشاوره ادامه فعالیت می کنم. زبان انگلیسی رو از سال های دور تدریس می کنم،
                                    <a href="#">

                                        <i class="icon-left"></i><i class="icon-left"></i></a>

                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
