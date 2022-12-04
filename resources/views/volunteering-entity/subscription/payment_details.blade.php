@extends('volunteering-entity.layouts.app')

@section('title', 'Add New Subscription')

@section('breadcrumb')
    <li><a href="#">Show Payment Details</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <a href="{{route('volunteering-entity.subscription.index')}}"
                               class="btn btn-dark btn-sm btn-add"><i class="fa fa-times fs-15"></i></a>
                        </div>
                    </div>
                    <div class="card-body ml-3 mr-3 text-center">
                        <h3 class="mb-3"> Payment Details : </h3>
                        <h4 class="mb-3">Payment Date :  {{optional($sub->payment)->PMT_DATE}}</h4>
                        <h4 class="mb-3">Payment Amount :  {{optional($sub->payment)->PMT_AMOUNT}} SAR</h4>
                        <h4>Payment Status :  <strong class="badge bg-success">PAID</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

