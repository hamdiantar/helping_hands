@extends('volunteering-entity.layouts.app')

@section('title', 'opportunity title')

@section('breadcrumb')
    <li><a href="#">{{$opportunity->OPP_NAME}}</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">listing Attendances [ {{$opportunity->OPP_NAME}} ]</h6>
                            <a href="{{route('volunteering-entity.opportunities.index')}}" class="btn bg-gradient-dark btn-sm btn-add ml-2"><i class="fa fa-arrow-circle-right  fs-15"></i></a>
                            <a href="{{route('volunteering-entity.opportunities.attendances.create', $opportunity->OPP_ID)}}" class="btn bg-gradient-dark btn-sm btn-add"><i class="fa fa-plus fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive p-0">
                            <table class="table table-bordered mb-0" id="dataTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Volunteer name</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->ATT_ID}}</td>
                                    <td>{{optional($item->volunteer)->full_name}}</td>
                                    <td>{{$item->ATT_DATE}}</td>
                                    <td>
                                        @if($item->ATT_STATUS == 'attend')
                                            <span class="badge bg-success">Attend</span>
                                        @else
                                            <span class="badge bg-danger">absent</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('volunteering-entity.opportunities.attendances.edit', ['opportunity' => $opportunity->OPP_ID, 'attendence' => $item->ATT_ID])}}"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-pen text-info"></i>
                                        </a>
                                        <a style="cursor: pointer" onclick="confirmAction('formid{{$item->OPP_TASK_ID}}', 'delete ?')"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>
                                        <form id="formid{{$item->ATT_ID}}" method="post" action="{{route('volunteering-entity.opportunities.attendances.destroy', ['opportunity' => $opportunity->OPP_ID, 'attendence' => $item->ATT_ID])}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
