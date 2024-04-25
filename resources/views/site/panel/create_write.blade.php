@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>
    <div id="article-from" class="shade">

        <div class="widget-title">
            <h3> {{ $user->short(54) }}
            </h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="widget-content">

            @include('master.error')
            <form action="{{route("panel.create.write")}}" method="post" enctype="multipart/form-data">
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
                                <input type="text" name="title" value="{{ old("title") }}">
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
                        <div>
                            <textarea id="mytextarea" name="content">{{ old("content") }}</textarea>

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
                                    @foreach (old("tags",[]) as $key=>$val)
                                    <span class="tag_s"> <i class="icon-close"></i>{{ $val }}
                                        <input type="text" name="tags[]" hidden value="{{ $val }}">
                                        </span>
                                    @endforeach
                                    {{-- <span>advanced<i class="icon-close"></i></span>  --}}

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
