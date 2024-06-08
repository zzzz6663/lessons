@extends('master.site')
@section('content')
<div id="topheader" class="rows">
    <div class="container">
        <div>

            <h2 >{{ $user->short(383) }}</h2>
        </div>
    </div>
</div>

<div id="page" class="rows" >
    <div class="container">

        <div class="tablc">
            <div class="tabler">



                <div id="main">
                    <div>
                        <div class="row">

                            @foreach($articles as $article)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div>
                                        <div class="single-post">

                                            <div class="elementor-post__card">
                                                <a class="elementor-post__thumbnail__link" href="#">
                                                    <div class="elementor-post__thumbnail elementor-fit-height" style="background: url('{{ $article->image()}}') center center/cover; padding-top: 60%;">
                                                        {{--                                                                        <img src="{{asset('/src/article/images/a3'.$article->image)}}" alt="">--}}
                                                    </div>
                                                    {{--                                                    <div class="elementor-post__thumbnail elementor-fit-height">--}}
                                                    {{--                                                        <img src="/home/images/blog1.jpg" alt="">--}}
                                                    {{--                                                        <img src="{{asset('/src/article/images/a3'.$article->image)}}" alt="">--}}
                                                    {{--                                                    </div>--}}
                                                 </a>
                                                @if($article->acats()->first())
                                                <div class="elementor-post__badge">{{$article->acats()->first()->name}}</div>
                                                @endif
                                                <div class="elementor-post__text">
                                                    <h3 class="elementor-post__title">
                                                        <a href="{{route('article',$article->id)}}"> {{$article->title}} </a>
                                                    </h3>
                                                    <br>
                                                    <div class="elementor-post__excerpt" style="text-align: right">
                                                        {{--                                                        $str = substr($str, 0, 7) . '...';--}}

                                                        {{mb_strimwidth(strip_tags(html_entity_decode(  $article->article)), 0, 70)}} ...
                                                    </div>
                                                </div>
                                                <div class="elementor-post__meta-data">
                                                    <span class="elementor-post-author"> {{$article->user->name}} {{$article->user->family}}</span>
                                                    <span class="elementor-post-date">{{$article->crated_at}}</span>
                                                </div>
                                                <div class="elementor-post__meta-data read-more"  >
                                                    <a href="{{route('article',$article->id)}}">  {{$user->short(384)}}</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    {{$articles->appends(request()->all())->links('site_section.pagination2')}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="sidebar">
                    <div>

                        @include('site_section.side_article')

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
