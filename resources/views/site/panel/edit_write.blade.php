@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>
    <div id="article-from" class="shade">

        <div class="widget-title">
            <h3> {{ $user->short(66) }}
           <span class="alert alert-success">
            {{ $post->title }}
           </span>
            </h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="widget-content">
            @include('master.error')
            <form action="{{route("panel.edit.write",$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div>
                            <div class="input-container fill">
                                <label for="">
                                    {{ $user->short(56) }}
                                    <span>

                                        {{ $user->short(55) }} </span></label>
                                <input type="text" name="title" value="{{ old("title",$post->title) }}">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div>
                            <input type="file" id="image_f" name="image" accept="imgae\*" hidden>
                            <div class="label">

                                {{ $user->short(57) }}
                            </div>
                            <label for="image_f">
                                <div id="fileuploader">
                                    <div class="ajax-upload-dragdrop" style="vertical-align: top; width: 400px;">
                                        <div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">انتخاب فایل
                                        </div>
                                        <div class="upv"><i class="icon-cloud"></i><span>
                                                <span class="" id="name_img">
                                                    {{ $user->short(58) }}
                                                </span>
                                            </span></div>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="ajax-file-upload-container"></div>

                            </label>


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-container fill">
                            <label for="">

                                {{ $user->short(366) }}

                            </label>
                            <select name="acat[]" id="" class="select_2" multiple>
                                <option >        {{ $user->short(367) }} </option>
                                @foreach(\App\Models\Acat::whereNull('parent_id')->latest()->get() as $ac)
                                    @if(\App\Models\Acat::where('parent_id',$ac->id)->latest()->get()->first()  )
                                        <optgroup  label="{{$ac->name}}" >
                                            <option {{(in_array($ac->id,old('cat',$post->acats()->pluck("id")->toArray() ))?'selected':'')}}  value="{{$ac->id}}">{{$ac->name}}</option>

                                        @foreach(\App\Models\Acat::where('parent_id',$ac->id)->latest()->get() as $accc)
                                                <option {{(in_array($accc->id,old('cat',$post->acats()->pluck("id")->toArray() ))?'selected':'')}}  value="{{$accc->id}}">{{$accc->name}}</option>
                                            @endforeach
                                        </optgroup>
                                    @else
                                        <optgroup  label="{{$ac->name}}" >
                                            <option {{(in_array($ac->id,old('cat' ,$post->acats()->pluck("id")->toArray()))?'selected':'')}} value="{{$ac->id}}">{{$ac->name}}</option>
                                        </optgroup>
                                    @endif
                                @endforeach
                            </select>
                            @error('cat')<div class="eerror">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div>
                            <textarea id="mytextarea" name="content">{{ old("content",$post->content) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <div class="add-tag">
                                <h4><span class="hs">#</span>
                                    {{ $user->short(59) }}
                                    </span></h4>
                                <div class="form">
                                    <input type="text" id="tag_name" placeholder="">
                                    <span class="addt add_tag">
                                        {{ $user->short(60) }}
                                    </span>
                                </div>
                                <div class="result">
                                    @foreach (old("tags",explode ("_",$post->tags)) as $key=>$val)
                                    <span class="tag_s"> <i class="icon-close"></i>{{ $val }}
                                        <input type="text" name="tags[]" hidden value="{{ $val }}">
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <div class="button-container reight">
                                <button name="publish" value="1" class="butt w-320">
                                    {{ $user->short(61) }}
                                </button>
                            </div>
                            <div class="button-container reight border">
                                <button name="draft"  value="1" class="butt w-320">
                                    {{ $user->short(62) }}
                                </button>
                            </div>

                        </div>
                    </div>
                </div>


            </form>



        </div>


    </div>
</div>
@endsection
