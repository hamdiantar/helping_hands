@extends('admin.layouts.app')

@section('title', 'Dashboard | Volunteering Entity')

@section('breadcrumb')
    <li><a href="#">Volunteering Entity | Show Details</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Volunteering Entity | Show Details</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="pb-3"></div>
                        <h3 class="text-center mt-3 mb-2">Volunteering Entity Details</h3>
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Entity Name</th>
                                    <th>Sector</th>
                                    <th>CR number</th>
                                    <th>UserName</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$item->VOL_ENTITY_ID}}</td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{$item->logo_path}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$item->VOL_ENTITY_NAME}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$item->VOL_ENTITY_SECTOR}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$item->VOL_ENTITY_CR_NO}}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{$item->VOL_ENTITY_USERNAME}}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            @if($item->VOL_ENTITY_STATUS == 1)
                                                <span class="badge badge-sm bg-gradient-success">Accepted</span>
                                            @elseif($item->VOL_ENTITY_STATUS == 2)
                                                <span class="badge badge-sm bg-gradient-danger">Rejected</span>
                                            @else
                                                <span class="badge badge-sm bg-gradient-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                               data-toggle="tooltip" data-original-title="Edit user">
                                                <i class="fa fa-eye fa-2x "></i>
                                            </a>
                                            @if($item->VOL_ENTITY_STATUS == 2 || $item->VOL_ENTITY_STATUS == 0)
                                                <a href="{{route('admin.ve.UpdateStatus', ['status' => 1, 'id' => $item->VOL_ENTITY_ID])}}" class="text-success font-weight-bold text-xs ml-2"
                                                   data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa fa-check-circle text-success fa-2x"></i>
                                                </a>
                                            @endif
                                            @if($item->VOL_ENTITY_STATUS == 1 || $item->VOL_ENTITY_STATUS == 0)
                                                <a href="{{route('admin.ve.UpdateStatus', ['status' => 2, 'id' => $item->VOL_ENTITY_ID])}}" class="text-danger font-weight-bold text-xs   ml-2"
                                                   data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa fa-times-circle text-danger fa-2x"></i>
                                                </a>
                                            @endif

                                            <a style="cursor: pointer" onclick="confirmAction('formid{{$item->VOL_ENTITY_ID}}', 'delete ?')"
                                               class="text-secondary font-weight-bold text-xs  ml-2"
                                               data-toggle="tooltip" data-original-title="Edit user">
                                                <i class="fa fa-trash text-danger fa-2x"></i>
                                            </a>
                                            <form id="formid{{$item->VOL_ENTITY_ID}}" method="post" action="{{route('admin.volunteering-entity.destroy', $item->VOL_ENTITY_ID)}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                            <h3 class="text-center mt-3 mb-2">Opportunities</h3>
                            <div class="row justify-content-center">
                                @if(count($item->opps->where('OPP_STATUS', 1)))
                                    @foreach($item->opps->where('OPP_STATUS', 1) as $opp)
                                        <article class="col-md-12 mb-5 post vt-post" style="border: 1px solid #fbc583;padding: 8px;border-radius: 10px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="caption">
                                                        <h3 class="md-heading text-center"><a href="#">{{$opp->OPP_NAME}}</a></h3>
                                                        <p>{{$opp->OPP_DESCRIPTION}}</p>
                                                        <div class="author-info-2">
                                                            <p class="mb-2">Opportunity Details : </p>
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                <tr>
                                                                    <td>Capacity</td>
                                                                    <td>Booked</td>
                                                                    <td>Available</td>
                                                                    <td>Total Hours</td>
                                                                    <td>Start Date</td>
                                                                    <td>End Date</td>
                                                                    <td>Location</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="badge bg-info">{{$opp->OPP_CAPACITY}}</span> student</td>
                                                                    <td><span class="badge bg-danger">{{$opp->sdfsdf}}</span> student</td>
                                                                    <td><span class="badge bg-success">{{$opp->sdfsdf}}</span> student</td>
                                                                    <td>{{$opp->OPP_TOTAL_HOUR}} Hours</td>
                                                                    <td><p>{{$opp->OPP_START_DATE}} | {{$opp->OPP_START_TIME}}</p></td>
                                                                    <td><p>{{$opp->OPP_FINISH_DATE}} | {{$opp->OPP_END_TIME}}</p></td>
                                                                    <td>{{$opp->OPP_LOCATION}}</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p class="mb-2">Opportunity characteristic : </p>
                                                                <table class="table table-bordered">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Name</td>
                                                                        <td>Description</td>
                                                                    </tr>
                                                                    @foreach($opp->chars as $char)
                                                                        <tr>
                                                                            <td>{{$char->VOL_CH_NAME}} </td>
                                                                            <td>{{$char->VOL_CH_DESCRIPTION}} </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-2">Opportunity Tasks : </p>
                                                                <table class="table table-bordered">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Name</td>
                                                                        <td>Description</td>
                                                                    </tr>
                                                                    @foreach($opp->tasks as $task)
                                                                        <tr>
                                                                            <td>{{$task->OPP_TASK_NAME}} </td>
                                                                            <td>{{$task->OPP_TASK_DESCRIPTION}} </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                @else
                                    <h4 class="text-danger text-center mb-5 mt-5 pb-5">No Opportunity found !</h4>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
