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
                    Update country
                  <span class="badge badge-success">
                    {{ $country->name }}
                  </span>
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    {{-- <span class="d-none d-sm-inline">
                        <a href="{{ route("country.create") }}" class="btn">
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
            <div class="col-md-6">
                @include('master.error')
                <form class="card" method="post" action="{{ route("country.update",$country->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-header">
                        <h3 class="card-title">Basic form</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Name</label>
                            <div>
                                <input type="text" name="name" class="form-control" value="{{ old("name",$country->name) }}"  aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">time zone</label>
                            <div>
                                <select name="zone_time" class="form-control select2" id="zone_time">
                                    @foreach (Carbon\CarbonTimeZone::listIdentifiers() as $t )
                                    <option {{ old("zone_time",$country->zone_time)==$t?"selected":"" }} value="{{ $t }}">{{ $t }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">Active as course</label>
                            <div>
                                <select name="publish" class="form-control" id="">
                                    <option value="">select an option</option>
                                    <option {{ old("publish",$country->publish)=="1"?"selected":"" }} value="1">Active</option>
                                    <option {{ old("publish",$country->publish)=="0"?"selected":"" }} value="0">Not active</option>
                                </select>
                            </div>
                        </div>
                        {{--  <div class="mb-3">
                            <label class="form-label ">Active as course</label>
                            <div>
                                <select name="active_course" class="form-control" id="">
                                    <option value="">select an option</option>
                                    <option {{ old("active_course",$country->active_course)=="1"?"selected":"" }} value="1">Active</option>
                                    <option {{ old("active_course",$country->active_course)=="0"?"selected":"" }} value="0">Not active</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">Active as country for site countrys </label>
                            <div>
                                <select name="active_lang" class="form-control" id="">
                                    <option value="">select an option</option>
                                    <option {{ old("active_lang",$country->active_lang)=="1"?"selected":"" }} value="1">Active</option>
                                    <option {{ old("active_lang",$country->active_lang)=="0"?"selected":"" }} value="0">Not active</option>
                                </select>
                            </div>
                        </div>  --}}

                        <div class="mb-3">
                            <div class="form-label">Flage image</div>
                            <input type="file" name="image" accept="img" class="form-control" >
                        </div>

                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
