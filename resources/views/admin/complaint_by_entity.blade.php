@extends('admin.layouts.app')

@section('title', 'Dashboard | Compliant')

@section('breadcrumb')
    <li><a href="#">Compliants Of Volunteering Entity</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Volunteering Entity Compliant [{{$volEntity->VOL_ENTITY_NAME}}]</h6>
                            <a href="{{route('admin.report-complaint')}}"
                               class="btn btn-dark btn-sm btn-add"><i class="fa fa-times fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <form>
                            <div class="row box-custom">
                                <div class="col-md-6">
                                    <label>Date From :</label>
                                    <input type="date" value="{{request()->date_from}}" name="date_from" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Date To :</label>
                                    <input type="date" value="{{request()->date_to}}" name="date_to" class="form-control">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-md bg-gradient-warning btn-lg w-30 mt-4 mb-0">
                                        Generate Report <i class="fa fa-file"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0" id="dataTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Against</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Reply</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($complaints as $item)
                                    <tr>
                                        <td>{{$item->COMP_ID}}</td>
                                        @if($item->type == 'from_volunteer')
                                            <td>{{optional($item->volunteer)->full_name}}</td>
                                        @else
                                            <td>{{optional($item->against)->VOL_ENTITY_NAME}}</td>
                                        @endif
                                        <td>{{$item->COMP_TITLE}}</td>
                                        @if($item->type == 'from_entity')
                                            <td><strong class="text-danger">{{optional($item->volunteer)->full_name}}</strong></td>
                                        @else
                                            <td><strong class="text-danger">{{optional($item->against)->VOL_ENTITY_NAME}}</strong></td>
                                        @endif
                                        <td>{{$item->COMP_STATUS}}</td>
                                        <td>{{$item->COMP_DATE}}</td>
                                        <td>{{$item->COMP_REPLY}}</td>
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
