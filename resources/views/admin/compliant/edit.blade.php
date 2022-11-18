@extends('admin.layouts.app')

@section('title', 'packages')

@section('breadcrumb')
    <li><a href="#">Compliant </a> > Reply</li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Compliant > Reply</h6>
                            <a href="{{route('admin.compliant.index')}}"
                               class="btn btn-dark btn-sm btn-add"><i class="fa fa-times fs-15"></i></a>
                        </div>
                    </div>
                    <div class="card-body ml-3 mr-3">
                        <form method="post" action="{{route('admin.compliant.update', $compliant->COMP_ID)}}" id="form">
                            @csrf
                            @method('PUT')
                            <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                                <label class="form-label">Replay</label>
                                <textarea cols="5" required  name="COMP_REPLY"  class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">{{isset($compliant) ? $compliant->COMP_REPLY : old('COMP_REPLY')}}</textarea>
                            </div>
                            <div class="row col-md-2 offset-md-5 text-center">
                                <button form="form" type="submit" class="btn btn-md bg-gradient-warning btn-lg w-100 mt-4 mb-0">Save <i class="fa fa-file"></i></button>
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
