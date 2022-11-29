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
                            <h6 class="text-white text-capitalize ps-3">Volunteering Entity</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <form method="get">
                            <div class="row mt-5">
                                <div class="input-group col-md-4 input-group-outline mb-3 is-filled">
                                    <label class="form-label">Select  Status</label>
                                    <select class="form-control" name="status">
                                        <option value="">Select</option>
                                        <option {{request()->status == 1 ? 'selected' : ''}} value="1">Accept</option>
                                        <option {{request()->status == 2 ? 'selected' : ''}} value="2">Reject</option>
                                    </select>
                                </div>
                                <div class="col-md-2 text-center">
                                    <button type="submit" class="btn bg-gradient-warning btn-sm w-100 p-2">
                                        search
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="pb-3"></div>
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Entity Name</th>
                                    <th>Sector</th>
                                    <th>CR number</th>
                                    <th>UserName</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->VOL_ENTITY_ID}}</td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{$item->logo_path}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$item->VOL_ENTITY_NAME}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$item->VOL_ENTITY_SECTOR}}</td>
                                    <td>{{$item->VOL_ENTITY_CR_NO}}</td>
                                    <td><span class="text-secondary text-xs font-weight-bold">{{$item->VOL_ENTITY_USERNAME}}</span></td>
                                    <td>
                                        @if($item->VOL_ENTITY_STATUS == 1)
                                            <span class="badge badge-sm bg-gradient-success">Accepted</span>
                                        @elseif($item->VOL_ENTITY_STATUS == 2)
                                            <span class="badge badge-sm bg-gradient-danger">Rejected</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-warning">Pending</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('admin.volunteering-entity.show', $item->VOL_ENTITY_ID)}}" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-eye fa-2x "></i>
                                        </a>
                                        @if($item->VOL_ENTITY_STATUS == 2 || $item->VOL_ENTITY_STATUS == 0)
                                        <a href="{{route('admin.ve.UpdateStatus', ['status' => 1, 'id' => $item->VOL_ENTITY_ID])}}" class="text-success font-weight-bold text-xs ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-check-circle text-success fa-2x"></i>
                                        </a>
                                        @endif
                                        @if($item->VOL_ENTITY_STATUS == 1 || $item->VOL_ENTITY_STATUS == 0)
                                        <a href="{{route('admin.ve.UpdateStatus', ['status' => 2, 'id' => $item->VOL_ENTITY_ID])}}" class="text-danger font-weight-bold text-xs   ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-times-circle text-danger fa-2x"></i>
                                        </a>
                                        @endif

                                        <a style="cursor: pointer" onclick="confirmAction('formid{{$item->VOL_ENTITY_ID}}', 'delete ?')"
                                           class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-trash text-danger fa-2x"></i>
                                        </a>
                                        <form id="formid{{$item->VOL_ENTITY_ID}}" method="post" action="{{route('admin.volunteering-entity.destroy', $item->VOL_ENTITY_ID)}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
