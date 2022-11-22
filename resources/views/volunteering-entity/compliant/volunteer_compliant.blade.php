@extends('volunteering-entity.layouts.app')

@section('title', 'opportunities')

@section('breadcrumb')
    <li><a href="#">Volunteer Compliant </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Volunteer Compliant [ {{$volunteer->full_name}} ]</h6>
                            <a href="{{route('volunteering-entity.requests.index')}}"
                               class="btn btn-dark btn-sm btn-add"><i class="fa fa-times fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive p-0">
                            <table class="table table-bordered table-striped" id="dataTable">
                                <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Title</th>
                                    <th>Against</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($volunteer->compliants))
                                    @foreach($volunteer->compliants as $request)
                                        <tr>
                                            <td>{{$request->COMP_ID}}</td>
                                            <td>{{$request->COMP_TITLE}}</td>
                                            <td>{{$request->COMP_AGAINST}}</td>
                                            <td>{{$request->COMP_DATE}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"> <strong class="text-danger">Reply :</strong> {{$request->COMP_REPLY}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">No compliant Found</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

