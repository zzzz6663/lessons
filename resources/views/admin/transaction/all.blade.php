@extends('master.admin')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col-lg-3">
                <!-- Page pre-title -->
                <div class="page-pretitle">

                </div>
                <h2 class="page-title">
                    transactions
                </h2>
            </div>
            <div class="col-lg-9">
                <form action="{{ route("transaction.index") }}" method="get">
                    @csrf
                    @method('get')
                    {{--  <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label">name email (search)</label>
                                <input type="text" value="{{ request("search") }}" name="search" class="form-control" name="example-text-input" placeholder="search">
                              </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label">search</label>
                                <input type="submit" class="btn btn-danger" >
                              </div>
                        </div>
                    </div>  --}}
                </form>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">


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
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>type</th>
                                <th>status</th>
                                <th>amount</th>
                                <th>meet</th>
                                <th>date</th>
                                <th class="w-1">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction )

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-muted">
                                    @if( $transaction->user)
                                    {{ $transaction->user->name }}

                                    @endif
                                </td>

                                <td class="text-muted">
                                    {{ $transaction->type }}
                                </td>

                                <td class="text-muted">
                                    {{ $transaction->status }}
                                </td>

                                <td class="text-muted">
                                    {{ $transaction->amount }}
                                </td>
                                <td class="text-muted">
                                </td>

                                <td class="text-muted">
                                    {{ $transaction->created_at }}
                                </td>


                                <td>
                                    <div class="d-flex justify-content-between">
                                        {{--  <a href="#"  class="btn " data-bs-toggle="modal" data-bs-target="#modal-simple{{  $transaction->id }}">
                                            Translate
                                        </a>
                                        <div class="modal modal-blur fade" id="modal-simple{{  $transaction->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title text text-success">All inputs are auto save</h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            @foreach (App\Models\Language::all() as $language )
                                                            <div class="col-lg-6 mb-3">
                                                                <label class="form-label required">{{ $language->name }}</label>
                                                                <div>
                                                                    <input type="text" value="{{ $transaction->cache($language) }}" name="transaction" class="form-control translate" data-lang="{{ $language->id }}"  data-transaction="{{ $transaction->id }}" value="{{ old("transaction") }}" aria-describedby="emailHelp" placeholder="Enter translate">
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  --}}
                                        {{--  <a class="btn btn-outline-success ml-1 " href="{{ route("transaction.show",$transaction->id) }}">Detail</a>  --}}
                                        {{--  <a class="btn btn-outline-secondary ml-1" href="{{ route("transaction.show",$transaction->id) }}">Translate</a>  --}}
                                    </div>
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
