@extends('website.layouts.app')

@section('title', 'Join Us')
@section('content')
    <div class="main-banner2">
        <div class="container">
            <div class="card card-box-shadow">
                <div class="card-header card-header-custom bg-transparent text-center">
                    <h3>Compliant</h3>
                </div>
                <div class="card-body">
                    <form class="row">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="Title" class="form-label">Title :</label>
                                <input type="text" class="form-control" id="Title">
                            </div>


                            <div class="col-md-4 mb-3">
                                <label for="Against" class="form-label">Against :</label>
                                <input type="text" class="form-control" id="Against">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="Date" class="form-label">Date : </label>
                                <input type="date" class="form-control" id="Date">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="Description" class="form-label">Description</label>
                                <textarea rows="3" class="form-control" id="Description"></textarea>
                            </div>
                            <div class="col-md-6 mb-3 mt-4">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
