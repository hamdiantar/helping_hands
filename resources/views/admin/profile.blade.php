@extends('admin.layouts.app')

@section('title', 'Admin Profile')


@section('content')
    <div class="card card-body mx-3 mx-md-4 mt-n1">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{asset('assets/img/bruce-mars.jpg')}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        Dala Mohammed
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        Admin
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="input-group col-md-6 input-group-outline mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="input-group col-md-6 input-group-outline mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="input-group col-md-6 input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>

                <div class="input-group col-md-6 input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>

                <div class="input-group col-md-6 input-group-outline mb-3">
                    <label class="form-label">phone number</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>

                <div class="input-group col-md-6 input-group-outline mb-3">
                    <label class="form-label">address</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="row col-md-3 offset-md-4 text-center">
                    <button type="button" class="btn btn-md bg-gradient-warning btn-lg w-100 mt-4 mb-0">
                        Update Profile <i class="fa fa-file"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection

