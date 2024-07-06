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
                                <span class="rate">
                                    <i class="icon-star {{$teacher->score()['av']>=1?'':'gray'}}  "></i>
                                    <i class="icon-star {{$teacher->score()['av']>=2?'':'gray'}}  "></i>
                                    <i class="icon-star {{$teacher->score()['av']>=3?'':'gray'}}"></i>
                                    <i class="icon-star {{$teacher->score()['av']>=4?'':'gray'}}"></i>
                                    <i class="icon-star {{$teacher->score()['av']>=5?'':'gray'}}"></i>
                                </span>
                                {{--  <span>3/5</span>  --}}
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
                                <li><img class="fla" src="{{ $lan->flag() }}" alt=""><span>{{ $lan->name }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <ul>
                            <li class="classes">
                                <span class="num">{{$teacher->meets()->whereStatus("down")->distinct('user_id')->count('user_id')/2}}</span>

                                <span class="nam">
                                    <i class="icon-training"></i>
                                    <span>

                                        {{ $user->short(400) }}
                                    </span>
                                </span>
                            </li>
                            <li class="student">
                                <span class="num">{{$teacher->meets()->whereStatus("down")->count()/2}}</span>
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
                        <li class=""><span><span> {{ $user->short(150) }} </span><i class="icon-video-on"></i></span></li>
                        <li class="active"><span><span> {{ $user->short(149) }} </span><i class="icon-about"></i></span></li>
                    </ul>
                    <ul class="tab-container">
                        <li>
                            <div>
                                <video class="max-w" controls poster="{{ $teacher->port_img() }}">
                                    <source src="{{ $teacher->port_vid()  }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>


                            </div>
                        </li>
                        <li class="active">
                            <div>
                                <p>
                                    {{ $teacher->bio }}
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
