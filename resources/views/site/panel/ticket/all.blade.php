@extends('master.site')
@section('content')
@include('site.panel.section.panel_sidebar')
<div id="teacherpish">
    <div class="welcome">
        <div class="etebar-table shade">
            <div class="widget-title">
                <h3>
                    {{ $user->short(385) }}
                </h3>
                <div class="dot3">
                    <div class="button-container reight gray ">
                        @role('customer')
                        <a href="{{ route("userticket.create") }}" class="butt mb3 w-100">
                            {{ $user->short(386) }}
                        </a>
                        @endrole


                    </div>
                </div>
            </div>
            <div class="widget-content">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <span>

                            {{ $tickets->total() }}
                        </span> --}}
                    </div>
                    <div class="col-lg-12">
                        <div>

                            <div class="table-responsive">

                                <table>
                                    <thead>
                                        <tr>
                                            <th><span>
                                                    {{ $user->short(387) }}
                                                </span></th>
                                            <th><span> {{ $user->short(388) }}</span></th>
                                            <th><span>
                                                    {{ $user->short(92) }}
                                                </span></th>
                                            <th><span> {{ $user->short(252) }}</span></th>
                                            <th><span> {{ $user->short(389) }}</span></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $ticket )
                                        <tr>
                                            <td> {{ $ticket->number }}</td>
                                            <td> {{ $ticket->title }}</td>
                                            <td class="text-muted">
                                                {{ __("ticket_status.".$ticket->status) }}
                                            </td>
                                            <td class="text-muted">
                                                {{ $ticket->created_at }}
                                            </td>

                                            <td class="text-muted">
                                                <a class="show_ticket" href="{{ route("userticket.show",$ticket->id) }}">
                                                    {{-- <a href="{{ route("user.edit",$user->id) }}" class="" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش کاربر"> --}}
                                                    <i class="fas fa-edit "></i>
                                                    <span class="ml-right">
                                                        {{ $user->short(390) }}
                                                    </span>
                                                </a>
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
        </div>

    </div>


</div>












@endsection
