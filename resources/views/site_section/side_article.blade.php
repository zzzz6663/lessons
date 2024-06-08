
<div id="search">

    <form action="{{route('articles')}}" method="get">
        @csrf
        @method('fet')
        <div>
            <input placeholder="

            {{ $user->short(3) }}

            ..." type="search" name="search" title="جستجو" value="{{request('search')}}">
            <button> <i class="fas fa-search"></i>
            </button>
        </div>
    </form>

</div>

<h2 class="side-title">
    {{ $user->short(366) }}
</h2>



<div class="sidebar-nav">
    <ul class="metismenu" id="menu1">

        @foreach(\App\Models\Acat::whereNull('parent_id')->latest()->get() as $ac)
            @if(\App\Models\Acat::where('parent_id',$ac->id)->latest()->get()->first()  )
                <li  class="active ">
                    <a class="has-arrow bl no_link"  aria-expanded="false">{{$ac->name}}

                        <i class="fas fa-plus"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li><a  href="{{route('articles',$ac->id)}}"  class="bl"> {{$ac->name}}</a></li>
                        @foreach(\App\Models\Acat::where('parent_id',$ac->id)->latest()->get() as $accc)

                            <li><a  href="{{route('articles',$accc->id)}}"  class="bl"> {{$accc->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li>
                    <a   href="{{route('articles',$ac->id)}}" class="bl">
                        {{$ac->name}}
                    </a>
                </li>

            @endif
        @endforeach



    </ul>
</div>



<h2 class="side-title">    {{ $user->short(369) }}</h2>
@foreach(\App\Models\Post::whereNotNull('confirm')->whereNotNull('publish')->take(4)->latest()->get() as $latest)
    <div class="side-blog">
        <a class="elementor-post__thumbnail__link" href="#">
            <div class="elementor-post__thumbnail">
                <img src="{{$latest->image()}}" alt="">

            </div>
        </a>
        <div class="elementor-post__text">
            <h3 class="elementor-post__title">
                <a href="{{route('article',$latest->id)}}">{{$latest->title}} </a>
            </h3>
            <a class="elementor-post__read-more" href="{{route('article',$latest->id)}}">  {{ $user->short(370) }} »</a>
        </div>
    </div>
@endforeach
