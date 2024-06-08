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
                    Comments
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        {{--  <a href="{{ route("comment.create") }}" class="btn">
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
                                <th>tags</th>
                                <th>publish</th>
                                <th>confirm</th>
                                <th>status</th>
                                <th class="w-1">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>id</th>
                                <th>name </th>
                                <th>post</th>
                                <th>content</th>
                                <th>active</th>
                                <th>date</th>
                                <th>action</th>
                            </tr>
                            @foreach($comments as $comment)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    @if($comment->user_id)
                                    <a href="{{route('user.edit',$comment->user)}}">{{$comment->user->name}}</a>
                                    @else
                                    <a href="#">{{$comment->name}}</a>
                                    @endif
                                </td>
                                <td>
                                    @if(isset($comment->commentable->id))
                                    {{$comment->commentable->title}}
                                    @endif
                                </td>

                                <td>
                                    {{$comment->comment}}
                                </td>
                                <td>
                                    <span class="badge  badge-{{($comment->active=="1")?'success':'danger'}} "> {{($comment->active==1)?'show':'hidden'}}</span>
                                </td>

                                <td>{{($comment->created_at)}}</td>
                                <td>
                                   <a href="{{ route("comment.edit",$comment->id) }}" class="btn btn-primary">Edit</a>
                                    {{--  <form style="display: inline-block" action="{{route('admin.teacher.comment.delete',$comment->id)}}" class=" " method="post">
                                        @csrf
                                        @method('post')
                                        <div class="buttons pointer">
                                            <button type="submit" class="btn btn-bslock btn-primary btn- ">delete</button>
                                        </div>
                                    </form>  --}}
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
