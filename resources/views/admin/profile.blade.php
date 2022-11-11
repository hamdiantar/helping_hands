@extends('admin.layouts.app')

@section('title', 'Admin Profile')


@section('content')
    <div class="card card-body mx-3 mx-md-4 mt-n1">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <span  style="font-size: 30px" class="material-icons opacity-10 text-danger">person</span>
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{getAuthAdmin()->full_name}}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        @ {{getAuthAdmin()->ADMIN_USERNAME}}
                    </p>
                </div>
            </div>
        </div>
        <form method="post" action="{{route('admin.profile.update')}}" id="form">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="row">

                <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                    <label class="form-label">First Name</label>
                    <input type="text" value="{{getAuthAdmin()->ADMIN_FNAME}}" name="ADMIN_FNAME" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>

                <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                    <label class="form-label">Last Name</label>
                    <input type="text" value="{{getAuthAdmin()->ADMIN_LNAME}}" name="ADMIN_LNAME" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                    <label class="form-label">UserName</label>
                    <input type="text" value="{{getAuthAdmin()->ADMIN_USERNAME}}" name="ADMIN_USERNAME" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                    <label class="form-label">E-Mail</label>
                    <input type="text" value="{{getAuthAdmin()->ADMIN_EMAIL}}" name="ADMIN_EMAIL" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>

                <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" onfocus="focused(this)" name="password" onfocusout="defocused(this)">
                </div>

                <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                    <label class="form-label">Position</label>
                    <input type="text" value="{{getAuthAdmin()->ADMIN_POSITION}}" name="ADMIN_POSITION" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>

                <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                    <label class="form-label">phone number</label>
                    <input type="text" value="{{getAuthAdmin()->ADMIN_PHONE}}" name="ADMIN_PHONE" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>

                <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                    <label class="form-label">Role</label>
                    <input type="text" value="{{getAuthAdmin()->ADMIN_ROLE}}" name="ADMIN_ROLE" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>


                <div class="row col-md-3 offset-md-4 text-center">
                    <button type="submit" class="btn btn-md bg-gradient-warning btn-lg w-100 mt-4 mb-0">
                        Update Profile <i class="fa fa-file"></i>
                    </button>
                </div>

            </div>

        </div>
        </form>
    </div>
@endsection

@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\Admin\UpdateAdminRequest', "#form") !!}
@endpush
