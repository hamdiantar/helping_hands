@extends('website.layouts.app')

@section('title', 'Compliant')
@section('content')
    <div class="main-banner2">
        <div class="container" style="margin-top: 42px;">
            <div class="card card-box-shadow">
                <div class="card-header card-header-custom bg-transparent text-center">
                    <h3>Compliant</h3>
                </div>
                <div class="card-body">
                    <form class="row" method="post" action="{{route('compliant.post')}}">
                        @csrf
                        <input type="hidden" name="VOL_ENTITY_ID" value="{{$volEntity->VOL_ENTITY_ID}}">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="Title" class="form-label">Title :</label>
                                <input  name="COMP_TITLE" type="text" class="form-control" id="Title">
                            </div>


                            <div class="col-md-4 mb-3">
                                <label for="Against" class="form-label">Against :</label>
                                <input type="text" name="COMP_AGAINST" class="form-control" id="Against" readonly value="{{$volEntity->VOL_ENTITY_NAME}}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="Date" class="form-label">Date : </label>
                                <input type="date" name="COMP_DATE" class="form-control" id="Date">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="Description" class="form-label">Description</label>
                                <textarea rows="3" name="COMP_DESCRIPTION" class="form-control" id="Description"></textarea>
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
