@extends('volunteering-entity.layouts.app')

@section('title', 'opportunity title')

@section('breadcrumb')
    <li><a href="#">Applicants</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Applicants</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive text-center p-0">
                            <table class="table text-center table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center">#Request ID</th>
                                    <th class="text-center">volunteer Name</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Opportunity</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Rating</th>
                                    <th class="text-center">actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->REQ_ID}}</td>
                                    <td>{{optional($item->volunteer)->full_name}}</td>
                                    <td>{{$item->REQ_DATE}}</td>
                                    <td>{{optional($item->opp)->OPP_NAME}}</td>
                                    <td>
                                        @if($item->REQ_STATUS == 'accept')
                                            <span class="badge badge-sm bg-gradient-success">{{$item->REQ_STATUS}}</span>
                                        @elseif($item->REQ_STATUS == 'reject')
                                            <span class="badge badge-sm bg-gradient-danger">{{$item->REQ_STATUS}}</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-warning">{{$item->REQ_STATUS}}</span>
                                        @endif
{{--                                        <span class="badge bg-success"></span>--}}
                                    </td>
                                    <td><a href="{{route('volunteering-entity.getVolunteerWithComplaint', optional($item->volunteer)->VOL_ID)}}">Show Rating</a></td>
                                    <td>
                                        @if($item->REQ_STATUS == 'pending')
                                            <a href="{{route('volunteering-entity.requests.UpdateStatus', ['status' => 'accept', 'id' => $item->REQ_ID])}}" class="text-success font-weight-bold text-xs ml-2"
                                               data-toggle="tooltip" data-original-title="Edit user">
                                                <i class="fa fa-check-circle text-success fa-2x"></i>
                                            </a>
                                            <a href="{{route('volunteering-entity.requests.UpdateStatus', ['status' => 'reject', 'id' => $item->REQ_ID])}}" class="text-danger font-weight-bold text-xs   ml-2"
                                               data-toggle="tooltip" data-original-title="Edit user">
                                                <i class="fa fa-times-circle text-danger fa-2x"></i>
                                            </a>
                                        @endif

                                        @if($item->REQ_STATUS == 'accept')
                                                <a href="{{route('volunteering-entity.requests.UpdateStatus', ['status' => 'reject', 'id' => $item->REQ_ID])}}" class="text-danger font-weight-bold text-xs   ml-2"
                                                   data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa fa-times-circle text-danger fa-2x"></i>
                                                </a>
                                        @endif
                                        @if($item->REQ_STATUS == 'reject')
                                                <a href="{{route('volunteering-entity.requests.UpdateStatus', ['status' => 'accept', 'id' => $item->REQ_ID])}}" class="text-success font-weight-bold text-xs ml-2"
                                                   data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa fa-check-circle text-success fa-2x"></i>
                                                </a>
                                        @endif
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
@endsection
