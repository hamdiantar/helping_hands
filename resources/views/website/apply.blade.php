@extends('website.layouts.app')

@section('title', 'Listing Volunteering')
@section('content')
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                        <h4>Just few seconds to Apply<em> &amp;  in {{$item->VOL_ENTITY_NAME}}</em> </h4>
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <article class="col-md-10 mb-5 post vt-post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption">
                                        @if($opp->totalAvailable()  == 0)
                                        <h4 class="alert p-4 m-5 alert-danger text-center">Sorry! The opportunity is Fully Booked</h4>
                                        @endif
                                        <h3 class="md-heading text-center"><a href="#">{{$opp->OPP_NAME}}</a></h3>
                                        <p>{{$opp->OPP_DESCRIPTION}}</p>
                                        <div class="author-info-2">
                                            <p class="mb-2">Opportunity Details : </p>
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>Capacity</td>
                                                    <td>Booked</td>
                                                    <td>Available</td>
                                                    <td>Total Hours</td>
                                                    <td>Start Date</td>
                                                    <td>End Date</td>
                                                    <td>Location</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="badge bg-info">{{$opp->OPP_CAPACITY}}</span> student</td>
                                                    <td><span class="badge bg-danger">{{$opp->totalBooked()}}</span>student</td>
                                                    <td><span class="badge bg-success">{{$opp->totalAvailable()}}</span>student</td>
                                                    <td>{{$opp->OPP_TOTAL_HOUR}} Hours</td>
                                                    <td><p>{{$opp->OPP_START_DATE}} | {{$opp->start_time}}</p></td>
                                                    <td><p>{{$opp->OPP_FINISH_DATE}} | {{$opp->end_time}}</p></td>
                                                    <td>{{$opp->OPP_LOCATION}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-2">Opportunity characteristic : </p>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>Description</td>
                                                    </tr>
                                                    @foreach($opp->chars as $char)
                                                        <tr>
                                                            <td>{{$char->VOL_CH_NAME}} </td>
                                                            <td>{{$char->VOL_CH_DESCRIPTION}} </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-2">Opportunity Tasks : </p>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>Description</td>
                                                    </tr>
                                                    @foreach($opp->tasks as $task)
                                                        <tr>
                                                            <td>{{$task->OPP_TASK_NAME}} </td>
                                                            <td>{{$task->OPP_TASK_DESCRIPTION}} </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <form id="applyForm" method="post" action="{{route('volunteer.showApplyForm', ['volId' => $item->VOL_ENTITY_ID , 'oppId' => $opp->OPP_ID])}}">
                                                @csrf
                                                <div class="col-md-12 mb-3">
                                                    <label for="REQ_DESCRIPTION" class="form-label">Description :</label>
                                                    <textarea rows="4" class="form-control" id="REQ_DESCRIPTION" name="REQ_DESCRIPTION">{{old('REQ_DESCRIPTION')}}</textarea>
                                                </div>
                                            </form>

                                        </div>
                                            @if($opp->totalAvailable()  != 0)
                                        <button type="submit" form="applyForm"  class="btn btn-primary btn-book" role="button">Confirm Applying <i class="fa fa-save"></i></button> </div>
                                           @endif
                                </div>
                            </div>
                        </article>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
