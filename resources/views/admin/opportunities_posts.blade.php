@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb')
    <li><a href="#">opportunities posts </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">opportunities posts</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3 mt-5">
                        <div class="table-responsive p-0">
                            <table class="table table-bordered mb-0" id="dataTable">
                                <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Entity Name</th>
                                    <th>Opportunity Name</th>
                                    <th>Start Date</th>
                                    <th>Finish Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $index=>$item)
                                    <tr>
                                        <td>{{$item->OPP_ID}}</td>
                                        <td>{{optional($item->volEntity)->VOL_ENTITY_NAME}}</td>
                                        <td>{{$item->OPP_NAME}}</td>
                                        <td>{{$item->OPP_START_DATE}}</td>
                                        <td>{{$item->OPP_FINISH_DATE}}</td>
                                        <td class="align-middle">
                                            <a style="cursor: pointer" onclick="confirmAction('formid{{$item->OPP_ID}}', 'publish this Opportunity ?')"
                                               class="text-secondary font-weight-bold text-xs  ml-2">
                                                <i class="fa fa-check text-success fa-2x"></i>
                                            </a>
                                            <form id="formid{{$item->OPP_ID}}" method="post" action="{{route('admin.confirmPost', $item->OPP_ID)}}">
                                                @csrf
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
