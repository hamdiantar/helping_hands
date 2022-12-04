@extends('volunteering-entity.layouts.app')

@section('title', 'subscription')

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">subscription</h6>
                            <a href="{{route('volunteering-entity.subscription.create')}}" class="btn bg-gradient-dark btn-sm btn-add"><i class="fa fa-plus fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0" id="dataTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Package Price</th>
                                    <th>Package Duration</th>
                                    <th>Subscription Date</th>
                                    <th>Payment Status</th>
                                    <th>Payment Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($volEntity->subs as $item)
                                <tr>
                                    <td>{{$item->SUB_ID}}</td>
                                    <td>{{optional($item->package)->PACKAGE_PRICE}} SAR</td>
                                    <td>{{optional($item->package)->PACKAGE_DURATION}}</td>
                                    <td>{{$item->SUB_DATE}}</td>
                                    <td><span class="badge bg-success">PIAD</span></td>
                                    <td>
                                        <a href="{{route('volunteering-entity.subscription.payment', $item->SUB_ID)}}" class="btn btn-outline-primary">Show </a>
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
