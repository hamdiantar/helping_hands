@extends('volunteering-entity.layouts.app')

@section('title', 'Feedback')

@section('breadcrumb')
    <li><a href="#">Feedback</a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mb-4">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Feedback</h6>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                            <table class="table table-bordered mb-0" id="dataTable">
                                <thead>
                                <tr>
                                    <td>Volunteer Name</td>
                                    <td>Comment</td>
                                    <td>Date</td>
                                    <td>Rating</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(getAuthVolEntity()->reviews as $review)
                                    <tr>
                                        <td>{{optional($review->volunteer)->full_name}}</td>
                                        <td>{{$review->FEED_VOL_COMMENT}}</td>
                                        <td>{{$review->FEED_DATE}}</td>
                                        <td>
                                            @if($review->FEED_VOL_RATE == 1)
                                                <i class="fa fa-star text-warning"></i><i class="fa fa-star text-dark"></i><i class="fa fa-star text-dark"></i><i class="fa fa-star text-dark"></i><i class="fa fa-star text-dark"></i>
                                            @endif
                                            @if($review->FEED_VOL_RATE == 2)
                                                <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-dark"></i><i class="fa fa-star text-dark"></i><i class="fa fa-star text-dark"></i>
                                            @endif
                                            @if($review->FEED_VOL_RATE == 3)
                                                <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-dark"></i><i class="fa fa-star text-dark"></i>
                                            @endif
                                            @if($review->FEED_VOL_RATE == 4)
                                                <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-dark"></i>
                                            @endif
                                            @if($review->FEED_VOL_RATE == 5)
                                                <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
