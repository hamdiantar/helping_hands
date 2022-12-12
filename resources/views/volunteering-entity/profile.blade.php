@extends('volunteering-entity.layouts.app')

@section('title', 'Volunteering Entity Profile')


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
                        Name : {{getAuthVolEntity()->VOL_ENTITY_USERNAME}}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                       E-Mail :  {{getAuthVolEntity()->VOL_ENTITY_EMAIL}}
                    </p>
                </div>
            </div>
        </div>
        <form method="post" action="{{route('volunteering-entity.profile.update')}}" id="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="row">
                    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                        <label class="form-label">Username : </label>
                        <input type="text" value="{{getAuthVolEntity()->VOL_ENTITY_USERNAME}}" name="VOL_ENTITY_USERNAME" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>

                    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                        <label class="form-label">E-Mail</label>
                        <input type="text" value="{{getAuthVolEntity()->VOL_ENTITY_EMAIL}}" name="VOL_ENTITY_EMAIL" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                        <label class="form-label">Name </label>
                        <input type="text" value="{{getAuthVolEntity()->VOL_ENTITY_NAME}}" name="VOL_ENTITY_NAME" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                        <label class="form-label">CR NO</label>
                        <input type="text" value="{{getAuthVolEntity()->VOL_ENTITY_CR_NO}}" name="VOL_ENTITY_CR_NO" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>

                    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" onfocus="focused(this)" name="password" onfocusout="defocused(this)">
                    </div>

                    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                        <label class="form-label">Sector</label>
                        <input type="text" readonly value="{{getAuthVolEntity()->VOL_ENTITY_SECTOR}}" name="VOL_ENTITY_SECTOR" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>

                    <div class="input-group col-md-6 input-group-outline mb-3 is-filled">
                        <label class="form-label">Logo</label>
                        <input type="file"  name="VOL_ENTITY_LOGO" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>

                    <div class="row col-md-3 offset-md-4 text-center">
                        <button type="submit" class="btn btn-md bg-gradient-warning btn-lg w-100 mt-4 mb-0">Update Profile <i class="fa fa-file"></i></button>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection

@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\VolEntity\VolEntityUpdateRequest', "#form") !!}
@endpush
