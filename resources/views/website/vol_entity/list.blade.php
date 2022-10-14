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
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <span class="Available_opportunities">Available opportunities [ 5 ]</span>
                        <img height="170px" src="{{asset('website/2.jpeg')}}">
                        <h4><a class="text-entity" href="{{route('vol_entity.show')}}">Health Volunteering at RC
                                Jubail </a></h4>
                        <div class="text-button">
                            <a class="btn btn-primary" href="{{route('vol_entity.opportunity')}}">Apply Now <i
                                        class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <a href="{{route('vol_entity.show')}}">(12 Review)</a>
                        </div>
                        <a class="comp" href="{{route('compliant')}}">compliant</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <span class="Available_opportunities">Available opportunities [ 5 ]</span>
                        <img height="193px" src="{{asset('website/4.jpeg')}}">
                        <h4><a class="text-entity" href="{{route('vol_entity.show')}}">Ithra Aramco </a></h4>
                        <div class="text-button">
                            <a class="btn btn-primary" href="{{route('vol_entity.opportunity')}}">Apply Now <i
                                        class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <a href="{{route('vol_entity.show')}}">(12 Review)</a>
                        </div>
                        <a class="comp" href="{{route('compliant')}}">compliant</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <span class="Available_opportunities">Available opportunities [ 5 ]</span>
                        <img height="170px" src="{{asset('website/1.jpeg')}}">
                        <h4><a class="text-entity" href="{{route('vol_entity.show')}}">General Entertainment Authority </a></h4>
                        <div class="text-button">
                            <a class="btn btn-primary" href="{{route('vol_entity.opportunity')}}">Apply Now <i
                                        class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <a href="{{route('vol_entity.show')}}">(12 Review)</a>
                        </div>
                        <a class="comp" href="{{route('compliant')}}">compliant</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <span class="Available_opportunities">Available opportunities [ 5 ]</span>
                        <img height="170px" src="{{asset('website/3.jpeg')}}">
                        <h4><a class="text-entity" href="{{route('vol_entity.show')}}">DR SULAIMAN AL HABIB Medical Group  </a></h4>
                        <div class="text-button">
                            <a class="btn btn-primary" href="{{route('vol_entity.opportunity')}}">Apply Now <i
                                        class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <a href="{{route('vol_entity.show')}}">(12 Review)</a>
                        </div>
                        <a class="comp" href="{{route('compliant')}}">compliant</a>
                    </div>
                </div>
{{--                <div class="col-lg-3">--}}
{{--                    <div class="service-item second-service">--}}
{{--                        <span class="Available_opportunities not_available">No Available opportunities</span>--}}
{{--                        <img height="170px" src="{{asset('website/assets/images/vo_2.png')}}">--}}
{{--                        <h4>Rocket Speed of App</h4>--}}
{{--                        <div class="text-button">--}}
{{--                            <a class="btn btn-primary btn-disabled" href="javascript:void(0);">Apply Now <i--}}
{{--                                        class="fa fa-arrow-right"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="fa fa-star text-warning"></i>--}}
{{--                            <i class="fa fa-star text-warning"></i>--}}
{{--                            <i class="fa fa-star text-dark"></i>--}}
{{--                            <i class="fa fa-star text-dark"></i>--}}
{{--                            <i class="fa fa-star text-dark"></i>--}}
{{--                            <a href="{{route('vol_entity.show')}}">(4 Review)</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>
@endsection
