@extends('website.layouts.app')

@section('title', 'Join Us')
@section('content')
    <div class="main-banner2">
        <div class="container">
            <div class="card card-box-shadow">
                <div class="card-header card-header-custom bg-transparent text-center">
                    <h3>Volunteer Registration</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('volunteer.register')}}" class="row" id="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="VOL_USERNAME" class="form-label">UserName :</label>
                                <input autocomplete="new-password" value="{{old('VOL_USERNAME')}}" type="text" class="form-control" name="VOL_USERNAME" id="VOL_USERNAME">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Mail" class="form-label">E-Mail : </label>
                                <input type="email" class="form-control" value="{{old('VOL_USERNAME')}}" id="Mail" name="VOL_EMAIL">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input autocomplete="new-password" type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation" class="form-label">Password confirmation</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="First" class="form-label">First Name :</label>
                                <input type="text" value="{{old('VOL_FNAME')}}" class="form-control" id="First" name="VOL_FNAME">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Last" class="form-label">Last Name : </label>
                                <input type="text" value="{{old('VOL_LNAME')}}" class="form-control" id="Last" name="VOL_LNAME">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Phone" class="form-label">Phone : </label>
                                <input type="tel" value="{{old('VOL_PHONE')}}" class="form-control" id="Phone" name="VOL_PHONE">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="National" class="form-label">National Id : </label>
                                <input type="number" value="{{old('VOL_NATIONAL_ID')}}" class="form-control" id="National" name="VOL_NATIONAL_ID">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label">Gender</label>
                                <select id="inputState"  class="form-select select2" name="VOL_GENDER">
                                    <option value="">Select</option>
                                    <option value="male" {{old('VOL_GENDER') == 'male' ? 'selected' : ''}}>Male</option>
                                    <option value="female" {{old('VOL_GENDER') == 'Female' ? 'selected' : ''}}>Female</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="School" class="form-label">School Name : </label>
                                <input type="text" value="{{old('VOL_SCHOOL_NAME') }}" class="form-control" id="School" name="VOL_SCHOOL_NAME">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Target" class="form-label">Target Hours : </label>
                                <input type="number" value="{{old('VOL_TARGET_HOUR') ?? 0}}" class="form-control" id="Target" name="VOL_TARGET_HOUR">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Completed" class="form-label">Completed Hours : </label>
                                <input type="number" value="{{old('VOL_COMPLETED_HOUR') ?? 0}}" class="form-control" id="Completed" name="VOL_COMPLETED_HOUR">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Grade" class="form-label">Grade Level : </label>
                                <input type="text" value="{{old('VOL_GRADE_LEVEL')}}" class="form-control" id="Grade" name="VOL_GRADE_LEVEL">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="City" class="form-label">City : </label>
                                <input type="text" value="{{old('VOL_CITY')}}" class="form-control" id="City" name="VOL_CITY">
                            </div>

                            <div class="col-md-6 mb-3 mt-4">
                                <button form="form" type="submit" class="btn btn-primary">Sign in</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('js')
    {!! JsValidator::formRequest('App\Http\Requests\Website\VolunteerRegisterRequest', "#form") !!}
@endpush
