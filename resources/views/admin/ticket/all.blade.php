@extends('master.admin')

@section('content')


<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">

                </div>
                <h2 class="page-title">
                    tickets
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">

                    <p>شما در مجموع

                        {{ $tickets->total() }}
                        تیکت دارید.</p>
                        <a href="{{ route("ticket.create") }}" class="btn btn-primary">
                            تیکت جدید
                        </a>
                </div>
            </div>


            {{--  <form action="{{ route('ticket.index') }}" method="get" autocomplete="off">
                @csrf
                @method('get')
                <div class="card-inner position-relative card-tools-toggle">
                    <div class="card-title-group">
                        <div class="card-tools">
                            <div class="form-inline flex-nowrap gx-3 row">
                                <div class="form-wrap col-lg-3 w-150px">
                                    <label for="search">جستجو</label>
                                    <input type="text" name="search" value="{{ request('search') }}" class="form-control ">
                                </div>
                                <div class="form-wrap col-lg-3 w-150px">
                                    <label for="from">from</label>
                                    <input type="date" name="from" value="{{ request('from') }}" class="form-control ">
                                </div>
                                <div class="form-wrap col-lg-3 w-150px">
                                    <label for="to">to </label>
                                    <input type="date" name="to" value="{{ request('to') }}" class="form-control ">
                                </div>
                                <div class="form-wrap col-lg-3 w-150px">
                                    <label for="status">وضعیت </label>
                                    <select class="form-control" name="status" id="status">
                                        <option value=""> انتخاب کنید </option>
                                        @foreach (__("ticket_status") as $key =>$val)
                                        <option {{ request("status")==$key?"selected":"1" }} value="{{ $key }}"> {{ $val }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-wrap col-lg-3 w-150px">
                                    <span class="">
                                        <br>
                                        <button class="btn btn-dim btn-outline-light ">
                                            اعمال
                                        </button>
                                    </span>
                                    @if(request()->has("search"))
                                    <a href="{{ route("user.index") }}" class="btn btn-danger"><i class="fas fa-window-close"></i></a>
                                    @endif
                                </div>
                            </div>
                            <!-- .form-inline -->
                        </div>

                    </div>
                    <!-- .card-title-group -->
                    <div class="card-search search-wrap" data-search="search">
                        <div class="card-body">
                            <div class="search-content">
                                <button class="btn btn-primary">
                                    search
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- .card-search -->
                </div>
            </form>  --}}
        </div>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="table-responsive">

                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>user</th>
                                <th>title</th>
                                <th>status</th>
                                <th>date</th>
                                <th class="w-1">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket )
                            <tr>
                                <td>

                                    @if($ticket->status=="wait_for_admin")
                                    <span class="red_cirscle"></span>
                                    @endif
                                    -     {{ $ticket->number }}
                                </td>
                                <td>

                                    {{ $ticket->customer->name}}
                                    {{ $ticket->customer->family}}
                                </td>
                                <td>
                                    {{ $ticket->title }}

                                                                </td>
                                <td>
                                     {{ __("ticket_status.".$ticket->status) }}
                                </td>

                                <td>
                                    {{ ($ticket->created_at)->format("Y-m-d") }}
                                </td>


x                                <td>
                                    <a href="{{ route("ticket.show",$ticket->id) }}" class="btn btn-primary">more</a>

                                </td>

                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    {{ $tickets->appends(Request::all())->links('admin.section.pagination') }}

                </div>
            </div>
        </div>
    </div>
</div>












@endsection
