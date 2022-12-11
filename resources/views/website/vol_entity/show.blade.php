@extends('website.layouts.app')

@section('title', 'Listing Volunteering')
@section('content')
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div  class="section-heading mb-40 wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.5s" style=" visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                        <h4><em>{{$item->VOL_ENTITY_NAME}}</em></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-item first-service">
                        <span class="Available_opportunities">Available opportunities [ {{count($item->opps)}} ]</span>
                        <img height="170px" src="{{$item->logo_path}}">
                        <h4>{{$item->VOL_ENTITY_NAME}}</h4>
                        <div class="text-button">
                            <a class="btn btn-primary" href="{{route('vol_entity.opportunity', $item->VOL_ENTITY_ID)}}">Apply Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <a href="{{route('vol_entity.show', $item->VOL_ENTITY_ID)}}">({{count($item->reviews)}} Review)</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-10 offset-1">
                            <h5 class="text-center mb-3">Feedback</h5>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <td>Reviewer Name</td>
                                    <td>Comment</td>
                                    <td>Date</td>
                                    <td>Rating</td>
                                </tr>
                                @foreach($item->reviews as $review)
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
                            <div class="feedback">
                                <h5 class="text-center mt-5">Review Us : </h5>
                                <form method="post" action="{{route('vol_entity.addReview')}}">
                                    @csrf
                                    <input type="hidden" name="VOL_ENTITY_ID" value="{{$item->VOL_ENTITY_ID}}">
                                    <label>Rating : [1-5]</label>
                                    <input type="number" name="FEED_VOL_RATE" required class="form-control mb-3" min="1" max="5">
                                    <label>Comment : </label>
                                    <textarea name="FEED_VOL_COMMENT" rows="3" class="form-control mb-2 mt-2" required placeholder="write your feedback here ....."></textarea>
                                    <button type="submit" class="btn btn-info float-end">post</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
