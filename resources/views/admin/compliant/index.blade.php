@extends('admin.layouts.app')

@section('title', 'Dashboard | Compliant')

@section('breadcrumb')
    <li><a href="#">Compliant </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Compliant</h6>

                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="pb-3"></div>
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Title
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Against
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date
                                    </th>
                                    <th class="text-center text-secondary opacity-7">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>name 1</td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">title 1</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Against 1</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        Description Description
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        12-12-2022
                                    </td>
                                    <td class="align-middle">
                                        <a style="cursor: pointer" onclick="replay('#formid', 'delete ?')" class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-comment text-info fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>name 1</td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">title 1</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Against 1</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        Description Description
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        12-12-2022
                                    </td>
                                    <td class="align-middle">
                                        <a style="cursor: pointer" onclick="replay('#formid', 'delete ?')" class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-comment text-info fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>name 1</td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">title 1</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Against 1</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        Description Description
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        12-12-2022
                                    </td>
                                    <td class="align-middle">
                                        <a style="cursor: pointer" onclick="replay('#formid', 'delete ?')" class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-comment text-info fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>name 1</td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">title 1</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Against 1</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        Description Description
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        12-12-2022
                                    </td>
                                    <td class="align-middle">
                                        <a style="cursor: pointer" onclick="replay('#formid', 'delete ?')" class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-comment text-info fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>name 1</td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">title 1</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Against 1</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        Description Description
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        12-12-2022
                                    </td>
                                    <td class="align-middle">
                                        <a style="cursor: pointer" onclick="replay('#formid', 'delete ?')" class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-comment text-info fa-2x"></i>
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
