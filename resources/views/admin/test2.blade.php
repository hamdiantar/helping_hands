@extends('admin.layouts.app')

@section('title', 'opportunity title')

@section('breadcrumb')
    <li><a href="#">Overall satisfaction rating on entities</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Overall satisfaction rating on entities</h6>
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
                                    <th class="text-center"> Entity Name</th>
                                    <th class="text-center">Number Of Complaint</th>
                                    <th class="text-center">Average Of Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Ithra Aramco </td>
                                    <td><span class="badge bg-danger">1</span></td>
                                    <td>
                                        <div class="progress-wrapper w-75 mx-auto">
                                            <div class="progress-success">
                                                <div class="progress-percentage">
                                                    <span class="text-xs font-weight-bold">80%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td> General Entertainment Authority  </td>
                                    <td><span class="badge bg-danger">2</span></td>
                                    <td>
                                        <div class="progress-wrapper w-75 mx-auto">
                                            <div class="progress-danger">
                                                <div class="progress-percentage">
                                                    <span class="text-xs font-weight-bold">50%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-danger w-50" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>

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
