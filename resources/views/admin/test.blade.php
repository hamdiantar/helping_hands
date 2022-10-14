@extends('admin.layouts.app')

@section('title', 'opportunity title')

@section('breadcrumb')
    <li><a href="#">Growth Report</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Growth Report</h6>
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
                            <div class="col-md-6 offset-4">
                                <button type="button" class="btn btn-md bg-gradient-warning btn-lg w-50 mt-4 mb-0">
                                    Generate Report <i class="fa fa-file"></i>
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive text-center p-0">
                            <table class="table text-center table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center">Number Of Entity Registered</th>
                                    <th class="text-center">Number Of Entity Canceled</th>
                                    <th class="text-center">actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="badge bg-success">60</span></td>
                                    <td><span class="badge bg-danger">20</span></td>
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
