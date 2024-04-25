<div class="single-article-ad ">
    <div class="left">
        <ul>
            <li class="del-link remove_post" data-message="{{ $user->short(63) }}" data-confirm="{{ $user->short(64) }}" data-reject="{{ $user->short(65) }}" data-id="{{ $post->id }}"><span>
                    {{ $user->short(51) }}
                    <i class="icon-trash"></i></span></li>
            <li class="edit-link">
                <a href="{{ route("panel.edit.write",$post->id) }}">
                    <span>
                        {{ $user->short(52) }}
                        <i class="icon-edit"></i>
                    </span>
                </a>
            </li>
            {{-- <li class="see"><a href="#">
                    {{ $user->short(53) }}
            </a>
            </li> --}}
        </ul>
    </div>
    <div class="right">
        <div class="pic">
            <img src="{{ $post->image() }}" alt="">
        </div>
        <div class="text">
            <h3><a href="#">
                    {{ $post->title }}
                </a></h3>
            <div class="date">
                <span>
                    {{ $post->created_at }}
                </span>
            </div>
        </div>
    </div>

</div>
