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
                       <form method="get">
                           <div class="row mt-5">
                               <div class="input-group col-md-4 input-group-outline mb-3 is-filled">
                                   <label class="form-label">Select Complaint Type</label>
                                   <select class="form-control" name="type">
                                       <option value="">Select</option>
                                       <option {{request()->type == 'from_volunteer' ? 'selected' : ''}} value="from_volunteer">From Volunteer</option>
                                       <option {{request()->type == 'from_entity' ? 'selected' : ''}} value="from_entity">From Volunteering Entity</option>
                                   </select>
                               </div>
                               <div class="col-md-2 text-center">
                                   <button type="submit" class="btn bg-gradient-warning btn-sm w-100 p-2">
                                       search
                                   </button>
                               </div>
                           </div>
                       </form>
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0" id="dataTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Against</th>
                                    <th>Status</th>
                                    <th class="text-center text-secondary opacity-7">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->COMP_ID}}</td>
                                    @if($item->type == 'from_volunteer')
                                    <td>{{optional($item->volunteer)->full_name}}</td>
                                    @else
                                        <td>{{optional($item->against)->VOL_ENTITY_NAME}}</td>
                                    @endif
                                    <td>{{$item->COMP_TITLE}}</td>
                                    @if($item->type == 'from_entity')
                                        <td><strong class="text-danger">{{optional($item->volunteer)->full_name}}</strong></td>
                                    @else
                                        <td><strong class="text-danger">{{optional($item->against)->VOL_ENTITY_NAME}}</strong></td>
                                    @endif
                                    <td>{{$item->COMP_STATUS}}</td>
                                    <td class="align-middle">
                                        <a href="{{route('admin.compliant.show',$item->COMP_ID )}}" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-eye text-info"></i>
                                        </a>
                                        <a style="cursor: pointer" href="{{route('admin.compliant.edit',$item->COMP_ID )}}"  class="text-secondary font-weight-bold text-xs  ml-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            <i class="fa fa-comment text-info fa-2x"></i>
                                        </a>
                                        <form id="formid{{$item->COMP_ID}}" style="display: none" method="post" action="{{route('admin.compliant.show',$item->COMP_ID)}}">
                                            @csrf
                                            @method('PUT')
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
