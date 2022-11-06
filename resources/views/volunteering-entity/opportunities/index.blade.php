@extends('volunteering-entity.layouts.app')

@section('title', 'opportunities')

@section('breadcrumb')
    <li><a href="#">opportunities Management </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">opportunities Management</h6>
                            <a href="{{route('volunteering-entity.opportunities.create')}}"
                               class="btn bg-gradient-dark btn-sm btn-add"><i
                                        class="fa fa-plus fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Start date | Start time</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Finish date | End time</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Report</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">characteristic</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tasks</th>
                                    <th class="text-center text-secondary opacity-7">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->OPP_ID}}</td>
                                    <td>{{$item->OPP_NAME}}</td>
                                    <td>{{$item->OPP_START_DATE}} | {{$item->OPP_START_TIME}}</td>
                                    <td>{{$item->OPP_FINISH_DATE}} | {{$item->OPP_END_TIME}}</td>
                                    <td><a href="{{route('volunteering-entity.attendance_report')}}" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user"><i class="fa fa-file text-info fa-2x"></i></a></td>
                                    <td>
                                        <a href="{{route('volunteering-entity.opportunities.characteristic.index',$item->OPP_ID )}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"><i class="fa fa-tablet text-info fa-2x"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('volunteering-entity.opportunities.tasks.index', $item->OPP_ID)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"><i class="fa fa-table text-info fa-2x"></i>
                                        </a>
                                    </td>
                                    <td class="align-middle">

                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-eye text-info"></i>
                                        </a>
                                        <a href="{{route('volunteering-entity.opportunities.edit', $item->OPP_ID)}}"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-pen text-info"></i>
                                        </a>
                                        <a style="cursor: pointer" onclick="confirmAction('formid{{$item->OPP_ID}}', 'delete ?')"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>
                                        <form id="formid{{$item->OPP_ID}}" method="post" action="{{route('volunteering-entity.opportunities.destroy', $item->OPP_ID)}}">
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
