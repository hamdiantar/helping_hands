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
                        <div class="row box-custom">
                            <div class="col-md-6">
                                <label>Date From :</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Date To :</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-md bg-gradient-warning btn-lg w-30 mt-4 mb-0">
                                    Generate Report <i class="fa fa-file"></i>
                                </button>
                                <button type="button" class="btn btn-md bg-gradient-warning btn-lg w-30 mt-4 mb-0 mr-2">
                                   print <i class="fa fa-print"></i>
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive text-center p-0">
                            <table class="table text-center table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center">Event Name</th>
                                    <th class="text-center">Number Of Attendance</th>
                                    <th class="text-center">compliant ?</th>
                                    <th class="text-center">responsible</th>
                                    <th class="text-center">actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>School Visits Operation </td>
                                    <td><span class="badge bg-success">2</span></td>
                                    <td>No</td>
                                    <td>Ithra admin</td>
                                    <td><a href="#">read more....</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
