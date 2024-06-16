@extends('master.admin')
@section('content')
@include('master.error')

<form method="post" action="{{ route("ticket.store") }}" enctype="multipart/form-data">

        @csrf
        @method('post')



        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">

                </div>
                <h2 class="page-title">
                    New Ticket
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">

            </div>



        </div>

        <div class="page-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="title">subject</label>
                                <div class="form-control-wrap">
                                    <input type="text" class=" form-control" id="title" name="title" value="{{ old("title" ) }}">
                                </div>
                            </div>
                        </div>

                        @role('admin')
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="customer_id">customer</label>
                                <select name="customer_id" class="form-control select2" id="customer_id">
                                    <option value="">select one</option>
                                    @foreach ( App\Models\User::whereIn("role",['teacher',"student"])->get() as $customer)
                                    <option {{ old("customer_id")==$customer->id?"selected":"" }} value="{{  $customer->id }}">
                                        {{ $customer->name }}
                                        {{ $customer->family }}-
                                        {{ $customer->mobile }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        @endrole


                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="default-06">upload attach </label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" id="attach" name="attach" accept="image/png, image/jpeg">
                                        <label class="form-file-label" for="attach"></label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="title">text</label>
                                <div class="form-control-wrap">
                                    <textarea name="content" id="content" class=" form-control" cols="30" rows="10">{{ old("content" ) }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-success">
                                <i class="fas fa-save"></i>
                                save
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>




    </form>


    {{-- <div class="ticket_box">

    <!-- ticket_item -->
    <div class="ticket_item">
        <div class="ticket_attach"><img src="/site/images/support.png"></div>
        <div class="ticket_content">
            <p>کاربر گرامی لطفا درخواستهای پشتیبانی خود را از طریق لینک زیر برای ما ارسال کنید.</p>
            <p>همچنین در صورت نیاز می توانید با شماره تلفن 021326546545 تماس بگیرید.</p>
        </div>
    </div>
    <!-- ticket_item -->


    <!-- ticket_box -->
    <div class="ticket_form">
        @include('master.error')
        <div class="dashboard_site_form">
            @role('admin')
            <form method="post" action="{{ route("ticket.store") }}" enctype="multipart/form-data">
    @endrole
    @role('customer')
    <form method="post" action="{{ route("userticket.store") }}" enctype="multipart/form-data">
        @endrole
        @csrf
        @method('post')
        <p>
            <label for="ticket_subject">موضوع</label>
            <input type="text" id="ticket_subject" name="title" value="{{ old("title") }}">
        </p>
        <br>
        @role('admin')
        <div>
            <select name="customer_id" class="form-control select2" id="">
                <option value="">انتخاب مشتری</option>
                @foreach ( App\Models\User::whereRole("customer")->get() as $customer)
                <option {{ old("customer_id")==$customer->id?"selected":"" }} value="{{  $customer->id }}">
                    {{ $customer->name }}
                    {{ $customer->family }}
                </option>

                @endforeach
            </select>
        </div>
        @endrole
        <br>
        <p>
            <label for="ticket_content">توضیحات</label>
            <textarea placeholder="متن توضیحات را وارد کنید" name="content">{{ old("content") }}</textarea>
        </p>

        <p>
            <label class="file_select" for="file_select">آپلود فایل</label>
            <input type="file" id="file_select" class="form-control" name="attach">
        </p>
        <p>فایلهای لازم را انتخاب کنید</p>
        <p></p>
        <div class="clear2"></div>
        <p><button id="submit_form">ارسال تیکت </button></p>
    </form>

    <div class="clear"></div>
    </div>

    </div>
    <!-- ticket_item -->

    <div class="clear"></div>
    </div> --}}
    @endsection
