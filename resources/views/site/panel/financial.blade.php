@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>

    <div class="etebar shade">
        <div class="widget-title">
            <h3> {{ $user->short(28) }}

            </h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="widget-content">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="pay-form">

                        <div class="left m-0">
                            <h3> {{ $user->short(32) }} :</h3>

                            <div class="input-container fill">
                                <i class="icon-credit-card"></i>
                                <label for="">
                                    {{ $user->short(33) }}

                                </label>
                                <input type="number" form="pay" required name="amount"  id="amount" placeholder="">
                            </div>

                            <div class="prices">
                                <div class="label">
                                    {{ $user->short(34) }}
                                </div>
                                <ul>

                                    <li>
                                        <div class="lable-container">
                                            <input type="radio" name="pricech" id="p50" value="50">
                                            <label for="p50">
                                                <div>
                                                    <span>
                                                        50$
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="lable-container">
                                            <input type="radio" name="pricech" id="p100" value="100">
                                            <label for="p100">
                                                <div>
                                                    <span>
                                                        100$
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="lable-container">
                                            <input type="radio" name="pricech" id="p200" value="200">
                                            <label for="p200">
                                                <div>
                                                    <span>   200$


                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="lable-container">
                                            <input type="radio" name="pricech" id="p250" value="250">
                                            <label for="p250">
                                                <div>
                                                    <span>250$</span>
                                                </div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="lable-container">
                                            <input type="radio" name="pricech" id="p500" value="500">
                                            <label for="p500">
                                                <div>
                                                    <span>
                                                        500%
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="lable-container">
                                            <input type="radio" name="pricech" id="p1000" value="1000">
                                            <label for="p1000">
                                                <div>
                                                    <span>     1000%
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            {{--  <div class="button-container reight">
                                <span class="butt">تایید و ادامه</span>
                            </div>  --}}
                        </div>



                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div>
                        <div class="eteb">
                            <ul>
                                <li>
                                    {{ $user->short(29) }}
                                    :</li> 
                                <li>
                                    {{ number_format($user->balance()) }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div>
                        <ul class="etmen">
                            <li>
                                <div class="button-container reight">
                                    <span class="butt"><i class="icon-checkout"></i>       {{ $user->short(30) }}
                                    </span>
                                </div>
                            </li>
                            <li>
                                <form id="pay" action="{{ route("send.pay") }}" method="post">
                                    @csrf
                                    @method('post')
                                <div class="button-container reight gray ">
                                    <button class="butt w-320"><i class="icon-charg"></i>
                                        {{ $user->short(31) }}</button>
                                </div>
                            </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
