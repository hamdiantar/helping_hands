@extends('admin.layouts.app')

@section('title', 'opportunity title')

@section('breadcrumb')
    <li><a href="#">Most Volunteering Entity Has Complaint</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Most Volunteering Entity Has Complaint</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive text-center p-0">
                            <table class="table text-center table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center">Entity Name</th>
                                    <th class="text-center">Number Of Complaint</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $entity)
                                    <tr>
                                        <td>{{$entity->VOL_ENTITY_NAME}}</td>
                                        <td>
                                            @if($entity->compliants_count == 0)
                                                <span class="badge bg-danger">{{ $entity->compliants_count }}</span>
                                            @else
                                                <span class="badge bg-success">{{ $entity->compliants_count }}</span>
                                            @endif
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
