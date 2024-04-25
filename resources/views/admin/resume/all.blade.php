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
                    Resume
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        {{--  <a href="{{ route("resume.create") }}" class="btn">
                            New view
                        </a>  --}}
                    </span>
                    {{--  <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                        </svg>
                        Create new report
                    </a>  --}}
                    {{--  <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
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
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>user</th>
                                <th>title</th>
                                <th>duration</th>
                                <th>type</th>
                                <th>place</th>
                                <th>info</th>
                                <th>status</th>
                                <th>publish</th>
                                <th class="w-1">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resumes as $resume )

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-muted">
                                    {{ $resume->user->name }}
                                </td>
                                <td class="text-muted">
                                    {{ $resume->title }}
                                </td>
                                <td class="text-muted">
                                    {{ $resume->from }} -    {{ $resume->till }}
                                </td>
                                <td class="text-muted">
                                    {{ $resume->type }}
                                </td>
                                <td class="text-muted">
                                    {{ $resume->place }}
                                </td>
                                <td class="text-muted">
                                    {{ $resume->info }}
                                </td>
                                <td class="text-muted">
                                    {{ $resume->status }}
                                </td>
                                <td class="text-muted">
                                    <i class="fa-solid text text-{{ $resume->publish?"success":"danger" }} fa-{{ $resume->active_lang?"badge-check":"shield-xmark" }}"></i>
                                </td>


                                <td>
                                    <a class="btn btn-outline-primary " href="{{ route("resume.edit",$resume->id) }}">confirm</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
