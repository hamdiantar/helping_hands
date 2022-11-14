@extends('website.layouts.app')

@section('content')
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                 data-wow-delay="1s">
                                <div class="row textPostion">
                                    <div class="col-lg-12">
                                        <span style="font-size: 42px">Land a hand</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <span style="font-size: 32px">make a difference</span>
{{--                                        <div class="white-button first-button scroll-to-section">--}}
{{--                                            <a href="#contact">Free Quote <i class="fab fa-apple"></i></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="white-button scroll-to-section">--}}
{{--                                            <a href="#contact">Free Quote <i class="fab fa-google-play"></i></a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
{{--                                <img src="{{asset('website/assets/images/help.jpg')}}" alt="">--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
