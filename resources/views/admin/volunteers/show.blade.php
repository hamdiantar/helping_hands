@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb')
    <li><a href="#">Volunteers Management | Volunteer Details</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Volunteers Management | Volunteer Details</h6>
                            <a href="{{route('admin.volunteers.index')}}"
                               class="btn btn-dark btn-sm btn-add"><i class="fa fa-times fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3 mt-2">
                        <h3 class="text-center p-3">Volunteer Details :</h3>
                        <div class="table-responsive p-0">
                            <table style="text-align: left !important;" class="table table-striped table-bordered mb-0 text-lg-end">
                              <tbody>
                              <tr>
                                  <td><strong>FullName</strong> : {{$item->full_name}}</td>
                                  <td><strong>UserName</strong> : {{$item->VOL_USERNAME}}</td>
                                  <td><strong>E-Mail</strong> : {{$item->VOL_EMAIL}}</td>
                              </tr>
                              <tr>
                                  <td><strong>Phone Number</strong> : {{$item->VOL_PHONE}}</td>
                                  <td><strong>National Id</strong> : {{$item->VOL_NATIONAL_ID}}</td>
                                  <td><strong>School Name</strong> : {{$item->VOL_SCHOOL_NAME}}</td>
                              </tr>
                              <tr>
                                  <td><strong>Grade Level</strong> : {{$item->VOL_GRADE_LEVEL}}</td>
                                  <td><strong>City</strong> : {{$item->VOL_CITY}}</td>
                                  <td><strong>Target Hours</strong> : {{$item->VOL_TARGET_HOUR}}</td>
                              </tr>
                              <tr>
                                  <td><strong>Completed Hours</strong> : {{$item->VOL_COMPLETED_HOUR}}</td>
                                  <td><strong>Gender</strong> : {{$item->VOL_GENDER}}</td>
                              </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
