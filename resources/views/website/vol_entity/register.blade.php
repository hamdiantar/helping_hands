@extends('website.layouts.app')

@section('title', 'Join Us')
@section('content')
    <div class="main-banner2">
        <div class="container">
            <div class="card card-box-shadow">
                <div class="card-header card-header-custom bg-transparent text-center">
                    <h3>Volunteering Entity Registration </h3>
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
                                <label for="Name" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Sector" class="form-label">Sector : </label>
                                <input type="text" class="form-control" id="Sector">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Logo" class="form-label">Logo : </label>
                                <input type="file" class="form-control" id="Logo">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Credit_Type" class="form-label">Credit Type : </label>
                                <input type="text" class="form-control" id="Credit_Type">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Credit_number" class="form-label">Credit Number : </label>
                                <input type="number" class="form-control" id="Credit_number">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Holder" class="form-label">Credit Holder Name : </label>
                                <input type="text" class="form-control" id="Holder">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="cvv" class="form-label">Credit CVV : </label>
                                <input type="number" class="form-control" id="cvv">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Expiration" class="form-label">Credit Expiration Date : </label>
                                <input type="date" class="form-control" id="Expiration">
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
