@extends('admin.layouts.app')

@section('title', 'packages')

@section('breadcrumb')
    <li><a href="#">packages Management </a> > Add New</li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">packages Management > Add New</h6>
                            <a href="{{route('admin.packages.index')}}"
                               class="btn btn-dark btn-sm btn-add"><i class="fa fa-times fs-15"></i></a>
                        </div>
                    </div>
                    <div class="card-body ml-3 mr-3">
                        <form method="post" action="{{route('admin.packages.store')}}" id="form">
                            @csrf
                            @include('admin.packages.form')
                            <div class="row col-md-2 offset-md-5 text-center">
                                <button type="submit" class="btn btn-md bg-gradient-warning btn-lg w-100 mt-4 mb-0">
                                    Save <i class="fa fa-file"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\PackageRequest', "#form") !!}
@endpush
