@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb')
    <li><a href="#">Compliant Details</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Compliant Details</h6>
                            <a href="{{route('admin.compliant.index')}}"
                               class="btn btn-dark btn-sm btn-add"><i class="fa fa-times fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3 mt-2">
                        <div class="table-responsive p-0">
                            <table style="text-align: left !important;" class="table table-striped table-bordered mb-0 text-lg-end">
                                <tbody>
                                <tr>
                                    <td colspan="3" class="text-danger"> Volunteer Entity</td>
                                </tr>
                                <tr>
                                    <td><strong>FullName</strong> : {{optional($compliant->volunteer)->full_name}}</td>
                                    <td><strong>UserName</strong> : {{optional($compliant->volunteer)->VOL_USERNAME}}</td>
                                    <td><strong>E-Mail</strong> : {{optional($compliant->volunteer)->VOL_EMAIL}}</td>
                                </tr>
                                <tr>
                                <td colspan="3" class="text-danger"> Volunteer Entity</td>
                                </tr>
                                <tr>
                                    <td><strong>E-Mail</strong> : {{optional($compliant->against)->VOL_ENTITY_EMAIL}}</td>
                                    <td><strong>Name</strong> : {{optional($compliant->against)->VOL_ENTITY_NAME}}</td>
                                    <td><strong>Sector</strong> : {{optional($compliant->against)->VOL_ENTITY_SECTOR}}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-danger"> Compliant Details [ {{$compliant->COMP_STATUS}} ]</td>
                                </tr>
                                <tr>
                                    <td><strong>Title</strong> : {{$compliant->COMP_TITLE}}</td>
                                    <td><strong>Description</strong> : {{$compliant->COMP_DESCRIPTION}}</td>
                                    <td><strong>Date</strong> : {{$compliant->COMP_DATE}}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-danger">Replay</td>
                                </tr>
                                <tr>
                                    <td colspan="3">{{$compliant->COMP_REPLY}}</td>
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
