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
                    <form class="row">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="UserName" class="form-label">UserName :</label>
                                <input type="text" class="form-control" id="UserName">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="Password">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="First" class="form-label">First Name :</label>
                                <input type="text" class="form-control" id="First">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Last" class="form-label">Last Name : </label>
                                <input type="text" class="form-control" id="Last">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Mail" class="form-label">E-Mail : </label>
                                <input type="email" class="form-control" id="Mail">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Phone" class="form-label">Phone : </label>
                                <input type="tel" class="form-control" id="Phone">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="National" class="form-label">National Id : </label>
                                <input type="number" class="form-control" id="National">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label">Gender</label>
                                <select id="inputState" class="form-select">
                                    <option value="">Select</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="School" class="form-label">School Name : </label>
                                <input type="text" class="form-control" id="School">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Target" class="form-label">Target Hours : </label>
                                <input type="number" class="form-control" id="Target">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Completed" class="form-label">Completed Hours : </label>
                                <input type="number" class="form-control" id="Completed">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Grade" class="form-label">Grade Level : </label>
                                <input type="text" class="form-control" id="Grade">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="City" class="form-label">City : </label>
                                <input type="text" class="form-control" id="City">
                            </div>

                            <div class="col-md-6 mb-3 mt-4">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
