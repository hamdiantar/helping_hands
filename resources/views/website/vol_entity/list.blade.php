@extends('website.layouts.app')

@section('title', 'Listing Volunteering')
@section('content')
    <div id="services" class="services section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading  wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.5s"
                         style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                        <h4>Volunteering <em>Entity &amp; volunteer</em> now</h4>
                    <form>
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-5">
                                <input type="search" name="key" class="form-control" value="{{request()->key}}">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
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
                            @if($item->totalRate() >= 5)
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            @endif
                                @if($item->totalRate() == 0)
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                @endif
                                @if($item->totalRate() == 1)
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                @endif
                                @if($item->totalRate() == 2)
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                @endif
                                @if($item->totalRate() == 3)
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star grat-color"></i>
                                    <i class="fa fa-star grat-color"></i>
                                @endif
                                @if($item->totalRate() == 4)
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star grat-color"></i>
                                @endif
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
