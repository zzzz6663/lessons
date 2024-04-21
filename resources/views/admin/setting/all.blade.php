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
                    All suite Setting
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    {{-- <span class="d-none d-sm-inline">
                        <a href="{{ route("language.create") }}" class="btn">
                    New view
                    </a>
                    </span> --}}
                    {{-- <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                        </svg>
                        Create new report
                    </a>  --}}
                    {{-- <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                        </svg>
                    </a>  --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col-lg-12">
            @include('master.error')
            <form class="card" method="post" action="{{ route("setting.site") }}" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="card-header">
                    <h3 class="card-title">Price</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label required">Max Price</label>
                            <div>
                                <input type="number" name="max_price" class="form-control" value="{{ old("max_price",$setting->get("max_price")) }}" aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label required">Min Price</label>
                            <div>
                                <input type="number" name="min_price" class="form-control" value="{{ old("min_price",$setting->get("min_price")) }}" aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label required">Site Share</label>
                            <div>
                                <input type="number" name="site_share" class="form-control" value="{{ old("site_share",$setting->get("site_share")) }}" aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-end">
                    <button name="setting" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
