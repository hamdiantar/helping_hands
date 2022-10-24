@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb')
    <li><a href="#">Volunteers Management </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Volunteers Management</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3 mt-5">
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #VOL_ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        FullName
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        UserName
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        E-Mail
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       completed Hours
                                    </th>
                                    <th class="text-center text-secondary opacity-7">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $index=>$item)
                                <tr>
                                    <td>{{$item->VOL_ID}}</td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$item->full_name}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$item->VOL_USERNAME}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$item->VOL_EMAIL}}</p>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">{{$item->VOL_COMPLETED_HOUR}}</span>
                                    </td>

                                    <td class="align-middle">
                                        <a href="{{route('admin.volunteers.show', $item->VOL_ID)}}" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-eye text-info fa-2x"></i>
                                        </a>
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
