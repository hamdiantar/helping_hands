@extends('admin.layouts.app')

@section('title', 'Dashboard | Volunteering Entity')

@section('breadcrumb')
    <li><a href="#">Volunteering Entity </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Volunteering Entity
                                <strong>[  Requests <span class="badge bg-danger">3</span>  ]</strong></h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="pb-3"></div>
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Entity Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sector
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CR number
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        UserName
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-secondary opacity-7">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{asset('website/2.jpeg')}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Health Volunteering at RC Jubail </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Health</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">3766538523</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">username</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-warning">pending</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-eye fa-2x "></i>
                                        </a>
                                        <a href="javascript:;" class="text-success font-weight-bold text-xs ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-check-circle text-success fa-2x"></i>
                                        </a>
                                        <a href="javascript:;" class="text-danger font-weight-bold text-xs   ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-times-circle text-danger fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{asset('website/4.jpeg')}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Ithra Aramco  </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Community Service </p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">2089441725</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">username</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">accepted</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-eye fa-2x "></i>
                                        </a>
                                        <a href="javascript:;" class="text-success font-weight-bold text-xs ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-check-circle text-success fa-2x"></i>
                                        </a>
                                        <a href="javascript:;" class="text-danger font-weight-bold text-xs   ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-times-circle text-danger fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{asset('website/1.jpeg')}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">General Entertainment Authority  </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Entertainment </p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">4096554265</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">username</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-warning">pending</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-eye fa-2x "></i>
                                        </a>
                                        <a href="javascript:;" class="text-success font-weight-bold text-xs ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-check-circle text-success fa-2x"></i>
                                        </a>
                                        <a href="javascript:;" class="text-danger font-weight-bold text-xs   ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-times-circle text-danger fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{asset('website/3.jpeg')}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">DR SULAIMAN AL HABIB Medical Group   </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Health </p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">3098456382</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">username</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-warning">pending</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-eye fa-2x "></i>
                                        </a>
                                        <a href="javascript:;" class="text-success font-weight-bold text-xs ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-check-circle text-success fa-2x"></i>
                                        </a>
                                        <a href="javascript:;" class="text-danger font-weight-bold text-xs   ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-times-circle text-danger fa-2x"></i>
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
