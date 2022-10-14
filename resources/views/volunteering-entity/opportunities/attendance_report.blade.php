@extends('volunteering-entity.layouts.app')

@section('title', 'opportunities')

@section('breadcrumb')
    <li><a href="#"> Attendance </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">opportunity title > Attendance</h6>
                            <a href="{{route('volunteering-entity.opportunities.index')}}"
                               class="btn bg-gradient-dark btn-sm btn-add"><i class="fa fa-times-circle fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        volunteer Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Receive certification ?
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Abeer Mohammed</td>
                                    <td><span class="badge bg-danger">absent</span></td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td>Dalal Alhajri</td>
                                    <td><span class="badge bg-success">attend</span></td>
                                    <td>yes</td>
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
