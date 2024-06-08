@extends('master.site')
@section('content')

<div id="topheader" class="rows">
    <div class="container">
        <div>

            <h1> {{$article->title}}</h1>
            <div class="top-icons">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <i class="icon2-user-circle-o"></i>
                            </span>
                            <span class="author">
                                <span>
                                    {{ $user->short(371) }}
                                </span> {{$article->user->name}}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <i class="icon2-calendar-empty"></i>
                            </span>
                            <span class="date">{{$article->created_at}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <i class="icon2-commenting-o"></i>
                            </span>
                            <span class="comments"> {{$article->comments()->whereActive('1') ->count()}}
                                {{ $user->short(249) }}

                                 </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="page" class="rows">
    <div class="container">
        <div class="tablc">
            <div class="tabler">

                <div id="main">
                    <div>
                        <div id="post-text">
                            <div class="elementor-post__thumbnail elementor-fit-height" style="background: url('{{$article->image()}}') center center/cover; padding-top: 60%;">

                                {{-- <img src="{{asset('/src/article/images/a1'.$article->image)}}" alt="">--}}
                            </div>
                            <br>
                            <br>
                            <h2>
                                {!! $article->title !!}
                            </h2>
                            <div class="text">
                                {!! $article->content !!}
                            </div>
                        </div>

                        <div id="comments" class="blog-post-comment">
                            {{-- @if (\Illuminate\Support\Facades\Auth::check())--}}
                            <div id="respond" class="comment-respond">

                                <h3 id="reply-title" class="comment-reply-title">   {{ $user->short(372) }}
                                </h3>
                                @if($errors->any())
                                <div class="e_section" id="e_section">
                                    {!! implode('', $errors->all('<span class="text text-danger">:message</span><br>')) !!}
                                </div>
                                @endif
                                <form id="commentform" class="comment-form" action="{{route('home.comment.article', $article->id)}}" method="post">
                                    @csrf
                                    @method('post')
                                    <p class="comment-notes">
                                        <span id="email-notes">
                                            {{ $user->short(373) }}
                                            .

                                        </span>
                                        {{ $user->short(374) }}
                                        <span class="required">*</span>
                                    </p>

                                    <div class="comment-info row">
                                        <div class="col-lg-6 col-md-12">
                                            <div>
                                                @if(\Illuminate\Support\Facades\Auth::check())
                                                <input placeholder="  {{ $user->short(375) }}" id="author" readonly class="form-control" name="name" type="text" value="{{auth()->user()->name}} {{auth()->user()->family}}" size="30" aria-required="true">
                                                @else
                                                <input placeholder="  {{ $user->short(375) }}" id="author" class="form-control" name="name" type="text" value="" size="30" aria-required="true">
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div>
                                                @if(\Illuminate\Support\Facades\Auth::check())
                                                <input placeholder="{{ $user->short(376) }}" id="email" name="email" class="form-control" type="email" value="{{auth()->user()->email}}" size="30" aria-required="true">
                                                @else
                                                <input placeholder="{{ $user->short(376) }}" id="email" name="email" class="form-control" type="email" value="" size="30" aria-required="true">
                                                @endif
                                                {{-- @auth--}}
                                                {{-- @if(auth()->user()->id !=$article->user->id)--}}

                                                {{-- @endif--}}
                                                {{-- @endauth--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div>
                                                {{-- @auth--}}
                                                <input type="text" id="paretn" value="0" hidden name="parent_id">

                                                <textarea class="form-control msg-box" placeholder="{{ $user->short(377) }}" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                {{----}}
                                                {{-- @endauth--}}
                                            </div>
                                        </div>
                                    </div>
                                    <p class="form-submit" style="text-align: center">

                                        {{-- @auth--}}
                                        <input name="submit" type="submit" id="submit" class="btn-comments btn btn-primary" style="cursor: pointer" value="  {{ $user->short(378) }}">
                                        {{-- @endauth--}}
                                    </p>
                                </form>
                            </div>
                            {{-- @else--}}
                            {{-- <p class="form-submit">--}}
                            {{-- <input name="submit" type="submit" id="submit" class="btn-comments pointer btn btn-primary show_login" value="ارسال نظر">--}}
                            {{-- </p>--}}
                            {{-- @endif--}}


                            <div class="bord">

                                @if($article->comments()->where('active','1')->count()>0)
                                <div class="btitle">
                                    <h3 class="comment-reply-title"> {{$article->comments()->where('active','1')->count()}} {{ $user->short(349) }}</h3>
                                </div>
                                @endif
                                @include('site_section.comment',['comments'=>$article->comments()->where('active','1')->where('parent_id','0')->get(),'article'=>$article ,'level'=>0])

                            </div>
                        </div>
                    </div>
                </div>

                <div id="sidebar">
                    <div>



                        <div class="social">
                            <a target="_blank">
                                <i class="fab fa-telegram"></i>
                            </a>
                            <a target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a target="_blank">
                                <i class="fab fa-linkedin"></i>
                                                        </a>
                        </div>







                        @include('site_section.side_article')

                        <h2 class="side-title">    {{ $user->short(379) }}</h2>

                        <div class="tag-widgte">
                            <ul style="text-align: right">

                                <li>
                                    <span class="link">
                                        <span>
                                            @for($i=0;$i<sizeof($tags); $i++) <a href="{{route('home.tag.articles',$tags[$i])}}">{{$tags[$i]}}</a>
                                                @endfor
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="post-nav">

            @if($prv)
            <div class="navigation__prev">
                <a href="{{route('article',$prv->id)}}">

                    <span class="arrow-prev">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="navigation__link__prev">
                        <span class="label">
                            {{ $user->short(381) }}
                        </span>
                        <span class="title"> {{$prv->title}}</span>
                    </span>
                </a>
            </div>
            @endif


            @if($next)
            <div class="navigation__next">
                <a href="{{route('article',$next->id)}}">
                    <span class="arrow-next">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="navigation__link__next">
                        <span class="label"> {{ $user->short(380) }}</span>
                        <span class="title"> {{$next->title}}</span>
                    </span>

                </a>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="rows">
    <div class="container">
        <div class="post-newsletter">
            <div>
                <p>برای آگاهی از آخرین اخبار مربوط به زبان</p>
                <p class="green">عضو خبرنامه آکادمی زبان تهران شوید</p>
                <form>

                    <div>
                        <div class="type-email">
                            <input size="1" type="email" class="email" placeholder="ایمیل خود را وارد کنید" required="required" aria-required="true">
                        </div>
                        <div class="type-submit">
                            <button type="submit">
                                <span>
                                    <span class="elementor-button-text">عضویت</span>

                                    <span class="button-icon">
                                        <i aria-hidden="true" class="icon2-left-big"></i>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="related-post" class="rows">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h4 class="green">
                        {{ $user->short(382) }}
                    </h4>
                    <h4 class="black">More To Explore</h4>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach( $related as $re)
            <div class="col-lg-4 col-sm-6 col-xsm-12">
                <div>
                    <div class="single-post">

                        <div class="elementor-post__card">
                            <a class="elementor-post__thumbnail__link" href="#">
                                <div class="elementor-post__thumbnail elementor-fit-height" style="background: url('{{$re->image()}}') center center/cover; padding-top: 60%;">
                                    {{-- <img src="{{asset('/src/article/images/a3'.$article->image)}}" alt="">--}}
                                </div>
                                {{-- <div class="elementor-post__thumbnail elementor-fit-height">--}}
                                {{-- <img src="/home/images/blog1.jpg" alt="">--}}
                                {{-- <img src="{{asset('/src/article/images/a3'.$re->image)}}" alt="">--}}
                                {{-- </div>--}}
                            </a>
                            @if($re->acats()->first())
                            <div class="elementor-post__badge">{{$re->acats()->first()->name}}</div>
                            @endif
                            <div class="elementor-post__text" style="min-height:120px">
                                <h3 class="elementor-post__title">
                                    <a href="{{route('article',$re->id)}}"> {{$re->title}} </a>
                                </h3>
                                <div class="elementor-post__excerpt" style="text-align: right">
                                    {{-- $str = substr($str, 0, 7) . '...';--}}

                                    {{mb_strimwidth(strip_tags(html_entity_decode( $re->article)), 0, 100)}} ...
                                </div>
                            </div>
                            <div class="elementor-post__meta-data">
                                <span class="elementor-post-author"> {{$re->user->name}} </span>
                                <span class="elementor-post-date">{{$re->creatde_at}}</span>
                            </div>
                            <div class="elementor-post__meta-data read-more">
                                <a href="{{route('article',$re->id)}}">
                                        {{$user->short(384)}}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
