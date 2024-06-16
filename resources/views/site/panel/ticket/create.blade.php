@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')



@include('master.error')

<div id="teacherpish">
    <br>

    <div class="etebar shade">
        <div class="widget-title">
            <h3>

                {{ $user->short(386) }}

            </h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <form method="post" action="{{ route("userticket.store") }}" enctype="multipart/form-data">

            @csrf
            @method('post')
        <div class="widget-content tick">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div>
                        <div class="pay-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 -6">
                                    <div>
                                        <div class="input-container fill">
                                            <label for="title">
                                                tile
                                            </label>
                                            <input type="text" name="title" value="{{ old("title" ) }}" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12  mb-">
                                    <div>
                                        <div id="fileuploader2" class="draggable fl">
                                            <div class="vup">
                                                <label for="featured-video">
                                                    {{ $user->short(392) }}
                                                    <span>   {{ $user->short(391) }}
                                                    </span>
                                                </label>
                                                <input type="file" id="attach" name="attach" accept="image/png, image/jpeg">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div>
                                        <div class=" m-0">
                                            <div class="input-container fill">
                                                <label for="">
                                                    {{ $user->short(100) }}

                                                </label>
                                                <textarea  name="content" id="content" class=" form-control" cols="30" rows="10">{{ old("content" ) }}</textarea>

                                            </div>

                                            <div class="prices">
                                                <div class="label">

                                                </div>

                                            </div>
                                            <div class="button-container reight gray ">
                                                <button class="butt w-320">

                                                    {{ $user->short(393) }}

                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>


            </div>
        </div>
        </form>
    </div>



</div>




    @endsection
