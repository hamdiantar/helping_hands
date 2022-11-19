@extends('volunteering-entity.layouts.app')

@section('title', 'Certifications')

@section('breadcrumb')
    <li><a href="#">opportunities Management | Certifications </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">opportunities Management | Certifications</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3 mt-5">
                        <div class="table-responsive p-0">
                            <table class="table table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Opportunity</th>
                                    <th class="text-center">Number OF Certifications</th>
                                    <th class="text-center">Certifications</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{$item->OPP_ID}}</td>
                                        <td>{{$item->OPP_NAME}}</td>
                                        <td><span class="badge bg-info">{{count($item->certifications)}}</span></td>
                                        <td>
                                            <a href="{{route('volunteering-entity.opportunities.certifications.index',$item->OPP_ID )}}"
                                               class="text-secondary font-weight-bold text-xs">
                                              <span class="material-icons opacity-10">badge</span>
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
