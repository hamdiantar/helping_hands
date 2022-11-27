@extends('admin.layouts.app')

@section('title', 'opportunity title')

@section('breadcrumb')
    <li><a href="#">Most Packages Subscribed</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Most Packages Subscribed</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive text-center p-0">
                            <table class="table text-center table-bordered mb-0 text-center" id="dataTable">
                                <thead>
                                <tr>
                                    <th class="text-center"> Package Price</th>
                                    <th class="text-center"> Package Duration</th>
                                    <th class="text-center">Number Subscription</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($packages as $package)
                                    <tr>
                                        <td>{{$package->PACKAGE_PRICE}}</td>
                                        <td>{{$package->PACKAGE_DURATION}}</td>
                                        <td>
                                            @if($package->subs_count == 0)
                                                <span class="badge bg-danger">{{ $package->subs_count }}</span>
                                            @else
                                                <span class="badge bg-success">{{ $package->subs_count }}</span>
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
