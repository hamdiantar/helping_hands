@extends('website.layouts.app')

@section('title', 'Listing Volunteering')
@section('content')
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.5s"
                         style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                        <h4>Volunteering <em>Entity &amp; volunteer</em> now</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <span class="Available_opportunities">Available opportunities [ {{count($item->opps)}} ]</span>
                        <img height="170px" src="{{$item->logo_path}}">
                        <h4><a class="text-entity" href="{{route('vol_entity.show', ['id' => $item->VOL_ENTITY_ID])}}">{{$item->VOL_ENTITY_NAME}}</a></h4>
                        <div class="text-button">
                            <a class="btn btn-primary" href="{{route('vol_entity.opportunity', $item->VOL_ENTITY_ID)}}">Apply Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <a href="{{route('vol_entity.show', ['id' => $item->VOL_ENTITY_ID])}}">({{count($item->reviews)}} Review)</a>
                        </div>
                        <a class="comp" href="{{route('compliant', ['vol_entity_id' => $item->VOL_ENTITY_ID])}}">compliant</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
