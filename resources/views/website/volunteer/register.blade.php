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
                                <input type="text" value="{{old('VOL_NATIONAL_ID')}}" class="form-control" id="National" name="VOL_NATIONAL_ID">
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
                                <input min="0" type="number" value="{{old('VOL_TARGET_HOUR') ?? 0}}" class="form-control" id="Target" name="VOL_TARGET_HOUR">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="VOL_GRADE_LEVEL" class="form-label">Grade Level : </label>
                                <select id="VOL_GRADE_LEVEL"  class="form-select select2" name="VOL_GRADE_LEVEL">
                                    <option value="">Select</option>
                                    <option value="first" {{old('VOL_GRADE_LEVEL') == 'first' ? 'selected' : ''}}>first</option>
                                    <option value="second" {{old('VOL_GRADE_LEVEL') == 'second' ? 'selected' : ''}}>second</option>
                                    <option value="third" {{old('VOL_GRADE_LEVEL') == 'third' ? 'selected' : ''}}>third</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="VOL_CITY" class="form-label">City : </label>
                                <select id="VOL_CITY" class="form-select select2" name="VOL_CITY">
                                    <option value="">Select</option>
                                    <option value="Abha" {{old('VOL_ENTITY_SECTOR') == 'Abha' ? 'selected' : ''}}>Abha</option>
                                    <option value="Abqaiq" {{old('VOL_ENTITY_SECTOR') == 'Abqaiq' ? 'selected' : ''}}>Abqaiq</option>
                                    <option value="Al-Bahah" {{old('VOL_ENTITY_SECTOR') == 'Al-Bahah' ? 'selected' : ''}}>Al-Bahah</option>
                                    <option value="Al-Dammam" {{old('VOL_ENTITY_SECTOR') == 'Al-Dammam' ? 'selected' : ''}}>Al-Dammam</option>
                                    <option value="Al-Jubail" {{old('VOL_ENTITY_SECTOR') == 'Al-Jubail' ? 'selected' : ''}}>Al-Jubail</option>
                                    <option value="Al-Hufuf" {{old('VOL_ENTITY_SECTOR') == 'Al-Hufuf' ? 'selected' : ''}}>Al-Hufuf</option>
                                    <option value="Al-Jawf" {{old('VOL_ENTITY_SECTOR') == 'Al-Jawf' ? 'selected' : ''}}>Al-Jawf</option>
                                    <option value="Al-Kharj (oasis)" {{old('VOL_ENTITY_SECTOR') == 'Al-Kharj (oasis)' ? 'selected' : ''}}>Al-Kharj (oasis)</option>
                                    <option value="Al-Khubar" {{old('VOL_ENTITY_SECTOR') == 'Al-Khubar' ? 'selected' : ''}}>Al-Khubar</option>
                                    <option value="Al-Qatif" {{old('VOL_ENTITY_SECTOR') == 'Al-Qatif' ? 'selected' : ''}}>Al-Qatif</option>
                                    <option value=" Al-Taif" {{old('VOL_ENTITY_SECTOR') == ' Al-Taif' ? 'selected' : ''}}> Al-Taif</option>
                                    <option value="Buraydah" {{old('VOL_ENTITY_SECTOR') == 'Buraydah' ? 'selected' : ''}}>Buraydah</option>
                                    <option value="Dhahran" {{old('VOL_ENTITY_SECTOR') == 'Dhahran' ? 'selected' : ''}}>Dhahran</option>
                                    <option value="Hail" {{old('VOL_ENTITY_SECTOR') == 'Hail' ? 'selected' : ''}}>Hail</option>
                                    <option value="Jiddah" {{old('VOL_ENTITY_SECTOR') == 'Jiddah' ? 'selected' : ''}}>Jiddah</option>
                                    <option value="Jizan" {{old('VOL_ENTITY_SECTOR') == 'Jizan' ? 'selected' : ''}}>Jizan</option>
                                    <option value=" Khamis Mushayt" {{old('VOL_ENTITY_SECTOR') == ' Khamis Mushayt' ? 'selected' : ''}}> Khamis Mushayt</option>
                                    <option value="King Khalid Military City" {{old('VOL_ENTITY_SECTOR') == 'King Khalid Military City' ? 'selected' : ''}}>King Khalid Military City</option>
                                    <option value="Mecca" {{old('VOL_ENTITY_SECTOR') == 'Mecca' ? 'selected' : ''}}>Mecca</option>
                                    <option value="Medina" {{old('VOL_ENTITY_SECTOR') == 'Medina' ? 'selected' : ''}}>Medina</option>
                                    <option value="Najran" {{old('VOL_ENTITY_SECTOR') == 'Najran' ? 'selected' : ''}}>Najran</option>
                                    <option value="Ras Tanura" {{old('VOL_ENTITY_SECTOR') == 'Ras Tanura' ? 'selected' : ''}}>Ras Tanura</option>
                                    <option value="Riyadh" {{old('VOL_ENTITY_SECTOR') == 'Riyadh' ? 'selected' : ''}}>Riyadh</option>
                                    <option value="Sakaka" {{old('VOL_ENTITY_SECTOR') == 'Sakaka' ? 'selected' : ''}}>Sakaka</option>
                                    <option value="Tabuk" {{old('VOL_ENTITY_SECTOR') == 'Tabuk' ? 'selected' : ''}}>Tabuk</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3 mt-4">
                                <button form="form" type="submit" class="btn btn-primary">Sign Up</button>
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
