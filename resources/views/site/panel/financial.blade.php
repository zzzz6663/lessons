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
                                <input type="number" form="pay" required name="amount" id="amount" placeholder="">
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
                                                    <span> 200$


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
                                                    <span> 1000%
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            {{-- <div class="button-container reight">
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
                                    <span class="butt"><i class="icon-checkout"></i> {{ $user->short(30) }}
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


    <div class="etebar-table shade">
        <div class="widget-title">
            <h3>

                {{ $user->short(35) }}
            </h3>
            <div class="dot3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="widget-content">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <p><i class="icon-traconesh"></i>
                            {{ $user->short(36) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div id="topfilter" class="shade">
                            <div class="right">

                                {{--  <form action="">
                                    <span class="butt"><i class="icon-search"></i></span>
                                    <span class="close"><i class="icon-close"></i></span>
                                    <input type="text" placeholder="جست‌و‌جو در تراکنش‌ها ...">
                                </form>  --}}

                            </div>
                            <div class="left">
                                <span class="title">   {{ $user->short(37) }}  :</span>
                                <ul class="oredering">
                                    <li><span>
                                        {{ $user->short(38) }}
                                    </span></li>
                                    <li><span>

                                        {{ $user->short(39) }}

                                    </span></li>
                                    <li class="active"><span>
                                        {{ $user->short(40) }}

                                    </span></li>
                                    <li><span>
                                        {{ $user->short(41) }}
                                    </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div>

                        <div class="table-responsive">

                            <table>
                                <thead>
                                    <tr>
                                        <th><span>
                                            {{ $user->short(42) }}
                                        </span></th>
                                        <th><span>        {{ $user->short(43) }}</span></th>
                                        <th><span>        {{ $user->short(44) }}</span></th>
                                        <th><span>        {{ $user->short(45) }}</span></th>
                                        <th><span>        {{ $user->short(29) }}</span></th>
                                        <th><span></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span><i class="icon-tdown"></i>411037506731</span></td>
                                        <td><span>عرفان آماده</span></td>
                                        <td><span>320 In Stock</span></td>
                                        <td><span>11/03/2020</span></td>
                                        <td><span>58,000</span></td>
                                        <td><span>23,000</span></td>
                                        <td><span class="but">جزییات</span></td>
                                    </tr>
                                    <tr>
                                        <td><span><i class="icon-tup"></i>411037506731</span></td>
                                        <td><span>عرفان آماده</span></td>
                                        <td><span>320 In Stock</span></td>
                                        <td><span>11/03/2020</span></td>
                                        <td><span>58,000</span></td>
                                        <td><span>23,000</span></td>
                                        <td><span class="but">جزییات</span></td>
                                    </tr>
                                    <tr>
                                        <td><span><i class="icon-tdown"></i>411037506731</span></td>
                                        <td><span>عرفان آماده</span></td>
                                        <td><span>320 In Stock</span></td>
                                        <td><span>11/03/2020</span></td>
                                        <td><span>58,000</span></td>
                                        <td><span>23,000</span></td>
                                        <td><span class="but">جزییات</span></td>
                                    </tr>
                                    <tr>
                                        <td><span><i class="icon-tup"></i>411037506731</span></td>
                                        <td><span>عرفان آماده</span></td>
                                        <td><span>320 In Stock</span></td>
                                        <td><span>11/03/2020</span></td>
                                        <td><span>58,000</span></td>
                                        <td><span>23,000</span></td>
                                        <td><span class="but">جزییات</span></td>
                                    </tr>
                                    <tr>
                                        <td><span><i class="icon-tdown"></i>411037506731</span></td>
                                        <td><span>عرفان آماده</span></td>
                                        <td><span>320 In Stock</span></td>
                                        <td><span>11/03/2020</span></td>
                                        <td><span>58,000</span></td>
                                        <td><span>23,000</span></td>
                                        <td><span class="but">جزییات</span></td>
                                    </tr>
                                    <tr>
                                        <td><span><i class="icon-tup"></i>411037506731</span></td>
                                        <td><span>عرفان آماده</span></td>
                                        <td><span>320 In Stock</span></td>
                                        <td><span>11/03/2020</span></td>
                                        <td><span>58,000</span></td>
                                        <td><span>23,000</span></td>
                                        <td><span class="but">جزییات</span></td>
                                    </tr>
                                    <tr>
                                        <td><span><i class="icon-tdown"></i>411037506731</span></td>
                                        <td><span>عرفان آماده</span></td>
                                        <td><span>320 In Stock</span></td>
                                        <td><span>11/03/2020</span></td>
                                        <td><span>58,000</span></td>
                                        <td><span>23,000</span></td>
                                        <td><span class="but">جزییات</span></td>
                                    </tr>
                                    <tr>
                                        <td><span><i class="icon-tup"></i>411037506731</span></td>
                                        <td><span>عرفان آماده</span></td>
                                        <td><span>320 In Stock</span></td>
                                        <td><span>11/03/2020</span></td>
                                        <td><span>58,000</span></td>
                                        <td><span>23,000</span></td>
                                        <td><span class="but">جزییات</span></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
