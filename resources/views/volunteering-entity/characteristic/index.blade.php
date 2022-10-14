@extends('volunteering-entity.layouts.app')

@section('title', 'opportunity title')

@section('breadcrumb')
    <li><a href="#">School Visits Operation</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">School Visits Operation [listing characteristic]</h6>
                            <a href="{{route('volunteering-entity.characteristic.create')}}"
                               class="btn bg-gradient-dark btn-sm btn-add"><i
                                        class="fa fa-plus fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        characteristic name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        characteristic desc
                                    </th>
                                    <th class="text-center text-secondary opacity-7">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Age</td>
                                    <td>16</td>
                                    <td class="align-middle">
                                        <a href="{{route('volunteering-entity.characteristic.edit', 1)}}"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-pen text-info"></i>
                                        </a>
                                        <a style="cursor: pointer" onclick="confirmAction('#formid', 'delete ?')"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Values</td>
                                    <td>Responsibility</td>
                                    <td class="align-middle">
                                        <a href="{{route('volunteering-entity.characteristic.edit', 1)}}"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-pen text-info"></i>
                                        </a>
                                        <a style="cursor: pointer" onclick="confirmAction('#formid', 'delete ?')"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>
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
