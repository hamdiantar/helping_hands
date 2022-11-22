@extends('volunteering-entity.layouts.app')

@section('title', 'opportunities')

@section('breadcrumb')
    <li><a href="#">opportunities Management </a> > Show Details</li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Compliant Management > Show Details</h6>
                            <a href="{{route('volunteering-entity.compliant.index')}}"
                               class="btn btn-dark btn-sm btn-add"><i class="fa fa-times fs-15"></i></a>
                        </div>
                    </div>
                    <div class="card-body ml-3 mr-3">
                        <div class="row">

                            <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                                <label class="form-label">Volunteer</label>
                                <input disabled type="text" name="COMP_TITLE" value="{{optional($item->volunteer)->full_name}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">

                            </div>

                            <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                                <label class="form-label">Complaint Title</label>
                                <input disabled type="text" name="COMP_TITLE" value="{{isset($item) ? $item->COMP_TITLE : old('COMP_TITLE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>

                            <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                                <label class="form-label">Against</label>
                                <input disabled type="text" name="COMP_AGAINST" value="{{isset($item) ? $item->COMP_AGAINST : old('COMP_AGAINST')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>

                            <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                                <label class="form-label">Date</label>
                                <input disabled type="date" name="COMP_DATE" value="{{isset($item) ? $item->COMP_DATE : old('COMP_DATE')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>

                            <label class="form-label">description</label>
                            <div class="input-group col-md-6 mb-3">

                                <textarea disabled style="border: 1px solid #ff993a" name="COMP_DESCRIPTION" rows="4" class="form-control">{{isset($item) ? $item->COMP_DESCRIPTION : old('COMP_DESCRIPTION')}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <h3>Reply : </h3>

                                <textarea disabled style="border: 1px solid #ff993a" name="COMP_DESCRIPTION" rows="4" class="form-control">{{$item->COMP_REPLY}}</textarea>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
