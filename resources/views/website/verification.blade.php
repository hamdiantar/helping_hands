@extends('website.layouts.app')

@section('title', 'Join Us')
@section('content')
    <div class="main-banner2">
        <div class="container" style="margin-top: 42px;">
            <div class="card card-box-shadow">
                <div class="card-header card-header-custom bg-transparent text-center">
                    <h3>Verification</h3>
                </div>
                <div class="card-body">
                    <form class="row">
                        <div class="row">
                            <div class="col-md-8 offset-2 mt-4 mb-3">
                                <label for="Title" class="form-label">Certification id :</label>
                                <input type="text" class="form-control" id="Title">
                            </div>
                            <div class="col-md-6 mb-3 mt-4">
                                <button type="submit" class="btn btn-primary">verify</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
