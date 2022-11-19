@extends('volunteering-entity.layouts.app')

@section('title', 'opportunity title')

@section('breadcrumb')
    <li><a href="#">Entity performance summary report</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Entity performance summary report</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                            <form method="get" action="{{route('volunteering-entity.performance_report')}}">
                                @csrf
                                <div class="row box-custom">
                                <div class="col-md-6">
                                    <label>Date From :</label>
                                    <input type="date" name="date_from" value="{{request()->date_from}}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Date To :</label>
                                    <input type="date" name="date_to" value="{{request()->date_to}}" class="form-control">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-md bg-gradient-warning  mt-4 mb-0">
                                        Generate Report <i class="fa fa-file"></i>
                                    </button>
                                    <a href="{{route('volunteering-entity.performance_report')}}" class="btn btn-md bg-gradient-warning  mt-4 mb-0">
                                     clear <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                </div>
                            </form>
                        <div class="table-responsive text-center p-0">
                            <table class="table text-center table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center">Event Name</th>
                                    <th class="text-center">Number Of Attendance</th>
                                    <th class="text-center">compliant ?</th>
                                    <th class="text-center">responsible</th>
                                    <th class="text-center">Start Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->OPP_NAME}}</td>
                                    <td><span class="badge bg-success">{{count($item->attends)}}</span></td>
                                    <td>
                                        @if($item->volEntity && $item->volEntity->compliants)
                                            <p>Yes</p>
                                        @else
                                            <p>No</p>
                                        @endif
                                    </td>
                                    <td>{{optional($item->volEntity)->VOL_ENTITY_NAME}}</td>
                                    <td>{{$item->OPP_START_DATE}}</td>
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
