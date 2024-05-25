@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <br>
    <div class="etebar-table shade">
        <div class="widget-title">
            <h3>        {{ $user->short(357) }}</h3>
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

                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>

                        <div class="table-responsive">

                            <table>
                                <tbody>
                                    <tr>
                                        <th>id</th>
                                        <th>      {{ $user->short(336) }}</th>
                                        {{--  <th>{{ $user->short(337) }} </th>  --}}
                                        <th> {{ $user->short(359) }}</th>
                                        <th> {{ $user->short(252) }}</th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    @foreach ($edits as $edit )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $edit->student->name }}</td>
                                        <td>{{ $edit->old }}</td>
                                        <td>{{ $edit->created_at }}</td>
                                    </tr>
                                    @endforeach
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
